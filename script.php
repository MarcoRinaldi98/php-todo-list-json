<?php
    //array applicativa
    $todoList = [
        'Preparare da mangiare',
        'Pulire la casa',
        'accendere la tv',
        'Andare a fare la spesa',
        'Andare a dormire presto'
    ];


    header('Conent-Type: application/json'); //specifico al broswer che deve utilizzare questa informazione come JSON
    echo json_encode($todoList); // tramuto l'array applicativa in array JSON
    
?>