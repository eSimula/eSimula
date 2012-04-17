<?php 
	require_once 'simpletest/autorun.php';
	require_once '../classes/Usuario.class.php';
	require_once '../classes/Moderador.class.php';
	
	/**
	 * 
	 */
	
	class TestOfModerador extends UnitTestCase {
		
		function testAdicionaQuestao(){
			$moderador = new Moderador("gleison");
			
			$this->ignoreException($moderador->adicionaQuestao("gleison","","argentina","paraguai","usa","bolivia","brasil"));
		}	
		
		function testPesquisaMembro(){
			$moderador2 = new Moderador("sara");
			
			$this->assertFalse($moderador2->pesquisaMembro(40));
		}
		
		function testPesquisaQuestao(){
			$moderador3 = new Moderador("sara");
			
			$this->assertFalse($moderador3->pesquisaQuestao(40));
		}
		
	}
	
?>