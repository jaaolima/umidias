<?php
	require_once("../Classes/Conecta.php");
    class Material{
        public function listarMaterial(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_material, ds_material, nu_valor
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
            $nu_valor	    = $dados['nu_valor'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_material (ds_material, nu_valor)
							VALUES (:ds_material, :nu_valor)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_material' => $ds_material,
                                ':nu_valor' => $nu_valor,);
                                
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
							id_material, ds_material, nu_valor
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
            $nu_valor	        = $dados['nu_valor'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "UPDATE tb_material SET ds_material = :ds_material, nu_valor = :nu_valor
							WHERE id_material=:id_material";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':ds_material' => $ds_material,
                                ':nu_valor' => $nu_valor,
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
		public function listarOptionsMaterial()
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_material, ds_material
							FROM tb_material ";
				$stmt = $con->prepare($select);
				$stmt->execute();

				$options = "";

				while($dados = $stmt->fetch())
				{
						
					$options.= "<option value='".$dados['id_material']."'>".$dados['ds_material']."</option>";

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