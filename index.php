<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SENAI Dev Experience</title>
    <link rel="stylesheet" href="index_css.css">
    </head>
<body> 

    <div class="slider">

        <div class="slides">
            <!--bolinhas do slider-->
            <input type="radio" name="radio-bt" id="radio1"> 
            <input type="radio" name="radio-bt" id="radio2">
            <input type="radio" name="radio-bt" id="radio3">
            <!--Fim radio bolinhas-->  
            
            <!--imagens-->
            <div class="slide um">
                <img src="Banner - DEV Exp1.png"/>
            </div>
            <div class="slide">
                <img src="Banner - DEV Exp2.png" alt=""/>
            </div>
            <div class="slide">
                <img src="Banner - DEV Exp3.png" alt=""/>
            </div>

            <!--fim imagens-->

            <div class="navegacao-auto">
                <div class="auto1"></div>
                <div class="auto2"></div>
                <div class="auto3"></div>

            </div>
            
        </div>

        <div class="manual-nav">
            <label for="radio1" class="manual-bt"></label>
            <label for="radio2" class="manual-bt"></label>
            <label for="radio3" class="manual-bt"></label>

        </div>
    </div>

    <script src="index_js.js"></script>

</body>
</html>
