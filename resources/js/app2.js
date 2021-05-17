import { createApp } from "vue"
import HomeVue from './components/Home.vue'
import Welcome from './components/Welcome.vue'
import Navbar from './components/Navbar.vue'
import Chisiamo from './components/Chisiamo.vue'
import Service from './components/Service.vue'
import Contatti from './components/Contatti.vue'

const options = {
    // data(){
    //     return {
    //         title: "Funziona"
    //     }
    // },
    // methods: {

    // },
    // template:{

    // }
}

const app = createApp(options);

app.component('Home' , HomeVue);
app.component('Welcome' , Welcome);
app.component('Navbar' , Navbar);
app.component('Chisiamo' , Chisiamo);
app.component('Service' , Service);
app.component('Contatti' , Contatti);


app.mount('#app');