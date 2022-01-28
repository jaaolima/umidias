<?php
	require_once("../Classes/Conecta.php");
    class Bairro{
        public function listarOptionsBairro($ds_bairro)
		{
			try{
				$con = Conecta::criarConexao();
				$select = "SELECT id_bairro, ds_bairro
							FROM tb_bairro ";
				$stmt = $con->prepare($select);
				$stmt->execute();

				$options = "";

				while($dados = $stmt->fetch())
				{
					if($dados["ds_bairro"] == $ds_bairro){
                        $options.= "<option value='".$dados['ds_bairro']."' selected>".$dados['ds_bairro']."</option>";
                    }else{
                        $options.= "<option value='".$dados['ds_bairro']."'>".$dados['ds_bairro']."</option>";
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