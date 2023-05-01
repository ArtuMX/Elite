<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Elite Community</title>
    <link rel="stylesheet" href="styles/humans.css">
</head>
<body>
<?php include "../../prefabs/navbar.php"; ?>  
<div id="slider">
    <div class="slide" style="left: 0vw; width: 0px;margin-left: 60px;">
        <div id="main">
            <div class="main_description">
                <p class="title dclass">Personale di Classe D</p>
                    <p class="description">
                        Generati nelle loro celle, nella <lcz>Light Containment Zone</lcz>, i <classD>Classe D</classD> hanno una sola missione: <b>sopravvivere</b>.
                        Il <classD>Personale di Classe D</classD> deve fuggire dal Sito-02, evitando sia gli <red>SCP</red> che la <mtf  onclick="index = 3;clicked();change_slide()">MTF</mtf>.
                        L'obiettivo primario del <classD>Personale di Classe D</classD> è scappare dalla struttura, in qualsiasi modo, usciti diverranno <b><chaosInsurgency>Chaos Insurgency Arruolati</chaosInsurgency></b>
                        Fuggendo da essa daranno 4 ticket""  di respawn alla <chaosInsurgency>Chaos Insurgency</chaosInsurgency>.
                        Un <classD>Classe D</classD> che fuggirà ammanettato diverrà <ntfPrivate>Soldato Nine-Tailed Fox</ntfPrivate>, dando 3 ticket alla <mtf>MTF</mtf>.
                        I <classD>Classe D</classD> vinceranno insieme alla <chaosInsurgency>Chaos Insurgency</chaosInsurgency> come "<chaosInsurgency>LA CHAOS INSURGENCY HA VINTO</chaosInsurgency>".

                    </p>
            </div>
            <img src="../img/Class_D.png" alt="">
            <p>asd</p>
        </div>
    </div>
    <div class="slide" style="left: 0vw; width: 0px;">
        <div id="main">
            <div class="main_description">
                <p class="title scientist">Scienziato</p>
                    <p class="description">
                    All'inizio del round, gli <scientist>Scienziati</scientist> si genereranno in una stanza casuale della <lcz>Light Containment Zone</lcz>.
                    L'obiettivo di uno <scientist>Scienziato</scientist> è raggiungere la Surface, fuggendo, cosa che lo farà diventare <mtf>Specialista Nine-Tailed Fox</mtf>.
                    Questo darà alla <mtf>MTF</mtf> 3 ticket di respawn.
                    Uno <scientist>Scienziato</scientist> che fugge da ammanettato diventerà <chaosInsurgency>Chaos Insurgency Arruolato</chaosInsurgency>, dando 4 ticket di respawn.
                    Gli <scientist>Scienziati</scientist> vinceranno insieme alla <mtf>Mobile Task Force</mtf> come "<mtf>LA FONDAZIONE HA VINTO</mtf>".
                    </p>
            </div>
            <img src="../img/Scientist.png" alt="">
        </div>
    </div>
    <div class="slide" style="left: 0vw; width: 0px;">
        <div id="main">
            <div class="main_description">
                <p class="title Guard">Guardia della struttura</p>
                    <p class="description">
                        All'inizio del round, le <guard>Guardie della struttura</guard> si genereranno nella <ez>Entrance Zone</ez> in una stanza casuale.
                        Il compito delle <guard>Guardie della struttura</guard> è quello di salvaguardare gli <scientist>Scienziati</scientist> per farli fuggire.
                        Possono, a loro piacimento, scortare anche i <classD>Classe D</classD> arrestandoli.
                        Anche se le <guard>Guardie della struttura</guard> sono in grado d'ingaggiare qualsiasi <red>SCP</red> che trovano, questa non è l'idea migliore.
                        Pertanto, è meglio attendere la generazione di <mtf>MTF</mtf> prima di ingaggiare gli <red>SCP</red>.
                        Le <guard>Guardie della struttura</guard> vinceranno insieme alla <mtf>Mobile Task Force</mtf> come "<mtf>LA FONDAZIONE HA VINTO</mtf>".
                    </p>
            </div>
            <img src="../img/Guard.png" alt="">
        </div>
    </div>
    <div class="slide" style="left: 0vw; width: 0px;">
        <div id="main">
            <div class="main_description">
                <p class="title MTF">NINE-TAILED FOX</p>
                    <p class="description">
                        La <mtf>Nine-Tailed Fox</mtf> viene spawnata nella struttura tramite un elicottero nella Surface Zone (Uscita B). 
                        C.A.S.S.I.E. annuncerà quando spawnerà la <mtf>Nine-Tailed Fox</mtf>, specificando il numero di <red>SCP</red> rimasti nella struttura. 
                        Se non ci sono <red>SCP</red> lasciati vivi, C.A.S.S.I.E. annuncerà che esiste ancora una sostanziale minaccia alla sicurezza nella struttura.
                        L'obiettivo primario degli <mtf>Nine-Tailed Fox</mtf> è quello di entrare nella struttura e aiutare a portare fuori gli <scientist>Scienziati</scientist>.
                        I loro obiettivi secondari sono quelli di contenere tutti gli <red>SCP</red> fuggiti e a prendersi cura di tutti i <classD>Classe D</classD> fuggiti, neutralizzandoli (uccidendoli) o scortarli fuori (arrestandoli).
                        La <mtf>Nine-Tailed Fox</mtf> si generano a ondate con almeno un <ntfCaptain>Capitano</ntfCaptain> e tre <ntfSergeant>Sergenti</ntfSergeant>, il resto sono <ntfPrivate>Soldati</ntfPrivate>. Ognuno di questi gradi si genera con oggetti diversi.
                        La <mtf>Nine-Tailed Fox</mtf> vincerà come "<mtf>LA FONDAZIONE HA VINTO</mtf>".
                    </p>
            </div>
            <img src="../img/MTF.png" alt="">
        </div>
    </div>
    <div class="slide" style="left: 0vw; width: 0px;">
        <div id="main">
            <div class="main_description">
                <p class="title Chaos">CHAOS INSURGENCY</p>
                    <p class="description">
                        Vinceranno insieme ai <classD>Classe D</classD> come "<chaosInsurgency>LA CHAOS INSURGENCY HA VINTO</chaosInsurgency>".
                        I <chaosInsurgency>Chaos Insurgency</chaosInsurgency> sono neutrali nei confronti degli <red>SCP</red>, il che significa che entrambe le fazioni possono scegliere di cooperare o combattere tra loro.       
                        Indipendentemente da ciò, i <chaosInsurgency>Chaos Insurgency</chaosInsurgency> dovrebbero comunque rimanere cauti nei confronti degli <red>SCP</red>, poiché gli <red>SCP</red> devono uccidere qualsiasi <classD>Classe D</classD> per ottenere "<red>GLI SCP HANNO VINTO</red>".
                        Il loro obiettivo è salvare tutti i rimanenti <classD>Classe D</classD> e scortarli in superficie, eliminando anche qualsiasi forza avversaria rimasta nel round (<mtf>NTF</mtf>, <guard>Guardie della struttura</guard>, <scientist>Scienziati</scientist> e/o <red>SCP</red> ostili).
                    </p>
            </div>
            <img src="../img/Chaos.png" alt="">
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
<script src="slider.js"></script>
</body>
</html>