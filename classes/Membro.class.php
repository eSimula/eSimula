<?php
	require_once 'Usuario.class.php';
  
	/**
	 * 
	 */
	 
	//soh um teste 
	//outro coentario
	//gleison
	class Membro extends Usuario {
		
		function __construct($nome){
			parent::__construct($nome);
		}
		
		function sugerirQuestao($pergunta,$alternativa01,$alternativa02,$alternativa03,$alternativa04,$alternativa05,$resposta){
			if ($pergunta === "") {
				throw new Exception("Campo pergunta nao preenchido");
			}
			
			return TRUE;
		}
		
		function enviarResposta(){
			$numargs = func_num_args();
			if ($numargs != 1) {
				throw new Exception("Numero de argumentos invalidos");
				
			}
		}
		
	}
	
	$membro = new Membro("gleison");
	
	try{
		$membro->enviarResposta("gleison","jose");	
	}
	catch(Exception $e){
		echo($e->getMessage());
	} 
	 
	
?>