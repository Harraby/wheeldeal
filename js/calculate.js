   function calculate() {
    var input = document.getElementById("dropoff");
    var searchValue = parseInt(input.value);
    if (searchValue) {
    document.getElementById("result").innerHTML = searchValue * 100;}
    else {
      document.getElementById("result").innerHTML = 0;
    }
  }