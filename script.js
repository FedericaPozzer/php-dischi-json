// con vue richiama la API (axios get) e poi stampala col solito v-for


const app = Vue.createApp({
    data() {
        return {
            dischi: [],
        }
    },

    mounted() {
        axios
        .get("./script.php")
        .then((response) => {
            this.dischi = response.data;
        })
    }

})
app.mount("#myApp");

   

   
