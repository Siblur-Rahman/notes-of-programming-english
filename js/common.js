
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
// function showCodeByIdVariable(id, variableName){
//   document.getElementById(id).innerText = variableName;
// }
//  function showCode(OutputId, codeText){
//       const element= document.getElementById(OutputId);
//     element.style='color:blue; border:5px solid black; padding:10px';
//     element.innerText = codeText;
//     };
    // export default showCode;
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
// var myToggleB = document.getElementsByClassName("myToggleB");

// for (var myToggleBCount = 0; myToggleBCount < myToggleB.length; myToggleBCount++) {
//     myToggleB[myToggleBCount].nextElementSibling.style.display ="none";
//     myToggleB[myToggleBCount].addEventListener("click", function() {
//     this.classList.toggle("active");
//     var content = this.nextElementSibling;
//     if (content.style.display === "block") {
//       content.style.display = "none";
//     } else {
//       content.style.display = "block";
//     }
//   });
// }