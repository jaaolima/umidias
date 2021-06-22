<?php
	require_once("Conecta.php");
    class Parceiro{
        public function gravarParceiro(array $dados)
		{
			
			$ds_nomeempresa	    = $dados['ds_nomeempresa'];
			$ds_usuario	    	= $dados['ds_usuario'];
			$nu_cnpj 	        = $dados['nu_cnpj'];
            $ds_logradouro    	= $dados['ds_logradouro'];
			$nu_numerolog		= $dados['nu_numerolog'];
			$nu_cep             = $dados['nu_cep'];
            $id_estado         	= $dados['id_estado'];
            $id_cidade       	= $dados['id_cidade'];
            $ds_bairro          = $dados['ds_bairro'];
            $ds_responsavel     = $dados['ds_responsavel'];
            $ds_email          	= $dados['ds_email'];
            $nu_telefone        = $dados['nu_telefone'];
			$id_regime			= $dados['id_regime'];
			$nu_aliquota 		= $dados['nu_aliquota'];
			$nu_cpf 	    	= $dados['nu_cpf'];
			$dt_parceiro 		= date("Y-m-d");
			$ds_senha       =  '123456';

			if($id_regime === "CPF"){
				if($this->validarCPF($nu_cpf)){
					try{
						$con = Conecta::criarConexao();
						$insert = "INSERT into tb_parceiro (ds_nomeempresa, ds_usuario nu_cpf,  ds_logradouro, nu_numerolog, nu_cep, id_estado, id_cidade, ds_bairro, ds_responsavel, ds_email, nu_telefone, id_regime, nu_aliquota, dt_parceiro)
									VALUES (:ds_nomeempresa, :ds_usuario, :nu_cpf, :ds_logradouro, :nu_numerolog, :nu_cep, :id_estado , :id_cidade, :ds_bairro, :ds_responsavel, :ds_email, :nu_telefone, :id_regime, :nu_aliquota, :dt_parceiro)";
						
						$stmt = $con->prepare($insert);
						
						$params = array(':ds_nomeempresa' => $ds_nomeempresa, 
										':ds_usuario' => $ds_usuario,
										':nu_cpf' => $nu_cpf,
										':ds_logradouro' => $ds_logradouro,
										':nu_numerolog' => $nu_numerolog,
										':nu_cep' =>$nu_cep,
										':id_estado' => $id_estado,
										':id_cidade' => $id_cidade,
										':ds_bairro' => $ds_bairro,
										':ds_responsavel' => $ds_responsavel,
										':ds_email' => $ds_email,
										':nu_telefone' => $nu_telefone,
										':id_regime' => $id_regime,
										':nu_aliquota' => $nu_aliquota,
										':dt_parceiro' => $dt_parceiro);
										
						$stmt->execute($params);

						$id_parceiro = $con->lastInsertId();

						try{
							$con = Conecta::criarConexao();
							$insertUsuario = "INSERT into tb_usuario (ds_nome, :ds_usuario ds_email, ds_senha, id_perfil, id_parceiro)
										VALUES (:ds_nome, :ds_usuario, :ds_email, :ds_senha, :id_perfil, :id_parceiro)";
							
							$stmtUsuario = $con->prepare($insertUsuario);
							
							$paramsUsuario = array(':ds_nome' => $ds_nomeempresa,
											':ds_usuario' => $ds_usuario,
											':ds_email' => $ds_email,
											':id_perfil' => 2,
											':ds_senha' =>$ds_senha,
											':id_parceiro' =>$id_parceiro);
			
							$stmtUsuario->execute($paramsUsuario);
			
			
							
							echo "Dados gravados com sucesso!"; 
							
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
				else{
					header('HTTP/1.1 500 Internal Server Error');
					print "CPF já cadastrado";
				}	
			}
			else{
				if($this->validarCNPJ($nu_cnpj)){
					try{
						$con = Conecta::criarConexao();
						$insert = "INSERT into tb_parceiro (ds_nomeempresa, ds_usuario, nu_cnpj,  ds_logradouro, nu_numerolog, nu_cep, id_estado, id_cidade, ds_bairro, ds_responsavel, ds_email, nu_telefone, id_regime, nu_aliquota, dt_parceiro)
									VALUES (:ds_nomeempresa, :ds_usuario, :nu_cnpj, :ds_logradouro, :nu_numerolog, :nu_cep, :id_estado , :id_cidade, :ds_bairro, :ds_responsavel, :ds_email, :nu_telefone, :id_regime, :nu_aliquota, :dt_parceiro)";
						
						$stmt = $con->prepare($insert);
						
						$params = array(':ds_nomeempresa' => $ds_nomeempresa, 
										':ds_usuario' => $ds_usuario,
										':nu_cnpj' => $nu_cnpj,
										':ds_logradouro' => $ds_logradouro,
										':nu_numerolog' => $nu_numerolog,
										':nu_cep' =>$nu_cep,
										':id_estado' => $id_estado,
										':id_cidade' => $id_cidade,
										':ds_bairro' => $ds_bairro,
										':ds_responsavel' => $ds_responsavel,
										':ds_email' => $ds_email,
										':nu_telefone' => $nu_telefone,
										':id_regime' => $id_regime,
										':nu_aliquota' => $nu_aliquota,
										':dt_parceiro' => $dt_parceiro); 
										
						$stmt->execute($params);
						$id_parceiro = $con->lastInsertId();

						try{
							$con = Conecta::criarConexao();
							$insertUsuario = "INSERT into tb_usuario (ds_nome, :ds_usuario ds_email, ds_senha, id_perfil, id_parceiro)
										VALUES (:ds_nome, :ds_usuario, :ds_email, :ds_senha, :id_perfil, :id_parceiro)";
							
							$stmtUsuario = $con->prepare($insertUsuario);
							
							$paramsUsuario = array(':ds_nome' => $ds_nomeempresa,
											':ds_usuario' => $ds_usuario,
											':ds_email' => $ds_email,
											':id_perfil' => 2,
											':ds_senha' =>$ds_senha,
											':id_parceiro' =>$id_parceiro);
			
							$stmtUsuario->execute($paramsUsuario);
			
			
							
							echo "Dados gravados com sucesso!"; 
							
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
				else{
					header('HTTP/1.1 500 Internal Server Error');
					print "CNPJ já cadastrado";
				}
			
			}
			
		}
		public function validarCNPJ($nu_cnpj)
		{
			try{ 
				$con = Conecta::criarConexao();
				
				$select = "SELECT count(nu_cnpj) as nu_cnpj
							FROM tb_parceiro
							where nu_cnpj=:nu_cnpj";
				
				$stmt = $con->prepare($select); 
				$params = array(':nu_cnpj' => $nu_cnpj);
				
				$stmt->execute($params);
				$valor = $stmt->fetch();
				if($valor["nu_cnpj"] == 0){
					return true;
				}
				else{
					return false;
				}
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}
		public function validarCPF($nu_cpf)
		{
			try{ 
				$con = Conecta::criarConexao();
				
				$select = "SELECT count(nu_cpf) as nu_cpf
							FROM tb_parceiro
							where nu_cpf=:nu_cpf";
				
				$stmt = $con->prepare($select); 
				$params = array(':nu_cpf' => $nu_cpf);
				
				$stmt->execute($params);
				$valor = $stmt->fetch();
				if($valor["nu_cpf"] == 0){
					return true;
				}
				else{
					return false;
				}
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}
		public function listarParceiro(array $dados)
		{
			try{ 
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_parceiro, ds_nomeempresa, nu_cnpj, ds_logradouro, nu_cep, e.ds_uf, c.ds_nome, ds_bairro, ds_responsavel, ds_email, nu_telefone, nu_cpf, id_regime
							FROM tb_parceiro p
							INNER JOIN estados e ON p.id_estado = e.id_estado
							INNER JOIN cidades c ON p.id_cidade = c.id_cidade";
				
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
		function buscarDadosParceiro($id_parceiro)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_parceiro, ds_nomeempresa, nu_cnpj, ds_logradouro, nu_numerolog, nu_cep, id_estado, id_cidade, ds_bairro, ds_responsavel, ds_email, nu_telefone, id_regime, nu_aliquota, nu_cpf, ds_usuario
						FROM tb_parceiro  
						WHERE id_parceiro = :id_parceiro";

				$stmt = $con->prepare($select);
			   	$params = array(':id_parceiro' => $id_parceiro);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}
		public function gravarAlterarParceiro(array $dados) 
		{
			$id_parceiro	    = $dados['id_parceiro'];
			$ds_nomeempresa	    = $dados['ds_nomeempresa'];
			$ds_usuario	    	= $dados['ds_usuario'];
			$nu_cnpj 	        = $dados['nu_cnpj'];
            $ds_logradouro    	= $dados['ds_logradouro'];
			$nu_numerolog		= $dados['nu_numerolog'];
			$nu_cep             = $dados['nu_cep'];
            $id_estado         	= $dados['id_estado'];
            $id_cidade       	= $dados['id_cidade'];
            $ds_bairro          = $dados['ds_bairro'];
            $ds_responsavel     = $dados['ds_responsavel'];
            $ds_email          	= $dados['ds_email'];
            $nu_telefone        = $dados['nu_telefone'];
			$id_regime			= $dados['id_regime'];
			$nu_aliquota 		= $dados['nu_aliquota'];
			$nu_cpf 	    	= $dados['nu_cpf'];
			$ds_senha       	=  '123456';

			if($id_regime === "CPF"){
				if($this->validarCPF($nu_cpf)){
					try{
						$con = Conecta::criarConexao();
						$update = "UPDATE tb_parceiro set ds_nomeempresa = :ds_nomeempresa, ds_usuario = :ds_usuario,  nu_cpf = :nu_cpf, ds_logradouro = :ds_logradouro, 
										nu_numerolog= :nu_numerolog, nu_cep = :nu_cep, id_estado = :id_estado, id_cidade = :id_cidade, 
										ds_bairro = :ds_bairro, ds_responsavel = :ds_responsavel, ds_email = :ds_email, nu_telefone = :nu_telefone,
										id_regime = :id_regime, nu_aliquota = :nu_aliquota
									WHERE id_parceiro = :id_parceiro";
						
						$stmt = $con->prepare($update);
						
						$params = array(':ds_nomeempresa' => $ds_nomeempresa, 
										':ds_usuario' => $ds_usuario, 
										':nu_cpf' => $nu_cpf,
										':ds_logradouro' => $ds_logradouro,
										':nu_numerolog' => $nu_numerolog,
										':nu_cep' =>$nu_cep,
										':id_estado' => $id_estado,
										':id_cidade' => $id_cidade,
										':ds_bairro' => $ds_bairro,
										':ds_responsavel' => $ds_responsavel,
										':ds_email' => $ds_email,
										':nu_telefone' => $nu_telefone,
										':id_regime' => $id_regime,
										':nu_aliquota' => $nu_aliquota,
										':id_parceiro' => $id_parceiro);
										
						$stmt->execute($params);

						try{
							$con = Conecta::criarConexao();
							$updateUsuario = "UPDATE tb_usuario set ds_nome = :ds_nome, ds_email = :ds_email, ds_usuario = :ds_usuario
									WHERE id_parceiro = :id_parceiro";
							
							$stmtUsuario = $con->prepare($updateUsuario);
							
							$paramsUsuario = array(':ds_nome' => $ds_nomeempresa, 
												':ds_email' => $ds_email,
												':ds_usuario' => $ds_usuario,
												':id_parceiro'=>$id_parceiro);
							$stmtUsuario->execute($paramsUsuario);
			
							
							echo "Dados alterados com sucesso!"; 
							
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
				else{
					header('HTTP/1.1 500 Internal Server Error');
					print "CPF já cadastrado";
				}	
			}
			else{
				if($this->validarCNPJ($nu_cnpj)){
					try{
						$con = Conecta::criarConexao();
						$update = "UPDATE tb_parceiro set ds_nomeempresa = :ds_nomeempresa, ds_usuario = :ds_usuario, nu_cnpj = :nu_cnpj, ds_logradouro = :ds_logradouro, 
										nu_numerolog= :nu_numerolog, nu_cep = :nu_cep, id_estado = :id_estado, id_cidade = :id_cidade, 
										ds_bairro = :ds_bairro, ds_responsavel = :ds_responsavel, ds_email = :ds_email, nu_telefone = :nu_telefone,
										id_regime = :id_regime, nu_aliquota = :nu_aliquota
									WHERE id_parceiro = :id_parceiro";
						
						$stmt = $con->prepare($update);
						
						$params = array(':ds_nomeempresa' => $ds_nomeempresa, 
										':ds_usuario' => $ds_nomeempresa, 
										':nu_cnpj' => $nu_cnpj,
										':ds_logradouro' => $ds_logradouro,
										':nu_numerolog' => $nu_numerolog,
										':nu_cep' =>$nu_cep,
										':id_estado' => $id_estado,
										':id_cidade' => $id_cidade,
										':ds_bairro' => $ds_bairro,
										':ds_responsavel' => $ds_responsavel,
										':ds_email' => $ds_email,
										':nu_telefone' => $nu_telefone,
										':id_regime' => $id_regime,
										':nu_aliquota' => $nu_aliquota,
										':id_parceiro' => $id_parceiro);
										
						$stmt->execute($params);
						
						try{
							$con = Conecta::criarConexao();
							$updateUsuario = "UPDATE tb_usuario set ds_nome = :ds_nome, ds_email = :ds_email, ds_usuario = :ds_usuario
									WHERE id_parceiro = :id_parceiro";
							
							$stmtUsuario = $con->prepare($updateUsuario);
							
							$paramsUsuario = array(':ds_nome' => $ds_nomeempresa, 
												':ds_email' => $ds_email,
												':ds_usuario' => $ds_usuario,
												':id_parceiro'=>$id_parceiro);
							$stmtUsuario->execute($paramsUsuario);
			
							
							echo "Dados alterados com sucesso!"; 
							
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
				else{
					header('HTTP/1.1 500 Internal Server Error');
					print "CNPJ já cadastrado";
				}
			
			}
			
		}

		public function dadosTotalParceiros()
		{
			
			function mesParceiros(){	
				$mes = date('Y-m-d', strtotime('-1 month'));
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_parceiro) as id_parceiro
								FROM tb_parceiro 
								where dt_parceiro <= :mes";
					
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
			function semanaParceiros(){	
				$semana = date('Y-m-d', strtotime('-7 days'));
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_parceiro) as id_parceiro
								FROM tb_parceiro 
								where dt_parceiro <= :semana";
					
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

			function atualParceiros(){	
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(id_parceiro) as id_parceiro
								FROM tb_parceiro";
					
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

			return array(mesParceiros(), semanaParceiros(), atualParceiros());
		}
		
		public function listarOptionsUF($id_estado)
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT distinct id_estado, ds_uf
							FROM estados 
							ORDER BY ds_uf";
				$stmt = $con->prepare($select);
				$stmt->execute();

				$options = "";

				while($dados = $stmt->fetch())
				{
					if($id_estado == $dados['id_estado'])
					{
						$options.= "<option value='".$dados['id_estado']."' selected>".$dados['ds_uf']."</option>";
					}	
					else
					{
						$options.= "<option value='".$dados['id_estado']."'>".$dados['ds_uf']."</option>";	
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
		public function listarOptionsCidade($id_estado, $id_cidade)
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_cidade, ds_nome FROM cidades WHERE id_estado = :id_estado";
				$stmt = $con->prepare($select);
				$params = array(':id_estado' => $id_estado);
				$stmt->execute($params);

				$options = "";

				while($dados = $stmt->fetch())
				{
					if($id_cidade == $dados['id_cidade'])
					{
						$options.= "<option value='".$dados['id_cidade']."' selected>".$dados['ds_nome']."</option>";
					}
					else
					{
						$options.= "<option value='".$dados['id_cidade']."'>".$dados['ds_nome']."</option>";
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
		public function listaroptionsparceiro($id_parceiro)
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_parceiro, ds_nomeempresa FROM tb_parceiro ";
				$stmt = $con->prepare($select);
				$stmt->execute();
 
				$options = "";

				while($dados = $stmt->fetch())
				{
					if($id_parceiro == $dados['id_parceiro'])
					{
						$options.= "<option value='".$dados['id_parceiro']."' selected>".$dados['ds_nomeempresa']."</option>";
					}
					else
					{
						$options.= "<option value='".$dados['id_parceiro']."'>".$dados['ds_nomeempresa']."</option>";
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