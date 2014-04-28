<!DOCTYPE html>

<?PHP
session_start();
$_SESSION['total'] = 0;
$_SESSION['shown'] = array();
$_SESSION['cardCt'] = 3;
?>
<html>
    <head>
        <meta charset="UTF-8">
        <title></title>
    </head>
    <body>
        <?php

//        function data() {
//            $inf = 'cards_fixed.csv';
//            $inputFile = fopen($inf, 'r') or die("File not found ");
//            $input = array();
//            while (!feof($inputFile)) {
//                $line = fgets($inputFile);
//                $line = explode(',', $line);
//                $input [] = $line;
//            }
//            //print_r($input);
//            print "<br />";
//
//            fclose($inputFile);
//            return $input;
//        }

//        function getCard() {
//            $input = data();
//            $randCard = (rand(2, 53) - 1);
//            //$randCard = (rand(0, 51));
//            //print "$randCard<br />";
//            $c = $input[$randCard];
//            //print_r($c);
//            echo "<img src='images/card/$randCard.png'>";
//            return $c;
//        }
//        function getValue($c) {
//            $value = $c[1];
//            return $value;
//        }

        function isAce($c) {
            $ace = $c[2];
            return $ace;
        }

//        function hand() {
//            $card1 = getCard();
//            array_push($_SESSION['shown'], $card1);
//            $card2 = getCard();
//            array_push($_SESSION['shown'], $card2);
//            $total = getValue($card1) + getValue($card2);
//            //$nextCard = 3;
//            print $total;
//            $_SESSION['total'] = $total;
//        }

//        function hit() {
//            //$nextCard = 3;
//            switch ($_SESSION['cardCt']) {
//                case 3:
//                    $card3 = getCard();
//                    $_SESSION['total'] += getValue($card3);
//                    print $_SESSION['total'];
//                    $_SESSION['cardCt'] ++;
//                    //$nextCard++;
//                    break;
//                case 4:
//                    $card4 = getCard();
//                    $_SESSION['total'] += getValue($card4);
//                    print $_SESSION['total'];
//                    //$nextCard++;
//                    $_SESSION['cardCt'] ++;
//                    break;
//                case 5:
//                    $card5 = getCard();
//                    $_SESSION['total'] += getValue($card5);
//                    print $_SESSION['total'];
//                    //$nextCard++;
//                    $_SESSION['cardCt'] ++;
//                    break;
//            }
//        }

        //print "<br />";

        //hand();
        //hit();
        //print $_SESSION['shown'][0][0];
        //hit();
        //print_r($_SESSION);

        function ace() {
            if ($_SESSION['total'] > 21 && isAce() == true) {
                
            }
        }
        ?>
        <script type="text/javascript">
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


            //document.write(cards[52][0]);
            numCards = 0;
            function getCard() {
                min = 1;
                max = 52;
                randCard = Math.floor(Math.random() * (max - min + 1)) + min;
                //c = cards[randCard][0];
                //document.write(randCard + '<br />');
                numCards++;
                document.write("<img src='images/card/" + randCard + ".png'>");
                //document.write('<br />' + c + '<br />');
                return randCard;
            }
            function hand() {
                getHit();
                card1 = getCard();
                card2 = getCard();
                //document.write("card1 " + card1);
                total = getValue(card1) + getValue(card2);
                //$nextCard = 3;
                document.write(total);
                nextCard = 3;
                document.write(numCards);
            }
            function hit() {
            //$nextCard = 3;
            switch (nextCard) {
                case 3:
                    getHit();
                    document.write("<img src='images/card/" + card1 + ".png'>");
                    document.write("<img src='images/card/" + card2 + ".png'>");
                    card3 = getCard();
                    total += getValue(card3);
                    //document.write(total);
                    //getHit();
                    document.write(numCards);
                    nextCard++;
                    break;
                case 4:
                    //document.write("<img src='images/card/" + card1 + ".png'>");
                    //document.write("<img src='images/card/" + card2 + ".png'>");
                    //document.write("<img src='images/card/" + card3 + ".png'>");
                    card4 = getCard();
                    total += getValue(card4);
                    //document.write(total);
                    nextCard++;
                    document.write(numCards);
                    //getHit();
                    break;
                case 5:
                    //document.write("<img src='images/card/" + card1 + ".png'>");
                    //document.write("<img src='images/card/" + card2 + ".png'>");
                    //document.write("<img src='images/card/" + card3 + ".png'>");
                    //document.write("<img src='images/card/" + card4 + ".png'>");
                    card5 = getCard();
                    total += getValue(card5);
                    //document.write(total);
                    nextCard++;
                    document.write(numCards);
                    break;
            }
        }
            function getValue(c) {
                value = cards[c][0];
                return value;
            }
            function getHit(){
                document.write("<img src='images/chip_2.png' onclick='hit()'>");
            }
            //getCard();
            hand();
            //document.write("<button onclick='hit()'>hit it</button>");
        </script>
    </body>

</html>
