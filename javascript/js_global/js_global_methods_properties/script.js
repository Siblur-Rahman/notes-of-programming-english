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
// const showCodeClass = document.getElementsByClassName('show-code');
// for(let showItem = 0; showItem < showCodeClass.length; showItem++){
//   showCodeClass[showItem].style ='color:blue; border:5px solid black; padding:10px';
// }

// show code
function showCode(OutputId, codeText){
  const insertEle_1 = document.getElementById(OutputId);
  insertEle_1.style='color:blue; border:5px solid black; padding:10px';
  insertEle_1.innerText = codeText;
}