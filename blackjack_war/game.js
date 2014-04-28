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


numCards = 0;
pTotal = 0;
pAceCt = 0;
dAceCt = 0;
firstAce = 0;
//bust = 0;
dBust = 0;
pBust = 0;
dTotal = 0;
status = 0;
card1 = 0;
card2 = 0;
//next = 0;

function buttons() {
    var el = document.getElementById("buttons");
    // console.log(el);
    str = el.innerHTML;

    str += "<img src='images/chip_1.png' onclick='bet()'>";
    str += "<img src='images/chip_2.png' onclick='hit()'>";
    str += "<img src='images/chip_3.png' onclick='stay()'>";
    str += "<button type = 'submit' action='play.php'>new game</button>";
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

//display dealer's second card(hidden)
function hiddenCard() {
    str = '';
    el = document.getElementById("dealer");
    str = el.innerHTML;
    str += "<img src='images/card/blue.png' width=100>";
    document.getElementById("dealer").innerHTML = str;
}

//player hand (first two cards)
function hand() {
    card1 = getCard();
//    card1 = 1;                                //test 1 ace
//    card1 = 36;                                //testing 2 ace
//    card1 = 2;                                //testing 2 ace
    id = 'player';
    printCard(id, card1);
    card2 = getCard();
//    card2 = 1;
//    card2 = 8;                                //testing 1 ace
//    card2 = 37;                           //testing 2 ace
    printCard(id, card2);
    pTotal += getValue(card1) + getValue(card2);
    isAce(card1, false);
    isAce(card2, false);
    getTotal(pTotal);
    nextCard = 3;
}

//hit function for player
function hit() {
//    checkBust()s;////////
    if (pBust === 0) {
        switch (nextCard) {
            case 3:
                card3 = getCard();
//                card3 = 5;
//                card3 = 1;                      // testing ace
                pTotal += getValue(card3);
//                alert(total);
//                checkAce(card1);
//                checkAce(card2);
                isAce(card3, false);
//                alert("after " + total);
                checkBust(pTotal, pBust);

                printCard('player', card3);
                getTotal(pTotal);
                nextCard++;
                alert(nextCard);
//            alert(betAmt);
                break;
            case 4:
                card4 = getCard();
                card4 = 11;
//                card4 = 8;
                pTotal += getValue(card4);
//                checkAce(card1);
//                checkAce(card2);
//                alert("TOTAL: " + total);
                isAce(card4, false);
                checkBust(pTotal, pBust);
                printCard('player', card4);
                getTotal(pTotal);
                nextCard++;
                break;
            case 5:
                card5 = getCard();
//                card5 = 1;
                pTotal += getValue(card5);
//                checkAce(card1);
//                checkAce(card2);
                isAce(card5, false);
                checkBust(pTotal, pBust);
                printCard('player', card5);
                getTotal(pTotal);
                nextCard++;
                break;

        }
    }
}

//get card value
function getValue(c) {
    value = cards[c][0];
    return value;


}

//check ace and update total if needed
function isAce(c, dealer) {
    if (!dealer) {//player
        ace = cards[c][1];
        if (ace === true) {
            pAceCt++;
//            alert(pAceCt);
        }
        if ((pAceCt > 1) || ((pTotal > 21) && (pAceCt > 0))) {
//            if (pTotal > 21) {
            pTotal = pTotal - 10;
//            }
            pAceCt--;
        }
    } else {//dealer
        ace = cards[c][1];
        if (ace === true) {
            dAceCt++;
//            alert(pAceCt);
        }
        if ((dAceCt > 1) || ((dTotal > 21) && (dAceCt > 0))) {
//            if (pTotal > 21) {
            dTotal = dTotal - 10;
//            }
            dAceCt--;
        }
    }

}



//check bust
function checkBust(total, bust) {
    if (total > 21) {
        bust = 1;
//        status = 1;
        alert("busted");
        stay();
//        alert("status" + status);

    }
}

//display player total
function getTotal(total) {
    var ele = document.getElementById("total");
    str = ele.innerHTML;
    str = total;
    ele.innerHTML = "Total: " + str;
}

//dealer first 2 cards
function dealer() {
    dCard1 = getCard();
//dCard1 = 1;
    id = 'dealer';
    printCard(id, dCard1);
    hiddenCard();
    dCard2 = getCard();
//dCard2 = 1;
    alert("dealer card2 = " + getValue(dCard2));
    dTotal = getValue(dCard1) + getValue(dCard2);

    isAce(dCard1, dAceCt, dTotal, true);
    isAce(dCard2, dAceCt, dTotal, true);
    alert("DEALER TOTAL " + dTotal);
//    checkBust(dTotal);
//    show(id, dCard2);
//    dealerHit();
}

//clear dealer div
function clear() {
    document.getElementById('dealer').innerHTML = "";
}

//dealer
function dHand() {
    if (dTotal >= 17) {//display cards if 17>=
        clear();
        printCard('dealer', dCard1);
        printCard('dealer', dCard2);
    } else {//hit dealer and display cards
        dCardCt = 3;
        dealerHit(dCardCt);
    }
}
function checkDealer() {
//    if ((dTotal < 17) && (dBust === 0)){
//        
//    }
}

//hit dealer and display cards
function dealerHit(dCardCt) {
    if ((dTotal < 17) && (dBust === 0)) {
        switch (dCardCt) {
            case 3:
                dCard3 = getCard();
                clear();
                dTotal += getValue(dCard3);
                isAce(dCard3, dAceCt, dTotal, true);
                checkBust(dTotal, dBust);
                printCard('dealer', dCard1);
                printCard('dealer', dCard2);
                printCard('dealer', dCard3);
                alert("Case 3 ----DTOTAL= " + dTotal);
                dCardCt++;
                break;
            case 4:
                dCard4 = getCard();
                clear();
                dTotal += getValue(dCard4);
                isAce(dCard4, dAceCt, dTotal, true);
                checkBust(dTotal, dBust);
                printCard('dealer', dCard1);
                printCard('dealer', dCard2);
                printCard('dealer', dCard3);
                printCard('dealer', dCard4);
                alert("Case 4 ----DTOTAL= " + dTotal);
                dCardCt++;
                break;
            case 5:
                dCard5 = getCard();
                clear();
                dTotal += getValue(dCard5);
                isAce(dCard5, dAceCt, dTotal, true);
                checkBust(dTotal, dBust);
                printCard('dealer', dCard1);
                printCard('dealer', dCard2);
                printCard('dealer', dCard3);
                printCard('dealer', dCard4);
                printCard('dealer', dCard5);
                alert("Case 5 ----DTOTAL= " + dTotal);
                dCardCt++;
                break;
        }
    }
}
//function stay1(){
//    status = 1;
//    stay();
//}

function stay() {
    status = 1;
//    if (status === 1) {
    alert("status: " + status);
//    dHand();
    if ((dTotal === pTotal) && (pBust === 0) && (dBust === 0)) {
        dHand();
        alert("DRAW");

    } else if ((pBust === 1) && (dBust === 1)) {
        dHand();
        alert("Draw");

    } else if ((dTotal > pTotal) && (dTotal < 21) && (pBust === 0) && (dBust === 0)) {
        dHand();
        alert("Dealer wins");

    } else if ((pBust === 1) && (dBust === 0)) {
        dHand();
        alert("Dealer wins");

    } else if (dTotal === 21 && (dCardCt - 1 === 2)) {
        dHand();
        alert("Dealer Blackjack");
    } else if ((pTotal > dTotal) && (pTotal < 21) && (pBust === 0) && (dBust === 0)) {
        dHand();
        alert("you win");
    } else if ((pBust === 0) && (dBust === 1)) {
        dHand();
        alert("you win");
    } else if (pTotal === 21) {
        if (nextCard - 1 === 2) {
            dHand();
            alert("You have Blackjack");
        }
    }
//        status = 1;
//    }
}

var betAmt = 0;
function bet() {
    var betAmt = document.getElementById('bet').value;
//    alert(betAmt);
    if (betAmt > 0) {
        dealer();
        hand();
    } else {
        alert("Must place a bet to play!");
    }
}

buttons();


//fix ace
//fix dealer hand
//status ------- winner


