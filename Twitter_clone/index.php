<?php 

	$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;


 ?>




<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">
		<meta name="viewport" content="width=device=width" initial-scale="1">
		<title>Twitter clone</title>

	
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

		<!--Font Awesome-->
		<script src="https://kit.fontawesome.com/6270e49e11.js" crossorigin="anonymous"></script>

		<!--Font-->
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Roboto:wght@700;900&display=swap" rel="stylesheet"/>


		<link rel="stylesheet" type="text/css" href="style.css">
		<script type="text/javascript" src="jquery.js"></script>


		<script>
			$('#exampleModal').on('show.bs.modal', function (event) {
  		var button = $(event.relatedTarget) 
 		  var recipient = button.data('whatever') 
 
 			var modal = $(this)
		  modal.find('.modal-title').text('New message to ' + recipient)
		  modal.find('.modal-body input').val(recipient)
			})	
		</script>
</head>





<body >

  <div class="container-fluid" class="main" role="main">

	    <div class="row">
	      <div class="col-md-5">
	      			<img src="imagens/download.jfif">
	      </div>

	      <div class="col-md-7">
	      	   
	      	   
	      		<svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
						width="96" height="96"
						viewBox="0 0 48 48"
						style=" fill:#000000;"><path fill="#03A9F4" d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"></path></svg>




	      	  <h1 class="h1">Acontecendo agora</h1>

	      	  <h3>Inscreva-se no Twitter hoje mesmo.</h3>

	      	  <button class="btn btn-default" id="login-google">
	      	   <a href="inscrevase.php">Inscreva-se</a>

	      	    	<!--  <img src="imagens/proifle-pic.jpg" class="profile">
	      	    		<span>Fazer login como Wagner			
	      	    		<p class="email">wagnernazu@gmail.com</p></span>
	      	    		<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" class="google" /> -->


	      	  </button>


		      	<button class="btn btn-default">
		      	    	<span><i class="fa-brands fa-apple"></i></span> 
		      	    Inscreva-se com Apple
		      	</button>

		      	<p class="or">ou</p>
		      	 <button class="btn btn-info">
		      	    	Inscreva-se com seu número de celular...
		      	</button>

		      	<p class="details">Ao se inscrever, você concorda com os <span class="text">Termos de Serviço</span> e a <span class="text">Política de Privacidade</span>, incluindo o <span class="text">Uso de Cookies</span>.</p>


		      	<h5>Já tem uma conta?</h5>
		      	<button class="btn btn-default login" type="button" 
		      	    data-toggle="modal" data-target="#myModal">
		      	    	Entrar
		      	</button>





						<!-- Modal -->
					<div class="modal fade" class="<?= $erro == 1? 'modal-open' : '' ?>"  id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
					  <div class="modal-dialog" role="document">
					    <div class="modal-content">
					      <div class="modal-header">
					     
					        <h4 class="modal-title" id="myModalLabel">
					        Entrar no Twitter</h4>
					      </div>
					      <div class="modal-body">

					      	<button class="btn btn-default" id="login-google">
					      		<img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" class="google" />
	      	    					Fazer login com o Google

	      	    		
	      	    		</button>


					      	<button class="btn btn-default apple">
		      	    			<span><i class="fa-brands fa-apple"></i></span> 
		      	  				 Fazer login com Apple
		      				</button>
					        
								<form method="post" action="validar-acesso.php" 
								id="formLogin">
								<div class="form-group">
									<input type="text" class="form-control" 
									id="campo_usuario"  name="usuario" placeholder="Usuário" />
								</div>
								
								<div class="form-group">
									<input type="password" class="form-control red" 
									id="campo_senha" name="senha" placeholder="Senha" />
								</div>
								
								<button type="buttom" class="btn btn-info" id="btn_login">Entrar</button>



								<br /><br />
								
								</form> 


								<?php 

								if ($erro == 1) {
									echo "<font color='#ff0000'>Usuario e/ou senha invalidos</font> ";
								}


								 ?>

								<span class="forget">Não tem uma conta? <a href="inscrevase.php"><span class="signup">Inscreva-se</span></a></span>

					        </div>

					        
					      <div class="modal-footer">
					        <button type="button" class="btn close" data-dismiss="modal">

					        
					        	<span class="glyphicon glyphicon-remove"></span>
					        </button>
					    
					      </div>
					    </div>
					  </div>
					</div>
						<!--Fim do modal-->

	      </div>

	    </div>
  </div>


  <div class="footer" role="footer">
	    <span>Sobre</span>
			<span>Central de Ajuda </span>
			<span>Termos de Serviço</span>
			<span>Política de Privacidade</span>
			<span>Política de cookies</span>
			<span>Acessibilidade</span>
			<span>Informações de anúncios</span>
			<span>Blog</span>
			<span>Status</span>
			<span>Carreiras</span>
			<span>Recursos da marca</span>
			<span>Publicidade</span>
			<span>Marketing</span>
			<span>Twitter para Empresas</span>
			<span>Desenvolvedores</span>
			<span>Diretório</span>
			<span>Configurações</span>
			<span>© 2022 Twitter, Inc.</span> 
  </div>	
	
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>