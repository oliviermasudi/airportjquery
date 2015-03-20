<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta http-equiv="CACHE-CONTROL" content="NO-CACHE" />
<meta name="Description" content="dit is de oefening voor de vdab opleidingsmodule jQuery. 'Sardine Airways' is een fictieve maatschappij. Indien u een  sardine bent, wend u tot een ander bedrijf" />
<title>Sardine Airways: jQuery eindtaak</title>
<link  rel='stylesheet' type="text/css" href="css/eindtaak.css"/>
<link  rel='stylesheet' type="text/css" href="css/olivier.css"/>
<link rel='stylesheet' type='text/css' href='jquery/css/jquery-ui.min.css' />
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<script src="jquery/js/jquery-ui.min.js"></script>
<script src="jquery/js/jquery.ui.datepicker-nl.js"></script>
<script src="scripts/olivier.js"></script>

<!--  Form validator  -->
<script src="http://ajax.aspnetcdn.com/ajax/jquery.validate/1.13.1/jquery.validate.min.js"></script>

<!--  Slideshow lib  -->
<link rel="stylesheet" type="text/css" href="jquery/slick-master/slick/slick.css"/>
<script type="text/javascript" src="//code.jquery.com/jquery-migrate-1.2.1.min.js"></script>
<script type="text/javascript" src="jquery/slick-master/slick/slick.min.js"></script>


</head>
<body>
<div id="container">
  <div id="kop">
      <img id= "koptitel" src="images/sardineskop.png" alt="sardines airways"  />
  </div>
  <div id="buik">
    <div id="links">&nbsp;</div>
    <div id="tester" style="display:none">tester element</div>
    <div id="midden">
      
        <div class="allprent">
        <div id="prent"></div>
        <div id="prent2"></div>
        <div id="prent3"></div>
        <div id="prent4"></div>
        </div>
      
 
      
      <div id="inhoud">
          <!-- start UL toegevoegd voor tabs-->
