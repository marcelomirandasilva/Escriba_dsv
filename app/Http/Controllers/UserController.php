<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

use App\models\User;
use App\models\Membro;

use Image;
use Datatables;
use PDF;

class UserController extends Controller
{
  
   public function __construct(User $user)
    {
        // todas as rotas aqui serão antes autenticadas
        $this->middleware('auth');

        //$this->middleware('is_administrador')->except(['alterarSenha']);
    }

    // Exigir que o usuário esteja logado ao acessar esse controller

  
    public function index()
    {
        // Mostrar a lista de usuários

        $usuario_logado     = User::find(Auth::user()->id);
        
        $usuarios = User::with(['membro'])->get();
        $membros  = Membro::with(['user'])->orderBy('no_membro')->get();

        return view('usuarios.lista', compact('usuarios','usuario_logado','membros'));
    }

    
    public function create()
    {

        $titulo         = "Cadastro de Usuários";
        $tipo_acesso    = pegaValorEnum('users','acesso');                                                   
        
        sort($tipo_acesso);

        $membros = Membro::with(['user']) ->orderBy('no_membro')->get();

        //dd($membros);
        // return "entrou";
        return view('usuarios.create',compact(['titulo','tipo_acesso', 'membros']));
    }

    
    public function store(Request $request)
    {
        //se não fou um usuario com um mebro associado
        //faz um merge com as indormações digitadas no formulário
        if( !$request->associa)
        {
            $request->merge(['name' => $request->name_v]);
            $request->merge(['email' => $request->email_v]);
        };
        
        //dd($request->all());

        $this->validate($request, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'acesso'    => 'required',
        ]);

        //inicia a transação no banco
        DB::beginTransaction();
        
        
        $user = new User($request->all());
        $user->password = bcrypt($request->password);
 
        $user->save();



        if(  $user ) {
            //Sucesso!
            DB::commit();
            return redirect(url('usuarios/create'))->with('sucesso', 'Usuário cadastrado com sucesso.');
        } else {
            //Fail, desfaz as alterações no banco de dados
            DB::rollBack();
            return redirect(url('usuarios/create'))->with(['erros' => 'Falha no cadastrado.']);
        }

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    public function edit($id)
    {

        $usuario = User::find($id);
        //$usuario = $this->users->find($id);

        $titulo         = "Edição de Usuários";
        $tipo_acesso    = pegaValorEnum('users','acesso');                                                   
        
        sort($tipo_acesso);
        //return "cheguei";
        return view('usuarios.edit',compact('usuario','titulo','tipo_acesso'));
    }

    public function update(Request $request, $id)
    {
        // Validar

        $this->validate($request, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users,email,'.$id,
            'acesso'    => 'required',
        ]);

        // Obter o usuário

        $usuario = User::find($id);



        // Atualizar as informações

        $status = $usuario->update($request->all());


        
        

        if ($status) {
            return redirect("/usuarios/$usuario->id/edit")->with('sucesso', 'Informações do usuário atualizadas com sucesso.');
        } else {
            //return redirect(back); 
            return redirect("/usuarios/$usuario->id/edit")->with(['erros' => 'Falha ao editar']);
        }
        
    }

    public function destroy($id)
    {
        $user=User::find($id);

        $user->delete();

    }



     public function perfil(){
    
     
        $usuario = User::find(Auth::user()->id);

        

        $titulo         = "Alteração de Perfil";
        $tipo_acesso    = pegaValorEnum('users','acesso');                                                   
        
        sort($tipo_acesso);
        //return "cheguei";
        //return view('usuarios.edit',compact('usuario','titulo','tipo_acesso'));

        //dd($logado);
                
        return view('usuarios.perfil',compact('usuario','titulo','tipo_acesso'));
    }


    public function update_avatar(Request $request){

        if($request->hasFile('avatar')){

            $avatar = $request->file('avatar');
            $filename = time() . '.' . $avatar->getClientOriginalExtension();
            Image::make($avatar)->resize(300,300)->save(public_path('uploads/avatars/' . $filename));

            $user = Auth::user();
            $user->avatar = $filename;
            $user->save();
        }

        return view('users.perfil',array('User' => Auth::user()));

    }


    /**
     * Função para alterar a senha do usuário atual
     */

    public function alterarSenha(Request $request)
    {
        $this->validate($request, [
            'senhaatual'             => 'required|logado|min:6',
            'novasenha'              => 'required|min:6',
            'novasenha_confirmation' => 'required|min:6|same:novasenha'
        ]);

        $usuario = User::find(Auth::user()->id);

        $usuario->password = Hash::make($request->novasenha);

        $usuario->save();

        return redirect('/mudarsenha')->with('sucesso', 'Senha alterada com sucesso.');
    }

    public function MudaStatus(Request $request)
    {
        // busca o usuario
        $usuario = User::find($request->id);        
        $status_antigo = $usuario->status;    
        $usuario->status = $request->status;
        //salva o usuario
        $usuario->save();
        return json_encode($status_antigo);     
   }

    public function desassocia(Request $request)
    {
        DB::beginTransaction();
        
        // busca o usuario
        $usuario = User::find($request->id);        
        $usuario->membro_id = null;
        $usuario->save();
       
        if( $usuario ) {
            //Sucesso!
            DB::commit();
                return json_encode("OK");     
        } else {
            //Fail, desfaz as alterações no banco de dados
            DB::rollBack();
            return json_encode("FALHA");     
        }
    }
   
    public function associa(Request $request)
    {
        
      
        $usuario     = User::find($request->id);
        
        $membros  = Membro::with(['user'])->orderBy('no_membro')->get();
        
        //dd($membros);
        return view('usuarios.associa', compact('usuario','membros'));

    }

    public function salvaAssociacao(Request $request)
    {
        //dd($request->all());
        DB::beginTransaction();

        // busca o usuario
        $usuario = User::find($request->usuario_id);        
        
        $usuario->membro_id = $request->membro_id;
        $usuario->save();
       
        if( $usuario ) {
            //Sucesso!
            DB::commit();
            return redirect(url('usuarios'))->with('sucesso', 'Usuário cadastrado com sucesso.');
        } else {
            //Fail, desfaz as alterações no banco de dados
            DB::rollBack();
            return redirect(url('usuarios'))->with(['erros' => 'Falha no cadastrado.']);
        }


    }
}
