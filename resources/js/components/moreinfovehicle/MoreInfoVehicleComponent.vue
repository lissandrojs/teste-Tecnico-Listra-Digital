<template>
    <section class="section-container">
        <section class="section-all-info">
            <img class="imagem-vehicle" :src="photograph" :alt="model" />
            <div class="container-location">
                <img
                    src="../../../icons/ICON_LOCALIZACAO.png"
                    alt="icone de localização"
                />
                {{ city }}
            </div>
            <aside>
                <h5>{{ model }}</h5>
                <p>{{ description }}</p>
                <section class="section-more-info-vehicle">
                    <div class="align-icons">
                        <img
                            src="../../../icons/ICON_ANO.png"
                            alt="Ano do veiculo"
                        />
                        <p>{{ year }}</p>
                    </div>
                    <div class="align-icons">
                        <img src="../../../icons/km.png" />
                        <p>{{ milege }}</p>
                    </div>
                    <div class="align-icons">
                        <img src="../../../icons/cambio.png" />
                        <p>
                            {{ typeofexchange }}
                        </p>
                    </div>
                </section>
                <h3>R$ {{ vehiclevalue }}</h3>
            </aside>
        </section>

        <article class="container-values-simulator">
            <header>
                <h2>Valores simulados para você</h2>
                <div class="line-title"></div>
            </header>
            <section>
                <section class="first-container-financing">
                    <h5> 6X</h5>
                    <h4>R$ {{ vehiclevalue }}</h4>
                </section>

                <section class="second-container-financing">
                    <div>
                        <h5>12X</h5>
                        <h4>R$ {{ vehiclevalue }}</h4>
                    </div>
                    <div>
                        <h5>48X</h5>
                        <h4>R$ {{ vehiclevalue }}</h4>
                    </div>
                </section>

                <div class="container-btn-wpp">
                    <button class="btn-wpp">
                        <img
                            alt="icone whats app"
                            src="../../../icons/wpp.png"
                        />
                        Falar com consultor
                    </button>
                    <h6>
                        {{ storephone }}
                    </h6>
                </div>
            </section>
        </article>
    </section>
</template>

<script>
export default {
    props: {
        photograph: String,
        city: String,
        brand: String,
        model: String,
        description: String,
        year: String,
        milege: String,
        typeofexchange: String,
        storephone: String,
        vehiclevalue: String,
    },
};
</script>

<style>
.line-title {
    background-color: #7d28f7;
    width: 55px;
    height: 3px;
    border-radius: 22px;
    margin-bottom: 25px;
}

.container-location {
    border-radius: 0px 16px 16px 0px;
    position: relative;
    bottom: 39px;
    width: 60%;
    background-color: #ffffff;
    padding-left: 5px;
    padding-right: 10px;
}

.btn-wpp {
    background-color: #4ac959;
    height: 40px;
    width: 257px;
    border-radius: 4px;
    border: none;
    border-radius: 50px;
    display: flex;
    justify-content: space-evenly;
    align-items: center;
    color: white;
    margin-right: 15px;
}

.section-container {
    display: flex;
    margin: 35px 45px 75px 45px;
    align-items: center;
    flex-direction: column;
}

.imagem-vehicle {
    width: 300px;
    height: 191px;
}
.section-more-info-vehicle {
    display: flex;
    justify-content: space-between;
}
.section-all-info {
    width: 300px;
    height: 367px;
    background-color: #ffffff;
    border-radius: 4px;
}
.section-all-info h3 {
    float: right;
}
.align-icons {
    display: flex;
    align-items: flex-start;
}

.container-values-simulator {
    background-color: #fafafa;
}

aside {
    padding: 10px;
}

article {
    padding: 30px;
    width: 300px;
    height: 484px;
    margin-left: 0px;
    margin-top: 24px;
}
.first-container-financing {
    width: 272px;
    height: 77px;
}

.second-container-financing{
    width: 271px;
    height: 77px;
    display: flex;
    flex-direction: column;

}

.first-container-financing h4 {
    color: #7D28F7;
    font-weight: bolder;

}
.second-container-financing h4 {
    color: #7D28F7;
    font-weight: bolder;

}

.first-container-financing h5 {
    color: black;
    font-weight: bolder;

}
.second-container-financing h5 {
    color: black;
    font-weight: bolder;
}

.second-container-financing div {
    color: black;
    font-weight: bolder;
    width: 100px;
}

.container-btn-wpp{
    display: flex;
    align-items: center;
    flex-direction: column;
    margin-top: 122px;;
    
}

h6{
    font-weight: bolder;
}

@media (min-width: 892px) {

    .second-container-financing div {
    width: 147px;
}

    .container-btn-wpp {
    display: flex;
    margin-top: 44px;
    align-items: center;
    flex-direction: row;
}
    .first-container-financing {
        width: 339px;
        height: 77px;
    }

    .second-container-financing{
    width: 259px;
    height: 77px;
    display: flex;
    flex-direction: row;

}
    .section-container {
        display: flex;
        margin: 35px 45px 75px 45px;
        align-items: center;
        flex-direction: row;
    }
    article {
        padding: 30px;
        width: 945px;
        height: 367px;
        margin-left: 50px;
        margin-top: 0px;
    }
}
</style>
