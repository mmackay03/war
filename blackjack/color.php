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
        <h4>Select a color for the font on the game page</h4>
        <form>
            <input type='radio' name='color' value='0'><span style ='color:white;'>Default</span>
            <input type='radio' name='col' value='1'><span style ='color:#4186D3;'>Blue</span>
            <input type='radio' name='col' value='2'><span style ='color:#00CC00;'>Green</span>
            <input type='radio' name='col' value='3'><span style ='color:#C9007A;'>Pink</span>
            <input type='radio' name='col' value='4'><span style ='color:#8C04A8;'>Purple</span>
        </form>
        <div id="colorBtn"></div>
    </div>
    <div class="meta">
        <p class="byline">Posted on July 21, 2007 byFreeCssTemplates</p>
    </div>
</div>
<?PHP

require_once ('footerColor.php');


