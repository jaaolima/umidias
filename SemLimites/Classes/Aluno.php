<?php
	require_once("Conecta.php");

	class Aluno{

		public function listarAluno(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_aluno, ds_aluno
							FROM tb_aluno";
				
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
 

		



		public function gravarAluno(array $dados)
		{
		
			$ds_nome		= $dados['ds_nome'];
			$ds_email    	= $dados['ds_email'];
			$ds_aluno 	= $dados['ds_aluno'];
			$id_perfil 		= $dados['id_perfil'];
			$ds_senha       =  '123456';
		
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_aluno (ds_nome, ds_aluno, ds_email, ds_senha, id_perfil)
							VALUES (:ds_nome, :ds_aluno, :ds_email, :ds_senha, :id_perfil)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_nome' => $ds_nome, 
								':ds_aluno' => $ds_aluno,
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

		

		function buscarDadosAluno($id_aluno)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_aluno, ds_nome, ds_email, ds_aluno, id_perfil
						FROM tb_aluno  
						WHERE id_aluno = :id_aluno";

				$stmt = $con->prepare($select);
			   	$params = array(':id_aluno' => $id_aluno);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}


		public function gravarAlterarAluno(array $dados)
		{

			$ds_nome		= $dados['ds_nome'];
			$ds_email    	= $dados['ds_email'];
			$id_aluno    	= $dados['id_aluno'];
			
			try{
				$con = Conecta::criarConexao();
				$update = "UPDATE tb_aluno set ds_nome = :ds_nome, ds_email = :ds_email
						WHERE id_aluno = :id_aluno";
				
				$stmt = $con->prepare($update);
				
				$params = array(':ds_nome' => $ds_nome, 
								':ds_email' => $ds_email,
								':id_aluno'=>$id_aluno);
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
                $update = "UPDATE tb_aluno
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