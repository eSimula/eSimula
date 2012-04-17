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
		
		function testExibirScore(){
			$simulado2 = new Simulado();
			
			$this->ignoreException($simulado2->geraSimulado());
		}
		
		function testExibirColocacao(){
			$simulado3 = new Simulado();
			
			$this->assertEqual($simulado3->exibirColocacao(60),1);
		}
	}
	
?>