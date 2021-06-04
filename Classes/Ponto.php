<?php
	ini_set('display_errors',1);
	error_reporting(E_ALL);
	require_once("Conecta.php");
    class Ponto{

		public function reArrayFiles($file_post) {

			$file_ary = array();
			$file_count = count($file_post['name']);
			$file_keys = array_keys($file_post);
		
			for ($i=0; $i<$file_count; $i++) {
				foreach ($file_keys as $key) {
					$file_ary[$i][$key] = $file_post[$key][$i];
				}
			}
		
			return $file_ary;
		}

        public function gravarPonto(array $dados)
		{
			$id_parceiro	        = $dados['id_parceiro'];
			$ds_local	        	= $dados['ds_local'];
			$ds_descricao	        = $dados['ds_descricao'];
			$ds_foto                = $this->reArrayFiles($_FILES['fotos']);
			$ds_latitude    	    = $dados['ds_latitude'];
			$ds_longitude    	    = $dados['ds_longitude'];
			$nu_valor    	        = $dados['nu_valor']; 
			$id_midia               = $dados['id_midia'];
			$ds_observacao	        = $dados['ds_observacao'];
			$id_material	        = $dados['id_material'];


			
			if($id_midia == 2){
				$id_material = 2;
			}
			$id_periodo	        = $dados['id_periodo'];
			if($id_midia == 2){
				$id_periodo = 2;
			}
			$ds_tamanho	        = $dados['ds_tamanho'];
			if($ds_tamanho === "outro"){
				$ds_outro_tamanho = $dados["ds_outro_tamanho"];
				$ds_tamanho = $ds_outro_tamanho;
			}

				
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_ponto (id_parceiro, ds_descricao, ds_latitude, ds_longitude, nu_valor, id_midia, ds_local, ds_observacao, id_material, id_periodo, ds_tamanho)
							VALUES (:id_parceiro, :ds_descricao, :ds_latitude, :ds_longitude, :nu_valor, :id_midia, :ds_local, :ds_observacao, :id_material, :id_periodo, :ds_tamanho)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':id_parceiro' => $id_parceiro,
								':ds_descricao' => $ds_descricao,
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

				$id_ponto = $con->lastInsertId();

				foreach($ds_foto as $key => $foto)
				{
					$tamanho = 20000000;

					$error = array();
					$tamanho_mb = $tamanho/1024/1024;
					
					if($foto["size"] > $tamanho) {
						$error[1] = "O arquivo deve ter no máximo ".number_format($tamanho_mb)." mb";
					}

					if (count($error) == 0) {
						// Pega extensão da imagem
						preg_match("/\.(gif|bmp|png|jpg|jpeg|doc|docx|pdf){1}$/i", $foto["name"], $ext);
						// Gera um nome único para o arquivo
						$nome_arquivo = md5(uniqid(time())) . "arquivo".$id_ponto.".". $ext[1];
						// Caminho de onde ficará o arquivo
						$caminho_arquivo = "/var/www/app.unimidias.com.br/docs_pontos/" . $nome_arquivo;
		
						$gravar_caminho_arquivo = "docs_pontos/" . $nome_arquivo;
		
					
						
						// Faz o upload da imagem para seu respectivo caminho
						$moved = move_uploaded_file($foto["tmp_name"],  $caminho_arquivo);

						$insert_foto = "insert into rl_ponto_foto(id_ponto, ds_foto) values (:id_ponto, :ds_foto)";

						$stmt_foto = $con->prepare($insert_foto);
				
						$params_foto = array(':id_ponto' => $id_ponto,
										':ds_foto' => $gravar_caminho_arquivo
										);
										
						$stmt_foto->execute($params_foto);

					}
				}
				
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
			$id_midia = $dados["id_midia"];
			$id_busca = $dados["id_busca"];
			if($id_busca === "data"){
				$dt_inicial = $dados["date"];
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_local, f.ds_foto, t.ds_tipo
								FROM tb_ponto p
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								right join rl_ponto_foto f on p.id_ponto=f.id_ponto
								where p.id_midia=:id_midia 
								and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)
								and p.id_ponto not in (select id_ponto from rl_alugado where ':dt_inicial' between dt_inicial and dt_final)";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_midia' => $id_midia,
									':dt_inicial' => $dt_inicial);
					
					$stmt->execute($params);
	
					return $stmt;
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}
			if($id_busca === ""){
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_local, f.ds_foto, t.ds_tipo
								FROM tb_ponto p
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								right join rl_ponto_foto f on p.id_ponto=f.id_ponto
								where p.id_midia=:id_midia and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)";
					
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
			if($id_busca === "quente"){
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_local, f.ds_foto, t.ds_tipo
								FROM tb_ponto p
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								right join rl_ponto_foto f on p.id_ponto=f.id_ponto
								where p.id_midia=:id_midia and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)";
					
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
			if($id_busca === "disponivel"){
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_local, f.ds_foto, t.ds_tipo
								FROM tb_ponto p
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								right join rl_ponto_foto f on p.id_ponto=f.id_ponto
								where p.id_midia=:id_midia and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)";
					
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
			if($id_busca === "busca"){
				$busca = $dados["busca"];
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_local, f.ds_foto, t.ds_tipo
								FROM tb_ponto p
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								right join rl_ponto_foto f on p.id_ponto=f.id_ponto
								where p.id_midia=:id_midia and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto) and ds_local like '%".$busca."%'";
					
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
				
				$select = "SELECT a.id_ponto, nu_valor, t.id_midia, ds_local, t.ds_tipo, dt_inicial, dt_final, f.ds_foto
							FROM rl_alugado a
							right join rl_ponto_foto f on a.id_ponto=f.id_ponto
							right join tb_ponto p on a.id_ponto=p.id_ponto
							inner join tb_tipo_midia t on p.id_midia=t.id_midia
							where id_usuario=:id_usuario
							and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where a.id_ponto = pf.id_ponto)";
				
				$stmt = $con->prepare($select); 
				$params = array(':id_usuario' => $id_usuario);
				
				$stmt->execute($params);

				return $stmt;
				
					
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}
		public function listarMeusPontosParceiro($id_usuario)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT p.id_ponto, nu_valor, t.id_midia, ds_local, t.ds_tipo, f.ds_foto, ds_descricao, nu_valor, ds_observacao, id_parceiro
							FROM tb_ponto p
							right join rl_ponto_foto f on p.id_ponto=f.id_ponto
							inner join tb_tipo_midia t on p.id_midia=t.id_midia
							where id_parceiro=:id_usuario
							and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)";
				
				$stmt = $con->prepare($select); 
				$params = array(':id_usuario' => $id_usuario);
				
				$stmt->execute($params);

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
				
				$select = "SELECT p.id_ponto, nu_valor, t.id_midia, ds_local, t.ds_tipo, f.ds_foto
							FROM tb_ponto p
							right join rl_ponto_foto f on p.id_ponto=f.id_ponto
							inner join tb_tipo_midia t on p.id_midia=t.id_midia
							where f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)";
				
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
		public function dadosTotalContratadas()
		{
			$data = date('Y-m-d');
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT count(id_ponto) as id_ponto
							FROM tb_ponto 
							where id_ponto not in (select id_ponto from rl_alugado where ':dt_hoje' between dt_inicial and dt_final)";
				
				$stmt = $con->prepare($select); 
				$params = array(':dt_hoje' => $data);
				$stmt->execute($params);

				return $stmt->fetch();
				
					
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}
		public function dadosTotalPendentes()
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT count(id_ponto) as id_ponto
							FROM tb_ponto 
							where id_ponto in (select id_ponto from rl_alugado)";
				
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
		public function dadosTotalReservadas()
		{
			$data = date('Y-m-d');
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT count(id_ponto) as id_ponto
							FROM tb_ponto 
							where id_ponto in (select id_ponto from rl_alugado where :dt_hoje > dt_final)";
				
				$stmt = $con->prepare($select); 
				$params = array(':dt_hoje' => $data);
				$stmt->execute($params);

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
							p.id_ponto, ds_descricao, ds_latitude, ds_longitude, nu_valor, ds_tipo, ds_observacao, ds_local, ds_tamanho,  p.id_midia, id_material, id_periodo, id_parceiro, nu_valor
						FROM tb_ponto p
						inner join tb_tipo_midia t on p.id_midia=t.id_midia
						WHERE p.id_ponto = :id_ponto";

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
		function BuscarDadosPontoAlugado($id_ponto)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							a.id_ponto, ds_descricao, ds_latitude, ds_longitude, nu_valor, ds_tipo, ds_observacao, ds_local, ds_tamanho,  p.id_midia, id_material, id_periodo, id_parceiro, dt_inicial, dt_final
						FROM rl_alugado a
						right join tb_ponto p on a.id_ponto=p.id_ponto
						inner join tb_tipo_midia t on p.id_midia=t.id_midia
						WHERE a.id_ponto = :id_ponto";

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
			$id_parceiro	        = $dados['id_parceiro'];
			$ds_local	        	= $dados['ds_local'];
			$ds_descricao	        = $dados['ds_descricao'];

			if(!empty($_FILES["size"]["name"])){
				$ds_foto                = $this->reArrayFiles($_FILES['fotos']);
			}

			$ds_latitude    	    = $dados['ds_latitude'];
			$ds_longitude    	    = $dados['ds_longitude'];
			$nu_valor    	        = $dados['nu_valor']; 
			$id_midia               = $dados['id_midia'];
			$ds_observacao	        = $dados['ds_observacao'];
			$id_material	        = $dados['id_material'];


			
			if($id_midia == 2){
				$id_material = 2;
			}
			$id_periodo	        = $dados['id_periodo'];
			if($id_midia == 2){
				$id_periodo = 2;
			}
			$ds_tamanho	        = $dados['ds_tamanho'];
			if($ds_tamanho === "outro"){
				$ds_outro_tamanho = $dados["ds_outro_tamanho"];
				$ds_tamanho = $ds_outro_tamanho;
			}

				
			try{
				$con = Conecta::criarConexao();
				$insert = "UPDATE tb_ponto set id_parceiro = :id_parceiro, ds_descricao = :ds_descricao, ds_local = :ds_local, ds_latitude = :ds_latitude, ds_longitude = :ds_longitude, nu_valor = :nu_valor, id_midia= :id_midia, ds_observacao = :ds_observacao, id_material = :id_material, id_periodo = :id_periodo, ds_tamanho = :ds_tamanho
							   WHERE id_ponto = :id_ponto";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':id_parceiro' => $id_parceiro,
								':ds_descricao' => $ds_descricao,
								':ds_local' => $ds_local,
								':ds_latitude' => $ds_latitude,
								':ds_longitude' => $ds_longitude,
								':nu_valor' => $nu_valor,
								':id_midia' =>$id_midia,
								':ds_observacao' => $ds_observacao,
								':id_material' => $id_material,
								':id_periodo' => $id_periodo,
								':ds_tamanho' => $ds_tamanho,
								':id_ponto' => $id_ponto);
								
				$stmt->execute($params);

				if(!isset($ds_foto)){
					foreach($ds_foto as $key => $foto)
					{
						$tamanho = 20000000;

						$error = array();
						$tamanho_mb = $tamanho/1024/1024;
						
						if($foto["size"] > $tamanho) {
							$error[1] = "O arquivo deve ter no máximo ".number_format($tamanho_mb)." mb";
						}

						if (count($error) == 0) {
							// Pega extensão da imagem
							preg_match("/\.(gif|bmp|png|jpg|jpeg|doc|docx|pdf){1}$/i", $foto["name"], $ext);
							// Gera um nome único para o arquivo
							$nome_arquivo = md5(uniqid(time())) . "arquivo".$id_ponto.".". $ext[1];
							// Caminho de onde ficará o arquivo
							$caminho_arquivo = "/var/www/app.unimidias.com.br/docs_pontos/" . $nome_arquivo;
			
							$gravar_caminho_arquivo = "docs_pontos/" . $nome_arquivo;
			
						
							
							// Faz o upload da imagem para seu respectivo caminho
							$moved = move_uploaded_file($foto["tmp_name"],  $caminho_arquivo);

							$insert_foto = "insert into rl_ponto_foto(id_ponto, ds_foto) values (:id_ponto, :ds_foto)";

							$stmt_foto = $con->prepare($insert_foto);
					
							$params_foto = array(':id_ponto' => $id_ponto,
											':ds_foto' => $gravar_caminho_arquivo
											);
											
							$stmt_foto->execute($params_foto);

						}
					}
				}
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
				print "ERRO:".$e->getMessage();		
			}
			
			

			
		}
		function BuscarFotoPonto($id_ponto) 
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT id_ponto_foto, ds_foto, id_ponto
							from rl_ponto_foto
							where id_ponto=:id_ponto";

				$stmt = $con->prepare($select);
			   	$params = array(':id_ponto' => $id_ponto);
			   
			    $stmt->execute($params);

			    return  $stmt;
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
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
		public function excluirFotoPonto(array $dados)
		{
            $id_ponto_foto	    = $dados['id_ponto_foto'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "delete from rl_ponto_foto
							WHERE id_ponto_foto=:id_ponto_foto";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':id_ponto_foto' => $id_ponto_foto);
                                
				$stmt->execute($params);
				
				echo "Deletado com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}
		public function listarOptionsLocal($id_midia)
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT ds_local
							FROM tb_ponto 
							where id_midia = :id_midia";
				$stmt = $con->prepare($select);
				$params = array(':id_midia' => $id_midia);
				$stmt->execute($params);

				$options = "";

				while($dados = $stmt->fetch())
				{
					$options.= "<option>".$dados['ds_local']."</option>";

				}
				return $options;

			}
			catch(exception $e)
			{
			header('HTTP/1.1 500 Internal Server Error');
			print $e->getMessage();
			}
		}
		public function alugar(array $dados)
		{

			$id_usuario	    = $dados['id_usuario'];
			$id_ponto	    = $dados['id_ponto'];
			$ds_arte	    = $dados['ds_arte'];
			$id_midia	    = $dados['id_midia'];
			if($id_midia == 2){

			
				$dt_inicial	    = $dados['dt_inicial'];
				$dt_final	    = $dados['dt_final']; 
				

				try{
					$con = Conecta::criarConexao();
					$insert = "INSERT into rl_alugado (id_usuario, id_ponto, dt_inicial, dt_final, ds_arte)
								VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final, :ds_arte)";
					
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
				$id_material    = $dados['id_material'];
				$bisemanas = $_POST["bisemana"];
				$listaCheckbox = explode(',', $bisemanas);

				$id_bisemana= '';
				for ($i=0; $i < count($listaCheckbox); $i++) { 
					
						$id_bisemana = $listaCheckbox[$i];
						$con = Conecta::criarConexao();
						$select = "SELECT dt_inicial, dt_final 
									from tb_bisemana 
									where id_bisemana = :id_bisemana";
						
						$stmt = $con->prepare($select);
						
						$params = array(':id_bisemana' => $id_bisemana); 
										
						$stmt->execute($params);
						$dados = $stmt->fetch();
						$dt_inicial = $dados["dt_inicial"];
						$dt_final = $dados["dt_final"];


					try{
						$con = Conecta::criarConexao();
						$insert = "INSERT into rl_alugado (id_usuario, id_ponto, dt_inicial, dt_final, ds_arte, id_material)
									VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final, :ds_arte, :id_material)";
						
						$stmt = $con->prepare($insert);
						
						$params = array(':id_usuario' => $id_usuario,
										':id_ponto' => $id_ponto,
										':dt_inicial' => $dt_inicial,
										':dt_final' => $dt_final,
										':ds_arte' => $ds_arte,
										':id_material' => $id_material);
										
						$stmt->execute($params);
					}
					catch(exception $e) 
					{
						header('HTTP/1.1 500 Internal Server Error');
						print "ERRO:".$e->getMessage();		
					} 	
				}
			}
        }
		
	}	


?>