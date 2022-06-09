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
				//buscar nome arquivo
				try{
					$con = Conecta::criarConexao();
					$selectarquivo = "select ds_arte from rl_carrinho where id_usuario=:id_usuario";		
					$stmtarquivo = $con->prepare($selectarquivo); 
					$paramsarquivo = array(':id_usuario' => $dados["id_usuario"]);
					$stmtarquivo->execute($paramsarquivo);
					while($dadosarquivo = $stmtarquivo->fetch()){
						//excluir arquivo
						unlink("../". $dadosarquivo["ds_arte"]);
					}

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
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		 
			}
		}

		public function excluirpontoCarrinho(array $dados)
		{
			


			try{

				//buscar nome arquivo
				$con = Conecta::criarConexao();
				$select = "select ds_arte from rl_carrinho where id_carrinho=:id_carrinho";		
				$stmt = $con->prepare($select); 
				$params = array(':id_carrinho' => $dados["id_carrinho"]);
				$stmt->execute($params);
				$dadosarquivo = $stmt->fetch();

				//excluir arquivo
				unlink("../". $dadosarquivo["ds_arte"]);

				//deletar do banco
				$con = Conecta::criarConexao(); 
				$delete = "delete from rl_carrinho where id_carrinho=:id_carrinho";
				$stmt = $con->prepare($delete); 
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
			$id_material    = $dados['id_material'];
			$ds_arte    	= $_FILES['arte'];

			//pegando valor do Material
			$con = Conecta::criarConexao();
			$selectMaterial = "SELECT nu_valor
						from tb_material 
						where id_material = :id_material";
			
			$stmtMaterial = $con->prepare($selectMaterial);
			
			$params = array(':id_material' => $id_material); 
							
			$stmtMaterial->execute($params);
			$dadosMaterial = $stmtMaterial->fetch();

			//pegando valor do Ponto
			$con = Conecta::criarConexao();
			$selectPonto = "SELECT nu_valor
						from tb_ponto 
						where id_ponto = :id_ponto";
			
			$stmtPonto = $con->prepare($selectPonto);
			
			$params = array(':id_ponto' => $id_ponto); 
							
			$stmtPonto->execute($params);
			$dadosPonto = $stmtPonto->fetch();

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
				//Gera um nome único para o arquivo
				$nome_arquivo = md5(uniqid(time())) . "arquivo".$id_ponto.".". $ext[1];
				// Caminho de onde ficará o arquivo
				$caminho_arquivo = "/var/www/app.unimidias.com.br/docs_artes/" . $nome_arquivo;

				$gravar_caminho_arquivo = "docs_artes/" . $nome_arquivo;

				// Faz o upload da imagem para seu respectivo caminho
				$moved = move_uploaded_file($tmp,  $caminho_arquivo);
			
			}

			//Outdoor ou Front
			if($id_midia == 1){
				$id_material    = $dados['id_material'];
				$bisemanas 		= $dados["bisemana"];

				

				//total alugado

				//calculo ponto
				$Rvirgula = str_replace(".", "", $dadosPonto["nu_valor"]); 
				$Rzero = str_replace(",00", "", $Rvirgula); 
				$Rrs = str_replace("R$ ", "", $Rzero);
				$valor = $Rrs; 


				//calculo material
				$anterior = 0;
				$qtdMaterial = 1;
				for ($i=0; $i < count($bisemanas); $i++) { 
					$id_bisemana = $bisemanas[$i];
					if($i == 0){
						$anterior = $id_bisemana;
					}else{
						if($anterior + 1 != $id_bisemana){
							$qtdMaterial++;
						}
						$anterior = $id_bisemana;
					}
				}
				
				$valorMaterial = $dadosMaterial["nu_valor"] * $qtdMaterial;
				$nu_valor_alugado = $valor + ($valorMaterial / count($bisemanas));

				$nu_valor_alugado = "R$ " . number_format($nu_valor_alugado,2,",",".");


				$id_bisemana= '';
				for ($i=0; $i < count($bisemanas); $i++) { 
					$id_bisemana = $bisemanas[$i];
					$con = Conecta::criarConexao();
					$selectBisemana = "SELECT dt_inicial, dt_final 
								from tb_bisemana 
								where id_bisemana = :id_bisemana";
					
					$stmtBisemana = $con->prepare($selectBisemana);
					
					$params = array(':id_bisemana' => $id_bisemana); 
									
					$stmtBisemana->execute($params);
					$dadosBisemana = $stmtBisemana->fetch();
					$dt_inicial = $dadosBisemana["dt_inicial"];
					$dt_final = $dadosBisemana["dt_final"];

					try{
						$con = Conecta::criarConexao();
						$insert = "INSERT into rl_carrinho (id_usuario, id_ponto, dt_inicial, dt_final, ds_arte, id_material, nu_valor_alugado)
									VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final, :ds_arte, :id_material, :nu_valor_alugado)";
						
						$stmt = $con->prepare($insert);
						
						$params = array(':id_usuario' => $id_usuario,
										':id_ponto' => $id_ponto,
										':dt_inicial' => $dt_inicial,
										':dt_final' => $dt_final,
										':ds_arte' => $gravar_caminho_arquivo,
										':id_material' => $id_material,
										':nu_valor_alugado' => $nu_valor_alugado);
										
						$stmt->execute($params);

						

					}
					catch(exception $e) 
					{
						header('HTTP/1.1 500 Internal Server Error');
						print "ERRO:".$e->getMessage();		
					} 
							
				}
			}
			if($id_midia == 2){
				$id_material    = $dados['id_material'];
				$meses 			= $dados["mes"]; 

				//total alugado

				//calculo ponto
				$Rvirgula = str_replace(".", "", $dadosPonto["nu_valor"]); 
				$Rzero = str_replace(",00", "", $Rvirgula); 
				$Rrs = str_replace("R$ ", "", $Rzero);
				$valor = $Rrs; 

				//calculo material
				$anterior = 0;
				$qtdMaterial = 1;
				for ($i=0; $i < count($meses); $i++) { 
					$id_mes = $meses[$i];
					if($i == 0){
						$anterior = $id_mes;
					}else{
						if($anterior + 1 != $id_mes){
							$qtdMaterial++;
						}
						$anterior = $id_mes;
					}
				}

				$valorMaterial = $dadosMaterial["nu_valor"] * $qtdMaterial;
				$nu_valor_alugado = $valor + ($valorMaterial / count($meses));

				$nu_valor_alugado = "R$ " . number_format($nu_valor_alugado,2,",",".");
				

				$id_mes= '';
				for ($i=0; $i < count($meses); $i++) { 
					$id_mes = $meses[$i];
					$con = Conecta::criarConexao();
					$selectmes = "SELECT dt_inicial, dt_final 
								from tb_mes 
								where id_mes = :id_mes";
					
					$stmtmes = $con->prepare($selectmes);
					
					$params = array(':id_mes' => $id_mes); 
									
					$stmtmes->execute($params);
					$dadosmes = $stmtmes->fetch();
					$dt_inicial = $dadosmes["dt_inicial"];
					$dt_final = $dadosmes["dt_final"];

					

					try{
						$con = Conecta::criarConexao();
						$insert = "INSERT into rl_carrinho (id_usuario, id_ponto, dt_inicial, dt_final, ds_arte, id_material, nu_valor_alugado)
									VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final, :ds_arte, :id_material, :nu_valor_alugado)";
						
						$stmt = $con->prepare($insert);
						
						$params = array(':id_usuario' => $id_usuario,
										':id_ponto' => $id_ponto,
										':dt_inicial' => $dt_inicial,
										':dt_final' => $dt_final,
										':ds_arte' => $gravar_caminho_arquivo,
										':id_material' => $id_material,
										':nu_valor_alugado' => $nu_valor_alugado);
										
						$stmt->execute($params);

						

					}
					catch(exception $e) 
					{
						header('HTTP/1.1 500 Internal Server Error');
						print "ERRO:".$e->getMessage();		
					}
							
				}
			}

			// if($id_midia == 2){
			// 	$datas = explode(" - ", $dados['dt_inicial_final']);

			// 	$dt_inicial = implode('-', array_reverse(explode('/', $datas[0])));
			// 	$dt_final = implode('-', array_reverse(explode('/', $datas[1])));

			// 	var_dump($dt_final);var_dump($dt_inicial);

			// 	//total alugado
			// 	$nu_valor_ponto    	= $dados['nu_valor_ponto'];
			// 	$Rvirgula = str_replace(",", "", $nu_valor_ponto); 
			// 	$valor = str_replace("R$ ", "", $Rvirgula);
			// 	$nu_valor_alugado = ($valor) + $dadosMaterial["nu_valor"];
				
	
			// 	// $date = new DateTime($dt_inicial);
			// 	// $date->modify('+'.$mes.'months');
				
			
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
				
				
				$select = "SELECT id_carrinho, c.id_ponto, ds_descricao, ds_latitude, ds_longitude, f.ds_foto, t.ds_tipo, ds_observacao, ds_bairro, ds_tamanho, p.id_midia, c.id_material, ds_material, id_periodo, id_parceiro, c.dt_final, c.dt_inicial, nu_valor_alugado, c.ds_arte
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

		function buscarQuantidadeCarrinho($id_usuario)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT  count(id_carrinho) as qtd
						FROM rl_carrinho
						WHERE id_usuario = :id_usuario"; 

				$stmt = $con->prepare($select);
			   	$params = array(':id_usuario' => $id_usuario); 
			   
			    $stmt->execute($params);

				$dados = $stmt->fetch();
			    return $dados["qtd"];
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}
		public function alugarCarrinho($id_usuario, $status)
		{

			try{
				$con = Conecta::criarConexao();
				
				$selectCarrinho = "SELECT c.id_ponto, id_usuario, dt_inicial, dt_final, c.ds_arte, id_midia, id_bisemana, c.id_material, c.nu_valor_alugado
							FROM rl_carrinho c
							inner join tb_ponto p on c.id_ponto=p.id_ponto
							where id_usuario = :id_usuario ";
				
				$stmtCarrinho = $con->prepare($selectCarrinho); 
				$paramsCarrinho = array(':id_usuario' => $id_usuario);
				$stmtCarrinho->execute($paramsCarrinho);
				$array_id = array();
				while($dadosCarrinho = $stmtCarrinho->fetch()){
					$id_usuario	    = $dadosCarrinho['id_usuario'];
					$id_ponto	    = $dadosCarrinho['id_ponto'];
					$ds_arte	    = $dadosCarrinho['ds_arte'];
					$id_midia	    = $dadosCarrinho['id_midia'];
					$dt_inicial	    = $dadosCarrinho['dt_inicial'];
					$dt_final	    = $dadosCarrinho['dt_final'];
					$id_material	= $dadosCarrinho['id_material'];
					$nu_valor_alugado	= $dadosCarrinho['nu_valor_alugado'];

					$id_status_midia = 1;
					switch ($status) {
						case "approved":
							$id_status_midia = 3;
							break;
						
						case "pending":
							$id_status_midia = 1;
							break;
					}

					if($id_midia == 2){
		
						try{
							$con = Conecta::criarConexao();
							$insert = "INSERT into rl_alugado (id_usuario, id_ponto, dt_inicial, dt_final, ds_arte, id_material, nu_valor_alugado, id_status_midia)
										VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final, :ds_arte, 1, :nu_valor_alugado, :id_status_midia)";
							
							$stmt = $con->prepare($insert);
							 
							$params = array(':id_usuario' => $id_usuario,
											':id_ponto' => $id_ponto,
											':dt_inicial' => $dt_inicial,
											':dt_final' => $dt_final,
											':ds_arte' => $ds_arte,
											':nu_valor_alugado' => $nu_valor_alugado,
											':id_status_midia' => $id_status_midia);
											
							$stmt->execute($params);

							array_push($array_id ,$con->lastInsertId());
							
							
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
							$insert = "INSERT into rl_alugado (id_usuario, id_ponto, dt_inicial, dt_final,  id_material, ds_arte, nu_valor_alugado, id_status_midia)
										VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final,  :id_material, :ds_arte, :nu_valor_alugado, :id_status_midia)";
							
							$stmt = $con->prepare($insert);
							
							$params = array(':id_usuario' => $id_usuario,
											':id_ponto' => $id_ponto,
											':dt_inicial' => $dt_inicial,
											':dt_final' => $dt_final,
											':id_material' => $id_material,
											':ds_arte' => $ds_arte,
											':nu_valor_alugado' => $nu_valor_alugado,
											':id_status_midia' => $id_status_midia);
											
							$stmt->execute($params);

							array_push($array_id ,$con->lastInsertId());
							
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

			return $array_id;

			

			
        }

		public function GravarPagamento(array $dados, $id_usuario)
		{
			$collection_id 			= $dados["collection_id"];
			$collection_status 		= $dados["collection_status"];
			$payment_id 			= $dados["payment_id"];
			$status 				= $dados["status"];
			$external_reference 	= $dados["external_reference"];
			$payment_type 			= $dados["payment_type"];

			$merchant_order_id 		= $dados["merchant_order_id"];
			$preference_id 			= $dados["preference_id"];
			$site_id 				= $dados["site_id"];
			$processing_mode 		= $dados["processing_mode"];
			$merchant_account_id 	= $dados["merchant_account_id"];

			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into rl_pagamento (id_usuario, collection_id, collection_status, payment_id, status, external_reference, payment_type, merchant_order_id, preference_id, site_id, processing_mode, merchant_account_id )
							VALUES (:id_usuario, :collection_id, :collection_status, :payment_id, :status, :external_reference, :payment_type, :merchant_order_id, :preference_id, :site_id, :processing_mode, :merchant_account_id)";
				
				$stmt = $con->prepare($insert);
				 
				$params = array(':id_usuario' => $id_usuario,
								':collection_id' => $collection_id,
								':collection_status' => $collection_status,
								':payment_id' => $payment_id,
								':status' => $status,
								':external_reference' => $external_reference,
								':payment_type' => $payment_type,
								':merchant_order_id' => $merchant_order_id,
								':preference_id' => $preference_id,
								':site_id' => $site_id,
								':processing_mode' => $processing_mode,
								':merchant_account_id' => $merchant_account_id
							);
								
				$stmt->execute($params);
				
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
				print "ERRO:".$e->getMessage();		
			}

        }

		public function ConverterImagem(){
			$im = new imagick('../assets/media/teste.pdf'); 
			$im->setImageColorspace(255); 
			$im->setResolution(300, 300);
			$im->setCompressionQuality(95); 
			$im->setImageFormat('jpeg'); 
			$im->writeImage('thumb.jpg'); 
			$im->clear(); 
			$im->destroy();
		}
		
		public function EmailPagamento($id_usuario){
			$code = include("../appCliente/contrato_pdf.php");
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT ds_email, ds_nome
						FROM tb_usuario
						WHERE id_usuario = :id_usuario"; 
	
				$stmt = $con->prepare($select);
				$params = array(':id_usuario' => $id_usuario); 
				
				$stmt->execute($params);
	
				$dados = $stmt->fetch();
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
				print "ERRO:".$e->getMessage();		
			}
			
			$email = $dados['ds_email'];
			$nome = $dados['ds_nome'];

			// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
			require_once('../assets/media/PHPMailer-master/PHPMailerAutoload.php');

			// Inicia a classe PHPMailer 
			$mail = new PHPMailer(); 

			// Método de envio 
			$mail->IsSMTP(); 

			// // Enviar por SMTP  
			$mail->Host = "smtp-relay.sendinblue.com"; 
			$mail->SMTPAuth = true;
			$mail->SMTPAutoTLS = false ; 
			$mail->Username = 'renato.lima@outlook.com'; 
			$mail->Password = 'RZw0z8AXIfvHc73M';
			$mail->Port = 587;
			$mail->IsHTML(true); 
			$mail->CharSet = 'UTF-8'; 
			$mail->setFrom("no-reply@ibranutro.com.br", "Unimídias");

			// Define o(s) destinatário(s) 
			$mail->AddAddress($email, $nome);  

			// Assunto da mensagem 
			$mail->Subject = "Contrado de locação"; 

			// Corpo do email 
			$mail->Body = "<h1>Contrado de locação</h1> 
			<p>Segue:<br>";

			function renderView($path, array $data = []){
				ob_start();
				include $path;
				$response = ob_get_contents();
				ob_end_clean();

				return $response;
			}
			// Opcional: Anexos 
			$mail->AddAttachment('../docs_contratos/contrato'. $code . '.pdf', "contrato.pdf"); 

			// Envia o e-mail 
			$enviado = $mail->Send(); 

			// Exibe uma mensagem de resultado 
			if ($enviado) 
			{ 
				echo "Seu email foi enviado com sucesso!"; 
			} else { 
				echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
				return false;
			} 

		}

		public function PagamentoPendente($id_usuario, $status)
		{

			try{
				$con = Conecta::criarConexao();
				
				$selectCarrinho = "SELECT c.id_ponto, id_usuario, dt_inicial, dt_final, c.ds_arte, id_midia, id_bisemana, c.id_material, c.nu_valor_alugado
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
					$nu_valor_alugado	= $dadosCarrinho['nu_valor_alugado'];

					$id_status_midia = 1;
					switch ($status) {
						case "approved":
							$id_status_midia = 3;
							break;
						
						case "pending":
							$id_status_midia = 1;
							break;
					}

					if($id_midia == 2){
		
						try{
							$con = Conecta::criarConexao();
							$insert = "INSERT into rl_pendente (id_usuario, id_ponto, dt_inicial, dt_final, ds_arte, id_material, nu_valor_alugado, id_status_midia)
										VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final, :ds_arte, 1, :nu_valor_alugado, :id_status_midia)";
							
							$stmt = $con->prepare($insert);
							 
							$params = array(':id_usuario' => $id_usuario,
											':id_ponto' => $id_ponto,
											':dt_inicial' => $dt_inicial,
											':dt_final' => $dt_final,
											':ds_arte' => $ds_arte,
											':nu_valor_alugado' => $nu_valor_alugado,
											':id_status_midia' => $id_status_midia);
											
							$stmt->execute($params);

							array_push($array_id ,$con->lastInsertId());
							
							
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
							$insert = "INSERT into rl_pendente (id_usuario, id_ponto, dt_inicial, dt_final,  id_material, ds_arte, nu_valor_alugado, id_status_midia)
										VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final,  :id_material, :ds_arte, :nu_valor_alugado, :id_status_midia)";
							
							$stmt = $con->prepare($insert);
							
							$params = array(':id_usuario' => $id_usuario,
											':id_ponto' => $id_ponto,
											':dt_inicial' => $dt_inicial,
											':dt_final' => $dt_final,
											':id_material' => $id_material,
											':ds_arte' => $ds_arte,
											':nu_valor_alugado' => $nu_valor_alugado,
											':id_status_midia' => $id_status_midia);
											
							$stmt->execute($params);

							array_push($array_id ,$con->lastInsertId());
							
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

		public function listarPagamentoPendente()
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_pendente, u.ds_nome,(select min(ds_foto) from rl_ponto_foto f where p.id_ponto=f.id_ponto) as ds_foto, t.ds_tipo, p.ds_bairro, nu_valor_alugado, dt_final, dt_inicial
							FROM rl_pendente pen
							inner join tb_usuario u on pen.id_usuario=u.id_usuario
							inner join tb_ponto p on pen.id_ponto=p.id_ponto
							inner join tb_tipo_midia t on p.id_midia=t.id_midia";
				
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