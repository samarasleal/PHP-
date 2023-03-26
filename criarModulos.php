<?php
include ("index.php");
//vai ser feito um insert no banco inserindo cada modulo
?>
<div class="conteudo">
	<center>Criar Modulo</center>
	<form action="index.php" method="get">
    	<pre>
		Digite o nome do modulo:&nbsp;&nbsp;&nbsp; <input type="text" name="modulo"/><br />
		Digite a ordena&ccedil;&atilde;o no menu: <input type="text" name="ordem"/>
		<br />
		<input type="submit" value="Inserir"/>
        </pre>
	</form>
</div>