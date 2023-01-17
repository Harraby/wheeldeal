function searchElement() {
    // Get the input element
    var input = document.getElementById("searchInput");
    // Get the value of the input
    var searchValue = input.value.toLowerCase();
    // Get all elements with the class "searchable"
    var elements = document.getElementsByClassName("searchable");
    // Loop through the elements
    for (var i = 0; i < elements.length; i++) {
      // Get the text content of the element
      var elementText = elements[i].textContent.toLowerCase();
      // Check if the element's text content contains the search value
      if (elementText.indexOf(searchValue) > -1) {
        // Show the element
        elements[i].style.display = "flex";
      } else {
        // Hide the element
        elements[i].style.display = "none";
      }
    }
  }