<?php
	require_once("Conecta.php");
    class Grafica{
        public function listarGrafica(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_grafica, ds_grafica, ds_email
							FROM tb_grafica";
				
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
        public function gravarGrafica(array $dados)
		{

			$ds_grafica	    = $dados['ds_grafica'];
            $ds_email	    	= $dados['ds_email'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_grafica (ds_grafica, ds_email)
							VALUES (:ds_grafica, :ds_email)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_grafica' => $ds_grafica,
                                ':ds_email' => $ds_email);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}  
        }
        function buscarDadosGrafica($id_grafica)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_grafica, ds_grafica, ds_email
						FROM tb_grafica  
						WHERE id_grafica = :id_grafica";

				$stmt = $con->prepare($select);
			   	$params = array(':id_grafica' => $id_grafica);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
        }
        public function gravarAlterarGrafica(array $dados)
		{
            $id_grafica	    = $dados['id_grafica'];
			$ds_grafica	    = $dados['ds_grafica'];
            $ds_email	        = $dados['ds_email'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "UPDATE tb_grafica SET ds_grafica = :ds_grafica, ds_email = :ds_email
							WHERE id_grafica=:id_grafica";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':ds_grafica' => $ds_grafica,
                                ':ds_email' => $ds_email,
                                ':id_grafica' => $id_grafica);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}

		public function excluirGrafica(array $dados) 
		{
			$id_grafica = $dados['id_grafica'];
			
			try{
				$con = Conecta::criarConexao();
				$insert = "delete from tb_grafica
							WHERE id_grafica=:id_grafica";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':id_grafica' => $id_grafica);
                                
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