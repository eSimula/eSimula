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
			
			$this->expectException($moderador->adicionaQuestao("ddddddd","brasil","argentina","paraguai","usa","bolivia","brasil"));
		}	
	}
	
?>