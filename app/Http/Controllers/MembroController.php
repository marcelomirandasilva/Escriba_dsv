<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;

use App\Models\Membro;
use App\Models\Endereco;
use App\Models\Pais;
use App\Models\Loja;
use App\Models\Cargo;
use App\Models\Telefone;
use App\Models\Email;
use App\Models\Dependente;
use App\Models\Condecoracao;
use App\Models\Cerimonia;
use App\Models\Potencia;
use Illuminate\Validation\Rule;
use Illuminate\Http\Request;


class MembroController extends Controller
{
	// todas as rotas aqui serão antes autenticadas
	private $membro;
	public function __construct(membro $membro)
	{
		$this->membro = $membro; 
		
		// todas as rotas aqui serão antes autenticadas
		$this->middleware('auth');
	}

	public function index()
	{
		//$membros = membro::get();
		//return view('membros/lista', ['membros' => $membros]);


		$membros = $this->membro->all();

		return view('membros/lista', compact('membros'));

	}



	public function create()
	{
		$titulo = "Cadastro de Membros";

		$aposentado         = ['Sim','Não'];

		$escolaridade       = pegaValorEnum('membros','ic_escolaridade');                                                   
		$situacao           = pegaValorEnum('membros','ic_situacao');                                                   
		$grau               = pegaValorEnum('membros','ic_grau');                      
		$estado_civil       = pegaValorEnum('membros','ic_estado_civil'); 
		$tipo_telefone      = pegaValorEnum('telefones','ic_telefone'); 
		$sexos              = pegaValorEnum('dependentes','ic_sexo'); 
		$parentescos        = pegaValorEnum('dependentes','ic_grau_parentesco'); 

		$potencias          = Potencia::all()->sortBy('no_potencia');
		$ritos              = pegaValorEnum('lojas','ic_rito') ;

		$cargos             = Cargo::all()->sortBy('no_cargo');
		$cargos_ocupados    =[];
				
		
		//orderna os valores dos arrays
		sort($estado_civil);
		sort($situacao);
		sort($parentescos);
		
		$paises     = Pais::all()->sortBy('nome');        
		$lojas      = Loja::all()->sortBy('no_loja');    
		
		
		return view('membros.create',compact(['estado_civil','grau','situacao','escolaridade','aposentado','paises','titulo','parentescos','tipo_telefone','lojas','sexos','potencias','ritos','cargos','cargos_ocupados']));
		
	}
	
