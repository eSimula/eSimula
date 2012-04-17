<?php  
	/**
	 * 
	 */
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
		
	}
	
?>