<template>
    <main class="container">
       <form @submit.prevent="submit">
        <section>
            <label for="foto">Foto</label>
            <input type="text" v-model="formPayload.photograph">
        </section>
        <section>
            <label for="foto">Cidade</label>
            <input type="text" v-model="formPayload.city">
        </section>
        <section>
            <label for="foto">Marca</label>
            <input type="text" v-model="formPayload.brand">
        </section>
        <section>
            <label for="foto">Modelo</label>
            <input type="text" v-model="formPayload.model">
        </section>
        <section>
            <label for="foto">Descrição</label>
            <input type="text" v-model="formPayload.description">
        </section>
        <section>
            <label for="foto">Ano</label>
            <input type="text" v-model="formPayload.year">
        </section>
        <section>
            <label for="foto">Quilometragem</label>
            <input type="text" v-model="formPayload.milege">
        </section>
        <section>
            <label for="foto">Tipo de cambio</label>
            <input type="text" v-model="formPayload.typeofexchange">
        </section>
        <section>
            <label for="foto">Telefone da loja</label>
            <input type="text" v-model="formPayload.storephone">
        </section>
        <section>
            <label for="foto">Valor do veiculo</label>
            <input type="text" v-model="formPayload.vehiclevalue">
        </section>
        <div>
        <button type="submit" @click.prevent="handleSubmit()">Cadastra Carro</button>
      </div>
       </form>
    </main>
</template>

<script>

    export default {
        data(){
            return{
                formPayload :{
                    photograph:'',
                    city:'',
                    brand:'',
                    model:'',
                    description:'',
                    year:'',
                    milege:'',
                    typeofexchange:'',
                    storephone:'',
                    vehiclevalue:''}
            };
        } ,
        methods:{
            async handleSubmit(){
                try{
                    await axios.post('/create-vehicle',this.formPayload).then((response)=>{console.log(response)})

                }catch(error){
                    console.log(error);
                }
            }
        }
    };
</script>
