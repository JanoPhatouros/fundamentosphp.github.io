<?php
class MvcController
{
	public function plantilla()
	{

		include "views/templates.php";

	}


	public function enlacesPaginasController()
	{

		if (isset($_GET["action"])) {
			$enlaces = $_GET["action"];
		} else {
			$enlaces = "index";
		}



		if ($enlaces == "conexion" || $enlaces == "borrar" || $enlaces == "modificar" || $enlaces == "tabla" || $enlaces == "contacto" || $enlaces == "guardar" || $enlaces == "inicio" || $enlaces == "ipad" || $enlaces == "iphone" || $enlaces == "mac" || $enlaces == "watch") {

			$modulo = "views/" . $enlaces . ".php";
			include $modulo;
		} elseif ($enlaces == "index") {
			$modulo = "views/inicio.php";
			include $modulo;
		} else {
			$modulo = "views/inicio.php";
			include $modulo;
		}
	}
}