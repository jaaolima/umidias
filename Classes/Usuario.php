<?php
	require_once("Conecta.php");

	class Usuario{
		function validaLogin($ds_usuario, $ds_senha)
		{
			try{
				$con = Conecta::criarConexao();
				//*$ds_senha = hash("SHA512", $ds_senha);
				
				$select = "SELECT 
							id_usuario, ds_usuario, ds_nome, id_perfil, id_parceiro
						FROM tb_usuario  
						WHERE ds_usuario = :ds_usuario and ds_senha = :ds_senha";

				$stmt = $con->prepare($select);
			   	$params = array(':ds_usuario' => $ds_usuario,
			   					':ds_senha' => $ds_senha);
			   
			    $stmt->execute($params);
 
			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			} 
		}

		public function listarUsuario(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_usuario, ds_nome, ds_email, ds_usuario
							FROM tb_usuario";
				
				$stmt = $con->prepare($select); 
				
				
				$stmt->execute();

				return $stmt;
				
					
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}
 

		



		public function gravarUsuario(array $dados)
		{
		
			$ds_nome		= $dados['ds_nome'];
			$ds_email    	= $dados['ds_email'];
			$ds_usuario 	= $dados['ds_usuario'];
			$id_perfil 		= $dados['id_perfil'];
			$ds_senha       =  '123456';
		
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_usuario (ds_nome, ds_usuario, ds_email, ds_senha, id_perfil)
							VALUES (:ds_nome, :ds_usuario, :ds_email, :ds_senha, :id_perfil)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_nome' => $ds_nome, 
								':ds_usuario' => $ds_usuario,
								':ds_email' => $ds_email,
								':id_perfil' => $id_perfil,
								':ds_senha' =>hash("SHA512",$ds_senha));

				$stmt->execute($params);


				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}

		public function gravarUsuarioEmail(array $dados)
		{
		
			$ds_nome		= $dados['ds_nome'];
			$ds_email    	= $dados['ds_email'];
			$ds_usuario 	= $dados['ds_usuario'];
			$id_perfil 		= $dados['id_perfil'];
			$ds_senha       = $dados['s'];
		
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_usuario (ds_nome, ds_usuario, ds_email, ds_senha, id_perfil)
							VALUES (:ds_nome, :ds_usuario, :ds_email, :ds_senha, :id_perfil)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_nome' => $ds_nome, 
								':ds_usuario' => $ds_usuario,
								':ds_email' => $ds_email,
								':id_perfil' => $id_perfil,
								':ds_senha' =>$ds_senha);

				$stmt->execute($params);
				return true;
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}

		

		function buscarDadosUsuario($id_usuario)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_usuario, ds_nome, ds_email, ds_usuario, id_perfil
						FROM tb_usuario  
						WHERE id_usuario = :id_usuario";

				$stmt = $con->prepare($select);
			   	$params = array(':id_usuario' => $id_usuario);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}


		public function gravarAlterarUsuario(array $dados)
		{

			$ds_nome		= $dados['ds_nome'];
			$ds_email    	= $dados['ds_email'];
			$id_usuario    	= $dados['id_usuario'];
			
			try{
				$con = Conecta::criarConexao();
				$update = "UPDATE tb_usuario set ds_nome = :ds_nome, ds_email = :ds_email
						WHERE id_usuario = :id_usuario";
				
				$stmt = $con->prepare($update);
				
				$params = array(':ds_nome' => $ds_nome, 
								':ds_email' => $ds_email,
								':id_usuario'=>$id_usuario);
				$stmt->execute($params);

				
				echo "Dados alterados com sucesso!";
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}
		function resetarSenhaInicial($ds_email)
        { //SHA2(nu_matricula, 512)

            try{
                $con = Conecta::criarConexao();
                $update = "UPDATE tb_usuario
                                SET 
                                    ds_senha = '123456'
                            WHERE ds_email = :ds_email";

                $stmt = $con->prepare($update);
                $params = array(
                                ':ds_email' => $ds_email
                                );

                $stmt->execute($params);


                echo "Senha alterada com sucesso!";

            }
            catch(exception $e)
            {
                header('HTTP/1.1 500 Internal Server Error');
                print $e->getMessage();	
            }	
        }

	}

?>