<template>
    <Navbar @component="selectedComponent = $event" />
    <component :is="selectedComponent" />
    <Footer/>
</template>

<script>
export default {
    data(){
        return {
            selectedComponent: ''

        }
    },
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