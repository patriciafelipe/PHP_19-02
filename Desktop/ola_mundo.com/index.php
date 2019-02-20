
	<?php
		// Comandos de saída echo, var_dump, print_r
		//echo comando de saída

		// echo "Eu não gostei do Easyphp";
		// print("Eu não gosteu do Easyphp");
		// $vetor = array('Palio','Gol', 'Fiesta', 'Corsa');
		// var_dump($vetor); //Forma como imprimi *(Mais bagunçado)*
 	
 	// $vetor = array('Palio','Gol', 'Fiesta', 'Corsa');
 	 // print_r($vetor); *(Mais Organizado)*

 	 	// Variáveis começa sempre com cifrão
 	// $nome = "Patrícia";
 	// $sobrenome = "Felipe";
 	// echo "$nome $sobrenome";

 	 // Dicas do Prof° André
 	 /* Nunca faça isso
 	Variáveis iniciadas com Números
 	Não deixe espaços entre as variáveis, use traços
 	Não use caracteres especiais ! @ # $ % ¨ & * () ()
 	Não crie variáveis com mais de 15 caracteres
	
	Use variaveis em minusculo
	em várias compostas use a primeira letra da segunda palavra em maiúsculo. Ex: codPgto
	ou use o underline ( _ ) paara separar as palavras. Ex: cod_pgto  
	*/


	// $a = 5;
	// $b = $a;
	// $b = 10;

	// echo "$a";
	// echo "$b";

	// Variáveis Booleano

	// $exibir_nome = true;
	// if ($exibir_nome) {
		// echo 'José da Silva';
	//}

	//	$umidade = 80;
	//	$vaichover = ($umidade > 90);

	// if ($vaichover) {
		// echo "Está chovendo";
	// }
	// else{
		// echo "Não está chovendo";
	// }

		// Variável do tipo numérico
		$a = 1234; // Numero Decimal
		$a = -1234;	// Negativo
		$a = 0123; // Numeração Octagonal
		$a = 0x1a; //Hexadecimal
		$a = 1.234; //ponto Flutuante
		$a = 4e23; // Notações Cientifícas

		// Variáveis do Tipo String
			//$variavel = "Isto é um teste";

		// Aspas duplas usada printa na tela
		// Aspas simples para dar valor as variáveis

		// Variáveis do tipo Array

		//	$carros = array('Palio', 'Corsa', 'Gol');
		//	echo $carros [1]; // para imprimir a posição do vetor

			/**
			 * 
			 */
			class Computador
			{
					var $cpu;
				
				function ligar ()
				{
					echo "Ligando o Computador a {$this ->cpu}...";
				}
			}

			$obj = new Computador;
			$obj-> cpu="500 mhz"; 
			$obj-> ligar();




	?>

