<!DOCTYPE HTML>
<html lang="pt-br">
	<head>
		<meta charset="UTF-8">

		<title>Twitter clone</title>
		
		<!-- jquery - link cdn -->
		<script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

		<!-- bootstrap - link cdn -->
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
	 
	  	<!--Font Awesome-->
		<script src="https://kit.fontawesome.com/6270e49e11.js" crossorigin="anonymous"></script>


	    <link rel="stylesheet" type="text/css" href="inscrevase.css">

	    <script type="text/javascript">
	    	$('#exampleModal').on('show.bs.modal', function (event) {
  			var button = $(event.relatedTarget) 
  			var recipient = button.data('whatever') 
 
 			 var modal = $(this)
 			 modal.find('.modal-title').text('New message to ' + recipient)
 			 modal.find('.modal-body input').val(recipient)
			})	
	    </script>
	
	</head>

	<body>


	    <div class="container container2">
	    	

	    	<div class="col-md-8">

	    	<div class="top">	

	    	<a href="index.php" class="btn "
	    	> <i class="fa-solid fa-xmark"></i></a>

	    	<a href="index.php" >
	         <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
				width="45" height="45"
				viewBox="0 0 48 48"
				style=" fill:#000000;"><path fill="#03A9F4" d="M42,12.429c-1.323,0.586-2.746,0.977-4.247,1.162c1.526-0.906,2.7-2.351,3.251-4.058c-1.428,0.837-3.01,1.452-4.693,1.776C34.967,9.884,33.05,9,30.926,9c-4.08,0-7.387,3.278-7.387,7.32c0,0.572,0.067,1.129,0.193,1.67c-6.138-0.308-11.582-3.226-15.224-7.654c-0.64,1.082-1,2.349-1,3.686c0,2.541,1.301,4.778,3.285,6.096c-1.211-0.037-2.351-0.374-3.349-0.914c0,0.022,0,0.055,0,0.086c0,3.551,2.547,6.508,5.923,7.181c-0.617,0.169-1.269,0.263-1.941,0.263c-0.477,0-0.942-0.054-1.392-0.135c0.94,2.902,3.667,5.023,6.898,5.086c-2.528,1.96-5.712,3.134-9.174,3.134c-0.598,0-1.183-0.034-1.761-0.104C9.268,36.786,13.152,38,17.321,38c13.585,0,21.017-11.156,21.017-20.834c0-0.317-0.01-0.633-0.025-0.945C39.763,15.197,41.013,13.905,42,12.429"></path>
			</svg>
			</a>
			</div>
	    		<h3>Entre hoje mesmo para o Twitter</h3>


	    		<button class="btn btn-default" id="login-google">
			       <img src="https://cdn.jsdelivr.net/gh/devicons/devicon/icons/google/google-original.svg" class="google" />
	      	    	Inscreva-se com o Google
	      	    </button>


			    <button class="btn btn-default apple">
		      	    <span><i class="fa-brands fa-apple"></i></span> 
		      	  	Inscreva-se com a Apple
		      	</button>

	    		<br />
				<form method="post" action="registra_usuario.php" id="formCadastrarse">
					<div class="form-group">
						<input type="text" class="form-control" id="usuario" name="usuario" placeholder="Usuário" required="requiored">
					</div>

					<div class="form-group">
						<input type="email" class="form-control" id="email" name="email" placeholder="Email" required="requiored">
					</div>
					
					<div class="form-group">
						<input type="password" class="form-control" id="senha" name="senha" placeholder="Senha" required="requiored">
					</div>
					
					<button type="submit" class="btn btn-primary form-control">Inscreva-se</button>
				</form>
			</div>


			<p class="text">Já tem uma conta? <a href class="signin"
	  		data-toggle="modal" data-target="#myModal">Entrar</a>
	  		</p>

		</div>
	    </div>

	    <!-- Modal -->
					<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
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
	
		<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
	
	</body>
</html>