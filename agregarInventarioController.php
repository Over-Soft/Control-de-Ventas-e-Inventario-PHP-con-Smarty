<?php
require_once dirname(__FILE__)."/include/smarty.php";
require_once dirname(__FILE__) ."/include/database.php";


$db=getDb();//Abrir conexion

$sql="SELECT * FROM producto";
$aProductos = $db->GetAll($sql);
$oSmarty -> assign("productos",$aProductos);

$title="Agregar inventario";
$oSmarty->assign("t","$title");


$oSmarty->assign("contenido", "agregarInventario.html.tpl");
$oSmarty -> display("layout.html.tpl"); 

?>