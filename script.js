
const app = new Vue({

    el:'#app',
    data:{
        discs: [],
        genres: [],
        apiUrl: 'http://localhost:8888/php-ajax-dischi/server.php'
    },
    
    methods:{
        getData(){
            axios.get(this.apiUrl).
            then(res => {
                this.discs = res.data;
                this.discs.forEach(disc => {
                    if(!this.genres.includes(disc.genre)){
                        this.genres.push(disc.genre);
                    }
                });
                
            })
        }
    },
    mounted(){
        this.getData();
    }
});