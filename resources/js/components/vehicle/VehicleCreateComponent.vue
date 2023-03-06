<template>
<section>
    <HeaderComponent/>
    <main class="container">
       <form @submit.prevent="submit">
        <section class="section-item-form">
            <label for="foto">Foto</label>
            <input type="text" v-model="formPayload.photograph">
        </section>
        <section class="section-item-form">
            <label for="foto">Cidade</label>
            <input type="text" v-model="formPayload.city">
        </section>
        <section class="section-item-form">
            <label for="foto">Marca</label>
            <input type="text" v-model="formPayload.brand">
        </section>
        <section class="section-item-form">
            <label for="foto">Modelo</label>
            <input type="text" v-model="formPayload.model">
        </section>
        <section class="section-item-form">
            <label for="foto">Descrição</label>
            <input type="text" v-model="formPayload.description">
        </section>
        <section class="section-item-form">
            <label for="foto">Ano</label>
            <input type="text" v-model="formPayload.year">
        </section>
        <section class="section-item-form">
            <label for="foto">Quilometragem</label>
            <input type="text" v-model="formPayload.milege">
        </section>
        <section class="section-item-form">
            <label for="foto">Tipo de cambio</label>
            <input type="text" v-model="formPayload.typeofexchange">
        </section>
        <section class="section-item-form">
            <label for="foto">Telefone da loja</label>
            <input type="text" v-model="formPayload.storephone">
        </section>
        <section class="section-item-form">
            <label for="foto">Valor do veiculo</label>
            <input type="text" v-model="formPayload.vehiclevalue">
        </section>
        <div class="container-btn">
        <button type="submit" @click.prevent="handleSubmit()">Cadastra Carro</button>
      </div>
       </form>
    </main>
    <FooterComponent/>    
</section>
</template>

<script>

import HeaderComponent from "../header/HeaderComponent.vue";
import FooterComponent from "../footer/FooterComponent.vue"; 

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
        components:{
        HeaderComponent,
        FooterComponent,
    },
        methods:{
            async handleSubmit(){
                try{
                    await axios.post('/create-vehicle',this.formPayload).then((response)=>{this.formPayload = {}})

                }catch(error){
                    console.log(error);
                }
            }
        }
    };
</script>



<style>
.container{
    display: flex;
    align-items: flex-end;
    justify-content: space-around;
}

.section-item-form{display: flex;
    flex-direction: column;
    width: 250px;
    margin: 20px;
}

.container-btn button{
    border:none;
    background-color: rgb(55, 52, 52);
    color: white;
    border-radius:6px;
    margin: 20px 0;
}

.container-btn{
    display: flex;
    justify-content: space-around;
}

</style>