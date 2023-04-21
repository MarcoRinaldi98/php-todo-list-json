const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            todoItem: ''
        }
    },
    // Funzioni
    methods: {
        // Funzione per leggere il contenuto dell'array situata in script.php
        readList() {
            axios.get('script.php')
                .then(response => {
                    console.log(response);
                    this.todoList = response.data;
                })
        },
        // Funzione per aggiungere elementi all'array contenente la lista di todo
        addTodo() {
            const data = {
                todoItem: this.todoItem
            };

            axios.post('script.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' } // Per farlo funzionare come se fosse un form 
                }
            ).then(response => {
                this.todoList = response.data;
                this.todoItem = '';
            })
        },
        // Funzione per rimuovere elementi all'array contenente la lista di todo
        removeTodo(index) {
            console.log(index);
            const data = {
                removeTask: index
            };

            axios.post('script.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' } // Per farlo funzionare come se fosse un form 
                }
            ).then(response => {
                this.todoList = response.data;
            })
        },
        // Funzione per barrare il testo delle task con 'done' = true
        toggleDone(index) {
            console.log(index);
            const data = {
                doneTask: index
            };

            axios.post('script.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' } // Per farlo funzionare come se fosse un form 
                }
            ).then(response => {
                this.todoList = response.data;
            })
        }
    },
    // Funzioni all'avvio
    mounted() {
        this.readList();
    }
}).mount('#app')