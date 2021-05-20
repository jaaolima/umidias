<?php
	require_once("../Classes/Conecta.php");
    class Bisemana{
        public function listarBisemana(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_bisemana, ds_bisemana, dt_inicial, dt_final
							FROM tb_bisemana";
				
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
        public function gravarBisemana(array $dados)
		{

			$ds_bisemana	    = $dados['ds_bisemana'];

            $dt_inicial = date('Y-m-d', strtotime($dados["dt_inicial"]));
            $dt_final = date('Y-m-d', strtotime($dados["dt_final"]));

			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_bisemana (ds_bisemana, dt_inicial, dt_final)
							VALUES (:ds_bisemana, :dt_inicial, :dt_final)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_bisemana' => $ds_bisemana,
                                ':dt_inicial' => $dt_inicial,
                                ':dt_final' => $dt_final);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
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
		public function listarBisemana()
		{
			$hoje = date('Y/m/d');
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_bisemana, ds_bisemana, dt_final, dt_inicial
							FROM tb_bisemana
							where dt_final > :hoje";
				
				$stmt = $con->prepare($select); 
				$params = array(':hoje' => $hoje);
				
				$stmt->execute($params);

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