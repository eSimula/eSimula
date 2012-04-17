<?php  
	require_once 'Usuario.class.php';
	
	/**
	 * 
	 */
	class Moderador extends Usuario {
		
		function __construct($nome) {
			parent::__construct($nome);
		}
		
		function adicionaQuestao($pergunta,$alternativa01,$alternativa02,$alternativa03,$alternativa04,$alternativa05,$resposta){
			if ($pergunta === "") {
				throw new Exception("Campo pergunta nao preenchido");
				
			}
			
			if ($alternativa01 === "") {
				throw new Exception("Campo alternativa 1 nao preenchido");
				
			}
			
			if ($alternativa02 === "") {
				throw new Exception("Campo alternativa 2 nao preenchido");
				
			}
			
			if ($alternativa03 === "") {
				throw new Exception("Campo alternativa 3 nao preenchido");
				
			}
			
			if ($alternativa04 === "") {
				throw new Exception("Campo alternativa 4 nao preenchido");
				
			}
			
			if ($alternativa05 === "") {
				throw new Exception("Campo alternativa 5 nao preenchido");
				
			}
			
			if ($resposta === "") {
				throw new Exception("Campo resposta nao preenchido");
				
			}
			
			return TRUE;
						
		}
		
	}
	
	
?>