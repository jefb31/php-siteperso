<?php

/* 
vous ajouterez ici les fonctions qui vous sont utiles dans le site,
je vous ai créé la première qui est pour le moment incomplète et qui devra contenir
la logique pour choisir la page à charger
*/

function getContent(){
	if(!isset($_GET['page'])){				/*  ! indique si cette page n existe pas va vers page homme.php*/
		include __DIR__.'/../pages/home.php';
	} else {
		// le reste du code en gros les routes vers chaque page
		//if(empt($_GET)){
		//	include__DIR__.'/../pages/'
		
	}
}

function getPart($name){
	include __DIR__ . '/../parts/'. $name . '.php';
}


?>