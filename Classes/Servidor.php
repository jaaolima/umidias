<?php
	require_once("Conecta.php");
	
	class Servidor {

        function resetarSenhaInicial($ds_email)
        { //SHA2(nu_matricula, 512)

            try{
                $con = Conecta::criarConexao();
                $update = "UPDATE tb_usuario
                                SET 
                                    ds_senha = '123456'
                            WHERE ds_email = :ds_email";

                $stmt = $con->prepare($update);
                $params = array(
                                ':ds_email' => $ds_email
                                );

                $stmt->execute($params);


                echo "Senha alterada com sucesso!";

            }
            catch(exception $e)
            {
                header('HTTP/1.1 500 Internal Server Error');
                print $e->getMessage();	
            }	
        }
    }
            
?>