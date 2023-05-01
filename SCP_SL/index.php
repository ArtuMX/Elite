<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="../img/icon.png">
    <title>Elite Community</title>
    <link rel="stylesheet" href="Scp_sl.css">
</head>
<body>
    <?php include "../prefabs/navbar.php"; ?>
<div id="main" onmouseenter="navbar_disappear()">
    <div id="monsters" >
        <div class="classes_in">
        <p class="classes">
        <span class="title">Gli <span style="color: red; position:relative; right:15px">SCP</span></span><br>
        <span class="subtitle">Temibili mostri con solo un obbiettivo: uccidere.</span>
        <br>
           <a href="classes/monsters.php"><button>Scopri di più!</button></a>
        </p>
        </div>  
    </div>
    <div id="humans">
    <div class="classes_in">
        <p class="classes">
        <span class="title">Gli <span style="color: #4A6FB6; position:relative; right:15px">Umani</span></span><br>
        <span class="subtitle">Umani che cercano di fuggire o terminare gli SCP</span>
        <br>
           <a href="classes/humans.php"><button class="human_button">Scopri di più!</button></a>
        </p>
        </div>  
    </div>
    </div>
</div>
<div id="zones">
    <p class="classes">
        <span class="title">Le <span style="color: #ff6448; position:relative; right:15px"> Zone di contenimento</span></span> <br>
        <span class="subtitle">Zone piene di corridoi, ascensori e pericoli. Pieni di oggetti utili e di grandi minacce</span> <br>
        <a href="classes/zones.php"><button class="zones">Scopri di più!</button></a>
    </p>
</div>
<script src="script.js"></script>
<script src="../logo_script.js"></script>
</body>
</html>