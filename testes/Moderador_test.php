<?php 
	require_once 'simpletest/autorun.php';
	require_once '../classes/Usuario.class.php';
	require_once '../classes/Moderador.class.php';
	
	/**
	 * 
	 */
	
	class TestOfModerador extends UnitTestCase {
		/*
		function testAdicionaQuestao(){
			$moderador = new Moderador("gleison");
			
			$this->ignoreException($moderador->adicionaQuestao("gleison","jose","argentina","paraguai","usa","bolivia","brasil"));
		}	
		
		function testPesquisaMembro(){
			$moderador = new Moderador("sara");
			
			$this->assertFalse($moderador->pesquisaMembro(40));
		}
		*/
		function testPesquisaQuestao(){
			$moderador = new Moderador("sara");
			
			$this->assertFalse($moderador->pesquisaQuestao(40));
		}
		
	}
	
?>