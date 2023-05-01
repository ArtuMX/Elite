const navbar = document.getElementById("navbar")
const main = document.getElementById("main")
function change_opacity(variable){
    variable.style.opacity = 1
    console.log("hi")
}
const nav_opacity = setTimeout(function(){change_opacity(navbar)}, 500);
const main_opacity = setTimeout(function(){change_opacity(main)}, 1500);
console.log(nav_opacity)