const { createApp } = Vue

createApp({
    data() {
        return {
            apiUrl:'./server.php',
            albums : [],
        }
    },
    methods: {
        getAlbums(){
            axios.get(this.apiUrl).then((response) => {
                this.albums = response.data;
            });
        }
    },

    created() {
        this.getAlbums();
    },
}).mount('#app')