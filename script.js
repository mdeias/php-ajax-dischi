
const app = new Vue({

    el:'#app',
    data:{
        discs: [],
        apiUrl: 'http://localhost:8888/php-ajax-dischi/server.php'
    },
    
    methods:{
        getData(){
            axios.get(this.apiUrl).
            then(res => {
                this.discs = res.data;
                console.log(res.data);
            })
        }
    },
    mounted(){
        this.getData();
    }
});