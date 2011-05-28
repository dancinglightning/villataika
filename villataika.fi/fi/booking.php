<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <link href="../stylesheets/lightbox.css" media="screen" rel="stylesheet" type="text/css" />

  <script src="../javascripts/prototype.js" type="text/javascript"></script>
  <script src="../javascripts/scriptaculous.js?load=effects,builder" type="text/javascript"></script>
  <script src="../javascripts/lightbox.js" type="text/javascript"></script>

  <link href="../stylesheets/styles.css" media="screen" rel="stylesheet" type="text/css" />

  <link href="../favicon.ico" rel="shortcut icon" type="image/vnd.microsoft.icon" /> 
  
  <meta name="keywords" content="Bed and breakfast majoitus hotel Fiskars häät  Suite" />
  <meta name="description" content="Bed and Breakfast Villa Taika : taianomaista tyylikkyyttä Varaus" />
  <meta http-equiv="content-type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Language" content="fi"/>  
  <title>Bed &amp; Breakfast Villa Taika : Varaus</title>
  
</head>

<body>

<div id="main">

  <div id="header">
      <div class="centre">
        <img src="../images/logo_iso.png" alt="Villa Taika logo"/>
      </div>
      <div id="slogan">taianomaista tyylikkyyttä</div>
  </div>

  <div id="lcol">
    <div id="menu">
      <ul>
          <li >
            <a href="index.html">Kotisivu</a>
          </li>
          <li >
            <a href="bed.html">Bed &amp; Breakfast</a>
          </li>
          <li class="active">
            <a href="booking.php">Varaus</a>
          </li>
          <li >
            <a href="groups.html">Ryhmille</a>
          </li>
          <li >
            <a href="map.html">Kartta</a>
          </li>
          <li >
            <a href="photos.html">Kuvat</a>
          </li>
          <li >
            <a href="activities.html">Tekemistä</a>
          </li>
      </ul>
    </div>
    <div id="menuend"></div>
    <div id="lcontent">
      <h3 class="first"> 
          <span>Huoneet</span>
      </h3>
      <ul class="divided">
        <li><a href="suites.html">Sviitit (suihkulla)</a></li>
        <li><a href="deluxe.html">Deluxe (wc:llä)</a></li>
        <li><a href="standard.html">Standard (jaettu)</a></li>
      </ul>

      <div class="divider"></div>
    
        <a href="booking.php" class='selected'>  
          <img src="../images/fi.gif" alt="fi"/> </a>
        <a href="../en/booking.php" >  
          <img src="../images/en.gif" alt="en"/> </a>

      <h3>
        <a href="news.html">  <span>Uutiset</span> </a>
      </h3>
      <div id="news"> 
        <a href="news.html"> 
          Edullinen majoitus kauniissa ulko aitassamme. 
        </a>
      </div>
    </div>

  </div>

  <div id="rcol">
    <div id="rcontent">
      <?php 
  require_once( '../google.php' );
  $show_form = 1 ;
  if(isset($_POST['submit'])) {
    $error = voiko() ;
    if( empty($error) ){
      teesen();
      $show_form = 0 ;
      ?> 
      Olemme vastaanottaneet varauksesi <br/><br/> 
      <?php 
    } else { 
    ?> 
       Voitko ystävällisesti täyttää kaikki kentät. Tarkista s-postiosoitteesi ja päivämäärä, kiitos. <br/>
    <?php 
    }; 
  }; 
