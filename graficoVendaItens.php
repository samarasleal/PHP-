<?php
include ("../grafico.php");

//sera feito um select para mostrar os valores vendasxintes do ano indicado por $ano
$ano=$_POST['ano'];
$janeiro=$_POST['janeiro'];
$fevereiro=$_POST['fevereiro'];
$marco=$_POST['marco'];
$abril=$_POST['abril'];

if ($_GET['itemVenda']){
	$matriz = array(10,5,4,2);
	$meta = array($janeiro,$fevereiro,$marco,$abril);
	$eixoY = array(1,4,8,10);
	$eixoX = array("Item 1", "Item 2", "Item 3", "item 4");

	$graf= new grafico();
	$g=$graf->criaGraficoBL(500,500,360);

	$g1=$graf->criaGraficoBarra($matriz,$g, "Relaчуo ano/mъs");
	$g2=$graf->criaGraficoBarra($meta,$g, "Meta por mъs");

	$graf->propGrafico($g,"Grсfico de Barra ");
	$graf->propGraficoBL($g, "", "Vendas", $eixoY, $matriz, $eixoX);
	
	$grafAgrup=$graf->agrupaGraficoBarra($g,$g1,$g2);
	
	$graf->adicionaGraficoBase($g,$grafAgrup);
	$graf->stroke($g);
}
//vai ter uma condicao para exibir grafico de venda para funcionarios e volume pegando o ano passado
else echo "erro";
?>