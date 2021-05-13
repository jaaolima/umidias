<?php
	require_once("../Classes/Conecta.php");
    class Ponto{
        public function gravarPonto(array $dados)
		{
			$ds_descricao	        = $dados['ds_descricao'];
			$ds_foto                = $_FILES['ds_foto'];
			$ds_latitude    	    = $dados['ds_latitude'];
			$ds_longitude    	    = $dados['ds_longitude'];
			$nu_valor    	        = $dados['nu_valor'];
			$id_midia               = $dados['id_midia'];
			$st_status          	= $dados['st_status'];
			$ds_observacao	        = $dados['ds_observacao'];

			$tamanho = 3000000;

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
				$caminho_arquivo = "../documentos/"/* . $nome_arquivo*/;
				
				// Faz o upload da imagem para seu respectivo caminho
				move_uploaded_file($ds_foto["tmp_name"], $caminho_arquivo);
			}

			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_ponto (ds_descricao, ds_foto, ds_latitude, ds_longitude, nu_valor, id_midia, st_status, ds_observacao)
							VALUES (:ds_descricao, :ds_foto, :ds_latitude, :ds_longitude, :nu_valor, :id_midia, :st_status, :ds_observacao)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_descricao' => $ds_descricao,
								':ds_foto' => $caminho_arquivo,
								':ds_latitude' => $ds_latitude,
								':ds_longitude' => $ds_longitude,
								':nu_valor' => $nu_valor,
								':id_midia' =>$id_midia,
								':st_status' => $st_status,
								':ds_observacao' => $ds_observacao);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}
		public function listarPonto(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_ponto, ds_descricao, nu_valor, id_midia, st_status, ds_observacao
							FROM tb_ponto";
				
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
		function buscarDadosPonto($id_ponto)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_ponto, ds_descricao, ds_latitude, ds_longitude, ds_foto, nu_valor, id_midia, st_status, ds_observacao
						FROM tb_ponto  
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
			$ds_foto                = $_FILES['ds_foto'];
			$ds_latitude    	    = $dados['ds_latitude'];
			$ds_longitude    	    = $dados['ds_longitude'];
			$nu_valor    	        = $dados['nu_valor'];
			$id_midia               = $dados['id_midia'];
			$st_status          	= $dados['st_status'];
			$ds_observacao	        = $dados['ds_observacao'];

			$tamanho = 3000000;

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
				$caminho_arquivo = "../documentos/" . $nome_arquivo;
				
				// Faz o upload da imagem para seu respectivo caminho
				move_uploaded_file($ds_foto["tmp_name"], $caminho_arquivo);
			}

			try{
				$con = Conecta::criarConexao();
				$insert = "UPDATE tb_ponto set ds_descricao = :ds_descricao, ds_foto = :ds_foto, ds_latitude = :ds_latitude, ds_longitude = :ds_longitude, nu_valor = :nu_valor, id_midia= :id_midia, st_status = :st_status, ds_observacao = :ds_observacao
						   WHERE id_ponto = :id_ponto";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':id_ponto' => $id_ponto,
								':ds_descricao' => $ds_descricao,
								':ds_foto' => $caminho_arquivo,
								':ds_latitude' => $ds_latitude,
								':ds_longitude' => $ds_longitude,
								':nu_valor' => $nu_valor,
								':id_midia' =>$id_midia,
								':st_status' => $st_status,
								':ds_observacao' => $ds_observacao);
                                
				$stmt->execute($params);
				
				echo "Dados alterados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
			
		}
		
	}	


?>