<ul>
<li><a href='#vlucht'>Boek uw vlucht</a></li>
<li><a href='#checkin'>Online Check-in</a></li>
<li><a href='#hotel'>Zoek een hotel</a></li>
<li><a href='#wagen'>Reserveer en wagen</a></li>
</ul>
<!--einde UL toegevoegd voor tabs-->
        
          
        <div id="vlucht">
            
   	<!--start foutBox -->
        <div class='foutBox' id='fouten1'><h2>Fouten</h2><ul></ul></div>
        <!--einde foutBox -->  
            
          <h1>Vlucht boeken</h1>
          <form name="frmVlucht" id ="frmVlucht" action="reflect_data.php" method="get">
            <p>
              <label>Land van vertrek:</label>
              <select name="countries" id="countries">
              </select>
            </p>
            <p>
              <label>Luchthaven</label>
              <select name="airports" id="airports" >
              </select>
            </p>
            <p>
              <label>naar (luchthavencode)</label>
              <input type="text" name="destinationairport" id="destinationairport" />
            </p>
            <p>           
               <label>heen (datum)</label>
              <input  class="datum" type="text" name="vertrekdatum" id="vertrekdatum" /><label class="inline" > retour<input type="checkbox" name="retour" id="retour" /></label>             
            </p>
            <p>
              <label>terug (datum)</label>
              <input class="datum" type="text" name="terugdatum" id="terugdatum" />
            </p>
              
            <p>
              <label>ticket type</label>
              goedkoopst
              <input type="radio" name="tickettype" id="ticketgoedkoop" value="goedkoop" />
              flexibel
              <input type="radio" name="tickettype" id="ticketflexibel" value="flexibel" />
            </p>
            <p>
              <label>aantal</label>
              volwassenen
              <select name="volwassenen" id="volwassenen" >
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
              </select>
              kinderen
              <select name="kinderen" id="kinderen" >
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
              </select>
              babies
              <select name="babies" id="babies" >
                <option>0</option>
                <option>1</option>
                <option>2</option>
                <option>3</option>
                <option>4</option>
                <option>5</option>
                <option>6</option>
                <option>7</option>
                <option>8</option>
                <option>9</option>
              </select>
            </p>
            <p>
              <input type="submit" value="ga verder" />
            </p>
          </form>
        </div>
        <div id="checkin">
            
   	<!--start foutBox -->
        <div class='foutBox' id='fouten2'><h2>Fouten</h2><ul></ul></div>
        <!--einde foutBox -->  
        
          <h1>Online check-in</h1>
          <p>Welkom op Sardine Airways online check-in systeem.</p>
          <p>U kunt vanaf 15 dagen tot ten laatste 4 uur v&oacute;&oacute;r uw vlucht inchecken. Eenmaal ingecheckt kunt u ten allen tijde uw boarding paas (opnieuw) uitprinten tot 40 minuten  v&oacute;&oacute;r vertrektijd.</p>
          <p>Om online in te checken:</p>
          <ul>
            <li>vul eerst uw reservatienummer in</li>
            <li>vul het kredietkaartnummer in waarmee de boeking gebeurde</li>
          </ul>
          <form name="frmCheckin" id ="frmCheckin" action="reflect_data.php" method="get">
            <p>
              <label>boekingreferentie</label>
              <input type="text" name="boekingreferentie" id="boekingreferentie" />
              <!--start dialogbutton--><a href='#' id='dialog_link_boekingsreferentie'><img src="images/infos.png" alt="Info over uw boekingsreferentie" title="Info over uw boekingsreferentie"/></a><!--einde dialogbutton -->
              <!-- ui-dialog -->
   		<div id='dialog_boekingsreferentie' class='dialoogvenster' title='Uw boekingsreferentie'>
    		<p>uw boekingsreferentie vind u op uw eleactronisch ticket zoals hieronder aangegeven" met daarbij de prent boeking.png als uitleg bij dit veld</p>
		</div>
  		<!-- ui-dialog -->
            </p>
            <p>
              <label>kredietkaartnummer</label>
              <input type="text" name="kredietkaartnummer" id="kredietkaartnummer" />
            </p>
            <p>
              <label>familienaam</label>
              <input type="text" name="familienaam" id="familienaam" />
            </p>
            <p>
              <input type="submit" value="checkin" />
            </p>
          </form>
        </div>
        <div id="hotel">
          <h1>Zoek een hotel</h1>
          <form name="frmHotel" id ="frmHotel" action="reflect_data.php" method="get">
            <p>
              <label>waar wil u logeren?</label>
              <input type="text" name="city" id="city" />
            </p>
            <p>
              <label>checkin datum</label>
              <input  class="datum" type="text" name="checkindatum" id="checkindatum" />
            </p>
            <p>
              <label>checkout datum</label>
              <input  class="datum" type="text" name="checkoutdatum" id="checkoutdatum" />
            </p>
            <p>
              <input type="submit" value="zoek hotels" />
            </p>
          </form>
        </div>
        <div id="wagen">
          <h1>Wagen boeken</h1>
          <form name="frmCar" id ="frmCar" action="reflect_data.php" method="get">
            <p>
              <label>pick up locatie</label>
              <input type="text" name="pickuplocatie" id="pickuplocatie" />
            </p>
            <p>
              <label>pick up datum</label>
              <input  class="datum" type="text" name="pickupdatum" id="pickupdatum" />
            </p>
            <p>
              <label>drop off locatie</label>
              <input type="text" name="dropofflocatie" id="dropofflocatie" />
            </p>
            <p>
              <label>drop off datum</label>
              <input  class="datum" type="text" name="dropoffdatum" id="dropoffdatum" />
            </p>
            <p>
              <input type="submit" value="boek wagen" />
            </p>
          </form>
        </div>
      </div>
      <!--einde inhoud-->
    </div>
    <!--einde midden-->
    <div id="rechts">&nbsp;</div>
  </div>
  <!--einde buik-->
  <div id="voet"> &copy; Sardine Airways | About | Contact </div>
</div>

</body>
</html>