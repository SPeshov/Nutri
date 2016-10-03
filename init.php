<?php
  // Променливите active# и prikaz# ги користам во form.php за прикажувње на соодветниот tab
  $active1 = " ";
  $active2 = " ";
  $active3 = " ";

  $prikazi1 = " ";
  $prikazi2 = " ";
  $prikazi3 = " ";
  $LIMIT = "100";

  // Со овие услови се гледа која форма е изберена и се зима селектираната вредност во Sostojka и потоа ја користам во rezultati.php
  if (isset($_POST['izbor'])){
  	$Sostojka = $_POST["izbor"];
  	$text = $_POST["make_text"];
  	$active1 = "active";
    $prikazi1 = "active";

  }
  if (isset($_POST['izbor2'])){
  	$Sostojka = $_POST["izbor2"];
  	$text = $_POST["make_text2"];
  	$active1="active";
    $prikazi1 = "active";
  }
  if (isset($_POST['izbor3'])){
  	$Sostojka = $_POST["izbor3"];
  	$text = $_POST["make_text3"];
  	$active1="active";
    $prikazi1 = "active";
  }
  if (isset($_POST['izbor4'])){
  	$Sostojka = $_POST["izbor4"];
  	$text = $_POST["make_text4"];
  	$active2 = "active";
  	$prikazi2 = "active";
  	
  }
  if (isset($_POST['izbor5'])){
    $Sostojka = $_POST["izbor5"];
    $text = $_POST["make_text5"];
    $active3 = "active";
    $prikazi3 = "active";
    
  }

    



  
    // Вчитување на ARC2 класите
    include_once('semsol/ARC2.php'); 

    //Поставување на sarql endpoint-от
    $dbpconfig = array(
    "remote_store_endpoint" => "http://dbpedia.org/sparql",
     );
   
    // Повразување со endpoint-от
    $store = ARC2::getRemoteStore($dbpconfig); 
    // Доколку не се повразе успешно најави error
    if ($errs = $store->getErrors()) {
       echo "<h1>Грешка при поврзување со endpoint-от<h1>" ;
    } 

?>