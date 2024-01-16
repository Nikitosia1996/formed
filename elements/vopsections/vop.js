let kurenie = document.getElementById("kurenie");
let bsk = document.getElementById("bsk");
let alkogol = document.getElementById("alkogol");
let hobl = document.getElementById("hobl");
let diabet = document.getElementById("diabet");
let imt = document.getElementById("imt");
let depressia = document.getElementById("depressia");
let demencia = document.getElementById("demencia");

function myFunction(section) {
    var input, filter, ul, li, a, i, txtValue;
    let sect = document.getElementById(section);
    input = sect.getElementsByTagName("input");
    filter = input[0].value.toUpperCase();
    ul = sect.getElementsByTagName("ul");
    li = ul[0].getElementsByTagName("li");
    for (i = 0; i < li.length; i++) {
        a = li[i].getElementsByTagName("a")[0];
        txtValue = a.textContent || a.innerText;
        if (txtValue.toUpperCase().indexOf(filter) > -1) {
            li[i].style.display = "";
        } else {
            li[i].style.display = "none";
        }
    }
}

function func1(element){
    reset();
    kurenie.style = "display: block";
    bsk.style = "display: none";
    demencia.style = "display: none";
    depressia.style = "display: none";
    imt.style = "display: none";
    diabet.style = "display: none";
    hobl.style = "display: none";
    alkogol.style = "display: none";

    if(window.screen.width < 1279) {
        $('html, body').animate({
            scrollTop: $('#kurenie').offset().top
        }, 600);
    }
    element.className = "card card0 card5 activecard5";
}

function func2(element){
    reset();
    kurenie.style = "display: none";
    bsk.style = "display: bsk";
    demencia.style = "display: none";
    depressia.style = "display: none";
    imt.style = "display: none";
    diabet.style = "display: none";
    hobl.style = "display: none";
    alkogol.style = "display: none";

    if(window.screen.width < 1279) {
        $('html, body').animate({
            scrollTop: $('#bsk').offset().top
        }, 600);
    }
    element.className = "card card0 card1 activecard1";
}

function func3(element){
    reset();
    kurenie.style = "display: none";
    bsk.style = "display: none";
    demencia.style = "display: block";
    depressia.style = "display: none";
    imt.style = "display: none";
    diabet.style = "display: none";
    hobl.style = "display: none";
    alkogol.style = "display: none";

    if(window.screen.width < 1279) {
        $('html, body').animate({
            scrollTop: $('#demencia').offset().top
        }, 600);
    }
    element.className = "card card0 card2 activecard2";
}

function func4(element){
    reset();
    kurenie.style = "display: none";
    bsk.style = "display: none";
    demencia.style = "display: none";
    depressia.style = "display: block";
    imt.style = "display: none";
    diabet.style = "display: none";
    hobl.style = "display: none";
    alkogol.style = "display: none";

    if(window.screen.width < 1279) {
        $('html, body').animate({
            scrollTop: $('#depressia').offset().top
        }, 600);
    }
    element.className = "card card0 card3 activecard3";
}

function func5(element){
    reset();
    kurenie.style = "display: none";
    bsk.style = "display: none";
    demencia.style = "display: none";
    depressia.style = "display: none";
    imt.style = "display: block";
    diabet.style = "display: none";
    hobl.style = "display: none";
    alkogol.style = "display: none";

    if(window.screen.width < 1279) {
        $('html, body').animate({
            scrollTop: $('#imt').offset().top
        }, 600);
    }
    element.className = "card card0 card4 activecard4";
}

function func6(element){
    reset();
    kurenie.style = "display: none";
    bsk.style = "display: none";
    demencia.style = "display: none";
    depressia.style = "display: none";
    imt.style = "display: none";
    diabet.style = "display: block";
    hobl.style = "display: none";
    alkogol.style = "display: none";

    if(window.screen.width < 1279) {
        $('html, body').animate({
            scrollTop: $('#diabet').offset().top
        }, 600);
    }
    element.className = "card card0 card6 activecard6";
}

function func7(element){
    reset();
    kurenie.style = "display: none";
    bsk.style = "display: none";
    demencia.style = "display: none";
    depressia.style = "display: none";
    imt.style = "display: none";
    diabet.style = "display: none";
    hobl.style = "display: block";
    alkogol.style = "display: none";

    if(window.screen.width < 1279) {
        $('html, body').animate({
            scrollTop: $('#hobl').offset().top
        }, 600);
    }
    element.className = "card card0 card7 activecard7";
}

function func8(element){
    reset();
    kurenie.style = "display: none";
    bsk.style = "display: none";
    demencia.style = "display: none";
    depressia.style = "display: none";
    imt.style = "display: none";
    diabet.style = "display: none";
    hobl.style = "display: none";
    alkogol.style = "display: block";

    if(window.screen.width < 1279) {
        $('html, body').animate({
            scrollTop: $('#alkogol').offset().top
        }, 600);
    }
    element.className = "card card0 card8 activecard8";
}

function reset() {
    let item1 = document.querySelector('div[onclick="func1(this)"]');
    item1.className = "card card0 card5";
    let item2 = document.querySelector('div[onclick="func2(this)"]');
    item2.className = "card card0 card1";
    let item3 = document.querySelector('div[onclick="func3(this)"]');
    item3.className = "card card0 card2";
    let item4 = document.querySelector('div[onclick="func4(this)"]');
    item4.className = "card card0 card3";
    let item5 = document.querySelector('div[onclick="func5(this)"]');
    item5.className = "card card0 card4";
    let item6 = document.querySelector('div[onclick="func6(this)"]');
    item6.className = "card card0 card6";
    let item7 = document.querySelector('div[onclick="func7(this)"]');
    item7.className = "card card0 card7";
    let item8 = document.querySelector('div[onclick="func8(this)"]');
    item8.className = "card card0 card8";
}

let rightSection = document.getElementById("right_section");
let leftSection = document.getElementById("bsk");
let row = document.getElementById("main_row");
if(window.screen.width < 1279) {
    row.insertBefore(rightSection, leftSection);

}
