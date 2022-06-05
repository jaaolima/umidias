<?php
	require_once("Conecta.php");
    class Grafica{
        public function listarGrafica(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT id_grafica, ds_grafica, ds_email
							FROM tb_grafica";
				
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
        public function gravarGrafica(array $dados)
		{

			$ds_grafica	    = $dados['ds_grafica'];
            $ds_email	    	= $dados['ds_email'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_grafica (ds_grafica, ds_email)
							VALUES (:ds_grafica, :ds_email)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_grafica' => $ds_grafica,
                                ':ds_email' => $ds_email);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}  
        }
        function buscarDadosGrafica($id_grafica)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_grafica, ds_grafica, ds_email
						FROM tb_grafica  
						WHERE id_grafica = :id_grafica";

				$stmt = $con->prepare($select);
			   	$params = array(':id_grafica' => $id_grafica);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
        }
        public function gravarAlterarGrafica(array $dados)
		{
            $id_grafica	    = $dados['id_grafica'];
			$ds_grafica	    = $dados['ds_grafica'];
            $ds_email	        = $dados['ds_email'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "UPDATE tb_grafica SET ds_grafica = :ds_grafica, ds_email = :ds_email
							WHERE id_grafica=:id_grafica";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':ds_grafica' => $ds_grafica,
                                ':ds_email' => $ds_email,
                                ':id_grafica' => $id_grafica);
                                
				$stmt->execute($params);
				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}

		public function excluirGrafica(array $dados) 
		{
			$id_grafica = $dados['id_grafica'];
			
			try{
				$con = Conecta::criarConexao();
				$insert = "delete from tb_grafica
							WHERE id_grafica=:id_grafica";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':id_grafica' => $id_grafica);
                                
				$stmt->execute($params);
				
				echo "Deletado com sucesso!"; 
				
			}
			catch(exception $e) 
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}

		public function EmailGrafica(array $array_id){
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT ds_email, ds_grafica
						FROM tb_grafica
						WHERE id_grafica = 2"; 
	
				$stmt = $con->prepare($select);
				
				$stmt->execute();
	
				$dados = $stmt->fetch();
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
				print "ERRO:".$e->getMessage();		
			}
			
			$email = $dados['ds_email'];
			$nome = $dados['ds_grafica'];

			// Inclui o arquivo class.phpmailer.php localizado na mesma pasta do arquivo php 
			require_once('../assets/media/PHPMailer-master/PHPMailerAutoload.php');

			// Inicia a classe PHPMailer 
			$mail = new PHPMailer(); 

			// Método de envio 
			$mail->IsSMTP(); 

			// // Enviar por SMTP  
			$mail->Host = "smtp-relay.sendinblue.com"; 
			$mail->SMTPAuth = true;
			$mail->SMTPAutoTLS = false ; 
			$mail->Username = 'renato.lima@outlook.com'; 
			$mail->Password = 'RZw0z8AXIfvHc73M';
			$mail->Port = 587;
			$mail->IsHTML(true); 
			$mail->CharSet = 'UTF-8'; 
			$mail->setFrom("no-reply@ibranutro.com.br", "Unimídias");

			// Define o(s) destinatário(s) 
			$mail->AddAddress($email, $nome);  

			// Assunto da mensagem 
			$mail->Subject = "MATERIAL PENDENTE"; 

			// Corpo do email 
			$mail->Body = "<h1>Temos um material pendente</h1> 
			<p>Segue:<br>";

			// function renderView($path, array $data = []){
			// 	ob_start();
			// 	include $path;
			// 	$response = ob_get_contents();
			// 	ob_end_clean();

			// 	return $response;
			// }

			// Opcional: Anexos 
			foreach ($array_id as $id) {
				try{
					$con = Conecta::criarConexao();
					
					$select = "SELECT id_alugado, ds_arte
							FROM rl_alugado
							WHERE id_alugado = :id_alugado"; 
		
					$stmt = $con->prepare($select);
					$params = array(":id_alugado" => $id);
					$stmt->execute($params);
		
					$dados = $stmt->fetch();
					$mail->AddAttachment($dados["ds_arte"], "material.pdf"); 
				}
				catch(exception $e)
				{
					header('HTTP/1.1 500 Internal Server Error');
					print "ERRO:".$e->getMessage();		
				}
				
			}
			

			// Envia o e-mail 
			$enviado = $mail->Send(); 

			// Exibe uma mensagem de resultado 
			if ($enviado) 
			{ 
				echo "Seu email foi enviado com sucesso!"; 
			} else { 
				echo "Houve um erro enviando o email: ".$mail->ErrorInfo; 
				return false;
			} 

		}


    }
?>        