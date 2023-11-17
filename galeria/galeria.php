<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeria Dev Experience</title>
    <link rel="stylesheet" href="galeria_css.css">
    </head>
<body> 
         
    <div class="slider">

        <div class="slides">
            <!--bolinhas do slider-->
            <input type="radio" name="radio-bt" id="radio1"> 
            <input type="radio" name="radio-bt" id="radio2">
            <input type="radio" name="radio-bt" id="radio3">
            <input type="radio" name="radio-bt" id="radio4">
            <!--Fim radio bolinhas-->  
            
            <!--imagens-->
            <div class="slide um">
                <img src="https://i.pinimg.com/736x/88/4a/53/884a538e964abce618af4fa6f075190b.jpg" alt=""/>
            </div>
            <div class="slide">
                <img src="https://i.pinimg.com/originals/f3/41/b2/f341b2024bb0b14365296cc862b60299.jpg" alt=""/>
            </div>
            <div class="slide">
                <img src="https://i.pinimg.com/originals/9c/b5/72/9cb5721e9e13eca0e3c1275d1bd9d981.jpg" alt=""/>
            </div>
            <div class="slide">
                <img src="https://i.pinimg.com/1200x/6e/d4/40/6ed440eda1a9fb045f51e3046051156b.jpg" alt=""/>
            </div>
            <!--fim imagens-->

            <div class="navegacao-auto">
                <div class="auto1"></div>
                <div class="auto2"></div>
                <div class="auto3"></div>
                <div class="auto4"></div>

            </div>
            
        </div>

        <div class="manual-nav">
            <label for="radio1" class="manual-bt"></label>
            <label for="radio2" class="manual-bt"></label>
            <label for="radio3" class="manual-bt"></label>
            <label for="radio4" class="manual-bt"></label>
        </div>
    </div>

    <script src="galeria_js.js"></script>

</body>
</html>