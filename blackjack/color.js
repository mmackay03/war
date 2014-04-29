color = 0;


function colorButton() {
    var el = document.getElementById("colorBtn");
    str = el.innerHTML;
    str += "<button onclick='get()'>Set</button>";
    el.innerHTML = str;

}
function get(){
    color = document.querySelector('input[name="col"]:checked').value;
    alert(color);
    sendData();
}


function sendData() {
    alert("color = " + color);
    $.post("updateDB.php", {'color': color});
}

colorButton();