<!DOCTYPE html>

<html>
<head>
	<meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
	<meta charset="utf-8">
    <link href = "css/bootstrap.min.css" rel = "stylesheet">
    <link href = "css/bootstrap.css" rel = "stylesheet">
    <title>Goxhufi/Alounlasy</title>
</head>

<body>
<div class="container">

<?php

include_once "Datenbankzugriff.php";

include_once "Menu.php";

$menu = new Menu();

$menu->createMenu($db);



include_once "CMS.php";

$id = $_GET["id"];

if(!isset($id)){
    $id=1;
}

$manager = new CMS();
$manager->selectPage($id,$db);

?>

<div class="row">
    <div class="col-lg-4">
        <h2>1126139, Driton Goxhufi</h2>
        <p><a class="btn btn-success" href="http://jonathan.sv.hs-mannheim.de/~d.goxhufi" role="button">Übungen</a></p>
    </div>
    <div class="col-lg-4">
        <h2>1132174, Saikam Alounlasy</h2>
        <p><a class="btn btn-success" href="http://jonathan.sv.hs-mannheim.de/~s.alounlasy" role="button">Übungen</a></p>
    </div>
    <div class="col-lg-4">
        <h2>Code & Vorgehensweise</h2>
        <p><a class="btn btn-info" href="https://github.com/DnG17/Hochschule-Studium/commit/40e1a7e9d41fe4206225433054e60835f41d5cb9" role="button">Code Details</a></p>
    </div>
</div>

</div>

</body>

</html>

