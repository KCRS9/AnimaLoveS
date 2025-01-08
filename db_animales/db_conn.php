<?php


function dataBaseConection(string $username = 'root', string $password = "", string $database = "animales"): mysqli
{
    $mysqli = new mysqli("127.0.0.1", $username, $password, $database, 3306);

    if ($mysqli->connect_errno) {
        echo "Fallo al conectar a MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
    }

    return $mysqli;
}


function genericExecution(string $query, string $types, array $values, bool $isSelect = false): mixed
{
    //call the global variable how needs to be created
    global $mysqli;

    //prepare the SQL statement
    $sentence = $mysqli->prepare($query);
    if (!$sentence) {
        // echo "Falló la preparación: (" . $mysqli->errno . ") " . $mysqli->error;
        echo "<h1 syle='color:red'>Fails to prepare: (" . $mysqli->errno . ") " . $mysqli->error . "</h1>";
        exit();
    }

    //Bind the statement parameters to the values I will use for the query
    //Los tres puntos los uso para "expandir los valores del array
    $bind = $sentence->bind_param($types, ...$values); //the tree dots are for "split" the array values
    if (!$bind) {
        //echo "Falló el enlace: (" . $sentence->errno . ") " . $sentence->error;
        echo "<h1 syle='color:red'>Fails to link: (" . $sentence->errno . ") " . $sentence->error . "</h1>";
        $sentence->close();
        exit();
    }

    // Execute the statement
    $result = $sentence->execute();
    if (!$result) {
        // echo "Falló la ejecución: (" . $sentence->errno . ") " . $sentence->error;
        echo "<h1 syle='color:red'>Fails to execute: (" . $sentence->errno . ") " . $sentence->error . "</h1>";
        $sentence->close();
        exit();
    }

    // Just in the case the query is a select I will return the result
    if ($isSelect) {
        $result = $sentence->get_result();
        $sentence->close(); //its not necessary
        return $result;
    }

    // Cierra la sentencia y retorna éxito
    $sentence->close();
    return true;
}


