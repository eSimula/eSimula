<?php  
	class Simulado{
		function geraSimulado(){
			$vetor = array('gleison','andre','allan');
			
			$quantElementos = count($vetor);
			
			if ($quantElementos < 10) {
				throw new Exception("quantidade insuficiente de elementos");
				
				
			}
		}
	}
?>