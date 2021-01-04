<?php
	require_once("../Classes/Conecta.php");
    class Categoria{
        public function listarCategoria(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_categoria, ds_descricao
							FROM tb_categoria";
				
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

			$ds_descricao	    = $dados['ds_descricao'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_categoria (ds_descricao)
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
        function buscarDadosCategoria($id_categoria)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_categoria, ds_descricao
						FROM tb_categoria  
						WHERE id_categoria = :id_categoria";

				$stmt = $con->prepare($select);
			   	$params = array(':id_categoria' => $id_categoria);
			   
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
            $id_categoria	    = $dados['id_categoria'];
			$ds_descricao	    = $dados['ds_descricao'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "UPDATE tb_categoria SET ds_descricao = :ds_descricao
							WHERE id_categoria=:id_categoria";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':ds_descricao' => $ds_descricao,
                                ':id_categoria' => $id_categoria);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}
		public function listarOptionsCategoria()
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_categoria, ds_descricao
							FROM tb_categoria ";
				$stmt = $con->prepare($select);
				$stmt->execute();

				$options = "";

				while($dados = $stmt->fetch())
				{
						
					$options.= "<option value='".$dados['id_categoria']."'>".$dados['ds_descricao']."</option>";

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