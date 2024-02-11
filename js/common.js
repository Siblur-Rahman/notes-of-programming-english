
// Accordion Start
var acc = document.getElementsByClassName("accordion");
var accCount;

for (accCount = 0; accCount < acc.length; accCount++) {
  acc[accCount].addEventListener("click", function() {
    this.classList.toggle("active");
    var panel = this.nextElementSibling;
    if (panel.style.display == "block") {
      panel.style.display = "none";
    } else {
      panel.style.display = "block";
    } 
  });
}

// var acc = document.getElementsByClassName("accordion");
// var accCount;

// for (accCount = 0; accCount < acc.length; accCount++) {
//   acc[accCount].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var panel = this.nextElementSibling;
//     if (panel.style.maxHeight) {
//       panel.style.maxHeight = null;
//     } else {
//       panel.style.maxHeight = panel.scrollHeight + "px";
//     } 
//   });
// }
 /* Accordion End */

// toggle button
var myToggleB = document.getElementsByClassName("myToggleB");

for (var myToggleBCount = 0; myToggleBCount < myToggleB.length; myToggleBCount++) {
    myToggleB[myToggleBCount].nextElementSibling.style.display ="none";
    myToggleB[myToggleBCount].addEventListener("click", function() {
    this.classList.toggle("active");
    var content = this.nextElementSibling;
    if (content.style.display === "block") {
      content.style.display = "none";
    } else {
      content.style.display = "block";
    }
  });
}

