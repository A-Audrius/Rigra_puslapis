"use strict";



$(document).ready(function () {




// RODYKLĖ Į VIRŠŲ

$(window).scroll(function () {
  if ($(this).scrollTop() > 40) {
    $('#topBtn').fadeIn();
  } else {
    $('#topBtn').fadeOut();
  }
});

$("#topBtn").click(function () {
  $('html ,body').animate({ scrollTop: 0 }, 100);
});
});


// Paslaugos_Naujienos
// Parama_Soc. paslaugos
// Istaymai_tyrimai

function openPage(evt, openPage) {
  var i, content, btns;
  content = document.getElementsByClassName("content");
  for (i = 0; i < content.length; i++) {
    content[i].style.display = "none";
  }
  btns = document.getElementsByClassName("btn");
  for (i = 0; i < btns.length; i++) {
    btns[i].className = btns[i].className.replace(" active", "");
  }
  document.getElementById(openPage).style.display = "block";
  evt.currentTarget.className += " active";
}

function openPage1(evt, openPage1) {
  var i, content1, btns1;
  content1 = document.getElementsByClassName("content1");
  for (i = 0; i < content1.length; i++) {
    content1[i].style.display = "none";
  }
  btns1 = document.getElementsByClassName("btn1");
  for (i = 0; i < btns1.length; i++) {
    btns1[i].className = btns1[i].className.replace(" active", "");
  }
  document.getElementById(openPage1).style.display = "block";
  evt.currentTarget.className += " active";
}

function openPage2(evt, openPage2) {
  var i, content2, btns2;
  content2 = document.getElementsByClassName("content2");
  for (i = 0; i < content2.length; i++) {
    content2[i].style.display = "none";
  }
  btns2 = document.getElementsByClassName("btn2");
  for (i = 0; i < btns2.length; i++) {
    btns2[i].className = btns2[i].className.replace(" active", "");
  }
  document.getElementById(openPage2).style.display = "block";
  evt.currentTarget.className += " active";
}

window.onload = function () {
  document.getElementById("defaultOpen").click();
  document.getElementById("defaultOpen_Apiemus").click();

// window.onload = function () {
// document.getElementById("defaultOpen_Istatymai").click();
// }
     document.getElementById("menu-item-677").onclick = function () {
      document.getElementById("btn-color1").click();
    }
    document.getElementById("menu-item-146").onclick = function () {
      document.getElementById("defaultOpen").click();
    }
      document.getElementById("menu-item-564").onclick = function () {
      document.getElementById("defaultOpen_Apiemus").click();
    }
    document.getElementById("menu-item-573").onclick = function () {
      document.getElementById("btn-color2").click();
    }
}


// HAMBURGER

$(document).ready(function () {
  $(".toggle").click(function () {
    $("ul").toggleClass("active");
    $("headline").toggleClass("");
  })
})
