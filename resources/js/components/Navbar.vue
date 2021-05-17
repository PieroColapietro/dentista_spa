<template>

        <div class="container-fluid nav-custom col-12 fixed-top">
            <div class="row" id="ghost-nav">
                <a class="col-2 he-li ms-5 text-end mt-3">
                    Prenota un appuntamento
                </a>
    
                <a class="col-1 text-center mt-3 he-li">
                    Chiama subito
                </a>
                <a class="col-1 mt-3 he-li">
                    Invia una email
                </a>
                <div class="col-6 ms-5 text-end mt-3">
                    <i class="fab fa-instagram me-2"></i>
                    <i class="fab fa-facebook"></i>
                    <i class="fab fa-youtube ms-2"></i>
                </div>
            </div>
            <hr>
    
            <div class="fs-4 brand">
                <i class="fas fa-tooth me-2 mt-3"></i>
                Studio <b>Colapietro</b>
            </div>
            <ul class="nav justify-content-end me-5">
                <li class="nav-item me-5" id="item-nav">
                    <a @click="$emit('component' , 'Welcome')" class="nav-link active me-5 he-li" aria-current="page">Home</a>
                </li>
                <li class="nav-item me-5" id="item-nav">
                    <a @click="$emit('component' , 'Chisiamo')" class="nav-link me-5 he-li">Chi siamo</a>
                </li>
                <li class="nav-item me-5" id="item-nav">
                    <a @click="$emit('component' , 'Service')" class="nav-link me-5 he-li">Servizi</a>
                </li>
                <li class="nav-item me-5" id="item-nav">
                    <a @click="$emit('component' , 'Contatti')" class="nav-link me-5 he-li" tabindex="-1" aria-disabled="true">Contatti</a>
                </li>
            </ul>
        </div>

</template>

    
<script>
export default {
    methods : {

    },
    computed : {

    },
    created(){

    }
}
</script>

<style>

</style>