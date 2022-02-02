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
			$id_estado	        	= $dados['id_estado'];
			$id_cidade	        	= $dados['id_cidade'];
			$ds_bairro	        	= $dados['ds_bairro'];
			$ds_sentido	        	= $dados['ds_sentido'];
			// $ds_descricao	        = $dados['ds_descricao'];
			$ds_foto                = $this->reArrayFiles($_FILES['fotos']);
			$ds_latitude    	    = $dados['ds_latitude'];
			$ds_longitude    	    = $dados['ds_longitude'];
			$nu_valor    	        = $dados['nu_valor']; 
			$id_midia               = $dados['id_midia'];
			// $ds_observacao	        = $dados['ds_observacao'];
			if(isset($dados['id_material'])){
				$listaCheckbox = $dados['id_material'];

				$id_material= '';

				for ($i=0; $i < count($listaCheckbox); $i++) { 
					
					if($listaCheckbox[0] == $listaCheckbox[$i]){
						$id_material .= $listaCheckbox[$i];
					}
					else{
						$id_material .= "," . $listaCheckbox[$i];
					}
					
				}
				
			}
			else{
				$id_material = NULL;
			};
			$dt_ponto = date("Y-m-d");


			
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
				$insert = "INSERT into tb_ponto (id_parceiro, ds_latitude, ds_longitude, nu_valor, id_midia, ds_bairro,id_material, id_periodo, ds_tamanho, dt_ponto, id_estado, id_cidade, ds_sentido)
							VALUES (:id_parceiro,  :ds_latitude, :ds_longitude, :nu_valor, :id_midia, :ds_bairro, :id_material, :id_periodo, :ds_tamanho, :dt_ponto, :id_estado, :id_cidade, :ds_sentido)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':id_parceiro' => $id_parceiro,
								':ds_latitude' => $ds_latitude,
								':ds_longitude' => $ds_longitude,
								':nu_valor' => $nu_valor,
								':id_midia' =>$id_midia,
								':ds_bairro' => $ds_bairro,
								':id_material' => $id_material,
								':id_periodo' => $id_periodo,
								':ds_tamanho' => $ds_tamanho,
								':dt_ponto' => $dt_ponto,
								':id_estado' => $id_estado,
								':id_cidade' => $id_cidade,
								':ds_sentido' => $ds_sentido
							);
								
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

				if($id_periodo == 1){
					//adicionar bisemanas indisponiveis
					if(isset($dados['bisemana'])){
						$listaCheckboxBisemana = $dados['bisemana'];
		
						$id_bisemana= '';
		
						for ($i=0; $i < count($listaCheckboxBisemana); $i++) { 

							try{
								$con = Conecta::criarConexao();
		
								//pesquisar datas bisemanas por fora
								$selectBisemana = "SELECT dt_inicial, dt_final
										from tb_bisemana
										where id_bisemana = :id_bisemana";
							
								$stmtBisemana = $con->prepare($selectBisemana); 
								$params = array(':id_bisemana' => $listaCheckboxBisemana[$i]);
								
								$stmtBisemana->execute($params);
				
								$dados = $stmtBisemana->fetch();

								//inserir alugado por fora
								$insert = "INSERT into rl_alugado (id_usuario, id_ponto, dt_inicial, dt_final)
											VALUES (0, :id_ponto, :dt_inicial, :dt_final)";
								
								$stmt = $con->prepare($insert);
								
								$params = array(
												':id_ponto' => $id_ponto,
												':dt_inicial' => $dados["dt_inicial"],
												':dt_final' => $dados["dt_final"]);
												
								$stmt->execute($params);
		
							}
							catch(exception $e)
							{
								header('HTTP/1.1 500 Internal Server Error');
								print "ERRO:".$e->getMessage();		
							}		
						}
						
					}
					else{
						$id_bisemana = NULL;
					};
				}
				if($id_periodo == 2){
					//adicionar meses indisponiveis
					if(isset($dados['mes'])){
						$listaCheckboxmes = $dados['mes'];
		
						$id_mes= '';
		
						for ($i=0; $i < count($listaCheckboxmes); $i++) { 

							try{
								$con = Conecta::criarConexao();
		
								//pesquisar datas meses por fora
								$selectmes = "SELECT dt_inicial, dt_final
										from tb_mes
										where id_mes = :id_mes";
							
								$stmtmes = $con->prepare($selectmes); 
								$params = array(':id_mes' => $listaCheckboxmes[$i]);
								
								$stmtmes->execute($params);
				
								$dados = $stmtmes->fetch();

								//inserir alugado por fora
								$insert = "INSERT into rl_alugado (id_usuario, id_ponto, dt_inicial, dt_final)
											VALUES (0, :id_ponto, :dt_inicial, :dt_final)";
								
								$stmt = $con->prepare($insert);
								
								$params = array(
												':id_ponto' => $id_ponto,
												':dt_inicial' => $dados["dt_inicial"],
												':dt_final' => $dados["dt_final"]);
												
								$stmt->execute($params);
		
							}
							catch(exception $e)
							{
								header('HTTP/1.1 500 Internal Server Error');
								print "ERRO:".$e->getMessage();		
							}		
						}
						
					}
					else{
						$id_mes = NULL;
					};
				}
				

			
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
				print "ERRO:".$e->getMessage();		
			}
			
			

			
		}

		public function listarPontoTipo($id_midia)   
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_bairro, f.ds_foto, t.ds_tipo, ds_latitude, ds_longitude
							FROM tb_ponto p
							inner join tb_tipo_midia t on p.id_midia=t.id_midia
							right join rl_ponto_foto f on p.id_ponto=f.id_ponto
							where p.id_midia=:id_midia 
							and p.st_status = 'A'
							and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)";
				
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
		public function listarPonto(array $dados)   
		{
			$id_midia = $dados["id_midia"];
			$id_busca = $dados["id_busca"];
			if($id_busca === "data"){
				$dt_inicial = str_replace('-', '', $dados['data']);
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, p.st_status, ds_observacao, ds_bairro, (select min(ds_foto) from rl_ponto_foto f where p.id_ponto=f.id_ponto) as ds_foto, t.ds_tipo, ds_latitude, ds_longitude
					FROM tb_ponto p
					inner join tb_tipo_midia t on p.id_midia=t.id_midia
					right join rl_ponto_foto f on p.id_ponto=f.id_ponto
					where p.id_midia=:id_midia
					and p.st_status = 'A'
					and p.id_ponto not in (select al.id_ponto from rl_alugado al 
					where al.id_ponto=p.id_ponto and al.dt_final >= :dt_inicial and :dt_inicial between al.dt_inicial and al.dt_final)";
					
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
			if($id_busca === "bisemana"){
				$bisemana = $dados["bisemana"];
				$id_midia = $dados["id_midia"];
				$datasBisemana = "";
				
				for ($i=0; $i < count($bisemana); $i++) { 
					try{
						$con = Conecta::criarConexao();

						$selectBisemana = "SELECT dt_inicial, dt_final
								from tb_bisemana
								where id_bisemana = :id_bisemana";
					
						$stmtBisemana = $con->prepare($selectBisemana); 
						$params = array(':id_bisemana' => $bisemana[$i]);
						
						$stmtBisemana->execute($params);
		
						$dados = $stmtBisemana->fetch();

						$dataInicial = str_replace('-', '', $dados["dt_inicial"]);
						$dataFinal = str_replace('-', '',$dados["dt_final"]);

						// if($bisemana[$i] == count($bisemana)){
						// 	$datasBisemana .= " or ".$dados["dt_inicial"]." and ".$dados["dt_final"];
						// }
						if($bisemana[$i] == $bisemana[0]){
							$datasBisemana .= "(dt_inicial = ".$dataInicial." and dt_final = ".$dataFinal.")";
						}
						else{
							$datasBisemana .= " or (dt_inicial = ".$dataInicial." and dt_final = ".$dataFinal.")";
						}
					}
					catch(exception $e)
					{
						header('HTTP/1.1 500 Internal Server Error');
						print "ERRO:".$e->getMessage();		
					}	
				}
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_bairro, f.ds_foto, t.ds_tipo, ds_latitude, ds_longitude
								FROM tb_ponto p
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								right join rl_ponto_foto f on p.id_ponto=f.id_ponto
								where p.id_midia=:id_midia 
								and p.st_status = 'A'
								and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)
								and p.id_ponto not in (select id_ponto from rl_alugado where  ".$datasBisemana.")";
					
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
			if($id_busca === ""){
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_bairro, f.ds_foto, t.ds_tipo, ds_latitude, ds_longitude
								FROM tb_ponto p
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								right join rl_ponto_foto f on p.id_ponto=f.id_ponto
								where p.id_midia=:id_midia 
								and p.st_status = 'A'
								and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)";
					
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
					
					$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_bairro, f.ds_foto, t.ds_tipo, ds_latitude, ds_longitude
								FROM tb_ponto p
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								right join rl_ponto_foto f on p.id_ponto=f.id_ponto
								where p.id_midia=:id_midia 
								and p.st_status = 'A'
								and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)";
					
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
					
					$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_bairro, f.ds_foto, t.ds_tipo, ds_latitude, ds_longitude
								FROM tb_ponto p
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								right join rl_ponto_foto f on p.id_ponto=f.id_ponto
								where p.id_midia=:id_midia 
								and p.st_status = 'A'
								and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)";
					
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
					
					$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_bairro, f.ds_foto, t.ds_tipo, ds_latitude, ds_longitude
								FROM tb_ponto p
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								right join rl_ponto_foto f on p.id_ponto=f.id_ponto
								where p.id_midia=:id_midia 
								and p.st_status = 'A'
								and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto) and ds_bairro like '%".$busca."%'";
					
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
		public function listarPontoProximos($latitude, $longitude)  
		{
			$data = date('Y-m-d');
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_bairro, f.ds_foto, t.ds_tipo, t.ds_tipo,
							(6371 * acos(
							cos( radians(:latitude) )
							* cos( radians( ds_latitude ) )
							* cos( radians( ds_longitude ) - radians(:longitude) )
							+ sin( radians(:latitude) )
							* sin( radians( ds_latitude ) ) 
							)
							) AS distancia
							FROM tb_ponto p
							inner join tb_tipo_midia t on p.id_midia=t.id_midia
							right join rl_ponto_foto f on p.id_ponto=f.id_ponto
							where f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)
							and p.st_status = 'A'
							HAVING distancia < 25
							ORDER BY distancia ASC
							LIMIT 5";
				
				$stmt = $con->prepare($select); 
				$params = array(':hoje' => $data,
								':latitude' => $latitude,
								':longitude' => $longitude); 
				$stmt->execute($params);

				return $stmt;
				
					
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
				print "ERRO:".$e->getMessage();		
			}


		
		}
		public function listarPontoQuentes()  
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT p.id_ponto, ds_descricao, nu_valor, p.id_midia, p.st_status, ds_observacao, ds_bairro, f.ds_foto, t.ds_tipo, t.ds_tipo
							FROM tb_ponto p
							inner join tb_tipo_midia t on p.id_midia=t.id_midia
							right join rl_ponto_foto f on p.id_ponto=f.id_ponto
							where f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)
							and p.st_status = 'A'
							LIMIT 5";
				
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
		public function listarTodosPonto()
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_ponto, ds_descricao, nu_valor, p.id_midia, st_status, ds_observacao, ds_bairro, ds_foto, t.ds_tipo, ds_sentido, e.ds_uf, c.ds_nome
							FROM tb_ponto p
							left join tb_tipo_midia t on p.id_midia=t.id_midia
							left join cidades c on p.id_cidade=c.id_cidade
							left join estados e on p.id_estado=e.id_estado";
				
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
		public function listarPontoMidia(array $dados)
		{
			$id_midia = $dados["id_midia"];
			$tp_busca = $dados["tp_busca"];
			if($tp_busca === "regiao"){
				$busca = $dados["busca"];
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT a.id_ponto, nu_valor_alugado, t.id_midia, ds_bairro, t.ds_tipo, dt_inicial, dt_final, f.ds_foto, a.id_alugado
								FROM rl_alugado a
								right join rl_ponto_foto f on a.id_ponto=f.id_ponto
								right join tb_ponto p on a.id_ponto=p.id_ponto
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								where p.id_midia = :id_midia
								and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where a.id_ponto = pf.id_ponto) and ds_bairro like '%".$busca."%'";
					
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
			if($tp_busca === "valor"){
				$valor_inicial = str_replace(",", "", str_replace("R$ ", "", $dados["valor_inicial"]));
				$valor_final =  str_replace(",", "", str_replace("R$ ", "", $dados["valor_final"]));

				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT a.id_ponto, nu_valor_alugado, t.id_midia, ds_bairro, t.ds_tipo, dt_inicial, dt_final, f.ds_foto, a.id_alugado
								FROM rl_alugado a
								right join rl_ponto_foto f on a.id_ponto=f.id_ponto
								right join tb_ponto p on a.id_ponto=p.id_ponto
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								where p.id_midia = :id_midia
								and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where a.id_ponto = pf.id_ponto)
								and nu_valor_alugado between ".$valor_inicial." and ".$valor_final." ";
					
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
			if($tp_busca === ""){ 
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT a.id_ponto, nu_valor_alugado, t.id_midia, ds_bairro, t.ds_tipo, dt_inicial, dt_final, f.ds_foto, a.id_alugado
								FROM rl_alugado a
								right join rl_ponto_foto f on a.id_ponto=f.id_ponto
								right join tb_ponto p on a.id_ponto=p.id_ponto
								inner join tb_tipo_midia t on p.id_midia=t.id_midia
								where p.id_midia = :id_midia
								and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where a.id_ponto = pf.id_ponto)";
					
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
		public function listarMeusPontos($id_usuario)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT a.id_ponto, nu_valor, t.id_midia, ds_bairro, t.ds_tipo, dt_inicial, dt_final, f.ds_foto, nu_valor_alugado, id_alugado, a.id_status_midia, s.ds_status
							FROM rl_alugado a
							right join rl_ponto_foto f on a.id_ponto=f.id_ponto
							right join tb_status_midia s on a.id_status_midia=s.id_status
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

		public function listarMinhasMidiasPendentes($id_usuario)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT a.id_ponto, nu_valor, t.id_midia, ds_bairro, t.ds_tipo, dt_inicial, dt_final, f.ds_foto, nu_valor_alugado, id_alugado
							FROM rl_alugado a
							right join rl_ponto_foto f on a.id_ponto=f.id_ponto
							right join tb_ponto p on a.id_ponto=p.id_ponto
							inner join tb_tipo_midia t on p.id_midia=t.id_midia
							where id_usuario=:id_usuario
							and a.st_status = 'A'
							and a.id_status_midia = 1
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

		public function listarMeusPontosParceiro($id_parceiro)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT p.id_ponto, nu_valor, t.id_midia, ds_bairro, t.ds_tipo, f.ds_foto, ds_descricao, nu_valor, ds_observacao, id_parceiro, p.st_status
							FROM tb_ponto p
							right join rl_ponto_foto f on p.id_ponto=f.id_ponto
							inner join tb_tipo_midia t on p.id_midia=t.id_midia
							where id_parceiro=:id_parceiro
							and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)";
				
				$stmt = $con->prepare($select); 
				$params = array(':id_parceiro' => $id_parceiro);
				
				$stmt->execute($params);

				return $stmt;
				
					
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}
		public function listarMeusPontosAlugadosParceiro($id_parceiro)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT p.id_ponto, nu_valor, t.id_midia, ds_bairro, t.ds_tipo, f.ds_foto, ds_descricao,  ds_observacao, u.ds_nome, a.dt_inicial, a.dt_final, id_status_midia, s.ds_status
							FROM rl_alugado a
							right join tb_ponto p on a.id_ponto=p.id_ponto
							right join rl_ponto_foto f on p.id_ponto=f.id_ponto
							inner join tb_tipo_midia t on p.id_midia=t.id_midia
							inner join tb_usuario u on a.id_usuario=u.id_usuario
							left join tb_status_midia s on a.id_status_midia=s.id_status
							where p.id_parceiro=:id_parceiro
							and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where p.id_ponto = pf.id_ponto)
							order by a.dt_inicial
							limit 3
							";
				
				$stmt = $con->prepare($select); 
				$params = array(':id_parceiro' => $id_parceiro);
				
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
				
				$select = "SELECT p.id_ponto, nu_valor, t.id_midia, ds_bairro, t.ds_tipo, f.ds_foto
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
							FROM tb_ponto 
							";
				
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
			
			function mes(){	
				$mes = date('Y-m-d', strtotime('-1 month'));
				$data = date('Y-m-d');
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_ponto) as id_ponto
								FROM tb_ponto 
								where dt_ponto <= :mes and id_ponto not in (select id_ponto from rl_alugado where :dt_hoje between dt_inicial and dt_final)";
					
					$stmt = $con->prepare($select); 
					$params = array(':mes' => $mes,
									':dt_hoje' => $data);

					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}
			function semana(){	
				$semana = date('Y-m-d', strtotime('-7 days'));
				$data = date('Y-m-d');
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_ponto) as id_ponto
								FROM tb_ponto 
								where dt_ponto <= :semana and id_ponto not in (select id_ponto from rl_alugado where :dt_hoje between dt_inicial and dt_final)";
					
					$stmt = $con->prepare($select); 
					$params = array(':semana' => $semana,
									':dt_hoje' => $data);
					
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}

			function atual(){	
				$data = date('Y-m-d');
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_ponto) as id_ponto
								FROM tb_ponto 
								where id_ponto not in (select id_ponto from rl_alugado where :dt_hoje between dt_inicial and dt_final)";
					
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

			return array(mes(), semana(), atual());
		}
		
		public function dadosTotalPendentes()
		{
			
			function mesPendentes(){	
				$mes = date('Y-m-d', strtotime('-1 month'));
				
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_ponto) as id_ponto
								FROM tb_ponto 
								where dt_ponto <= :mes and id_ponto in (select id_ponto from rl_alugado)";
					
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
			function semanaPendentes(){	
				$semana = date('Y-m-d', strtotime('-7 days'));
				
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_ponto) as id_ponto
								FROM tb_ponto 
								where dt_ponto <= :semana and id_ponto in (select id_ponto from rl_alugado)";
					
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

			function atualPendentes(){	
				
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

			return array(mesPendentes(), semanaPendentes(), atualPendentes());
		}
		public function dadosTotalReservadas()
		{
			
			function mesReservados(){	
				$mes = date('Y-m-d', strtotime('-1 month'));
				$data = date('Y-m-d');
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_ponto) as id_ponto
								FROM tb_ponto 
								where dt_ponto <= :mes and id_ponto in (select id_ponto from rl_alugado where :dt_hoje > dt_final)";
					
					$stmt = $con->prepare($select); 
					$params = array(':mes' => $mes,
									':dt_hoje' => $data);

					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}
			function semanaReservados(){	
				$semana = date('Y-m-d', strtotime('-7 days'));
				$data = date('Y-m-d');
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_ponto) as id_ponto
								FROM tb_ponto 
								where dt_ponto <= :semana and id_ponto in (select id_ponto from rl_alugado where :dt_hoje > dt_final)";
					
					$stmt = $con->prepare($select); 
					$params = array(':semana' => $semana,
									':dt_hoje' => $data);
					
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}

			function atualReservados(){	
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

			return array(mesReservados(), semanaReservados(), atualReservados());
		}
		public function graficoPontoParceiroAlugados($id_parceiro)
		{
			
			function Janeiro($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_alugado) as id_alugado
								FROM rl_alugado
								where month(dt_inicial) = 1
								and year(dt_inicial) = year(now())
								and id_usuario <> 0";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}

			function Fervereiro($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_alugado) as id_alugado
								FROM rl_alugado
								where month(dt_inicial) = 2
								and year(dt_inicial) = year(now())
								and id_usuario <> 0";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}

			function Março($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_alugado) as id_alugado
								FROM rl_alugado
								where month(dt_inicial) = 3
								and year(dt_inicial) = year(now())
								and id_usuario <> 0";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}

			function Abril($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_alugado) as id_alugado
								FROM rl_alugado
								where month(dt_inicial) = 4
								and year(dt_inicial) = year(now())
								and id_usuario <> 0";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}


			function Maio($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_alugado) as id_alugado
								FROM rl_alugado
								where month(dt_inicial) = 5
								and year(dt_inicial) = year(now())
								and id_usuario <> 0";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}


			function Junho($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_alugado) as id_alugado
								FROM rl_alugado
								where month(dt_inicial) = 6
								and year(dt_inicial) = year(now())
								and id_usuario <> 0";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}

			function Julho($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_alugado) as id_alugado
								FROM rl_alugado
								where month(dt_inicial) = 7
								and year(dt_inicial) = year(now())
								and id_usuario <> 0";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}

			function Agosto($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_alugado) as id_alugado
								FROM rl_alugado
								where month(dt_inicial) = 8
								and year(dt_inicial) = year(now())
								and id_usuario <> 0";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}

			function Setembro($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_alugado) as id_alugado
								FROM rl_alugado
								where month(dt_inicial) = 9
								and year(dt_inicial) = year(now())
								and id_usuario <> 0";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}

			function Outubro($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_alugado) as id_alugado
								FROM rl_alugado
								where month(dt_inicial) = 10
								and year(dt_inicial) = year(now())
								and id_usuario <> 0";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}

			function Novembro($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_alugado) as id_alugado
								FROM rl_alugado
								where month(dt_inicial) = 11
								and year(dt_inicial) = year(now())
								and id_usuario <> 0";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}


			function Dezembro($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_alugado) as id_alugado
								FROM rl_alugado
								where month(dt_inicial) = 12
								and year(dt_inicial) = year(now())
								and id_usuario <> 0";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}



			return array(Janeiro($id_parceiro), Fervereiro($id_parceiro), Março($id_parceiro), Abril($id_parceiro), Maio($id_parceiro), Junho($id_parceiro), Julho($id_parceiro), Agosto($id_parceiro), Setembro($id_parceiro), Outubro($id_parceiro), Novembro($id_parceiro), Dezembro($id_parceiro));
		}
		public function graficoPontoParceiroFront($id_parceiro)
		{
			
			function AtivadosFront($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_ponto) as id_ponto
								FROM tb_ponto
								where id_midia = 2 and st_status = 'A' and id_parceiro=:id_parceiro";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}
			function DesativadosFront($id_parceiro){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_ponto) as id_ponto
								FROM tb_ponto
								where id_midia = 2 and st_status = 'D' and id_parceiro=:id_parceiro";
					
					$stmt = $con->prepare($select); 
					$params = array(':id_parceiro' => $id_parceiro);
					$stmt->execute($params);

					return $stmt->fetch();
					
						
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
			}

			return array(AtivadosFront($id_parceiro), DesativadosFront($id_parceiro));
		}
		function BuscarDadosPonto($id_ponto)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							p.id_ponto, ds_descricao, ds_latitude, ds_longitude, nu_valor, ds_tipo, ds_observacao, ds_bairro, ds_tamanho,  p.id_midia, id_material, id_periodo, id_parceiro, nu_valor, st_status, e.ds_uf, c.ds_nome, ds_sentido, p.id_estado, p.id_cidade
						FROM tb_ponto p
						inner join tb_tipo_midia t on p.id_midia=t.id_midia
						left join cidades c on p.id_cidade=c.id_cidade
						left join estados e on p.id_estado=e.id_estado
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
		function BuscarDadosPontoAlugado($id_alugado) 
		{
			try{
				$con = Conecta::criarConexao(); 
				
				
				$select = "SELECT 
							a.id_ponto, id_alugado, ds_descricao, ds_latitude, ds_longitude, nu_valor, ds_tipo, ds_observacao, ds_bairro, ds_tamanho,  p.id_midia, a.id_material, id_periodo, id_parceiro, dt_inicial, dt_final, nu_valor_alugado, id_status_midia, s.ds_status, ds_arte, a.st_status, e.ds_uf, c.ds_nome, ds_sentido
						FROM rl_alugado a
						right join tb_ponto p on a.id_ponto=p.id_ponto
						inner join tb_tipo_midia t on p.id_midia=t.id_midia
						left join tb_status_midia s on a.id_status_midia=s.id_status
						left join cidades c on p.id_cidade=c.id_cidade
						left join estados e on p.id_estado=e.id_estado
						WHERE a.id_alugado = :id_alugado";

				$stmt = $con->prepare($select);
			   	$params = array(':id_alugado' => $id_alugado);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}

		function BuscarFinancasPonto($id_usuario, $id_midia) 
		{
			try{
				$con = Conecta::criarConexao(); 
				
				
				$select = "SELECT 
							a.id_ponto, nu_valor_alugado
						FROM rl_alugado a
						right join tb_ponto p on a.id_ponto = p.id_ponto
						WHERE a.id_usuario = :id_usuario and p.id_midia=:id_midia";

				$stmt = $con->prepare($select);
			   	$params = array(':id_usuario' => $id_usuario,
								':id_midia' => $id_midia);
			   
			    $stmt->execute($params);

				return $stmt;

				
			}	
			catch(Exception $e) 
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}

		function BuscarFinancasPontoParceiro($id_parceiro, $id_midia) 
		{
			try{
				$con = Conecta::criarConexao(); 
				
				
				$select = "SELECT 
							a.id_ponto, nu_valor_alugado
						FROM rl_alugado a
						right join tb_ponto p on a.id_ponto = p.id_ponto
						WHERE p.id_parceiro = :id_parceiro and p.id_midia=:id_midia";

				$stmt = $con->prepare($select);
			   	$params = array(':id_parceiro' => $id_parceiro,
								':id_midia' => $id_midia);
			   
			    $stmt->execute($params);

				return $stmt;

				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}

		function buscarDadosDesseMes($id_parceiro) 
		{
			function outdoor($id_parceiro){
				try{
					$con = Conecta::criarConexao(); 
					
					
					$select = "SELECT 
								count(id_alugado) as qtd
							FROM rl_alugado a
							right join tb_ponto p on a.id_ponto = p.id_ponto
							WHERE p.id_parceiro = :id_parceiro 
							and month(dt_inicial) = month(now())
							and a.id_status_midia = 7
							and p.id_midia = 1";
	
					$stmt = $con->prepare($select);
					   $params = array(':id_parceiro' => $id_parceiro);
				   
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

			function Front($id_parceiro){
				try{
					$con = Conecta::criarConexao(); 
					
					
					$select = "SELECT 
								count(id_alugado) as qtd
							FROM rl_alugado a
							right join tb_ponto p on a.id_ponto = p.id_ponto
							WHERE p.id_parceiro = :id_parceiro 
							and month(dt_inicial) = month(now())
							and a.id_status_midia = 7
							and p.id_midia = 2";
	
					$stmt = $con->prepare($select);
					   $params = array(':id_parceiro' => $id_parceiro);
				   
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

			return array(outdoor($id_parceiro), Front($id_parceiro));
			
		}

		function buscarDadosMesPassado($id_parceiro) 
		{
			function outdoor($id_parceiro){
				try{
					$con = Conecta::criarConexao(); 
					
					
					$select = "SELECT 
								count(id_alugado) as qtd
							FROM rl_alugado a
							right join tb_ponto p on a.id_ponto = p.id_ponto
							WHERE p.id_parceiro = :id_parceiro 
							and month(dt_inicial) = MONTH(NOW())-1;
							and a.id_status_midia = 7
							and p.id_midia = 2";
	
					$stmt = $con->prepare($select);
					   $params = array(':id_parceiro' => $id_parceiro);
				   
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

			function Front($id_parceiro){
				try{
					$con = Conecta::criarConexao(); 
					
					
					$select = "SELECT 
								count(id_alugado) as qtd
							FROM rl_alugado a
							right join tb_ponto p on a.id_ponto = p.id_ponto
							WHERE p.id_parceiro = :id_parceiro 
							and month(dt_inicial) = MONTH(NOW())-1;
							and a.id_status_midia = 7
							and p.id_midia = 2";
	
					$stmt = $con->prepare($select);
					   $params = array(':id_parceiro' => $id_parceiro);
				   
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

			return array(outdoor($id_parceiro), Front($id_parceiro));
			
		}

		function BuscarDadosAlugado($id_alugado)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							a.id_ponto, ds_descricao, ds_latitude, ds_longitude, p.nu_valor, ds_tipo, ds_observacao, ds_bairro, ds_tamanho,  p.id_midia, m.ds_material, id_periodo, id_parceiro, dt_inicial, dt_final, nu_valor_alugado
						FROM rl_alugado a
						right join tb_ponto p on a.id_ponto=p.id_ponto
						inner join tb_tipo_midia t on p.id_midia=t.id_midia
						inner join tb_material m on p.id_material=m.id_material
						WHERE a.id_alugado = :id_alugado";

				$stmt = $con->prepare($select);
			   	$params = array(':id_alugado' => $id_alugado);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}
		function BuscarAlugadoPonto($id_ponto)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT a.id_alugado, a.id_ponto, ds_descricao, p.ds_latitude, p.ds_longitude, nu_valor, ds_tipo, ds_observacao, p.ds_bairro, ds_tamanho,  p.id_midia, a.id_material, id_periodo, p.id_parceiro, dt_inicial, dt_final, ds_nome, s.ds_status, id_status_midia
						FROM rl_alugado a
						right join tb_ponto p on a.id_ponto=p.id_ponto
						inner join tb_tipo_midia t on p.id_midia=t.id_midia
						inner join tb_usuario u on a.id_usuario=u.id_usuario 
						left join tb_status_midia s on a.id_status_midia=s.id_status
						WHERE a.id_ponto = :id_ponto";

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
		function BuscarAlugado($id_parceiro)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT a.id_alugado, a.id_ponto, ds_descricao, ds_latitude, ds_longitude, nu_valor, ds_tipo, ds_observacao, ds_bairro, ds_tamanho,  p.id_midia, a.id_material, id_periodo, p.id_parceiro, dt_inicial, dt_final, ds_nome, f.ds_foto, s.ds_status, id_status_midia
						FROM rl_alugado a
						right join tb_ponto p on a.id_ponto=p.id_ponto
						right join rl_ponto_foto f on p.id_ponto=f.id_ponto
						inner join tb_tipo_midia t on p.id_midia=t.id_midia
						inner join tb_usuario u on a.id_usuario=u.id_usuario
						left join tb_status_midia s on a.id_status_midia=s.id_status
						WHERE p.id_parceiro = :id_parceiro
						and f.ds_foto = (select min(ds_foto) from rl_ponto_foto pf where a.id_ponto = pf.id_ponto)
						order by dt_inicial";

				$stmt = $con->prepare($select);
			   	$params = array(':id_parceiro' => $id_parceiro);
			   
			    $stmt->execute($params);

			    return  $stmt;
				
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
			$id_estado	        	= $dados['id_estado'];
			$id_cidade	        	= $dados['id_cidade'];
			$ds_bairro	        	= $dados['ds_bairro'];
			$ds_sentido	        	= $dados['ds_sentido'];
			// $ds_descricao	        = $dados['ds_descricao'];

			$ds_foto = NULL;
			if($_FILES["fotos"]["name"][0] !== ""){
				$ds_foto                = $this->reArrayFiles($_FILES['fotos']);
			}

			$ds_latitude    	    = $dados['ds_latitude'];
			$ds_longitude    	    = $dados['ds_longitude'];
			$nu_valor    	        = $dados['nu_valor']; 
			$id_midia               = $dados['id_midia'];
			// $ds_observacao	        = $dados['ds_observacao'];
			if(isset($dados['id_material'])){
				$listaCheckbox = $dados['id_material'];

				$id_material= '';

				for ($i=0; $i < count($listaCheckbox); $i++) { 
					
					if($listaCheckbox[0] == $listaCheckbox[$i]){
						$id_material .= $listaCheckbox[$i];
					}
					else{
						$id_material .= "," . $listaCheckbox[$i];
					}
					
				}

			}
			else{
				$id_material = NULL;
			};


			
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
				$insert = "UPDATE tb_ponto set id_parceiro = :id_parceiro, id_estado = :id_estado, id_cidade = :id_cidade, ds_bairro = :ds_bairro, ds_sentido = :ds_sentido, ds_latitude = :ds_latitude, ds_longitude = :ds_longitude, nu_valor = :nu_valor, id_midia= :id_midia, id_material = :id_material, id_periodo = :id_periodo, ds_tamanho = :ds_tamanho
							   WHERE id_ponto = :id_ponto";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':id_parceiro' => $id_parceiro,
								':id_estado' => $id_estado,
								':id_cidade' => $id_cidade,
								':ds_bairro' => $ds_bairro,
								':ds_sentido' => $ds_sentido,
								':ds_latitude' => $ds_latitude,
								':ds_longitude' => $ds_longitude,
								':nu_valor' => $nu_valor, 
								':id_midia' =>$id_midia,
								':id_material' => $id_material,
								':id_periodo' => $id_periodo,
								':ds_tamanho' => $ds_tamanho,
								':id_ponto' => $id_ponto);
								
				$stmt->execute($params);

				if($ds_foto !== NULL){
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
				$selectponto = "select count(id_ponto) as id_ponto from rl_alugado where dt_final>curdate() and id_ponto = :id_ponto and id_usuario <> 0";		
				$stmtponto = $con->prepare($selectponto); 
				$paramsponto = array(':id_ponto' => $id_ponto);
				$stmtponto->execute($paramsponto);
				$dadosponto = $stmtponto->fetch();

				if($dadosponto["id_ponto"] == 0){
					//deletar foto
					try{
						$con = Conecta::criarConexao();
						$selectarquivo = "select ds_foto from rl_ponto_foto where id_ponto=:id_ponto";		
						$stmtarquivo = $con->prepare($selectarquivo); 
						$paramsarquivo = array(':id_ponto' => $id_ponto);
						$stmtarquivo->execute($paramsarquivo);
						while($dadosarquivo = $stmtarquivo->fetch()){
							//excluir arquivo
							unlink("../". $dadosarquivo["ds_foto"]);
						}
	
						$delete = "delete from rl_ponto_foto where id_ponto=:id_ponto"; 
					
						$stmt = $con->prepare($delete); 
						$params = array(':id_ponto' => $id_ponto);
						$stmt->execute($params);
	
					}
					catch(exception $e)
					{
						header('HTTP/1.1 500 Internal Server Error');
						print "ERRO:".$e->getMessage();		 
					}
	
					//deletar alugados
					try{
	
						$delete = "delete from rl_alugado where id_ponto=:id_ponto";
					
						$stmt = $con->prepare($delete); 
						$params = array(':id_ponto' => $id_ponto);
						$stmt->execute($params);
	
					}
					catch(exception $e)
					{
						header('HTTP/1.1 500 Internal Server Error');
						print "ERRO:".$e->getMessage();		 
					}
	
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
				else{
					header('Content-type: application/json'); 
				}

			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
				print "ERRO:".$e->getMessage();		 
			}
			

		}
		public function desativarPonto(array $dados)
		{
            $id_ponto	    = $dados['id_ponto']; 
			try{
				$con = Conecta::criarConexao();
				$insert = "update tb_ponto set st_status = 'D'
							WHERE id_ponto=:id_ponto";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':id_ponto' => $id_ponto);
								
				$stmt->execute($params);
				
				
				echo "Desativado com sucesso!"; 

				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
				print "ERRO:".$e->getMessage();		
			} 


		}
		public function ativarPonto(array $dados)
		{
            $id_ponto	    = $dados['id_ponto'];
			try{
				$con = Conecta::criarConexao();
				$insert = "update tb_ponto set st_status = 'A'
							WHERE id_ponto=:id_ponto";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':id_ponto' => $id_ponto);
								
				$stmt->execute($params);
				
				
				echo "Ativado com sucesso!"; 

				
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
			$id_ponto	    = $dados['id_ponto']; 

			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_ponto_foto
							FROM rl_ponto_foto
							where id_ponto = :id_ponto";
				$stmt = $con->prepare($select);
				$params = array(':id_ponto' => $id_ponto);
				$stmt->execute($params);
				$dadosfoto = $stmt->fetch();

				if($dadosfoto["id_ponto"] == 1){
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
				else{
					header('Content-type: application/json');
				}
				

			}
			catch(exception $e)
			{
			header('HTTP/1.1 500 Internal Server Error');
			print $e->getMessage();
			}
			
			
		}
		public function listarOptionsLocal($id_midia)
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT ds_bairro
							FROM tb_ponto 
							where id_midia = :id_midia";
				$stmt = $con->prepare($select);
				$params = array(':id_midia' => $id_midia);
				$stmt->execute($params);

				$options = "";

				while($dados = $stmt->fetch())
				{
					$options.= "<option>".$dados['ds_bairro']."</option>";

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

			$id_usuario	    	= $dados['id_usuario'];
			$id_ponto	    	= $dados['id_ponto'];
			$ds_arte	    	= $dados['ds_arte'];
			$id_midia	    	= $dados['id_midia']; 
			$nu_valor_alugado	= $dados['nu_valor_alugado']; 


			// $name = $ds_arte['name'][0];
			// $type = $ds_arte['type'][0];
			// $tmp = $ds_arte['tmp_name'][0];
			// $size = $ds_arte['size'][0];
			if($id_midia == 2){

			
				$dt_inicial	    = $dados['dt_inicial'];
				$dt_final	    = $dados['dt_final']; 
				

				try{ 
					$con = Conecta::criarConexao();
					$insert = "INSERT into rl_alugado (id_usuario, id_ponto, dt_inicial, dt_final, nu_valor_alugado)
								VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final, :nu_valor_alugado)";
					
					$stmt = $con->prepare($insert);
					
					$params = array(':id_usuario' => $id_usuario,
									':id_ponto' => $id_ponto,
									':dt_inicial' => $dt_inicial,
									':dt_final' => $dt_final,
									':nu_valor_alugado' => $nu_valor_alugado);
									
					$stmt->execute($params);
					
					// //gravar arte
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

					// 	$insert_foto = "insert into rl_arte(id_ponto, id_usuario,  ds_arte) values (:id_ponto, :id_usuario :ds_arte)";

					// 	$stmt_foto = $con->prepare($insert_foto);
				
					// 	$params_foto = array(':id_ponto' => $id_ponto,
					// 						':id_usuario' => $id_usuario,
					// 						':ds_arte' => $gravar_caminho_arquivo
					// 						);
										
					// 	$stmt_foto->execute($params_foto);

					// }
					
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
						$insert = "INSERT into rl_alugado (id_usuario, id_ponto, dt_inicial, dt_final,  id_material, nu_valor_alugado)
									VALUES (:id_usuario, :id_ponto, :dt_inicial, :dt_final, :id_material, :nu_valor_alugado)";
						
						$stmt = $con->prepare($insert);
						
						$params = array(':id_usuario' => $id_usuario,
										':id_ponto' => $id_ponto,
										':dt_inicial' => $dt_inicial,
										':dt_final' => $dt_final,
										':id_material' => $id_material,
										':nu_valor_alugado' => $nu_valor_alugado);
										
						$stmt->execute($params);

						// //gravar arte
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
        }

		function BuscarProximosAlugados($id_ponto)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT dt_inicial, dt_final
						FROM rl_alugado a
						WHERE a.id_ponto = :id_ponto";

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

		
		
	}	


?>