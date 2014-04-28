<?PHP

require_once("debug.php");
require_once("blackLib.php");
require_once ('header.php');
setSessions($debug);
?>
<title>play</title>
<div id="banner">&nbsp;</div><br />

<div class="post">
    <h1 class="title">color setting</h1>
    <br />
    <div id="centerthis">
    <div id="colorDiv"><input type="text" id="color" size="10"></div>
    <div id="colorBtn"></div>
            <div id="color2Div">Pick a number between 0 and 4 to set the font color on the game page.<br />
                0 = default<br />1 = blue<br />2 = green<br />3 = pink<br />4 = purple<br />
            </div>
    </div>
    <div class="meta">
        <p class="byline">Posted on July 21, 2007 byFreeCssTemplates</p>
    </div>
</div>
<?PHP

require_once ('footerColor.php');


