var cards = new Array();
cards[0] = new Array("val", "ace");
cards[1] = new Array(11, true);
cards[2] = new Array(2, false);
cards[3] = new Array(3, false);
cards[4] = new Array(4, false);
cards[5] = new Array(5, false);
cards[6] = new Array(6, false);
cards[7] = new Array(7, false);
cards[8] = new Array(8, false);
cards[9] = new Array(9, false);
cards[10] = new Array(10, false);
cards[11] = new Array(10, false);
cards[12] = new Array(10, false);
cards[13] = new Array(10, false);

cards[14] = new Array(11, true);
cards[15] = new Array(2, false);
cards[16] = new Array(3, false);
cards[17] = new Array(4, false);
cards[18] = new Array(5, false);
cards[19] = new Array(6, false);
cards[20] = new Array(7, false);
cards[21] = new Array(8, false);
cards[22] = new Array(9, false);
cards[23] = new Array(10, false);
cards[24] = new Array(10, false);
cards[25] = new Array(10, false);
cards[26] = new Array(10, false);

cards[27] = new Array(11, true);
cards[28] = new Array(2, false);
cards[29] = new Array(3, false);
cards[30] = new Array(4, false);
cards[31] = new Array(5, false);
cards[32] = new Array(6, false);
cards[33] = new Array(7, false);
cards[34] = new Array(8, false);
cards[35] = new Array(9, false);
cards[36] = new Array(10, false);
cards[37] = new Array(10, false);
cards[38] = new Array(10, false);
cards[39] = new Array(10, false);

cards[40] = new Array(11, true);
cards[41] = new Array(2, false);
cards[42] = new Array(3, false);
cards[43] = new Array(4, false);
cards[44] = new Array(5, false);
cards[45] = new Array(6, false);
cards[46] = new Array(7, false);
cards[47] = new Array(8, false);
cards[48] = new Array(9, false);
cards[49] = new Array(10, false);
cards[50] = new Array(10, false);
cards[51] = new Array(10, false);
cards[52] = new Array(10, false);


//numCards = 0;
pTotal = 0;
//pAceCt = 0;
//dAceCt = 0;
//bust = 0;
//dBust = 0;
//pBust = 0;
dTotal = 0;
status = 0;
card1 = 0;
card2 = 0;
//next = 0;
chips = 0;

function buttons() {
    var el = document.getElementById("buttons");
    $.ajaxSetup({
        async: false
    });
    $.getJSON("money.php", function(json){
        console.log("Json output: " + json[0].chips);
        chips = json[0].chips;
    });
    // console.log(el);
    str = el.innerHTML;

    str += "<img src='images/chip_1.png' onclick='bet()'>";
//    str += "<img src='images/chip_2.png' onclick='hit()'>";
//    str += "<img src='images/chip_3.png' onclick='stay()'>";
//    str += "<button type = 'submit' action='play.php'>new game</button>";
//    str += "<img src='images/chip_4.png' >";
//    str += "<img src='images/chip_5.png' onclick='double()'>";
    el.innerHTML = str;

}


//random card
function getCard() {
    min = 1;
    max = 52;
    randCard = Math.floor(Math.random() * (52)) + 1;
    return randCard;
}

//printing player cards
function printCard(id, card) {
    str = '';
    var el = document.getElementById(id);
    str = document.getElementById(id).innerHTML;
    str += "<img src='images/card/";
    str += card;
    str += ".png' width=100>";
    console.log(id);
//    console.log(content);
    el.innerHTML = str;
}



//player hand (first two cards)
function hand() {
    card1 = getCard();
    id = 'player';
    printCard(id, card1);
    card2 = getCard();
    printCard(id, card2);
    pTotal += getValue(card1) + getValue(card2);
    getTotal(pTotal, 'pTotal', 'Your');
    nextCard = 3;
}



//get card value
function getValue(c) {
    value = cards[c][0];
    return value;


}

function displayChips(){
    var ele = document.getElementById('chips');
    str = ele.innerHTML;
    str = chips;
    ele.innerHTML = "Your Chips: <br />$" + str;
}
//display player total
function getTotal(total, id, name) {
    var ele = document.getElementById(id);
    str = ele.innerHTML;
    str = total;
    ele.innerHTML = name+ " Total: " + str;
}

//dealer first 2 cards
function dealer() {
    dCard1 = getCard();
    id = 'dealer';
    printCard(id, dCard1);
    dCard2 = getCard();
    printCard(id, dCard2);
    dTotal = getValue(dCard1) + getValue(dCard2);
    getTotal(dTotal, 'dTotal', 'Dealer');
//    alert("DEALER TOTAL " + dTotal);
}

var betAmt = 0;
function bet() {
    var betAmt = document.getElementById('bet').value;
//    alert(betAmt);
//    alert("status " + status);
    if (status == 0) {
//        alert(status);
        if ((betAmt > 0)) {
            dealer();
            hand();
            game();
//            sendData();
            status = 1;
        } else {
            alert("Must place a bet to play!");
        }
    }
}

function game(){
    if (dTotal > pTotal){
        alert('dealer wins');
        chips = chips - betAmt;
        //loss++
    }else{
        alert('you win');
        //win++
        
    }
}


function sendData(){
//    $.post("upMoney.php", {'bet': betAmount,
//        'WHATEVER': variableName,
//        'ANOTHER': whateverVariable,
//    "WON": boolVar,
//"LOST": boolVar2});
    $.post("upMoney.php", {'chips': chips});

}
buttons();
displayChips();

