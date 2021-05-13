<?php
	require_once("../Classes/Conecta.php");
    class Categoria{
        public function listarCategoria(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_midia, ds_nome
							FROM tb_tipo_midia";
				
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
        public function gravarCategoria(array $dados)
		{

			$ds_nome	    = $dados['ds_nome'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_tipo_midia (ds_nome)
							VALUES (:ds_nome)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_nome' => $ds_nome,);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
        }
        function buscarDadosCategoria($id_midia)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_midia, ds_nome
						FROM tb_tipo_midia  
						WHERE id_midia = :id_midia";

				$stmt = $con->prepare($select);
			   	$params = array(':id_midia' => $id_midia);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
        }
        public function gravarAlterarCategoria(array $dados)
		{
            $id_midia	    = $dados['id_midia'];
			$ds_nome	    = $dados['ds_nome'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "UPDATE tb_tipo_midia SET ds_nome = :ds_nome
							WHERE id_midia=:id_midia";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':ds_nome' => $ds_nome,
                                ':id_midia' => $id_midia);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}
		public function listarOptionsCategoria($id_midia)
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_midia, ds_nome
							FROM tb_tipo_midia ";
				$stmt = $con->prepare($select);
				$stmt->execute();

				$options = "";

				while($dados = $stmt->fetch())
				{
						
					$options.= "<option value='".$dados['id_midia']."'>".$dados['ds_nome']."</option>";

				}
				return $options;

			}
			catch(exception $e)
			{
			header('HTTP/1.1 500 Internal Server Error');
			print $e->getMessage();
			}
		}


    }
?>        