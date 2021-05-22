<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	require_once("Conecta.php");
    class Ponto{
        public function gravarPonto(array $dados)
		{
			$ds_local	        	= $dados['ds_local'];
			$ds_descricao	        = $dados['ds_descricao'];
			$ds_foto                = $_FILES['fotos'];
			$ds_latitude    	    = $dados['ds_latitude'];
			$ds_longitude    	    = $dados['ds_longitude'];
			$nu_valor    	        = $dados['nu_valor']; 
			$id_midia               = $dados['id_midia'];
			$ds_observacao	        = $dados['ds_observacao'];
			$id_material	        = $dados['id_material'];


			var_dump($ds_foto);
			/*if($id_midia == 2){
				$id_material = 2;
			}
			$id_periodo	        = $dados['id_periodo'];
			if($id_midia == 2){
				$id_periodo = 2;
			}
			$ds_tamanho	        = $dados['ds_tamanho'];
			if($id_midia == 2){
				$ds_tamanho = 1;
			}

			$tamanho = 20000000;

			$error = array();
			$tamanho_mb = $tamanho/1024/1024;
			
			if($ds_foto["size"] > $tamanho) {
				$error[1] = "O arquivo deve ter no máximo ".number_format($tamanho_mb)." mb";
			}

			

			if (count($error) == 0) {
				// Pega extensão da imagem
				preg_match("/\.(gif|bmp|png|jpg|jpeg|doc|docx|pdf){1}$/i", $ds_foto["name"], $ext);
				// Gera um nome único para o arquivo
				$nome_arquivo = md5(uniqid(time())) . "arquivo." . $ext[1];
				// Caminho de onde ficará o arquivo
				$caminho_arquivo = "/var/www/app.unimidias.com.br/docs_pontos/" . $nome_arquivo;

				$gravar_caminho_arquivo = "docs_pontos/" . $nome_arquivo;

			
				
				// Faz o upload da imagem para seu respectivo caminho
				$moved = move_uploaded_file($ds_foto["tmp_name"],  $caminho_arquivo);

				
				try{
					$con = Conecta::criarConexao();
					$insert = "INSERT into tb_ponto (ds_descricao, ds_foto, ds_latitude, ds_longitude, nu_valor, id_midia, ds_local, ds_observacao, id_material, id_periodo, ds_tamanho)
								VALUES (:ds_descricao, :ds_foto, :ds_latitude, :ds_longitude, :nu_valor, :id_midia, :ds_local, :ds_observacao, :id_material, :id_periodo, :ds_tamanho)";
					
					$stmt = $con->prepare($insert);
					
					$params = array(':ds_descricao' => $ds_descricao,
									':ds_foto' => $gravar_caminho_arquivo,
									':ds_latitude' => $ds_latitude,
									':ds_longitude' => $ds_longitude,
									':nu_valor' => $nu_valor,
									':id_midia' =>$id_midia,
									':ds_local' => $ds_local,
									':ds_observacao' => $ds_observacao,
									':id_material' => $id_material,
									':id_periodo' => $id_periodo,
									':ds_tamanho' => $ds_tamanho);
									
					$stmt->execute($params);
					
					echo "Dados gravados com sucesso!"; 
					
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}
			else
			{
				echo "Aconteceu um erro".$error[1];
			}*/

			
		}
		public function listarPonto($id_midia)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_local, ds_foto, t.ds_tipo
							FROM tb_ponto p
							inner join tb_tipo_midia t on p.id_midia=t.id_midia
							where p.id_midia=:id_midia";
				
				$stmt = $con->prepare($select); 
				$params = array(':id_midia' => $id_midia);
				
				$stmt->execute($params);

				return $stmt;
				
					
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}
		public function listarTodosPonto()
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_local, ds_foto, t.ds_tipo
							FROM tb_ponto p
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
		public function listarMeusPontos($id_usuario)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_ponto, nu_valor, t.id_midia, ds_local, t.ds_tipo
							FROM tb_ponto p
							inner join tb_tipo_midia t on p.id_midia=t.id_midia
							limit 1
							/*where id_usuario=:id_usuario*/";
				
				$stmt = $con->prepare($select); 
				/*$params = array(':id_usuario' => $id_usuario);*/
				
				$stmt->execute();

				return $stmt;
				
					
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}
		public function listarTodasMidias()
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_ponto, nu_valor, t.id_midia, ds_local, t.ds_tipo
							FROM tb_ponto p
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
		public function dadosTotalMidias()
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT count(id_ponto) as id_ponto
							FROM tb_ponto ";
				
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
		function BuscarDadosPonto($id_ponto)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_ponto, ds_descricao, ds_latitude, ds_longitude, ds_foto, nu_valor, ds_tipo, st_status, ds_observacao, ds_local, ds_tamanho, nu_valor, p.id_midia
						FROM tb_ponto p
						inner join tb_tipo_midia t on p.id_midia=t.id_midia
						WHERE id_ponto = :id_ponto";

				$stmt = $con->prepare($select);
			   	$params = array(':id_ponto' => $id_ponto);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}
		public function gravarAlterarPonto(array $dados)
		{	
			$id_ponto	        	= $dados['id_ponto'];
			$ds_descricao	        = $dados['ds_descricao'];
			$ds_local	        	= $dados['ds_local'];
			$ds_foto                = $_FILES['ds_foto'];
			$ds_latitude    	    = $dados['ds_latitude'];
			$ds_longitude    	    = $dados['ds_longitude'];
			$nu_valor    	        = $dados['nu_valor'];
			$id_midia               = $dados['id_midia'];
			$st_status          	= $dados['st_status'];
			$ds_observacao	        = $dados['ds_observacao'];
			
			if($ds_foto["name"] == "" ){

				try{
					$con = Conecta::criarConexao();
					$insert = "UPDATE tb_ponto set ds_descricao = :ds_descricao, ds_local = :ds_local, ds_latitude = :ds_latitude, ds_longitude = :ds_longitude, nu_valor = :nu_valor, id_midia= :id_midia, st_status = :st_status, ds_observacao = :ds_observacao
							   WHERE id_ponto = :id_ponto";
					
					$stmt = $con->prepare($insert);
					
					$params = array(
									':ds_descricao' => $ds_descricao,
									':ds_local' => $ds_local,
									':ds_latitude' => $ds_latitude,
									':ds_longitude' => $ds_longitude,
									':nu_valor' => $nu_valor,
									':id_midia' =>$id_midia,
									':st_status' => $st_status,
									':ds_observacao' => $ds_observacao,
									':id_ponto' => $id_ponto);
									
					$stmt->execute($params);
					
					echo "Dados alterados com sucesso!"; 
					
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}
			else
			{

				$tamanho = 20000000;

				$error = array();
				$tamanho_mb = $tamanho/1024/1024;
				
				if($ds_foto["size"] > $tamanho) {
					$error[1] = "O arquivo deve ter no máximo ".number_format($tamanho_mb)." mb";
				}

				if (count($error) == 0) {
					// Pega extensão da imagem
					preg_match("/\.(gif|bmp|png|jpg|jpeg|doc|docx|pdf){1}$/i", $ds_foto["name"], $ext);
					// Gera um nome único para o arquivo
					$nome_arquivo = md5(uniqid(time())) . "arquivo." . $ext[1];
					// Caminho de onde ficará o arquivo
					$caminho_arquivo = "/var/www/app.unimidias.com.br/docs_pontos/" . $nome_arquivo;

					$gravar_caminho_arquivo = "docs_pontos/" . $nome_arquivo;

				
					
					// Faz o upload da imagem para seu respectivo caminho
					$moved = move_uploaded_file($ds_foto["tmp_name"],  $caminho_arquivo);

					

					try{
						$con = Conecta::criarConexao();
						$insert = "UPDATE tb_ponto set ds_descricao = :ds_descricao, ds_local = :ds_local, ds_foto = :ds_foto, ds_latitude = :ds_latitude, ds_longitude = :ds_longitude, nu_valor = :nu_valor, id_midia= :id_midia, st_status = :st_status, ds_observacao = :ds_observacao
								   WHERE id_ponto = :id_ponto";
						
						$stmt = $con->prepare($insert);
						
						$params = array(
										':ds_descricao' => $ds_descricao,
										':ds_local' => $ds_local,
										':ds_foto' => $gravar_caminho_arquivo,
										':ds_latitude' => $ds_latitude,
										':ds_longitude' => $ds_longitude,
										':nu_valor' => $nu_valor,
										':id_midia' =>$id_midia,
										':st_status' => $st_status,
										':ds_observacao' => $ds_observacao,
										':id_ponto' => $id_ponto);
										
						$stmt->execute($params);
						
						echo "Dados alterados com sucesso!"; 
						
					}
					catch(exception $e)
					{
						header('HTTP/1.1 500 Internal Server Error');
						print "ERRO:".$e->getMessage();		
					}
				}
				else
				{
					echo "Aconteceu um erro".$error[1];
				}
			}	
			
		}
		public function deletarPonto(array $dados)
		{
            $id_ponto	    = $dados['id_ponto'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "delete from tb_ponto
							WHERE id_ponto=:id_ponto";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':id_ponto' => $id_ponto);
                                
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