<template>
    <section>
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
                <button>
                    Falar com consultor
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

</style>