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
       <FooterComponent/>
    </main>
</template>

<script>
import axios from "axios";
import HeaderComponent from "./header/HeaderComponent.vue";
import FooterComponent from "./footer/FooterComponent.vue";

export default {
    
    data() {
        return {
            foundVehicle: null,
            options: [],
            selectedOption: null,
        };
    },
    components:{
        HeaderComponent,
        FooterComponent
    },

    mounted() {
        this.findAllVehicles();
    },
    methods: {
        findVehicleByModel(model) {
            axios
                .get(`/vehicle-model/${model}`)
                .then((res) => (this.foundVehicle = res.data))
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
.main-container{
    background-color:#F5F5F5;
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
    height: 158px;
    justify-content: center;
    align-items: flex-start;
    flex-direction: column;
}
.select-options{
    background-color: #E5E5E5;
    border-radius: 4px;
    width: 300px;
    height: 50px;
    margin-right: 15px;
}
.btn-simulator{
    background-color: #7D28F7;
    width: 187px;
    height: 39px;
    border: none;
    color: white;
    border-radius: 50px;
}
</style>