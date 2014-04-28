color = 0;


function colorButton() {
    var el = document.getElementById("colorBtn");
    str = el.innerHTML;
    str += "<button onclick='colorSet()'>Set</button>";
    el.innerHTML = str;

}

function colorSet() {
    color = document.getElementById('color').value;
    color = parseInt(color);
    if ((color >= 0) && (color <= 4 )) {
        alert(color);
        sendData();
    } else {
        alert("Invalid input (please choose a number between 0 - 4)");
    }
}

function sendData() {
    alert("color = " + color);
    $.post("updateDB.php", {'color': color});
//    displayChips();
}

colorButton();
