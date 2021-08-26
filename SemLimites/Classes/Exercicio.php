<?php
	require_once("../Classes/Conecta.php");
    class Exercicio{
        public function gravarTipo(array $dados)
		{

			$ds_tipo	    = $dados['ds_tipo'];
            $st_status	    = $dados['st_status'];
			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_tipo (ds_tipo, st_status)
							VALUES (:ds_tipo, :st_status)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_tipo' => $ds_tipo,
                                ':st_status' => $st_status);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
        }

		public function gravarAlterarTipo(array $dados)
		{
			$id_tipo	    = $dados['id_tipo'];
			$ds_tipo	    = $dados['ds_tipo'];
            $st_status	    = $dados['st_status'];
			
			try{
				$con = Conecta::criarConexao();
				$update = "update tb_tipo set ds_tipo=:ds_tipo, st_status=:st_status 
							where id_tipo=:id_tipo";
				
				$stmt = $con->prepare($update);
				
				$params = array(':ds_tipo' => $ds_tipo,
                                ':st_status' => $st_status,
								':id_tipo' => $id_tipo);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
        }

		function buscarDadosTipo($id_tipo)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_tipo, ds_tipo, st_status
						FROM tb_tipo  
						WHERE id_tipo = :id_tipo";

				$stmt = $con->prepare($select);
			   	$params = array(':id_tipo' => $id_tipo);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
        }

		public function listarTipo() 
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_tipo, ds_tipo, st_status
							FROM tb_tipo";
				
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

		public function ExcluirTipo(array $dados)
		{
            $id_tipo	    = $dados['id_tipo'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "delete from tb_tipo
							WHERE id_tipo=:id_tipo";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':id_tipo' => $id_tipo);
                                
				$stmt->execute($params);
				
				echo "Deletado com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}

		public function OptionsTipo()
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_tipo, ds_tipo
							FROM tb_tipo ";
				$stmt = $con->prepare($select);
				$stmt->execute();

				$options = "";

				while($dados = $stmt->fetch())
				{
						
					$options.= "<option value='".$dados['id_tipo']."'>".$dados['ds_tipo']."</option>";

				}
				return $options;

			}
			catch(exception $e)
			{
			header('HTTP/1.1 500 Internal Server Error');
			print $e->getMessage();
			}
		}

		public function gravarArea(array $dados)
		{
			$id_tipo	    = $dados['id_tipo'];
			$ds_area	    = $dados['ds_area'];
            $st_status	    = $dados['st_status'];
			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_area (ds_area, id_tipo st_status)
							VALUES (:ds_area, :id_tipo :st_status)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_area' => $ds_area,
								':id_tipo' => $id_tipo,
                                ':st_status' => $st_status);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
        }

		public function gravarAlterarArea(array $dados)
		{
			$id_area	    = $dados['id_area'];
			$ds_area	    = $dados['ds_area'];
            $st_status	    = $dados['st_status'];
			
			try{
				$con = Conecta::criarConexao();
				$update = "update tb_area set ds_area=:ds_area, st_status=:st_status 
							where id_area=:id_area";
				
				$stmt = $con->prepare($update);
				
				$params = array(':ds_area' => $ds_area,
                                ':st_status' => $st_status,
								':id_area' => $id_area);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
        }

		function buscarDadosArea($id_area)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_area, ds_area, st_status
						FROM tb_area  
						WHERE id_area = :id_area";

				$stmt = $con->prepare($select);
			   	$params = array(':id_area' => $id_area);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
        }

		public function listarArea() 
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_area, ds_area, st_status
							FROM tb_area";
				
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

		public function ExcluirArea(array $dados)
		{
            $id_area	    = $dados['id_area'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "delete from tb_area
							WHERE id_area=:id_area";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':id_area' => $id_area);
                                
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