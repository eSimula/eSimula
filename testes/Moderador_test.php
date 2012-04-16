<?php 
	require_once 'simpletest/autorun.php';
	require_once '../classes/Usuario.class.php';
	require_once '../classes/Moderador.class.php';
	
	/**
	 * 
	 */
	class TestOfModerador extends UnitTestCase {
		function testAdicionaQuestao(){
			$moderador = new Moderador("jose");
			
			$this->expectException($moderador->adicionaQuestao("","brasil","argentina","paraguai","usa","bolivia","brasil"));
		}	
	}
	
?>