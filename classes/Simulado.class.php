<?php  
	class Simulado{
		function geraSimulado(){
			$vetor = array('gleison','andre','allan');
			
			$quantElementos = count($vetor);
			
			if ($quantElementos < 10) {
				throw new Exception("quantidade insuficiente de elementos");
				
				
			}
		}
		
		function exibirScore($num){
			//num = quantidade de questoes acertadas
			
			if ($num < 0 or $num > 10) {
				throw new Exception("Score incorreto");
				
			}
		}
		
		
		function exibirColocacao($quantQuestaoTotal){
			if ($quantQuestaoTotal < 0) {
				throw new Exception("Quantidade de Questoes invalidas");
				
			}
			
			
			 
			
		}
	}
?>