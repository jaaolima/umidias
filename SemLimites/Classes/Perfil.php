<?php
	require_once("Conecta.php");

	class Perfil{

		public function gravarPerfil(array $dados)
		{

			$ds_perfil	    = $dados['ds_perfil'];
            $st_status	    = $dados['st_status'];
			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_perfil (ds_perfil, st_status)
							VALUES (:ds_perfil, :st_status)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_perfil' => $ds_perfil,
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

		public function gravarAlterarPerfil(array $dados)
		{
			$id_perfil	    = $dados['id_perfil'];
			$ds_perfil	    = $dados['ds_perfil'];
            $st_status	    = $dados['st_status'];
			
			try{
				$con = Conecta::criarConexao();
				$update = "update tb_perfil set ds_perfil=:ds_perfil, st_status=:st_status 
							where id_perfil=:id_perfil";
				
				$stmt = $con->prepare($update);
				
				$params = array(':ds_perfil' => $ds_perfil,
                                ':st_status' => $st_status,
								':id_perfil' => $id_perfil);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
        }

		function buscarDadosPerfil($id_perfil)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_perfil, ds_perfil, st_status
						FROM tb_perfil  
						WHERE id_perfil = :id_perfil";

				$stmt = $con->prepare($select);
			   	$params = array(':id_perfil' => $id_perfil);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
        }

		public function listarPerfil() 
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_perfil, ds_perfil, st_status
							FROM tb_perfil";
				
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

		public function ExcluirPerfil(array $dados)
		{
            $id_perfil	    = $dados['id_perfil'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "delete from tb_perfil
							WHERE id_perfil=:id_perfil";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':id_perfil' => $id_perfil);
                                
				$stmt->execute($params);
				
				echo "Deletado com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}

        public function OptionsPerfil($id_perfil)
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_perfil, ds_perfil
							FROM tb_perfil ";
				$stmt = $con->prepare($select);
				$stmt->execute();

				$options = "";

				while($dados = $stmt->fetch())
				{
						
					if($id_perfil == $dados['id_perfil'])
					{
						$options.= "<option value='".$dados['id_perfil']."' selected>".$dados['ds_perfil']."</option>";
					}	
					else
					{
						$options.= "<option value='".$dados['id_perfil']."'>".$dados['ds_perfil']."</option>";	
					}

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