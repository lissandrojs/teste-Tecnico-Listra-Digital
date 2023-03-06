<template>
    <section class="section-container">
    <section class="section-all-info">
        <div>
            <img class="imagem-vehicle" :src="photograph" :alt="model">
            <h5>{{ model }}</h5>
            <p>{{ description }}</p>
            <section class="section-more-info-vehicle">
                <div class="align-icons">
                    <img src="../../../icons/ICON_ANO.png" alt="Ano do veiculo">
                    <p>{{ year}}</p>
                </div>
                <div class="align-icons">
                    <img src="../../../icons/km.png">
                    <p>{{ milege}}</p>
                </div>
                <div class="align-icons">
                    <img src="../../../icons/cambio.png">
                    <p>
                        {{ typeofexchange }}
                    </p>
                </div>
            </section>
            <h3>R$ {{ vehiclevalue }}</h3>
        </div>
    </section>

    <article>
        <header>
            <h2>
                Valores simulados para você
            </h2>
            <div class="line-title"></div>
        </header>
        <section>
            <h3>
                {{ vehiclevalue }}
            </h3>

            <div>
                <div>
                    {{ vehiclevalue }}
                </div>
                <div>
                    {{ vehiclevalue }}
                </div>
            </div>

            <div>
                <button class="btn-wpp">
                    <img alt="icone whats app" src="../../../icons/wpp.png"> Falar com consultor
                </button>
                <div>
                    {{ storephone }}
                </div>
            </div>
        </section>
    </article>
</section>
</template>

<script>
export default{
    props:{
        photograph:String,
        city: String,
        brand: String,
        model:String,
        description:String,
        year: String,
        milege:String,
        typeofexchange:String,
        storephone:String,
        vehiclevalue:String,
    }
}

</script>

<style>
.line-title{
    background-color: #7D28F7;
    width: 55px;
    height: 3px;
    border-radius: 22px;
    margin-bottom: 25px;
}

.btn-wpp{
    background-color: #4AC959;
    height: 40px;
    width: 257px;
    border-radius: 4px;
    border:none;
    border-radius: 50px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    color: white;
}

.section-container {
    margin: 35px 45px 75px 45px ;  
}

.imagem-vehicle{
    width: 300px;
    height: 191px;
}
.section-more-info-vehicle {
    display: flex;
    justify-content: space-between;
}
.section-all-info{
    width: 300px;
    height: 343px;
    background-color: #FFFFFF;
    border-radius: 4px;
}
.section-all-info h3{
    float: right;
}
.align-icons{
    display: flex;
    align-items: flex-start;
}
</style>