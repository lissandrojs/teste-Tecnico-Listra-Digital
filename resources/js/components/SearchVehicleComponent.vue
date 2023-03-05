<template>
    <main class="container">
        <h1>Simulação financiamento</h1>
        <section>
            <select v-model="selectedOption" @change="findVehicleByModel(selectedOption)">
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

            <input type="text" v-model="model" />
            <p v-if="foundVehicle">{{ foundVehicle }}</p>
        </section>
        <section></section>
    </main>
</template>

<script>
import axios from "axios";

export default {
    
    data() {
        return {
            foundVehicle: null,
            options: [],
            selectedOption: null,
        };
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
