<?php
$_SESSION;
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

function hit(){
            //$nextCard = 3;
            switch ($_SESSION['cardCt']) {
                case 3:
                    $card3 = getCard();
                    $_SESSION['total'] += getValue($card3);
                    print $_SESSION['total'];
                    $_SESSION['cardCt']++;
                    //$nextCard++;
                    break;
                case 4:
                    $card4 = getCard();
                    $_SESSION['total'] += getValue($card4);
                    print $_SESSION['total'];
                    //$nextCard++;
                    $_SESSION['cardCt']++;
                    break;
                case 5:
                    $card5 = getCard();
                    $_SESSION['total'] += getValue($card5);
                    print $_SESSION['total'];
                    //$nextCard++;
                    $_SESSION['cardCt']++;
                    break;
            }
        }
        hit();