<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link di collegamento al cdn di bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Titolo della pagina -->
    <title> TodoList </title>
</head>
<body class="d-flex align-item-center justify-content-center">

    <div id="app">
        <div class="container-sm py-5">
        <ul class="list-group">
            <li v-for="todo in todoList" class="list-group-item">
                {{ todo }}
            </li>
        </ul>
    </div>

    
    <!-- Link di collegamento al cdn di vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Link di collegamento al cdn di axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Link di collegamento al mio foglio js  -->
    <script src='main.js'></script>
</body>
</html>