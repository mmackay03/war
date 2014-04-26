
<?PHP

require_once("debug.php");
require_once("blackLib.php");
require_once ('header.php');
setSessions($debug);
?>
<title>play</title>
<div id="banner">&nbsp;</div><br />

<div class="post">
    <h1 class="title">blackjack</h1>
    <br />
    <!--<img src="images/card/1.png" width="100">
    <img src="images/chip_1.png">
    <img src="images/chip_2.png">
    <img src="images/chip_3.png">
    <img src="images/chip_4.png">
    <img src="images/chip_5.png">-->


    <div id="game">

        <div id="buttons">
            <div id="betDiv"><input type="text" id="bet" size="10"></div>
            <div id="chips"></div>
        </div>
        <div id="war">
            <div id="dTotal">
            </div>
            <div id="dealer">

            </div>
            <div id="pTotal">
            </div>
            <div id="player">

            </div>
        </div>
        <div id="status">

        </div>
    </div>
    <div class="meta">
        <p class="byline">Posted on July 21, 2007 byFreeCssTemplates</p>
    </div>
</div>
<?PHP

require_once ('footer.php');
