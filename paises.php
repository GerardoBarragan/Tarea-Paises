<?php
$paises=array();
$paises["M�xico"]=array("Guadalajara","Monterrey","Tijuana","San luis Potosi","Queretaro","Leon","Celaya","Los cabos");
$paises["Jap�n"]=array("Tokio","Osaka","Fukuoka","Hiroshima","Kobe","Kioto","Nagasaki","Nagoya","Sapporo");
$paises["Italia"]=array("Venecia","Roma","Florencia","N�poles","Siena","Pisa","G�nova","Palermo","Mil�n","Bolonia");
$paises["Brasil"]=array("Sao Paulo","Rio de Janeiro","Belo Horizonte","Porto Alegre","Brasilia, La Capital del Pa�s","Recife","Fortaleza","Salvador da Bahia","Curitiba","Campinas");
$paises["Argentina"]=array("Buenos Aires","C�rdoba C�rdoba","Rosario Santa Fe","La Plata Buenos Aires","Mar del Plata Buenos Aires","San Miguel de Tucum�n Tucum�n","Salta Salta","Santa Fe Santa Fe","Corrientes Corrientes","Bah�a Blanca Buenos Aires ");
$paises["Espa�a"]=array("Granada","cordoba","Salamanca","Sevilla","Caceres","Zaragoza","Toledo","Ronda","Cadiz","Santiago de compostela");
	echo"<ul>";
  foreach($paises as $pais =>$ciudades){
   
   echo"<li>".$pais."<ul>";
  
  foreach($ciudades as $ciudad){

    echo"<li>".$ciudad."</li>";

  }
 echo"</ul></li>";
}
  
   ?>