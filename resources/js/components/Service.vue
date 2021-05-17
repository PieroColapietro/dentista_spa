<template>
  <div class="container mt-5">
    <div class="row mt-5">
      <div class="col-12 mt-5">
        <p class="fs-1 text-primary text-center mt-5 mb-5">
          I nostri <b>Servizi</b>
        </p>
      </div>
    </div>
  </div>
  <div class="container">
    <div class="row">
      <div class="col-12">
        <Cardservice
          @message="handleMessage($event)"
          v-for="service in services"
          :key="service.id"
          :data="service"
        />
      </div>
      <div class="row my-5">
        <Cardservice :data="service" />
      </div>
    </div>
  </div>
</template>

<script>
import Cardservice from "./Cardservice";
export default {
  components: {
    Cardservice,
  },
  data() {
    return {
      services: [
        {
          title: "Ortodonzia",
          description:
            "Ortodonzia è la disciplina odontoiatrica che si occupa dello studio, della diagnosi e della terapia della posizione anomala di uno o più elementi dentali, per il danno che questa alterazione porta sulla estetica del volto e sulle funzioni della respirazione, masticazione e fonazione.",
          img: "/img/serv1.jpg",
          price: "50$",
        },
        {
          title: "Estetica Dentale",
          description:
            "La odontoiatria estetica è generalmente utilizzata per riferirsi a qualsiasi lavoro dentale che migliora ogni aspetto (anche se non la funzionalità) di denti, gengive o morso. Si concentra sul miglioramento della estetica dentale e aspetto generale del sorriso",
          img: "/img/serv2.jpg",
          price: "150$",
        },
        {
          title: "Protesi Dentali",
          description:
            "Una protesi dentaria è un manufatto, realizzato da un odontotecnico abilitato, sotto la guida di un odontoiatra, utilizzata per aggiustare la dentatura originaria persa o compromessa per motivi funzionali e/o estetici. Gli impianti sono usati per supportare le protesi dentali.",
          img: "/img/serv3.jpg",
          price: "200$",
        },
        {
          title: "Implantologia",
          description:
            "Per implantologia (dentale) si intende un insieme di tecniche chirurgiche atte a riabilitare funzionalmente un paziente affetto da edentulismo totale o parziale mediante per utilizzo di impianti dentali ovverosia dispositivi, metallici e non, inseriti chirurgicamente nell osso.",
          img: "/img/serv4.jpg",
          price: "300$",
        },
        {
          title: "Paradontologia",
          description:
            "La parodontologia è una branca della odontoiatria che studia i tessuti del parodonto e le patologie ad esso correlate. Il parodonto è costituito da gengiva, osso alveolare, cemento radicolare (tessuto che ricopre la radice del dente) e legamento parodontale",
          img: "/img/serv5.jpg",
          price: "300$",
        },
      ],
      service: {},
    };
  },
  methods: {
    handleMessage(title) {
      this.service = this.services.find((service) => service.title == title);
    },
  },
};
</script>

<style>
</style>