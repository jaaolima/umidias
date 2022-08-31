<?php
	require_once("../Classes/Conecta.php");
    class Cupom{
        public function listarTodasCupom()
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_cupom, ds_codigo, nu_porcentagem
							FROM tb_cupom
							order by id_cupom"; 
				
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
        public function gravarCupom(array $dados)
		{

			$ds_codigo	    = $dados['ds_codigo'];
			$nu_porcentagem	    = $dados['nu_porcentagem'];
			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_cupom (ds_codigo, nu_porcentagem)
							VALUES (:ds_codigo, :nu_porcentagem)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_codigo' => $ds_codigo,
                                ':nu_porcentagem' => $nu_porcentagem);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
        }
        function buscarDadosCupom($id_cupom)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_cupom, ds_cupom
						FROM tb_cupom  
						WHERE id_cupom = :id_cupom";

				$stmt = $con->prepare($select);
			   	$params = array(':id_cupom' => $id_cupom);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
        }
        public function deletarCupom(array $dados)
		{
            $id_cupom	    = $dados['id_cupom'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "delete from tb_cupom
							WHERE id_cupom=:id_cupom"; 
				
				$stmt = $con->prepare($insert);
				
                $params = array(':id_cupom' => $id_cupom);
                                
				$stmt->execute($params);
				
				echo "Deletado com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		} 
		public function listarOptionsCupom()
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_cupom, ds_cupom
							FROM tb_cupom ";
				$stmt = $con->prepare($select);
				$stmt->execute();

				$options = "";

				while($dados = $stmt->fetch())
				{
						
					$options.= "<option value='".$dados['id_cupom']."'>".$dados['ds_cupom']."</option>";

				}
				return $options;

			}
			catch(exception $e)
			{
			header('HTTP/1.1 500 Internal Server Error');
			print $e->getMessage();
			}
		}
		public function listarCupomDisponiveis($id_ponto) 
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_cupom, ds_cupom, dt_final, dt_inicial
							FROM tb_cupom b
							where dt_final > curdate() and dt_inicial not in (select dt_inicial from rl_alugado a where a.id_ponto=:id_ponto)
							order by id_cupom";
				
				$stmt = $con->prepare($select); 
				$params = array(
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

		public function listarMesDisponiveis($id_ponto) 
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_mes, ds_mes, dt_final, dt_inicial
							FROM tb_mes m
							where dt_final > curdate() and dt_inicial not in (select dt_inicial from rl_alugado a where a.id_ponto=:id_ponto)
							order by id_mes";
				
				$stmt = $con->prepare($select); 
				$params = array(
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

		public function listarCupom() 
		{
			$hoje = date('Y/m/d');
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_cupom, ds_cupom, dt_final, dt_inicial
							FROM tb_cupom
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

		public function listarCupomID($id_cupom)
		{
			$cupoms = str_replace(",", " or id_cupom = ", $id_cupom);
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_cupom, ds_cupom, dt_final, dt_inicial
							FROM tb_cupom
							where id_cupom = ".$cupoms;
				
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
		public function listarTodasCupomPonto()
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_cupom, ds_cupom, dt_inicial, dt_final
							FROM tb_cupom
							where dt_inicial > curdate()";
				
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

		public function listarTodosMesPonto()
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_mes, ds_mes, dt_inicial, dt_final
							FROM tb_mes
							where dt_inicial > curdate()";
				
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

        function buscarCupom($ds_codigo)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT  nu_porcentagem
						FROM tb_cupom
						WHERE ds_codigo = :ds_codigo"; 

				$stmt = $con->prepare($select);
			   	$params = array(':ds_codigo' => $ds_codigo); 
			   
			    $stmt->execute($params);
				$dados = $stmt->fetch();

			    return $dados;
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}


    }
?>        