function searchElement() {
    var input = document.getElementById("searchInput");
    var searchValue = input.value.toLowerCase();
    var elements = document.getElementsByClassName("searchable");
    for (var i = 0; i < elements.length; i++) {
      var elementText = elements[i].textContent.toLowerCase();
      if (elementText.indexOf(searchValue) > -1) {
        elements[i].style.display = "flex";
      } else {
        elements[i].style.display = "none";
      }
    }
  }