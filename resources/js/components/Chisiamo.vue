<template>
<div class="container mt-5">
    <div class="row mt-5">
        <div class="col-12 mt-5">
<p class="fs-1 text-main text-center my-5">Il nostro <b>Staff</b></p>
        </div>
    </div>
</div>
    

    <div class="container">
        <div class="row">
            <div class="col-12">
                <Cardstaff @message="handleMessage($event)" v-for="staff in staffs" :key="staff.id" :data="staff" />
            </div>
            <div class="row my-5">
                <Cardstaff :data="staff" />
            </div>
        </div>
    </div>
</template>

<script>
import Cardstaff from './Cardstaff'
export default {
    components : {
        Cardstaff
    },
    data(){
        return{
            staffs: [
                { title: 'Dottor Sapanizza', img: '/img/volto1.jpg' , description: '"Esperto di Odontoiatria conservativa e laureato a pieni voti in Implantologia e Chirurgia orale."' },
                { title: 'Dottor Bugliasco', img: '/img/volto2.jpg' , description: '"Giovane e brillante dottore,membro da poco del nostro team di medici,vanta già numerosi interventi di impiantistica e Protesi dentaria"' },
                { title: 'Dottor Maresca', img: '/img/volto3.jpg' , description: '"Considerato un luminare della Semeiotica odontostomatologica,il dottor Maresca è un maestro in campo dentistico. Veterano del Team Colapietro"' },
                { title: 'Dottor Bonni', img: '/img/volto4.jpg' , description: '"Esperto in Endodonzia e Anestesiologia applicata vanta numerosi interventi alle spalle e centiaia di pazienti soddisfatti"' },
                { title: 'Dottoressa Monti', img: '/img/volto5.jpg' , description: '"Fondatrice e direttrice dello Studio Colapietro,da anni maestra e coordinatrice dello staff"' },
                { title: 'Dottoressa Giannotta', img: '/img/volto6.jpg' , description: '"Esperta in Endodonzia e Anestesiologia applicata vanta numerosi interventi alle spalle e centiaia di pazienti soddisfatti"' },
            ],
            staff : {}
        }
    },
    methods : {
        handleMessage(title){
            this.staff = this.staffs.find( (staff) => staff.title == title );
        }
    }
}

</script>

<style>

</style>