if ($show_form )   { 
    ?> 
<br/> 
 Voit tehdä varauksen puhelimitse +358407046699 kello 10:00 ja 19:00 välillä, lähetä s-postia  tai käytä alla olevaa kaavaketta. <br/ ><br/ >  Täytä kaikki kentät. Jos et halua varata tiettyä huonetta ,  voit käyttää eri huone kategorioita Sviitti/Deluxe/Standard . <br/>  Kaikissa huoneissa on kaksoisvuode. Jos teitä on useampi tai haluatte erilliset vuoteet,  lisää se huomio kenttään. <br/>  <br/><br/> 
 
<form action="booking.php" method="post"> 
  <table border="0" cellpadding="8" cellspacing="8"> 
    <tr> 
      <td><label for="name">Koko nimesi</label>:</td> 
      <input type="hidden" name="language" value="fi" /> 
      <td><input type="text" name="name" id="name" size="35" 
      <?php if (isset($_POST['name']) ) print "value='" . $_POST['name'] . "'"  ; ?>  />
      </input>
        </td> 
      <td><label for="email">Sähköposti osoitteesi</label>:</td> 
      <td><input type="text" id="email" name="email" size="35" 
        <?php if (isset($_POST['email']) ) print "value='" . $_POST['email'] . "'"  ; ?> /></td> 
    </tr> 
    <tr> 
      <td><label for="arrival">saapumispäivä</label>:</td> 
      <td><input type="text" id="arrival" name="arrival" size="35" 
        <?php if (isset($_POST['arrival']) ) print "value='" . $_POST['arrival'] . "'"  ; ?> /></td> 
      <td><label for="phone">Puhelinnumerosi</label>:</td> 
      <td><input type="text" id="phone" name="phone" size="35" 
        <?php if (isset($_POST['phone']) ) print "value='" . $_POST['phone'] . "'"  ; ?> /></td> 
    </tr> 
    <tr> 
      <td><label for="nights">Öiden määrä</label>:</td> 
      <td><select name="nights"> <option></option> <option>1</option> <option>2</option><option>3</option> 
        <option>Soittakaa jos haluatte majoittua yli 3vrk.</option>  </select></td> 
      <td><label for="room">Huone</label>:</td> 
      <td><input type="text" id="room" name="room" size="35" 
        <?php if (isset($_POST['room']) ) print "value='" . $_POST['room'] . "'"  ; ?>/></td> 
    </tr> 
    <tr> 
      <td> <label for="comment">Huom!</label><br /> </td> 
      <td> <textarea rows="2" cols="35" name="comment" id="comment"
        ><?php if (isset($_POST['comment']) ) print  $_POST['comment']  ?> </textarea> </td> 
      <td colspan="2"><input type="submit" name="submit" value="Lähettä varaus" /></td> 
    </tr> 
  </table> 
</form> 
 
<?php 
}; 
?> 
 
Huonevaraus ei ole voimassa ennen kuin olette saaneet vahvistuksen siihen. <br/> <br/> 
 
Jos haluatte maksaa tilille, tilinumeromme on Nordea 123535-65726 / Villa Taika<br/> Paikanpäällä voi maksaa ainostaan käteisellä.<br/>

<br/> <br/> <br/> 
Jos haluatte maksaa luottokortilla käyttäkää Payson palvelua. Tilimme on info@villataika.fi. Payson palveluun pääset alla olevaa Payson tunnusta klikkaamalla:<br/>
<br/> 
<a href="https://www.payson.fi/SendMoney/?De=Standard+%2f+Delux&Se=info%40villataika.fi&Cost=75%2c00&Currency=EUR&&Sp=1" title="Payson internetbetalningar" style="width: 170px; height: 55px; background: url('https://www.payson.se/sites/all/files/images/external/PayBtn_BgImg_Clean.png') no-repeat scroll 0% 0% transparent; display: block; text-indent: 45px; padding-top: 15px; text-decoration: none; font-size: 13px; font-family: Arial; font-weight: bold; color: #00245D;"> Maksa 75 &euro;</a>

<a href="https://www.payson.fi/SendMoney/?De=Suite&Se=info%40villataika.fi&Cost=90%2c00&Currency=EUR&&Sp=1" title="Payson internetbetalningar" style="width: 170px; height: 55px; background: url('https://www.payson.se/sites/all/files/images/external/PayBtn_BgImg_Clean.png') no-repeat scroll 0% 0% transparent; display: block; text-indent: 45px; padding-top: 15px; text-decoration: none; font-size: 13px; font-family: Arial; font-weight: bold; color: #00245D;">Maksa 90 &euro;</a>




    </div>
    <div class="divider"></div>
  </div>
</div>

<div id="footer">
  <div class="kolmas">
    <b>Villa Taika</b>, Fiskarsintie 513, Antskog
    <br/>
    www.villataika.fi&nbsp;&nbsp;&nbsp;info@villataika.fi
  </div>
  <div class="kolmas">
    Raisa Kaipainen &amp; Torsten Rüger
    <br/>
    puh 040 704 6689
  </div>
  <div class="kolmas">
    <a href="index.html">
    	<img alt="" src="../images/logo_pien.gif" border="0" height="33" width="198"/>
    </a>
  </div>
</div>
<div class="divider"></div>
<br/>
<br/>
<br/>
<script type='text/javascript'>
var gaJsHost = (("https:" == document.location.protocol) ? "https://ssl." : "http://www.");
document.write(unescape("%3Cscript src='" + gaJsHost + "google-analytics.com/ga.js' type='text/javascript'%3E%3C/script%3E"));

</script>
<script type='text/javascript'>
try {
var pageTracker = _gat._getTracker("UA-12603339-2");
pageTracker._trackPageview();
} catch(err) {}
</script>

</body>
</html>
