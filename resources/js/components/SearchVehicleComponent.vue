<template>
    <div class="container">
        <h1>Simulação financiamento</h1>
        <section>
            <input type="text" v-model="model">
            <button @click="findVehicleByModel(model)">Buscar</button>
            <p v-if="foundVehicle">{{ foundVehicle }}</p>
        </section>
    </div>
</template>

<script>
import axios from 'axios';

    export default {
        data () {
            return {
                foundVehicle: ''
            }
        },
        methods:{
            findVehicleByModel(model){
            axios.get(`/vehicle-model/${model}`).then(res => this.foundVehicle = res.data).catch(error => {
                    console.log(error);
                    });
        }
        }
    }
</script>
