<template>
    <main >
        <HeaderComponent/>
       <main class="main-container">
        <section class="section-title">
            <h2>Simulação de Financiamento</h2>
            <div class="line-title"></div>
        </section>

        <section class="section-selected">
            <h3>Selecione um veiculo que deseja simular o financiamento</h3>
            <div>
                <select class="select-options" v-model="selectedOption">
                 <option value="" disabled selected>
                    Selecione o Veiculo
                </option>
                <option
                    v-for="option in options"
                    :key="option.id"
                    :value="option.model"
                    >
                    {{ option.model }}
                </option>
                
                </select>
                <button class="btn-simulator" @click="findVehicleByModel(selectedOption)"> Simular</button>
            </div>
            <p v-if="foundVehicle">{{ foundVehicle }}</p>
        </section>
       </main>
       <MoreInfoVehicleComponent
       :photograph="photograph"
       :city="city"
       :brand="brand"
       :model="model"
       :description="description"
       :year="year"
       :milege="milege"
       :typeofexchange="typeofexchange"
       :storephone="storephone"
       :vehiclevalue="vehiclevalue"
       >

       </MoreInfoVehicleComponent>
       <FooterComponent/>
    </main>
</template>

<script>
import axios from "axios";
import HeaderComponent from "./header/HeaderComponent.vue";
import FooterComponent from "./footer/FooterComponent.vue";
import MoreInfoVehicleComponent from "./moreinfovehicle/MoreInfoVehicleComponent.vue";

export default {
    
    data() {
        return {
            foundVehicle: null,
            options: [],
            selectedOption: null,

            photograph:'',
            city: "",
            brand: "",
            model:"",
            description:"",
            year: "",
            milege:"",
            typeofexchange:"",
            storephone:"",
            vehiclevalue:"",
        };
    },
    components:{
        HeaderComponent,
        FooterComponent,
        MoreInfoVehicleComponent,
    },

    mounted() {
        this.findAllVehicles();
        this.findVehicleByModel('Fiat Uno');
    },
    methods: {
        findVehicleByModel(model) {
            axios
                .get(`/vehicle-model/${model}`)
                .then((res) => {(
                    this.photograph = res.data.photograph,
                    this.city = res.data.city,
                    this.brand = res.data.brand,
                    this.model = res.data.model,
                    this.description = res.data.description,
                    this.year = res.data.year,
                    this.milege = res.data.milege,
                    this.typeofexchange = res.data.typeofexchange,
                    this.storephone = res.data.storephone,
                    this.vehiclevalue = res.data.vehiclevalue
                    
                    )})
                .catch((error) => {
                    console.log(error);
                });
        },

        findAllVehicles() {
            axios
                .get("/vehicles")
                .then((res) => (this.options = res.data))

                .catch((error) => {
                    console.log(error);
                });
        },
    },
};
</script>

<style>
body{
    background-color:#F5F5F5;
}
.main-container{
    margin-top: 55px;
    margin-left: 45px;
    margin-right: 45px;
}

.line-title{
    background-color: #7D28F7;
    width: 55px;
    height: 3px;
    border-radius: 22px;
}
.section-selected{
    display: flex;
    background-color: #FAFAFA;
    height: 288px;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
    margin: 35px 0;
    padding-left: 25px;
}


.select-options{
    background-color: #E5E5E5;
    border-radius: 4px;
    width: 218px;
    height: 50px;
    margin-right: 15px;
    margin-top: 10px;
}

.btn-simulator{
    background-color: #7D28F7;
    width: 187px;
    height: 39px;
    border: none;
    color: white;
    border-radius: 50px;
    font-size: 18px;
    font-weight: bolder;
    margin-top: 10px;
}
@media (min-width: 892px) {
    .select-options{
    width: 300px;
}

.section-selected{
    height: 158px;
}
}
</style>