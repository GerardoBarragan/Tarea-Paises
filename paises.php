<?php
$paises=array();
$paises["México"]=array("Guadalajara","Monterrey","Tijuana","San luis Potosi","Queretaro","Leon","Celaya","Los cabos");
$paises["Japón"]=array("Tokio","Osaka","Fukuoka","Hiroshima","Kobe","Kioto","Nagasaki","Nagoya","Sapporo");
$paises["Italia"]=array("Venecia","Roma","Florencia","Nápoles","Siena","Pisa","Génova","Palermo","Milán","Bolonia");
$paises["Brasil"]=array("Sao Paulo","Rio de Janeiro","Belo Horizonte","Porto Alegre","Brasilia, La Capital del País","Recife","Fortaleza","Salvador da Bahia","Curitiba","Campinas");
$paises["Argentina"]=array("Buenos Aires","Córdoba Córdoba","Rosario Santa Fe","La Plata Buenos Aires","Mar del Plata Buenos Aires","San Miguel de Tucumán Tucumán","Salta Salta","Santa Fe Santa Fe","Corrientes Corrientes","Bahía Blanca Buenos Aires ");
$paises["España"]=array("Granada","cordoba","Salamanca","Sevilla","Caceres","Zaragoza","Toledo","Ronda","Cadiz","Santiago de compostela");
	echo"<ul>";
  foreach($paises as $pais =>$ciudades){
   
   echo"<li>".$pais."<ul>";
  
  foreach($ciudades as $ciudad){

    echo"<li>".$ciudad."</li>";

  }
 echo"</ul></li>";
}
  
   ?>