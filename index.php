<?php 
class index{
function estilo(){
	echo '<head>
			<link rel="stylesheet" type="text/css" href="estilo.css" />
			<title>SISTEMA X</title>
		</head>';
}
function body(){ 
	echo '<body style="margin:0px; height:100%;">';
}
function topo(){
	echo '<div id="topo">
  			<img src="topoTW.jpg" width="100%" height="155"/>   
	</div>';
}
function menu(){
echo '<div style="background-color:#666666; height:25px; margin:0px;">
	<ul class="menu">
		<li>
    		<a href="#" title="Administrativo">Administrativo</a>
            <ul style="	top:25px; left:-10px; ">
            	<li>
                    <a href="conexaoConfig.php" title="Configurar Conex&atilde;o"/>Conex&atilde;o</a>        	
             	</li>
               	<li>
                    <a href="#" title="Gerenciar Usu&aacute;rios"/>Usu&aacute;rios</a> 
                    <ul style="	top:34px; left:73">
                		<li>
                        	<a href="criarUsuarios.php" title="Criar usu&aacute;rios"/>Criar </a>
                   		</li>
                  		<li>
                        	<a href="editarUsuarios.php" title="Editar Modulos"/>Editar</a>
                    	</li>
                  		<li>
                        	<a href="autorizacoes.php" title="Definir autorizações"/>Autoriza&ccedil;&otilde;es</a>
                   		</li>
                    </ul>        	
				</li>
                <li>
                    <a href="#" title="Configurar M&oacute;dulos"/>M&oacute;dulos</a>
                    <ul style="	top:58px; left:73">
                    	<li>
                        	<a href="criarModulos.php" title="Criar Modulos"/>Criar </a>
                        </li>
                        <li>
                        	<a href="editarModulos.php" title="Editar Modulos"/>Editar</a>
                        </li>
                    </ul>        	
                </li>
                <li>
                    <a href="#" title="Configurar Gr&aacute;fico"/>Gr&aacute;ficos</a>        	
                    <ul style="	top:86px; left:73">
                    	<li>
                        	<a href="criarGraficos" title="Criar Graficos"/>Criar </a>
                        </li>
                        <li>
                        	<a href="vincularModulos" title="Vincular Modulos"/>Vincular</a>
                        </li>
                         <li>
                        	<a href="definirMetas" title="Definir Metas"/>Metas</a>
                        </li>
                    </ul>
                </li>
            </ul>
     	</li>
      	<li>
            <a href="#" title="M&oacute;dulos"/>M&oacute;dulos</a>
            <ul style="top:25px; left:100px; ">';
			//salvar modulos no banco para pega-los e exbir aki

			/*if ($_GET['modulo']){
				$modulo=$_GET['modulo'];
				select 
				echo'<li>
                    	<a href=""$modulo".php"/>'; echo '$modulo'; echo '</a>
                	</li>';
			}*/
			echo'<li>
                    <a href="parceiroNegocios.php" title="Parceiros de Neg&oacute;cios"/>Parceiro de Neg&oacute;cios</a>        		
                </li>
                <li>
                    <a href="oportunidadeVendas.php" title="Oportunidade de Vendas"/>Oportunidade de Vendas</a>        		
                </li>
				<li>
                    <a href="vendas.php" title="Vendas"/>Vendas&nbsp;&nbsp;&nbsp;</a>        	
                </li>
                <li>
                    <a href="compras.php" title="Compras"/>Compras</a>    
                </li>
                <li>
                    <a href="estoque.php" title="Estoque"/>Estoque</a>    
                </li>
                <li>
                    <a href="serviços.php" title="Serviços"/>Servi&ccedil;os</a>    
                </li>
                <li>
                    <a href="recursosHumanos.php" title="Recursos Humanos"/>Recursos Humanos</a>    
                </li>
            </ul>
        </li>
    </ul>
</div>';
} 
}
$i= new index();
$i->estilo();
$i->body();
$i->topo();
$i->menu();
?>



