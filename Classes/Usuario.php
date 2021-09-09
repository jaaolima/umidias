<?php
	require_once("Conecta.php");

	class Usuario{
		function validaLogin($ds_usuario, $ds_senha)
		{
			try{
				$con = Conecta::criarConexao();
				$senha = hash("SHA512", $ds_senha);
				
				$select = "SELECT 
							id_usuario, ds_usuario, ds_nome, id_perfil, id_parceiro
						FROM tb_usuario  
						WHERE ds_usuario = :ds_usuario and ds_senha = :ds_senha";

				$stmt = $con->prepare($select);
			   	$params = array(':ds_usuario' => $ds_usuario,
			   					':ds_senha' => $senha);
			   
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
			$nu_cpf      	= $dados['nu_cpf'];
		
			try{
				$con = Conecta::criarConexao();
				$insert = "select count(ds_usuario) as ds_usuario from tb_usuario where ds_usuario=:ds_usuario";
				
				$stmt = $con->prepare($insert);
				
				$params = array( 
								':ds_usuario' => $ds_usuario);

				
				$stmt->execute($params);
				$dados = $stmt->fetch();
				if($dados["ds_usuario"] <= 0){
					try{
						$con = Conecta::criarConexao();
						$insert = "INSERT into tb_usuario (ds_nome, ds_usuario, ds_email, ds_senha, id_perfil, dt_usuario, nu_cpf)
									VALUES (:ds_nome, :ds_usuario, :ds_email, :ds_senha, :id_perfil, curdate(), :nu_cpf)";
						
						$stmt = $con->prepare($insert);
						
						$params = array(':ds_nome' => $ds_nome, 
										':ds_usuario' => $ds_usuario,
										':ds_email' => $ds_email,
										':id_perfil' => $id_perfil,
										':nu_cpf' => $nu_cpf,
										':ds_senha' =>$ds_senha);
		
						$stmt->execute($params);
						return true;
						
					}
					catch(exception $e)
					{
						header('HTTP/1.1 500 Internal Server Error');
						print "ERRO:".$e->getMessage();		
					} 
				}else{
					return true;
				}
				
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
			
		}

		public function validarUsuario($ds_email)
		{
		
			try{
				$con = Conecta::criarConexao();
				$insert = "select count(ds_usuario) as ds_usuario from tb_usuario where ds_usuario=:ds_usuario";
				
				$stmt = $con->prepare($insert);
				
				$params = array( 
								':ds_usuario' => $ds_email);

				
				$stmt->execute($params);
				$dados = $stmt->fetch();
				if($dados["ds_usuario"] > 0){
					header('HTTP/1.1 500 Internal Server Error');
					echo "E-mail já cadastrado";
				}else{
					return true;
				}
				
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}

		public function validarUsuarioExistente($dados)
		{
			$ds_email = $dados['email'];
			try{
				$con = Conecta::criarConexao();
				$insert = "select count(ds_usuario) as ds_usuario from tb_usuario where ds_usuario=:ds_usuario";
				
				$stmt = $con->prepare($insert);
				
				$params = array( ':ds_usuario' => $ds_email); 

				
				$stmt->execute($params);
				$dados = $stmt->fetch();
				if($dados["ds_usuario"] > 0){
					return true;
				}else{
					
					header('HTTP/1.1 500 Internal Server Error');
					echo "Não existe esse E-mail cadastrado";
				}
				
				
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

		function buscarDadosUsuarioEmail($ds_email)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_usuario, ds_nome, ds_email, ds_usuario, id_perfil
						FROM tb_usuario  
						WHERE ds_usuario = :ds_email";

				$stmt = $con->prepare($select);
			   	$params = array(':ds_email' => $ds_email);
			   
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

		public function gravarAlterarPerfil(array $dados)
		{

			$ds_nome		= $dados['ds_nome'];
			$ds_email    	= $dados['ds_email'];
			$id_usuario    	= $dados['id_usuario'];
			if($dados['ds_senha'] !== "********"){
				$ds_senha    	= hash("SHA512", $dados['ds_senha']);

				try{
					$con = Conecta::criarConexao();
					$update = "UPDATE tb_usuario set ds_nome = :ds_nome, ds_email = :ds_email, ds_senha = :ds_senha
							WHERE id_usuario = :id_usuario";
					
					$stmt = $con->prepare($update);
					
					$params = array(':ds_nome' => $ds_nome, 
									':ds_email' => $ds_email,
									':ds_senha' => $ds_senha,
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
			else{
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
					echo "senha não gravada";
					
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}
			
			
			
			
		}

		function resetarSenhaInicial($ds_email)
        { 
			$nova_senha = $this->gerar_senha(8, true, true, true, false);
            try{
                $con = Conecta::criarConexao();
                $update = "UPDATE tb_usuario
                                SET 
                                    ds_senha = :ds_senha
                            WHERE ds_usuario = :ds_email"; 

                $stmt = $con->prepare($update);
                $params = array(
                                ':ds_email' => $ds_email,
								':ds_senha' => hash("SHA512", $nova_senha)
                                );

                $stmt->execute($params); 

				return $nova_senha;

            }
            catch(exception $e)
            {
                header('HTTP/1.1 500 Internal Server Error');
                print $e->getMessage();	
            }	
        }

		function gerar_senha($tamanho, $maiusculas, $minusculas, $numeros, $simbolos){
			$ma = "ABCDEFGHIJKLMNOPQRSTUVYXWZ"; // $ma contem as letras maiúsculas
			$mi = "abcdefghijklmnopqrstuvyxwz"; // $mi contem as letras minusculas
			$nu = "0123456789"; // $nu contem os números
			$si = "!@#$%¨&*()_+="; // $si contem os símbolos
			$senha = '';
			if ($maiusculas){
				  // se $maiusculas for "true", a variável $ma é embaralhada e adicionada para a variável $senha
				  $senha .= str_shuffle($ma);
			}
		  
			  if ($minusculas){
				  // se $minusculas for "true", a variável $mi é embaralhada e adicionada para a variável $senha
				  $senha .= str_shuffle($mi);
			  }
		  
			  if ($numeros){
				  // se $numeros for "true", a variável $nu é embaralhada e adicionada para a variável $senha
				  $senha .= str_shuffle($nu);
			  }
		  
			  if ($simbolos){
				  // se $simbolos for "true", a variável $si é embaralhada e adicionada para a variável $senha
				  $senha .= str_shuffle($si);
			  }
		  
			  // retorna a senha embaralhada com "str_shuffle" com o tamanho definido pela variável $tamanho
			  return substr(str_shuffle($senha),0,$tamanho);
		  }

	}

?>