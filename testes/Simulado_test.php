<?php  
	require_once 'simpletest/autorun.php';
	require_once '../classes/Simulado.class.php';
	
	/**
	 * 
	 */
	class TestOfSimulado extends UnitTestCase {
		
		function testGeraSimulado() {
			$simulado = new Simulado();
			
			$this->ignoreException($simulado->geraSimulado());
		}
	}
	
?>