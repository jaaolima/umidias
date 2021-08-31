<?php
	require_once("Conecta.php");

	class Aluno{

		public function listarAluno(array $dados)
		{
			try{
				$con = Conecta::criarConexao();
				
				$select = "SELECT *
							FROM tb_usuario";
				
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
 

		



		public function gravarAluno(array $dados)
		{
		
			$ds_usuario		= $dados['ds_usuario'];
			$ds_nome		= $dados['ds_nome'];
			$nu_cpf			= $dados['nu_cpf'];
			$ds_email		= $dados['ds_email'];
			$dt_nascimento	= $dados['dt_nascimento'];
			$st_sexo		= $dados['st_sexo'];
			$ds_endereco	= $dados['ds_endereco'];
			$nu_cep			= $dados['nu_cep'];
		
			try{
				$con = Conecta::criarConexao();
				$insert = "INSERT into tb_usuario (ds_usuario, id_perfil, ds_nome, nu_cpf, ds_email, dt_nascimento, st_sexo, ds_endereco, nu_cep)
							VALUES (:ds_usuario, 3, :ds_nome, :nu_cpf, :ds_email, :dt_nascimento, :st_sexo, :ds_endereco, :nu_cep)";
				
				$stmt = $con->prepare($insert);
				
				$params = array(':ds_usuario' => $ds_usuario,
								':ds_nome' => $ds_nome,
								':nu_cpf' => $nu_cpf,
								':ds_email' => $ds_email,
								':dt_nascimento' => $dt_nascimento,
								':st_sexo' => $st_sexo,
								':ds_endereco' => $ds_endereco,
								':nu_cep' => $nu_cep
							);

				$stmt->execute($params);


				
				echo "Dados gravados com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}

		

		function buscarDadosAluno($id_usuario)
		{
			try{
				$con = Conecta::criarConexao();
				
				
				$select = "SELECT 
							id_usuario, ds_usuario, ds_nome, nu_cpf, ds_email, dt_nascimento, st_sexo, ds_endereco, nu_cep
						FROM tb_usuario  
						WHERE id_usuario = :id_usuario";

				$stmt = $con->prepare($select);
			   	$params = array(':id_usuario' => $id_usuario);
			   
			    $stmt->execute($params);

			    return  $stmt->fetch();
				
			}	
			catch(Exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();	
			}	
		}


		public function gravarAlterarAluno(array $dados)
		{

			$ds_usuario		= $dados['ds_usuario'];
			$ds_nome		= $dados['ds_nome'];
			$nu_cpf			= $dados['nu_cpf'];
			$ds_email		= $dados['ds_email'];
			$dt_nascimento	= $dados['dt_nascimento'];
			$st_sexo		= $dados['st_sexo'];
			$ds_endereco	= $dados['ds_endereco'];
			$nu_cep			= $dados['nu_cep'];
            $id_usuario		= $dados['id_usuario'];

			
			try{
				$con = Conecta::criarConexao();
				$update = "UPDATE tb_usuario set ds_usuario = :ds_usuario, ds_nome = :ds_nome, nu_cpf = :nu_cpf, ds_email = :ds_email, dt_nascimento = :dt_nascimento, st_sexo = :st_sexo, ds_endereco = :ds_endereco, nu_cep = :nu_cep
						WHERE id_usuario = :id_usuario";
				
				$stmt = $con->prepare($update);
				
				$params = array(':ds_usuario' => $ds_usuario,
								':ds_nome' => $ds_nome,
								':nu_cpf' => $nu_cpf,
								':ds_email' => $ds_email,
								':dt_nascimento' => $dt_nascimento,
								':st_sexo' => $st_sexo,
								':ds_endereco' => $ds_endereco,
								':nu_cep' => $nu_cep,
								':id_usuario'=>$id_usuario);
				$stmt->execute($params);

				
				echo "Dados alterados com sucesso!";
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			}
		}

        public function ExcluirAluno(array $dados)
		{
            $id_usuario	    = $dados['id_usuario'];

			
			try{
				$con = Conecta::criarConexao();
				$insert = "delete from tb_usuario
							WHERE id_usuario=:id_usuario";
				
				$stmt = $con->prepare($insert);
				
                $params = array(':id_usuario' => $id_usuario);
                                
				$stmt->execute($params);
				
				echo "Deletado com sucesso!"; 
				
			}
			catch(exception $e)
			{
				header('HTTP/1.1 500 Internal Server Error');
    			print "ERRO:".$e->getMessage();		
			} 
		}

	}

?>