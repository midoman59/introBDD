<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */
//$link=  mysqli_connect("localhost","root","", "formation")
//		or die("Impossible de se connecter : ".mysql_error());
//
//$resultat=  mysqli_query($link, 'SELECT * FROM `page`');
//print_r($resultat);
//
//while ($data=  mysqli_fetch_assoc($resultat))
//{
//	echo $data['id'];
//	echo $data['titre']."<br/>";	
//}
//
//echo 'connexion réussie';
//mysqli_close($link);



$link=  mysqli_connect("localhost","root","", "formation")
		or die("Impossible de se connecter : ".mysql_error());
mysqli_query($link,"SET NAMES UTF8");


$resultat=  mysqli_query($link, 'SELECT * FROM `page`');

while ($data=  mysqli_fetch_assoc($resultat))
{
	echo '<a href="http://localhost/pasSql/index.php?id='.$data['id'].' style="display:inline-block">'.$data['titre'].'</a></br>';	
}

if(isset($_GET['id']))
{
	$resultat=  mysqli_query($link, "SELECT * FROM `page` WHERE `id`='".$_GET['id']."'");

while ($data=  mysqli_fetch_assoc($resultat))
{
	echo $data['contenu'];	
}
}

mysqli_close($link);
?>