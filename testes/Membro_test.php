<?php  
	require_once 'simpletest/autorun.php';
	require_once '../classes/Usuario.class.php';
	require_once '../classes/Membro.class.php';
	
	/**
	 * 
	 */
	class TestOfMembro extends UnitTestCase {
		
		function testSugerirQuestao(){
			$membro = new Membro("gleison");
			
			$this->ignoreException($membro->sugerirQuestao("","alternativa","gleison","brasil","ifpi","ads",""));
			
		}
		
		function testEnviarResposta(){
			$membro2 = new Membro("gleison");
			
			$this->ignoreException($membro2->enviarResposta("alternativa1","alternativa2"));
			
		}
		
	}
	
?>