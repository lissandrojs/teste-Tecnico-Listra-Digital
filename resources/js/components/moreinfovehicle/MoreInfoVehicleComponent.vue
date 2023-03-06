<template>
    <section class="section-container">
    <section>
        <div>
            <img :src="photograph" :alt="model">
            <h5>{{ model }}</h5>
            <p>{{ description }}</p>
            <section>
                <div>
                    <span>

                    </span>
                    <p>{{ year }}</p>
                </div>
                <div>
                    <span>

                    </span>
                    <p>{{ milege }}</p>
                </div>
                <div>
                    <span>

                    </span>
                    <p>
                        {{ typeofexchange }}
                    </p>
                </div>
            </section>
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
            <div>
                {{ vehiclevalue }}
            </div>

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

</style>