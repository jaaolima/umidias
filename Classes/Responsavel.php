<?php
	require_once("../Classes/Conecta.php");
    class Responsavel{
        public function listarResponsavel(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_responsavel, ds_descricao
							FROM tb_responsavel";
				
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
        public function gravarResponsavel(array $dados)
		{

			$ds_descricao	    = $dados['ds_descricao'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_responsavel (ds_descricao)
							VALUES (:ds_descricao)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_descricao' => $ds_descricao,);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
        }
        function buscarDadosResponsavel($id_responsavel)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_responsavel, ds_descricao
						FROM tb_responsavel  
						WHERE id_responsavel = :id_responsavel";

				$stmt = $con->prepare($select);
			   	$params = array(':id_responsavel' => $id_responsavel);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
        }
        public function gravarAlterarResponsavel(array $dados)
		{
            $id_responsavel	    = $dados['id_responsavel'];
			$ds_descricao	    = $dados['ds_descricao'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "UPDATE tb_responsavel SET ds_descricao = :ds_descricao
							WHERE id_responsavel=:id_responsavel";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':ds_descricao' => $ds_descricao,
                                ':id_responsavel' => $id_responsavel);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
        }


    }
?>        