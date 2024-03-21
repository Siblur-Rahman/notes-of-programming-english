var test = document.getElementsByClassName("testordion");
var testCount;

for (testCount = 0; testCount < test.length; testCount++) {
  test[testCount].addEventListener("click", function() {
    test[testCount].classList.add("active");
    this.classList.add("active");
  });
}