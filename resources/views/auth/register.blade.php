<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    
    <title>Escriba - Online </title>
    
    <!-- Bootstrap -->
    <link href="{{ asset("css/bootstrap.min.css") }}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{ asset("css/font-awesome.min.css") }}" rel="stylesheet">
    <!-- Custom Theme Style -->
    <link href="{{ asset("css/gentelella.min.css") }}" rel="stylesheet">
    <!-- MEU CSS  -->
    <link href="{{ asset("css/styles.css") }}" rel="stylesheet">

</head>

<body class="login">
<div class="login_wrapper">
    <div class="animate form login_form">
        <section class="login_content">
			{!! BootForm::open(['url' => url('/register'), 'method' => 'post']) !!}
			
			<h1>Criação de Usuário </h1>

			{!! BootForm::text('name', 'Nome', old('name'), ['placeholder' => 'Nome completo']) !!}

			{!! BootForm::email('email', 'Email', old('email'), ['placeholder' => 'Email']) !!}



			{!! BootForm::password('password', 'Senha', ['placeholder' => 'Senha']) !!}

			{!! BootForm::password('password_confirmation', 'Confirmação de Senha', ['placeholder' => 'Confirmação']) !!}
		
			{!! BootForm::submit('Cria', ['class' => 'btn btn-default']) !!}
		   
			<div class="clearfix"></div>
			
			<div class="separator">
				<p class="change_link">Já possui cadastro? ?
					<a href="{{ url('/login') }}" class="to_register"> Entre no site! </a>
				</p>
				
				<div class="clearfix"></div>
				<br />
				
				
			</div>
			{!! BootForm::close() !!}
        </section>
    </div>
</div>
</body>
</html>