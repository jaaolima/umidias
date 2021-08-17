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
			
			function mesClientes(){	
				$mes = date('Y-m-d', strtotime('-1 month'));
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_usuario) as id_usuario
								FROM tb_usuario 
								where dt_usuario <= :mes and id_perfil = 1";
					
					$stmt = $con->prepare($select); 
					$params = array(':mes' => $mes);

					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}
			function semanaClientes(){	
				$semana = date('Y-m-d', strtotime('-7 days'));
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_usuario) as id_usuario
								FROM tb_usuario
								where dt_usuario <= :semana and id_perfil = 1";
					
					$stmt = $con->prepare($select); 
					$params = array(':semana' => $semana);
					
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		 
				}
			}

			function atualClientes(){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_usuario) as id_usuario
								FROM tb_usuario
								where id_perfil = 1";
					
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

			return array(mesClientes(), semanaClientes(), atualClientes());
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

		public function excluirpontoCarrinho(array $dados)
		{
			try{
				$con = Conecta::criarConexao(); 
				
				$select = "delete from rl_carrinho where id_carrinho=:id_carrinho";
				
				$stmt = $con->prepare($select); 
				$params = array(':id_carrinho' => $dados["id_carrinho"]);
				$stmt->execute($params);

				echo "Ponto retirado";
				
					
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		 
			}
		}
		public function gravarCarrinho(array $dados)
		{
			$id_midia		= $dados['id_midia'];
			$id_usuario		= $dados['id_usuario'];
			$id_ponto    	= $dados['id_ponto'];
			$ds_arte    	= $_FILES['arte[]'];
			$nu_valor_alugado    	= $dados['nu_valor_alugado'];


			//arte
			$name = $ds_arte['name'][0];
			$type = $ds_arte['type'][0];
			$tmp = $ds_arte['tmp_name'][0];
			$size = $ds_arte['size'][0];

			//gravar arte
			$tamanho = 20000000;

			$error = array();
			$tamanho_mb = $tamanho/1024/1024;
			
			if($size > $tamanho) {
				$error[1] = "O arquivo deve ter no máximo ".number_format($tamanho_mb)." mb";
			}

			if (count($error) == 0) {
				// Pega extensão da imagem
				preg_match("/\.(gif|bmp|png|jpg|jpeg|doc|docx|pdf){1}$/i", $name, $ext);
				var_dump($ext);
				// Gera um nome único para o arquivo
				// $nome_arquivo = md5(uniqid(time())) . "arquivo".$id_ponto.".". $ext[1];
				// // Caminho de onde ficará o arquivo
				// $caminho_arquivo = "/var/www/app.unimidias.com.br/docs_artes/" . $nome_arquivo;

				// $gravar_caminho_arquivo = "docs_artes/" . $nome_arquivo;

			
			}

			// if($id_midia == 1){
			// 	$id_material    = $dados['id_material'];
			// 	$bisemanas 		= $dados["bisemana[]"];
			// 	$listaCheckbox = explode(',', $bisemanas);

			// 	$id_bisemana= '';
			// 	for ($i=0; $i < count($listaCheckbox); $i++) { 
					
			// 			$id_bisemana = $listaCheckbox[$i];
			// 			$con = Conecta::criarConexao();
			// 			$selectBisemana = "SELECT dt_inicial, dt_final 
			// 						from tb_bisemana 
			// 						where id_bisemana = :id_bisemana";
						
			// 			$stmtBisemana = $con->prepare($selectBisemana);
						
			// 			$params = array(':id_bisemana' => $id_bisemana); 
										
			// 			$stmtBisemana->execute($params);
			// 			$dadosBisemana = $stmtBisemana->fetch();
			// 			$dt_inicial = $dadosBisemana["dt_inicial"];
			// 			$dt_final = $dadosBisemana["dt_final"];


			// 		try{
			// 			$con = Conecta::criarConexao();
			// 			$insert = "INSERT into rl_carrinho (id_usuario, id_ponto, dt_inicial, dt_final, ds_arte, id_material, nu_valor_alugado)
			// 						VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final, :ds_arte, :id_material, :nu_valor_alugado)";
						
			// 			$stmt = $con->prepare($insert);
						
			// 			$params = array(':id_usuario' => $id_usuario,
			// 							':id_ponto' => $id_ponto,
			// 							':dt_inicial' => $dt_inicial,
			// 							':dt_final' => $dt_final,
			// 							':ds_arte' => $gravar_caminho_arquivo,
			// 							':id_material' => $id_material,
			// 							':nu_valor_alugado' => $nu_valor_alugado);
										
			// 			$stmt->execute($params);

						

			// 		}
			// 		catch(exception $e) 
			// 		{
			// 			header('HTTP/1.1 500 Internal Server Error');
			// 			print "ERRO:".$e->getMessage();		
			// 		} 	
			// 	}
			// }

			// if($id_midia == 2){
			// 	$dt_inicial    	= $dados['dt_inicial'];
			// 	$mes    		= $dados['mes'];
				
	
			// 	$date = new DateTime($dt_inicial);
			// 	$date->modify('+'.$mes.'months');
			// 	$dt_final = $date->format('Y-m-d');
			
			// 	try{
			// 		$con = Conecta::criarConexao();
			// 		$insert = "INSERT into rl_carrinho (id_usuario, id_ponto, dt_inicial, dt_final, ds_arte, id_material, nu_valor_alugado)
			// 					VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final, :ds_arte, 1, :nu_valor_alugado)";
					
			// 		$stmt = $con->prepare($insert);
					
			// 		$params = array(':id_usuario' => $id_usuario, 
			// 						':id_ponto' => $id_ponto,
			// 						':dt_inicial' => $dt_inicial,
			// 						':dt_final' => $dt_final,
			// 						':ds_arte' => $gravar_caminho_arquivo,
			// 						':nu_valor_alugado' => $nu_valor_alugado);
	
			// 		$stmt->execute($params);
					
			// 	}
			// 	catch(exception $e)
			// 	{
			// 		header('HTTP/1.1 500 Internal Server Error');
			// 		print "ERRO:".$e->getMessage();		
			// 	}
			// }
			
		}
		function buscarCarrinho($id_usuario)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT id_carrinho, c.id_ponto, ds_descricao, ds_latitude, ds_longitude, f.ds_foto, t.ds_tipo, ds_observacao, ds_local, ds_tamanho, p.id_midia, c.id_material, ds_material, id_periodo, id_parceiro, c.dt_final, c.dt_inicial, nu_valor_alugado, c.ds_arte
						FROM rl_carrinho c 
						right join tb_ponto p on c.id_ponto = p.id_ponto 
						inner join tb_tipo_midia t on p.id_midia=t.id_midia 
						right join tb_material m on c.id_material=m.id_material 
						right join rl_ponto_foto f on p.id_ponto=f.id_ponto
						WHERE id_usuario = :id_usuario and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)"; 

				$stmt = $con->prepare($select);
			   	$params = array(':id_usuario' => $id_usuario); 
			   
			    $stmt->execute($params);

			    return $stmt;
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}
		function buscarTotalCarrinho($id_usuario)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT  nu_valor_alugado
						FROM rl_carrinho
						WHERE id_usuario = :id_usuario"; 

				$stmt = $con->prepare($select);
			   	$params = array(':id_usuario' => $id_usuario); 
			   
			    $stmt->execute($params);

			    return $stmt;
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}
		public function alugarCarrinho(array $dados)
		{
			$id_usuario = $dados["id_usuario"];

			try{
				$con = Conecta::criarConexao();
				
				$selectCarrinho = "SELECT c.id_ponto, id_usuario, dt_inicial, dt_final, ds_arte, id_midia, id_bisemana, c.id_material
							FROM rl_carrinho c
							inner join tb_ponto p on c.id_ponto=p.id_ponto
							where id_usuario = :id_usuario ";
				
				$stmtCarrinho = $con->prepare($selectCarrinho); 
				$paramsCarrinho = array(':id_usuario' => $id_usuario);
				$stmtCarrinho->execute($paramsCarrinho);

				while($dadosCarrinho = $stmtCarrinho->fetch()){
					$id_usuario	    = $dadosCarrinho['id_usuario'];
					$id_ponto	    = $dadosCarrinho['id_ponto'];
					$ds_arte	    = $dadosCarrinho['ds_arte'];
					$id_midia	    = $dadosCarrinho['id_midia'];
					$dt_inicial	    = $dadosCarrinho['dt_inicial'];
					$dt_final	    = $dadosCarrinho['dt_final'];
					$id_material	= $dadosCarrinho['id_material'];

					
					if($id_midia == 2){
		
						try{
							$con = Conecta::criarConexao();
							$insert = "INSERT into rl_alugado (id_usuario, id_ponto, dt_inicial, dt_final, ds_arte, id_material)
										VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final, :ds_arte, 1)";
							
							$stmt = $con->prepare($insert);
							 
							$params = array(':id_usuario' => $id_usuario,
											':id_ponto' => $id_ponto,
											':dt_inicial' => $dt_inicial,
											':dt_final' => $dt_final,
											':ds_arte' => $ds_arte);
											
							$stmt->execute($params);

							
							
						}
						catch(exception $e)
						{
							header('HTTP/1.1 500 Internal Server Error');
							print "ERRO:".$e->getMessage();		
						}
					}
					if($id_midia == 1){
						try{
							$con = Conecta::criarConexao();
							$insert = "INSERT into rl_alugado (id_usuario, id_ponto, dt_inicial, dt_final,  id_material)
										VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final,  :id_material)";
							
							$stmt = $con->prepare($insert);
							
							$params = array(':id_usuario' => $id_usuario,
											':id_ponto' => $id_ponto,
											':dt_inicial' => $dt_inicial,
											':dt_final' => $dt_final,
											':id_material' => $id_material);
											
							$stmt->execute($params);

							//gravar arte
							// $tamanho = 20000000;

							// $error = array();
							// $tamanho_mb = $tamanho/1024/1024;
							
							// if($size > $tamanho) {
							// 	$error[1] = "O arquivo deve ter no máximo ".number_format($tamanho_mb)." mb";
							// }

							// if (count($error) == 0) {
							// 	// Pega extensão da imagem
							// 	preg_match("/\.(gif|bmp|png|jpg|jpeg|doc|docx|pdf){1}$/i", $name, $ext);
							// 	// Gera um nome único para o arquivo
							// 	$nome_arquivo = md5(uniqid(time())) . "arquivo".$id_ponto.".". $ext[1];
							// 	// Caminho de onde ficará o arquivo
							// 	$caminho_arquivo = "/var/www/app.unimidias.com.br/docs_artes/" . $nome_arquivo;
				
							// 	$gravar_caminho_arquivo = "docs_artes/" . $nome_arquivo;
				
							
								
							// 	// Faz o upload da imagem para seu respectivo caminho
							// 	$moved = move_uploaded_file($tmp,  $caminho_arquivo);

							// 	$insert_arte = "insert into rl_arte(id_ponto, id_usuario,  ds_arte) values (:id_ponto, :id_usuario :ds_arte)";

							// 	$stmt_arte = $con->prepare($insert_arte);
						
							// 	$params_arte = array(':id_ponto' => $id_ponto,
							// 						':id_usuario' => $id_usuario,
							// 						':ds_arte' => $gravar_caminho_arquivo
							// 						);
												
							// 	$stmt_arte->execute($params_arte);
							// }
							
						}
						catch(exception $e)
						{
							header('HTTP/1.1 500 Internal Server Error');
							print "ERRO:".$e->getMessage();		
						}
					}
				}
				
				try{
					$con = Conecta::criarConexao(); 
					
					$delete = "delete from rl_carrinho where id_usuario=:id_usuario";
					
					$stmtDelete = $con->prepare($delete); 
					$paramsDelete = array(':id_usuario' => $id_usuario);
					$stmtDelete->execute($paramsDelete);
	
					echo "Carrinho esvaziado";
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		 
				}
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		 
			}

			

			
        }


    }
?>        