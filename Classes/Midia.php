<?php
	require_once("Conecta.php");
    class Midia{
        public function listarMidia(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_midia, nu_valor, ds_localizacao, ds_tamanho, ds_posicao
							FROM tb_midia";
				
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

		public function listarTipoMidia(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_midia, ds_midia, ds_icone
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
        public function gravarMidia(array $dados)
		{

			$ds_descricao	    = $dados['ds_descricao'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_midia (ds_descricao)
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
        function buscarDadosMidia($id_midia)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_midia, ds_descricao
						FROM tb_midia  
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
        public function gravarAlterarMidia(array $dados)
		{
            $id_midia	    = $dados['id_midia'];
			$ds_descricao	    = $dados['ds_descricao'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "UPDATE tb_midia SET ds_descricao = :ds_descricao
							WHERE id_midia=:id_midia";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':ds_descricao' => $ds_descricao,
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
		public function listarOptionsMidia()
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_midia, ds_descricao
							FROM tb_midia ";
				$stmt = $con->prepare($select);
				$stmt->execute();

				$options = "";

				while($dados = $stmt->fetch())
				{
						
					$options.= "<option value='".$dados['id_midia']."'>".$dados['ds_descricao']."</option>";

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