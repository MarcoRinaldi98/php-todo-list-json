const { createApp } = Vue

createApp({
    data() {
        return {
            todoList: [],
            todoItem: ''
        }
    },
    methods: {
        // Funzione per leggere il contenuto dell'array situata in script.php
        readList() {
            axios.get('script.php')
                .then(response => {
                    console.log(response);
                    this.todoList = response.data;
                })
        },
        // Funzione per aggiungere elementi all'array contenente la lista di todo in script.php
        addTodo() {
            const data = {
                todoItem: this.todoItem
            };
            axios.post('script.php', data,
                {
                    headers: { 'Content-Type': 'multipart/form-data' }
                }
            ).then(response => {
                this.todoList = response.data;
                this.todoItem = '';
            })
        }
    },
    // Funzioni all'avvio
    mounted() {
        this.readList();
    }
}).mount('#app')