<html>
<head>
<link rel="stylesheet" type="text/css" href="estilo.css" />
</head>
<body>
<div id="topo">
  <img src="topoTW.jpg" width="100%" height="155"/>   
</div>
<div style="background-color:#666666; height:25px; margin:0px;">
<ul class="menu">
	<li>
    	<a href="#" title="Administrativo">Administrativo</a>
        <ul style="	top:25px; left:-10px; background-color:#fff; ">
        	<li>
        		<a href="usuario.php" title="Gerenciar Usu&aacute;rios"/>Usu&aacute;rios</a>        	</li>
        	<li>
        		<a href="moduloConfig.php" title="Configurar M&oacute;dulos"/>M&oacute;dulos</a>        	</li>
            <li>
        		<a href="conexaoConfig.php" title="Configurar Conex&atilde;o"/>Conex&atilde;o</a>        	</li>
        </ul>
    </li>
  <li>
    	<a href="#" title="M&oacute;dulos"/>M&oacute;dulos</a>
        <ul style="	top:25px; left:100px; background-color:#fff; ">
   	  <li>
        		<a href="usuario.php" title="Vendas"/>Vendas&nbsp;&nbsp;&nbsp;</a>        	</li>
        	<li>
        		<a href="moduloConfig.php" title="Compras"/>Compras</a>        	</li>
        </ul>
	</li>
</ul>
</div>
</body>
</html>
<?php
echo '<div class="conteudo">
		<p class="style2">Modulo</p>
		<b> Selecione o grafico que deseja criar: </b><br />
		<a href="moduloConfig.php?itemVenda=1"><input type="radio" /></a> Itens<br />
		<a href="venda.php?funcionarioVenda=1"><input type="radio" /></a> Funcionarios<br />
		<a href="venda.php?volumeVenda=1"><input type="radio" /></a> Volume<br />';
if($_GET['itemVenda']){
	echo "<div class='selecao'>
			<form method='post' action='graficoVendaItens?itemVenda=1.php'>". 
				"<b> Selecione a meta para cada mês: </b><br />".
				"<b>Ano:</b> <input type='text' name='ano'/> <center><b>Mês:</b></center> ".
				"<pre>Janeiro:   <input type='text' name='janeiro'/><br />".
				"Fevereiro: <input type='text' name='fevereiro'/><br />".
				"Março:     <input type='text' name='marco'/><br />".
				"Abril:     <input type='text' name='abril'/><br />".
				"Maio:      <input type='text' name='maio'/><br />".
				"Junho:     <input type='text' name='junho'/><br />".
				"Julho:     <input type='text' name='julho'/><br />".
				"Agosto:    <input type='text' name='agosto'/><br />".
				"Setembro:  <input type='text' name='setembro'/><br />".
				"Outubro:   <input type='text' name='outubro'/><br />".
				"Novembro:  <input type='text' name='novembro'/><br />".
				"Dezembro:  <input type='text' name='dezembro'/>".
				"<input style='margin-left:280px;' type='submit' value='Enviar' />".
				"</div></pre>".
			"</form>";
}
else if($_GET['funcionarioVenda']){
	echo "<form method='post' action='graficoBarra2?funcionarioVenda=1.php'>". 
	"Periodo: <input type='text' name='ano'/>".
	"<input type='submit' value='enviar'/>".
	"</form>";
}
else if($_GET['volumeVenda']){
	echo "<form method='post' action='graficoBarra2?volumeVenda=1.php'>". 
	"Periodo: <input type='text' name='ano'/>".
	"<input type='submit' value='enviar'/>".
	"</form>";
}
echo '</div>';
?>
