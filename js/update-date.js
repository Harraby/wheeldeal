function updateDate() {
    var dateField = document.getElementById("pickup-date");
    var today = new Date();
    dateField.value = today.toISOString().substring(0, 10);
}

window.onload = updateDate;