	public function store(Request $request)
	{
		//se for candidaro, coloca zeros no CIM
		if(trim($request->ic_grau) == "Candidato")
		{
			$request->merge([
					'co_cim' => "0.000.000"
			]);

		}

		// Validar dados do formulário
		$this->validar($request);

		//dd($request->all());

		// Cria um novo membro
		$membro = new Membro($request->all());
	
		// Verificar se está aposentado
		$membro->ic_aposentado = $request->aposentado ? 1 : 0;

		// Salvar no banco para obter o ID
		$membro->save();

		/* ======== ENDEREÇO ==========*/
		foreach($request->enderecos as $endereco)
		{
			// Criar um novo endereço com as informações inseridas
			$membro->enderecos()->save(new Endereco($endereco));
		}


		/* ======== TELEFONE ==========*/
		foreach($request->telefones as $telefone)
		{
			//se o telefone não estiver vazio no request, adiciona
			if( trim( $telefone['nu_telefone'] ) != "")
			{
				$novo_telefone = new Telefone($telefone);
				// Criar um novo telefone com as informações inseridas
				$membro->telefones()->save($novo_telefone);

			}
		}

		
		/* ======== EMAIL ==========*/
		foreach($request->emails as $email)
		{
			//se o email não estiver vazio no request, adiciona
			if( trim($email['email']) != "")
			{
				$novo_email = new Email($email);
				// Criar um novo email com as informações inseridas
				$membro->emails()->save($novo_email);
			}
		}

		/* ======== DEPENDENTES ==========*/
		foreach($request->dependentes as $dependente)
		{
			//se o email não estiver vazio no request, adiciona
			if( trim($dependente['no_dependente']) != "")
			{
				// Criar um novo dependente com as informações inseridas
				$membro->dependentes()->save(new Dependente($dependente));
			}
		}

		/* ======== CERIMONIAS ==========*/
		//deleta as cerimonias para serem inseridas as quem vem do formulário
		$cerimonias = cerimonia::where("membro_id", $membro->id);
		$cerimonias->delete();
		// Cria um novo cerimonia com as informações inseridas
		foreach($request->cerimonias as $cerimonia)
		{
			//testa se o cerimonia foi preenchido no formulario
			//ser for, cadastra, senão, passa para a próxima
			if( array_key_exists('dt_cerimonia', $cerimonia) and $cerimonia['dt_cerimonia'] != "" )
			{
				
				// Criar nova cerimonia com as informações inseridas
				$membro->cerimonias()->save(new cerimonia($cerimonia));    
			}
		}

		/* ======== CARGOS ==========*/
		if(isset($request->cargos_membros))
		{
			foreach($request->cargos_membros as $key => $cargo)
			{
				$cg = json_decode($cargo);
				
				$acha_cargo = DB::table('cargos')->where('no_cargo', trim($cg->no_cargo))->get();
				
				//dd($acha_cargo[0]->id);

				$membro->cargos()->attach($acha_cargo[0]->id, ['aa_inicio' => $cg->aa_inicio, 'aa_termino' => $cg->aa_termino]);
			}	
		}	

		/* ======== CONDECORAÇÕES ==========*/
		//deleta as condecoracaos para serem inseridas as quem vem do formulário
		$condecoracoes = Condecoracao::where("membro_id", $membro->id);
		$condecoracoes->delete();
		// Cria um novo condecoracao com as informações inseridas
		foreach($request->condecoracoes as $condecoracao)
		{
			//testa se o condecoracao foi preenchido no formulario
			//ser for, cadastra, senão, passa para a próxima
			if( array_key_exists('dt_condecoracao', $condecoracao ) )
			{
					// Criar nova condecoracao com as informações inseridas
					$membro->condecoracoes()->save(new Condecoracao($condecoracao));    
			}
		}


		if ($membro) {
			return redirect('/membros/create')->with('sucesso', ' O membro '
																		.strtoupper($request->no_membro)    .' CIM Nº ' 
																		.$request->co_cim
																		.' foi cadastrado com sucesso'
																	);
		} else {
			return redirect('/membros/create')->with(['erros' => 'Falha ao cadastrar']); 
		}
	}

	public function edit($id)
	{
		$membro = $this->membro->find($id);

		//dd($membro->cargos->pivot->aa_inicio);
		//dd($membro->telefones[0]->nu_telefone);
		//dd($membro->telefones);

		$enderecos          = $membro->enderecos;
		$telefones          = $membro->telefones;
		$emails             = $membro->emails;
		$dependentes        = $membro->dependentes;
		$potencias          = Potencia::all()->sortBy('no_potencia');
		$ritos              = pegaValorEnum('lojas','ic_rito') ;
		$cargos             = Cargo::all()->sortBy('no_cargo');
		
		$edita = true;
		$titulo = "Edição de Membro";


		$aposentado         = ['Sim','Não'];

		$escolaridade       = pegaValorEnum('membros','ic_escolaridade');                                                   
		$situacao           = pegaValorEnum('membros','ic_situacao');                                                   
		$grau               = pegaValorEnum('membros','ic_grau');                      
		$estado_civil       = pegaValorEnum('membros','ic_estado_civil'); 
		$tipo_telefone      = pegaValorEnum('telefones','ic_telefone'); 
		$sexos              = pegaValorEnum('dependentes','ic_sexo'); 
		$parentescos        = pegaValorEnum('dependentes','ic_grau_parentesco'); 
		$cargos_ocupados    = [];        

		//orderna os valores dos arrays
		sort($estado_civil);
		sort($situacao);
		sort($parentescos);

		$paises     = Pais::all()->sortBy('nome');
		$lojas      = Loja::all()->sortBy('no_loja');

		//dd($telefones[0]['nu_telefone']);
		
		return view('membros.create',compact(['membro','edita','enderecos', 'telefones', 'emails','dependentes','estado_civil','grau','situacao','escolaridade','aposentado','paises','titulo','parentescos','tipo_telefone','lojas','sexos','potencias','ritos','cargos','cargos_ocupados']));
		
	}

