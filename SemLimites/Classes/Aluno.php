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
		
			$ds_aluno		= $dados['ds_aluno'];
		
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_aluno (ds_aluno)
							VALUES (:ds_aluno)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_aluno' => $ds_aluno);

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
							id_aluno, ds_aluno
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

			$ds_aluno		= $dados['ds_aluno'];
            $id_aluno		= $dados['id_aluno'];

			
			try{
				$con = Conecta::criarConexao();
				$update = "UPDATE tb_aluno set ds_aluno = :ds_aluno
						WHERE id_aluno = :id_aluno";
				
				$stmt = $con->prepare($update);
				
				$params = array(':ds_aluno' => $ds_aluno,
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

        public function ExcluirAluno(array $dados)
		{
            $id_aluno	    = $dados['id_aluno'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "delete from tb_aluno
							WHERE id_aluno=:id_aluno";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':id_aluno' => $id_aluno);
                                
				$stmt->execute($params);
				
				echo "Deletado com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}

	}

?>