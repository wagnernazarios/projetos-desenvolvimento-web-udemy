	$(document).ready(function(){

				$('#btn_login').click(function(){

					let  campo_vazio = false;

					if($('#campo_usuario').val()==''){
						$('#campo_usuario').css({'border-color': '#Ac4442'});
						campo_vazio = true;	
					} else{
						$('#campo_usuario').css({'border-color': '#ccc'})
					}


					if($('#campo_senha').val()==''){
						$('#campo_senha').css({'border-color': '#Ac4442'});
					    campo_vazio = true;	

					} else{
						$('#campo_senha').css({'border-color': '#ccc'})
					}


					if (campo_vazio){
						return false;
					} 


				});
			});