	public function destroy($id)
	{
		return "exclui o Membro: {$id}";
	}

	public function update(Request $request, $id)
	{
		
		//dd($request->all());

		$this->validate($request, [
			'no_membro'         => 'required|min:3|max:50',
			'co_cim'            => 'required|max:11',
			'cpf'               =>  [  'cpf',
													Rule::unique('membros')->ignore($id)
											],

			'dt_nascimento'     => 'date',
			'dt_casamento'      => 'date',
			'dt_emissao_idt'    => 'date',
			'dt_emissao_titulo' => 'date',

			'dt_cerimonia0'     => 'date',
			'dt_cerimonia1'     => 'date',
			'dt_cerimonia2'     => 'date',
			'dt_cerimonia3'     => 'date',
			'dt_cerimonia4'     => 'date',
			'dt_cerimonia5'     => 'date',
			'dt_condecoracao0'  => 'date',
			'dt_condecoracao1'  => 'date',
			'dt_condecoracao2'  => 'date',
			'dt_condecoracao3'  => 'date',
			'dt_condecoracao4'  => 'date',
			'dt_condecoracao5'  => 'date',

			// Dependentes
			'dependentes.*.dt_nascimento'  => 'date',
		]);
		
		
		// Busca o membro;
		$membro = Membro::find($id);

		//Atualizar os dados do membro;
		$membro->update($request->all());

		// atualiza o status de aposentadoria
		$membro->ic_aposentado = $request->aposentado ? 1 : 0;
		
		// Salvar no banco para obter o ID
		$membro->save();
		
		/* ==================================================================================== */
		/* TELEFONE */
		/* ==================================================================================== */
		//apaga todos os telefones do membro
		$membro->telefones()->delete();

		// Criar novos telefones com as informações enviadas
		//se o telefone não estiver vazio no request, adiciona
		//        dd($request->telefone);
		//dd($request->telefone['nu_telefone'] );

		if($request->telefone['nu_telefone'] != null)
		{
			// Criar um novo telefone com as informações inseridas
			$novo_telefone = new Telefone();
			$membro->telefones()->save($novo_telefone);
		}
		//dd($a);

		/* ==================================================================================== */
		/* EMAIL */
		/* ==================================================================================== */
		//apaga todos os emails do membro
		$membro->emails()->delete();

		
		
		// Criar novos emails com as informações enviadas
		foreach($request->emails as $email)
		{
			if($email['email'] != null)
			{
					$membro->emails()->save(new Email($email));
			}
		}



		/* ==================================================================================== */
		/* ENDEREÇO */
		/* ==================================================================================== */
		//apaga todos os endereços do membro
		$membro->enderecos()->delete();

		// Criar novos endereços com as informações enviadas
		foreach($request->enderecos as $endereco)
		{
			$membro->enderecos()->save(new Endereco($endereco));
		}
		
		/* ==================================================================================== */
		/* DEPENDENTE */
		/* ==================================================================================== */
		//apaga todos os dependentes do membro
		$membro->dependentes()->delete();
		//dd($request->all());

		// Criar novos dependentes com as informações enviadas
		if(isset($request->dependentes))
		{
			//se o nome do dependente for diferente de NULL
			if( ! Isset($request->dependentes[0])  ||  $request->dependentes[0]['no_dependente'] != null)
			{
					$b = 0;
					foreach($request->dependentes as $dependente)
					{
						$novo_dependente = new Dependente($dependente);
						$membro->dependentes()->save($novo_dependente);
						$b++;
					}
			}
		}


		//deleta as cerimonias para serem inseridas as quem vem do formulário
		$cerimonias = cerimonia::where("membro_id", $membro->id);
		$cerimonias->delete();
		// Cria um novo cerimonia com as informações inseridas
		foreach($request->cerimonias as $cerimonia)
		{
			//testa se o cerimonia foi preenchido no formulario
			//ser for, cadastra, senão, passa para a próxima
			if( $cerimonia['dt_cerimonia'] )
			{
					// Criar nova cerimonia com as informações inseridas
					$membro->cerimonias()->save(new cerimonia($cerimonia));    
			}
		}

		//deleta as condecoracaos para serem inseridas as quem vem do formulário
		$condecoracoes = Condecoracao::where("membro_id", $membro->id);
		$condecoracoes->delete();
		// Cria um novo condecoracao com as informações inseridas
		foreach($request->condecoracoes as $condecoracao)
		{
			//testa se o condecoracao foi preenchido no formulario
			//ser for, cadastra, senão, passa para a próxima
			if( $condecoracao['dt_condecoracao'] )
			{
					// Criar nova condecoracao com as informações inseridas
					$membro->condecoracoes()->save(new Condecoracao($condecoracao));    
			}
		}

		/* ==================================================================================== */
		/* OCUPAÇÂO DE CARGOS */
		/* ==================================================================================== */
		//apaga todas as ocupações de cargos do membro
		$membro->cargos()->detach();

		// Criar novas ocupacao_cargos com as informações enviadas
		if(isset($request->cargos_membros))
		{
			foreach($request->cargos_membros as $key => $cargo)
			{
				$cg = json_decode($cargo);
				
				$acha_cargo = DB::table('cargos')->where('no_cargo', trim($cg->no_cargo))->get();
				
				//dd($acha_cargo[0]->id);

				$membro->cargos()->attach($acha_cargo[0]->id, ['aa_inicio' => $cg->aa_inicio, 'aa_termino' => $cg->aa_termino]);
			}	
		}
		
		
		if ($membro /*and $cerimonia*/) {

			return redirect('/membros')->with('sucesso', ' O membro '
																		.strtoupper($request->no_membro)    .' CIM Nº ' 
																		.$request->co_cim
																		.' foi cadastrado com sucesso'
																	);
		} else {
			return redirect('/membros')->with(['erros' => 'Falha ao cadastrar']); 
		}

	}

