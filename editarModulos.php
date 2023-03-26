<?php
include ("index.php");
//vai ser feito um select e alter table no banco alterando cada modulo
?>
<div class="conteudo">
	<center>Editar Modulo</center>
	<form action="index.php" method="get">
    	<pre>
		Selecione o  modulo:&nbsp;&nbsp;&nbsp; 
        <select>
        	<option value="$valordobanco">$valordobanco</option>
            <option value="$valordobanco">$valordobanco</option>
            <option value="$valordobanco">$valordobanco</option>
        </select> 
		<br />
		<input type="submit" value="Editar"/>
        </pre>
	</form>
</div>