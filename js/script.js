const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl:'./server.php',
            list : [],
        }
    },
    methods: {
        getTodoList(){
            axios.get(this.apiUrl).then((response) => {
                this.list = response.data;
            });
        }
    },

    created() {
        this.getTodoList();
    },
}).mount('#app')