	/**
	 * Formatar a data para o padrão americano
	 */

	protected function inverterData($data)
	{
		return implode("-", array_reverse(explode("/", $data)));
	}


	protected function validar($request)
	{
		// Validar
		
		$this->validate($request, [
			'no_membro'         => 'required|min:3|max:50',
			'co_cim'            => 'required|max:11',
			'cpf'               =>  'cpf',

			'dt_nascimento'     => 'date',
			'dt_casamento'      => 'date',
			'dt_emissao_idt'    => 'date',
			'dt_emissao_titulo' => 'date',
			'dt_cerimonia0'     => 'date',
			'dt_cerimonia1'     => 'date',
			'dt_cerimonia2'     => 'date',
			'dt_cerimonia3'     => 'date',
			'dt_cerimonia4'     => 'date',
			'dt_cerimonia5'     => 'date',
			'dt_condecoracao0'  => 'date',
			'dt_condecoracao1'  => 'date',
			'dt_condecoracao2'  => 'date',
			'dt_condecoracao3'  => 'date',
			'dt_condecoracao4'  => 'date',
			'dt_condecoracao5'  => 'date',

			// Dependentes
			//'dependentes.*.dt_nascimento'           => 'required_with:dependentes.*.no_dependente|date',
		]);
	}

}





