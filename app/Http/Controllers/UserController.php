<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Validation\Rule;

use App\models\User;

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
        
        $usuarios = User::all();

        return view('usuarios.lista', compact('usuarios','usuario_logado'));
    }

    
    public function create()
    {

        $titulo         = "Cadastro de Usuários";
        $tipo_acesso    = pegaValorEnum('users','acesso');                                                   
        
        sort($tipo_acesso);

        // return "entrou";
        return view('usuarios.create',compact(['titulo','tipo_acesso']));
    }

    
    public function store(Request $request)
    {
        //dd($request->all());

        $this->validate($request, [
            'name'     => 'required|max:255',
            'email'    => 'required|email|max:255|unique:users',
            'password' => 'required|min:6|confirmed',
            'acesso'    => 'required',
        ]);

        $user = User::create($request->all());

        $user->password = bcrypt($request->password);

        $user->save();

        return redirect(url('usuarios/create'))->with('sucesso', 'Usuário cadastrado com sucesso.');
        //return redirect('lojas.edit')->whith(['erros' => 'Falha ao editar']); 
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
    
}
