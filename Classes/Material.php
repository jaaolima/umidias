<?php
	require_once("Conecta.php");
    class Material{
        public function listarMaterial(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_material, ds_material, nu_valor, ds_especificacao
							FROM tb_material";
				
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
        public function gravarMaterial(array $dados)
		{

			$ds_material	    = $dados['ds_material'];
			$ds_especificacao	= $dados['ds_especificacao'];
            $nu_valor	    	= $dados['nu_valor'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_material (ds_material, nu_valor, ds_especificacao)
							VALUES (:ds_material, :nu_valor, :ds_especificacao)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_material' => $ds_material,
                                ':nu_valor' => $nu_valor,
								':ds_especificacao' => $ds_especificacao);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}  
        }
        function buscarDadosMaterial($id_material)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_material, ds_material, nu_valor, ds_especificacao
						FROM tb_material  
						WHERE id_material = :id_material";

				$stmt = $con->prepare($select);
			   	$params = array(':id_material' => $id_material);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
        }
        public function gravarAlterarMaterial(array $dados)
		{
            $id_material	    = $dados['id_material'];
			$ds_material	    = $dados['ds_material'];
			$ds_especificacao	= $dados['ds_especificacao'];
            $nu_valor	        = $dados['nu_valor'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "UPDATE tb_material SET ds_material = :ds_material, nu_valor = :nu_valor, ds_especificacao = :ds_especificacao
							WHERE id_material=:id_material";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':ds_material' => $ds_material,
                                ':nu_valor' => $nu_valor,
								':ds_especificacao' => $ds_especificacao,
                                ':id_material' => $id_material);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}
		public function listarOptionsMaterial($id_material)
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_material, ds_material, nu_valor
							FROM tb_material ";
				$stmt = $con->prepare($select);
				$stmt->execute();

				$options = "";

				while($dados = $stmt->fetch())
				{
					$valores = explode(",", $id_material);
					if(in_array($dados["id_material"], $valores)){
						$options.= "<input type='checkbox' id='".$dados['id_material']."' name='id_material[]' value='".$dados['id_material']." checked'>
							<label for='".$dados['id_material']."'>".$dados['ds_material']."</label></br>"; 
					}
					else{
						$options.= "<input type='checkbox' id='".$dados['id_material']."' name='id_material[]' value='".$dados['id_material']." '>
							<label for='".$dados['id_material']."'>".$dados['ds_material']."</label></br>"; 
					}
					
					// if($id_material == $dados['id_material'])
					// {
					// 	if(in_array($dados["id_material"], $valores)){
					// 		$options.= "<input type='checkbox' id='".$dados['id_material']."' name='id_material[]' value='".$dados['id_material']." checked'>
					// 			<label for='".$dados['id_material']."'>".$dados['ds_material']."</label></br>"; 
					// 	}
					// 	else{
					// 		$options.= "<input type='checkbox' id='".$dados['id_material']."' name='id_material[]' value='".$dados['id_material']."'>
					// 			<label for='".$dados['id_material']."'>".$dados['ds_material']."</label></br>"; 
					// 	}
						
					// }
					// else
					// {
					// 	$options.= "<input type='checkbox' id='".$dados['id_material']."' name='id_material[]' value='".$dados['id_material']."'>
					// 				<label for='".$dados['id_material']."'>".$dados['ds_material']."</label></br>"; 
					// }
					

					
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