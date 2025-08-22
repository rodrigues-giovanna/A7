<?php
	$numero = 23412345.67;
	$separador_decimal = ',';
	$separador_milhar = '.';
	$casas_decimais = 2;
	$prefixo = 'R$ ';
	$sufixo = ' (BRL)';
	$numero_formatado = number_format(num: $numero, decimals: $casas_decimais, decimal_separator: $separador_decimal, thousands_separator: $separador_milhar);
	$numero_formatado = $prefixo . $numero_formatado . $sufixo;
	echo $numero_formatado; // Saída: R$ 12.345,67 (BRL)
	
	//Exemplo de função
	function formatar($numero): string {
		$retorno = number_format(num: $numero, decimals: 2, decimal_separator: ',', thousands_separator: '.');
		return $retorno;		
	}
	
	echo '<br>' . formatar(numero: $numero);
?>
