<!DOCTYPE html>
<!--
            Autor: Diego Ruiz
-->
<html>
    <head>
        <meta charset="UTF-8">
        <link href="css/madre.css" rel="stylesheet" type="text/css"/>
        <script src="js/componentes.js" type="text/javascript"></script>
        <title>Metabuscador</title>
    </head>
    <body>
    <center>
        <div id="menuGlobal" class="menu-index"></div>
        <h1>Metabuscador</h1>
        <div id="contenido" class="cont-index">
            <fieldset>
                <legend>Buscador</legend>
                <img class="imgLupa" src="img/lupa1.jpg" alt=""/>

                <form method="POST" action="buscador.php">
                    <input name="termino" id="terminosBuscar" type="text" class="btnBuscar-index" placeholder="¿Que deseas buscar?" onfocus="mostrarBuscador()"/>

            </fieldset>
        </div>
        <h1 id="enDonde">¿En donde deseas buscar?</h1>
        <div id="contenido" class="cont2-index">
            <fieldset class="fieldset2" id="fieldsetMod">
                <legend class="legend2">Opciones</legend>                

                <input value="1" name="btnB" id="imgBuscGoogle" class="imgBuscardor" type=image name="btnB" src="img/google.jpg"/>
                <input value="2" name="btnB" id="imgBuscAsk" class="imgBuscardor" type=image name="btnB" src="img/ask.jpg"/>
                <input value="3" name="btnB" id="imgBusc3" class="imgBuscardor" type=image name="btnB" src="img/bing.png"/>
                <input value="4" name="btnB" id="imgBusc4" class="imgBuscardor" type=image name="btnB" src="img/hispavista.png"/>
                <input value="5" name="btnB" id="imgBusc5" class="imgBuscardor" type=image name="btnB" src="img/infospace.png"/>
                <input value="6" name="btnB" id="imgBusc6" class="imgBuscardor" type=image name="btnB" src="img/yahoo.jpg"/>
                <input value="7" name="btnB" id="imgBusc7" class="imgBuscardor" type=image name="btnB" src="img/lycos.png"/>
                <input value="8" name="btnB" id="imgBusc8" class="imgBuscardor" type=image name="btnB" src="img/yandex.png"/>
                <input value="9" name="btnB" id="imgBusc9" class="imgBuscardor" type=image name="btnB" src="img/youtube.png"/>

                </form>
            </fieldset>
        </div>


    </center>
</body>
</html>
