<?php
    //array associativa
    $todoList = [
        [
            'text' => 'Preparare da mangiare',
            'done' => false
        ],
        [
            'text' => 'Pulire la casa',
            'done' => false
        ],
        [
            'text' => 'accendere la tv',
            'done' => true
        ],
        [
            'text' => 'Andare a fare la spesa',
            'done' => false
        ],
        [
            'text' => 'Andare a dormire presto',
            'done' => false
        ]
    ];

    if(isset($_POST['todoItem'])) {
        $newTodo = [
            'text' => $_POST['todoItem'],
            'done' => false
        ];

        array_push($todoList, $newTodo);
    } 

    header('Conent-Type: application/json'); //specifico al broswer che deve utilizzare questa informazione come JSON
    echo json_encode($todoList); // tramuto l'array applicativa in array JSON
    
?>