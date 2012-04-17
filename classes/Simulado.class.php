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
			$vetor = array(30,40,45,60,12,56);
			rsort($vetor);
			//print_r($vetor);
			$colocacao = array_keys($vetor,$quantQuestaoTotal);
			
			if ($colocacao) {
				return($colocacao[0]+1);
			}else{
				return(-1);	
			}
			
		}
	}
	
	$simulado = new Simulado();
	
	print($simulado->exibirColocacao(12));
?>