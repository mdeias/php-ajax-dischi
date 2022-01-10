
const app = new Vue({

    el:'#app',
    data:{

    },
    
    methods:{
        getData(){
            console.log('get data');
        }
    },
    mounted(){
        this.getData();
    }
});