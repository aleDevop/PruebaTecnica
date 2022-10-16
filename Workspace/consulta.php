<?php
$user = "root";
$pass = "";
$server = "localhost";

$connection = mysqli_connect($server,$user,$pass);
$datab = "partial_dealers";
$db = mysqli_select_db($connection,$datab);

$consulta = "SELECT DISTINCT country_iso_code FROM dealerships";
$resultado = mysqli_query($connection,$consulta);
$datos = mysqli_fetch_all($resultado,MYSQLI_ASSOC);

$consulta2 = "SELECT * FROM dealerships_offices";
$result = mysqli_query($connection,$consulta2);
$datos2 = mysqli_fetch_all($result,MYSQLI_ASSOC);

$salidaArr = [];
	
	
	foreach($resultado as $code){
		$salidaArr[$code['country_iso_code']] = [];
	
$query = "SELECT * FROM dealerships WHERE country_iso_code = '".$code['country_iso_code']."'";

$resultado = mysqli_query($connection,$query);
$dealershipByCountry = mysqli_fetch_all($resultado,MYSQLI_ASSOC);

foreach($dealershipByCountry as $dealership){
    $query = "SELECT * FROM dealerships_offices WHERE dealership_id = ".$dealership['dealership_id'];

$resultado  = mysqli_query($connection,$query);
$dealershipOffices = mysqli_fetch_all($resultado,MYSQLI_ASSOC);

$dealership['dealerships_offices'] = [];
array_push($dealership['dealerships_offices'],$dealershipOffices);

array_push($salidaArr[$code['country_iso_code']],$dealership);

    }
}

echo(json_encode($salidaArr));


?>