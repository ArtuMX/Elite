function scrollBottom() {window.scrollTo(-99999,0);}
if (document.addEventListener) document.addEventListener("DOMContentLoaded", scrollBottom, false)
else if (window.attachEvent) window.attachEvent("onload", scrollBottom);
const buttons = document.getElementsByClassName("ball")
const slides = document.getElementsByClassName("slide")
var index = -1;
var nums = [1]
var lastused = 0;
for(i in nums){
    console.log(slides[0].style.width)
    slides[i].style.width = window.innerWidth+"px"
}
console.log(buttons)
function clicked(){
    buttons[lastused].classList.remove("active")
    buttons[index].classList.add("active")
    lastused = index;
}
function change_slide(){
    for(i in nums){
        slides[i].style.left= -100*index+"vw"
    }
}
document.getElementById("SL").href ="#"
const MTF = document.getElementsByTagName("mtf");
const Privates = document.getElementsByTagName("ntfPrivate");
const Sergent = document.getElementsByTagName("ntfSergeant");
const Commander = document.getElementsByTagName("ntfCaptain");
const Scientist = document.getElementsByTagName("scientist");
const Class_D = document.getElementsByTagName("classD");
const Chaos = document.getElementsByTagName("chaosInsurgency");
const Guard = document.getElementsByTagName("guard");
const SCP = document.getElementsByTagName("red");
var the_array = [Class_D, Scientist,Guard, MTF,Chaos]
function set_attribute(){
    for(i in the_array){
        for(l in the_array[i]){
            if(l < the_array[i].length){
                the_array[i][l].setAttribute("onclick","index = "+ i +";clicked();change_slide()")
            }
        }
    }
}
set_attribute()