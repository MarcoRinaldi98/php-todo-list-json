<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- Link di collegamento al cdn di bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <!-- Link di collegamento al cdn di font awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- Link di collegamento al foglio di stile personalizzato -->
    <link rel="stylesheet" href="style.css">
    <!-- Titolo della pagina -->
    <title> TodoList </title>
</head>
<!-- Corpo della pagina -->
<body class="d-flex align-item-center justify-content-center bg-warning-subtle">

    <div id="app" class="p-2 my-5 border border-primary bg-primary-subtle rounded-3">
        <div class="container-sm py-5">

        <ul class="list-group">
            <li v-for="(todo, index) in todoList" class="list-group-item ms_point d-flex justify-content-between align-items-center" :key="index">
                <p class="m-0 p-0" :class="{'text-decoration-line-through': todo.done}" @click="todo.done? todo.done = false: todo.done = true">{{ todo.text }}</p>
                <i class="fa-solid fa-trash p-2 text-danger"></i>
            </li>
        </ul>

        <div class="input-group mt-3">
            <input type="text" class="form-control" v-model="todoItem" />
            <button @click="addTodo" class="btn btn-outline-primary" type="button">Add ToDo</button>
        </div>
    </div>

    
    <!-- Link di collegamento al cdn di vue.js -->
    <script src="https://unpkg.com/vue@3/dist/vue.global.js"></script>
    <!-- Link di collegamento al cdn di axios -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/axios/1.3.6/axios.min.js" integrity="sha512-06NZg89vaTNvnFgFTqi/dJKFadQ6FIglD6Yg1HHWAUtVFFoXli9BZL4q4EO1UTKpOfCfW5ws2Z6gw49Swsilsg==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <!-- Link di collegamento al mio foglio js  -->
    <script src="main.js"></script>
</body>
</html>