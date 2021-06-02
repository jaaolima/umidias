<?php
	require_once("Conecta.php");
    class Cliente{
        public function listarCliente(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_cliente, ds_descricao
							FROM tb_cliente";
				
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
        public function gravarCliente(array $dados)
		{

			$ds_descricao	    = $dados['ds_descricao'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_cliente (ds_descricao)
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
        function buscarDadosCliente($id_cliente)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_cliente, ds_descricao
						FROM tb_cliente  
						WHERE id_cliente = :id_cliente";

				$stmt = $con->prepare($select);
			   	$params = array(':id_cliente' => $id_cliente);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
        }
        public function gravarAlterarCliente(array $dados)
		{
            $id_cliente	    = $dados['id_cliente'];
			$ds_descricao	    = $dados['ds_descricao'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "UPDATE tb_cliente SET ds_descricao = :ds_descricao
							WHERE id_cliente=:id_cliente";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':ds_descricao' => $ds_descricao,
                                ':id_cliente' => $id_cliente);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
        }
		public function dadosTotalCliente()
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT count(id_usuario) as id_usuario
							FROM tb_usuario
							where id_perfil = 1 ";
				
				$stmt = $con->prepare($select); 
				
				$stmt->execute();

				return $stmt->fetch();
				
					
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}

		public function esvaziarCarrinho(array $dados)
		{
			try{
				$con = Conecta::criarConexao(); 
				
				$select = "delete from rl_carrinho where id_usuario=:id_usuario";
				
				$stmt = $con->prepare($select); 
				$params = array(':id_usuario' => $dados["id_usuario"]);
				$stmt->execute($params);

				echo "Carrinho esvaziado";
				
					
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}


    }
?>        