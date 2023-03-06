<template>
    <footer class="footer-container">
        <ul class="footer-item">
            <h3>Encontre seu veículo</h3>
            <li>Encontre seu veiculo</li>
            <li>Lojas</li>
            <li>Promoções</li>
            <li>Vantagens</li>
            <li>Garantia Mais</li>
        </ul>
        <ul class="footer-item">
            <h3>A Empresa</h3>
            <li>Sobre</li>
            <li>Delivery</li>
            <li>Aviso de Privacidade</li>
            <li>Blog Seminovos</li>
        </ul>
        <ul class="footer-item">
            <h3>Atendimento</h3>
            <li>Perguntas Frequentes</li>
            <li>Fale Conosco</li>
            <li>Pós-vendas</li>
        </ul>
        <ul class="footer-item">
            <h3>Lojistas</h3>
            <li>Acesse Seminovos Atacado</li>
        </ul>
        <div class="footer-item-first">
            <h3>Atendimento ao cliente</h3>
           <section>
                <div class="block-0800">
                    <p>0800 000 000</p>
                </div>
                <div class="block-wpp">
                  <img alt="icone whats app" src="../../../icons/wpp.png">
                </div>
           </section>
        </div>
        <div class="footer-item-last">
            <h3>Siga a gente</h3>
            <ul >
            <li>
                <img alt="icone facebook" src="../../../icons/Facebook.png">
            </li>
            <li>
                <img alt="icone instagram" src="../../../icons/Instagram.png">
            </li>
            <li>
                <img alt="icone facebook" src="../../../icons/Twitter.png">
            </li>
            <li>
                <img alt="icone facebook" src="../../../icons/LinkedIN.png">
            </li>
        </ul>
        </div>
    </footer>
</template>

<script>
    

</script>
    
<style>

.footer-container {
    padding: 25px;
    color: #ffffff;
    width: 100%;
    background-color: #343a40;
    display: flex;
    justify-content: space-around;
}
.footer-item {
    display: none;
}
li{
    list-style: none;
}
.block-0800{
    background-color: #7D28F7;
    height: 42px;
    width: 128px;
    display: flex;
    align-items: center;
    font-weight: bolder;
    justify-content: space-around;
    font-size: 16px;
    border-radius: 4px;
}
.block-0800 p{
    margin-top:16px
}
.block-wpp{
    background-color: #4AC959;
    height: 42px;
    width: 40px;
    border-radius: 4px;
    display: flex;
    justify-content: center;
    align-items: center;
}

.footer-item-first{
    margin-left: 15px;  
}


.footer-item-first section{
    display: flex;
    justify-content: space-around;
}


.footer-item-last ul{
    display: flex;
    flex-direction: row;
    justify-content: space-between;
}

.footer-item-last li{
    width: 25px;
    height: 27px;
    border-radius: 4px;
    background-color: #7D28F7;
    margin: 1px
}

@media (min-width: 892px) {
    .footer-item {
        display: block;
    }
}
</style>
