<?php
    //Attaching the Controller
	include_once("controller/Controller.php");

	//Instentiating it
	$controller = new Controller();

	//Calling differnt route
	$controller->invoke();
