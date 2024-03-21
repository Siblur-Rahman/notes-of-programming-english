
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



let leftBar_a = document.querySelectorAll('#left_bar a');
let acc_a;

for(acc_a = 0; acc_a < leftBar_a.length; acc_a++){
  // leftBar_a[acc_a].setAttribute("class", '');
  leftBar_a[acc_a].classList.add('link')
}

var link = document.getElementsByClassName("link");
var linkCount;

for (linkCount = 0; linkCount < link.length; linkCount++) {
  link[linkCount].addEventListener("click", function() {
    for (linkCount = 0; linkCount < link.length; linkCount++) {
        link[linkCount].classList.remove("active")
    }
    this.classList.add("active");
  });
}


// var link = document.getElementsByClassName("link");
// var linkCount;

// for (linkCount = 0; linkCount < link.length; linkCount++) {
//   link[linkCount].addEventListener("click", function() {
//     for (linkCount = 0; linkCount < link.length; linkCount++) {
//         link[linkCount].classList.remove("active")
//     }
//     this.classList.add("active");
//   });
// }