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


        function buscarDadosBisemana($id_bisemana)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_bisemana, ds_bisemana
						FROM tb_bisemana  
						WHERE id_bisemana = :id_bisemana";

				$stmt = $con->prepare($select);
			   	$params = array(':id_bisemana' => $id_bisemana);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
        }
        public function deletarBisemana(array $dados)
		{
            $id_bisemana	    = $dados['id_bisemana'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "delete from tb_bisemana
							WHERE id_bisemana=:id_bisemana";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':id_bisemana' => $id_bisemana);
                                
				$stmt->execute($params);
				
				echo "Deletado com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}
		public function listarOptionsBisemana()
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_bisemana, ds_bisemana
							FROM tb_bisemana ";
				$stmt = $con->prepare($select);
				$stmt->execute();

				$options = "";

				while($dados = $stmt->fetch())
				{
						
					$options.= "<option value='".$dados['id_bisemana']."'>".$dados['ds_bisemana']."</option>";

				}
				return $options;

			}
			catch(exception $e)
			{
			header('HTTP/1.1 500 Internal Server Error');
			print $e->getMessage();
			}
		}
		public function listarBisemanaDisponiveis($id_ponto) 
		{
			$data = date('Y-m-d');
			$hoje = str_replace("-", "", $data);
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_bisemana, ds_bisemana, dt_final, dt_inicial
							FROM tb_bisemana b
							where dt_final > :hoje and dt_inicial not in (select dt_inicial from rl_alugado a where a.id_ponto=:id_ponto)
							order by dt_inicial";
				
				$stmt = $con->prepare($select); 
				$params = array(':hoje' => $hoje,
								':id_ponto' => $id_ponto);
				
				$stmt->execute($params);

				return $stmt;
				
					
			}
			catch(exception $e)
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

		public function listarBisemanaID($id_bisemana)
		{
			$bisemanas = str_replace(",", " or id_bisemana = ", $id_bisemana);
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_bisemana, ds_bisemana, dt_final, dt_inicial
							FROM tb_bisemana
							where id_bisemana = ".$bisemanas;
				
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


    }
?>        