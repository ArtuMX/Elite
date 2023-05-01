<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Community</title>
    <link rel="stylesheet" href="styles/monsters.css">
</head>
<body>
<?php include "../../prefabs/navbar.php"; ?> 
<div id="slider">
    <div class="slide" style="left: 0vw; width: 0px;margin-left: 60px;">
        <div id="main">
            <div class="main_description">
                <p class="title scp">Scp 049</p>
                    <p class="description">
                        <br>
                        All'inizio del round, <red>SCP-049</red> si genererà nella sua cella di contenimento in <hcz>Heavy Continement Zone</hcz>.
                        <br>
                        <red>SCP-049</red> ha statistiche moderate e funge da <red>SCP</red> di supporto.
                        <br>
                        È in grado di resuscitare qualsiasi giocatore morto entro 10 secondi.
                        <br>
                        <red>SCP-049</red> ha una resistenza ai proiettili del 20%, simile all'armatura.
                        <br>
                        Questa resistenza si applica solo alla normale salute di <red>SCP-049</red>, lo <hs>Hume Shield</hs> non ha resistenza.
                        <br>
                        <red>SCP-049</red> può parlare con gli altri <red>SCP</red> tenendo premuto <b><code>Q</code></b>, questa chat può essere ascoltata da tutti gli <red>SCP</red>.
                        </p>
                    <p class="abilities">
                        <span class="ability">ARRESTO CARDIACO</span><br>
                        <red>SCP-049</red> può curare qualsiasi umano prendo il tasto destro del mouse, su di loro.
                        <br>
                        Gli umani subiranno un danno iniziale di 8hp e riceveranno l'effetto di <code>arresto cardiaco</code> per 20s, causando una diminuzione di 168hp.
                        <br>
                        <red>SCP-049</red> ha anche un breve tempo di recupero per poter infliggere nuovamente quest'effetto, dando tempo agli umani di poter fuggire da <red>SCP-049</red>.
                        <br>
                        L'adrenalina ed <red>SCP-500</red> annulleranno l'effetto di <code>arresto cardiaco</code>.
                        <br>
                        <br>
                        <span class="ability">RISURREZIONE</span><br>
                        Una volta che un umano muore, <red>SCP-049</red> può resuscitarlo tenendo premuto il tato <b><code>E</code></b> sul cadavere per resuscitarlo come <red>SCP-049-2</red>.
                        <br>
                        Un'indicatore apparirà su ogni cadavere che <red>SCP-049</red> potrà rianimare.
                        <br>
                        <br>
                        <span class="ability">RISPARMIO È IL MIGLIOR GUADAGNO</span><br>
                        <red>SCP-049</red> può resuscitare istanze di <red>SCP-049-2</red> cadute da giocatori umani. 
                        <br>
                        Ogni risurrezione riduce la loro salute totale e dopo la quarta morte non sarà più possibile rianimarlo.
                        <br>
                        <br>
                        <span class="ability">BUON SENSO DEL MEDICO</span><br>
                        Un bersaglio verrà selezionato e tracciato tramite un'icona simile a un "battito cardiaco" mentre concede a <red>SCP-049</red> un aumento di velocità.
                        <br>
                        Alla resurrezione, i bersagli uccisi da <red>SCP-049</red> o <red>SCP-049-2</red> avranno salute aggiuntiva e <red>SCP-049</red> ripristinerà una piccola quantità di <hs>Hume Shield</hs>.
                        <br>
                        <br>
                        <span class="ability">CHIAMATA DEL MEDICO</span><br>
                        <red>SCP-049</red> può premere <b><code>R</code></b> per chiamare a sè tutti gli <red>SCP-049-2</red>, consentendo a loro di vedere <red>SCP-049</red> anche oltre i muri.
                    </p>
            </div>
            <img src="../img/049.jpg" alt="">
        </div>
    </div>
    <div id="navigation">
    <?php 
    for($i = 0; $i < 5;$i++ ) {
        if($i == 0){
            echo "<div class='ball active' onclick='index = ".$i.";clicked();change_slide()'></div>";
        }else{
            echo "<div class='ball' onclick='index = ".$i.";clicked();change_slide()'></div>";
        }
    }
    ?>
</div>
    </div>
    </div>
<script src="../script_monsters.js"></script>
</body>   
</body>
</html>