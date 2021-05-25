<?php
	require_once("Conecta.php");
    class Parceiro{
        public function gravarParceiro(array $dados)
		{
			
			$ds_nomeempresa	    = $dados['ds_nomeempresa'];
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
			if($id_regime === "CPF"){
				if(validarCPF($nu_cpf)){
					try{
						$con = Conecta::criarConexao();
						$insert = "INSERT into tb_parceiro (ds_nomeempresa,  nu_cpf, ds_logradouro, nu_numerolog, nu_cep, id_estado, id_cidade, ds_bairro, ds_responsavel, ds_email, nu_telefone, id_regime, nu_aliquota)
									VALUES (:ds_nomeempresa, :nu_cpf,  :ds_logradouro, :nu_numerolog, :nu_cep, :id_estado , :id_cidade, :ds_bairro, :ds_responsavel, :ds_email, :nu_telefone, :id_regime, :nu_aliquota)";
						
						$stmt = $con->prepare($insert);
						
						$params = array(':ds_nomeempresa' => $ds_nomeempresa, 
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
										':nu_aliquota' => $nu_aliquota);
										
						$stmt->execute($params);
						
						echo "Dados gravados com sucesso!"; 
						
					}
					catch(exception $e)
					{
						header('HTTP/1.1 500 Internal Server Error');
						print "ERRO:".$e->getMessage();		
					}  
				}
			}
			else{

				try{ 
					$con = Conecta::criarConexao();
					
					$select = "SELECT count(nu_cnpj) as nu_cnpj
								FROM tb_parceiro
								where nu_cnpj = :nu_cnpj";
					
					$stmt = $con->prepare($select); 
					$params = array(':nu_cnpj' => $nu_cnpj);
					
					$stmt->execute($params);
					var_dump($stmt);
	
					/*if($stmt["nu_cnpj"] == 0){
						try{
							$con = Conecta::criarConexao();
							$insert = "INSERT into tb_parceiro (ds_nomeempresa, nu_cnpj,  ds_logradouro, nu_numerolog, nu_cep, id_estado, id_cidade, ds_bairro, ds_responsavel, ds_email, nu_telefone, id_regime, nu_aliquota)
										VALUES (:ds_nomeempresa, :nu_cnpj, :ds_logradouro, :nu_numerolog, :nu_cep, :id_estado , :id_cidade, :ds_bairro, :ds_responsavel, :ds_email, :nu_telefone, :id_regime, :nu_aliquota)";
							
							$stmt = $con->prepare($insert);
							
							$params = array(':ds_nomeempresa' => $ds_nomeempresa, 
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
											':nu_aliquota' => $nu_aliquota);
											
							$stmt->execute($params);
							
							echo "Dados gravados com sucesso!"; 
							
						}
						catch(exception $e)
						{
							header('HTTP/1.1 500 Internal Server Error');
							print "ERRO:".$e->getMessage();		
						} 
					}*/
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}	
			}
			

			
			
		}
		public function validarCNPJ($nu_cnpj)
		{
			try{ 
				$con = Conecta::criarConexao();
				
				$select = "SELECT count(nu_cnpj)
							FROM tb_parceiro
							where nu_cnpj=:nu_cnpj";
				
				$stmt = $con->prepare($select); 
				$params = array(':nu_cpnj' => $nu_cnpj);
				
				$stmt->execute($params);

				if($stmt["nu_cnpj"] == 0){
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
							id_parceiro, ds_nomeempresa, nu_cnpj, ds_logradouro, nu_numerolog, nu_cep, id_estado, id_cidade, ds_bairro, ds_responsavel, ds_email, nu_telefone, id_regime, nu_aliquota, nu_cpf
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
			$nu_cnpj 	        = $dados['nu_cnpj'];
            $ds_logradouro    	= $dados['ds_logradouro'];
			$nu_numerolog		= $dados['nu_numerolog'];
			$nu_cep             = $dados['nu_cep'];
            $id_estado          = $dados['id_estado'];
            $id_cidade       	= $dados['id_cidade'];
            $ds_bairro          = $dados['ds_bairro'];
            $ds_responsavel     = $dados['ds_responsavel'];
            $ds_email          	= $dados['ds_email'];
            $nu_telefone        = $dados['nu_telefone'];
			$id_regime 			= $dados['id_regime'];
			$nu_aliquota 		= $dados['nu_aliquota'];
			$nu_cpf 	        = NULL;
			if($id_regime === "CPF"){
				$nu_cpf 	    = $dados['nu_cpf'];
			}
			
			try{
				$con = Conecta::criarConexao();
				$insert = "UPDATE tb_parceiro set ds_nomeempresa = :ds_nomeempresa, nu_cnpj = :nu_cnpj, nu_cpf = :nu_cpf, ds_logradouro = :ds_logradouro, 
									nu_numerolog= :nu_numerolog, nu_cep = :nu_cep, id_estado = :id_estado, id_cidade = :id_cidade, 
									ds_bairro = :ds_bairro, ds_responsavel = :ds_responsavel, ds_email = :ds_email, nu_telefone = :nu_telefone,
									id_regime = :id_regime, nu_aliquota = :nu_aliquota
							WHERE id_parceiro = :id_parceiro";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':id_parceiro' => $id_parceiro,  
								':ds_nomeempresa' => $ds_nomeempresa, 
								':nu_cnpj' => $nu_cnpj,
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
								':nu_aliquota' => $nu_aliquota);
                                
				$stmt->execute($params);
				
				echo "Dados alterados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}
		public function dadosTotalParceiros()
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT count(id_parceiro) as id_parceiro
							FROM tb_parceiro ";
				
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