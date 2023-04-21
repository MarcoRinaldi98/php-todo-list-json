<?php

    if(file_exists('database.json')) {
        $string = file_get_contents('database.json'); // recupero la mia array dal mio "database" esterno
        $todoList = json_decode($string, true); // trasformo la stringa json recuperata in precedenza in un array php
    } else {
        $todoList = [];
    }

    if(isset($_POST['todoItem'])) {
        $todoList[] = [
            'text' => $_POST['todoItem'],
            'done' => false
        ];

        $myString = json_encode($todoList); // trasformo in codice json la mia array associativo
        file_put_contents('database.json', $myString); // creo un file esterno con la mia array decodificata

    } elseif (isset($_POST["removeTask"])) {
        $todoIndex = $_POST["removeTask"];
        unset($todoList[$todoIndex]);

        $myString = json_encode($todoList); // trasformo in codice json la mia array associativo
        file_put_contents("todo.json", $myString); // creo un file esterno con la mia array decodificata

    } elseif (isset($_POST["doneTask"])) {
        $taskIndex = $_POST["doneTask"];
        $todoList[$taskIndex]["done"] = !$todoList[$taskIndex]["done"];
        
        $myString = json_encode($todoList); // trasformo in codice json la mia array associativo
        file_put_contents("todo.json", $myString); // creo un file esterno con la mia array decodificata
    }

    header('Conent-Type: application/json'); //specifico al broswer che deve utilizzare questa informazione come JSON
    echo json_encode($todoList); // tramuto l'array applicativa in array JSON
    
?>