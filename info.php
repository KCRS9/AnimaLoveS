<!DOCTYPE html>
<html lang="en">

<?php

if (isset($_GET['id'])) {
    $id = $_GET['id'];
}

include('./db_animales/db_conn.php');

$mysqli = dataBaseConection();

$mostrar = $mysqli->query("SELECT * FROM protectora WHERE id = $id");


?>


<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.3/font/bootstrap-icons.css">
    <link rel="stylesheet" href="./style/index.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"></script>
    <title>AnimaLoveS</title>
</head>
<body>
    
</body>
</html>