<!doctype html>
<html>
  <head>
    <link rel="Stylesheet" type="text/css" href="style.css" />
    <title>Ankieta dotycząca wystąpienia ryzyka zawału miesniowego</title>
    <meta charset="utf-8" />
  </head>
     <body style=" background-attachment: fixed; background-image: url(ankieta.jpg); 
	 background-repeat: no-repeat; background-size: cover ">
  
    <h1>Ankieta dotycząca wystąpienia ryzyka zawału miesniowego</h1>
    <form action="wynik.php" method="post">
	
	
	<h2>1. Płeć</h2>
       <input type="radio" name="plec" value="K" /> Kobieta <br /><br />
	   <input type="radio" name="plec" value="M" /> Mężczyzna<br /><br />
	
    <h2>2. Pana/Pani wzrost [cm]?</h2>
      <input type="text" name="wzrost" /> <br /><br />
	  
	<h2>3. Pana/Pani wiek?</h2>
      <input type="text" name="wiek" /> <br /><br />
	  
	  	<h2>4. Pana/Pani waga?</h2>
      <input type="text" name="waga" /> <br /><br />
	


	<h2>5. Jak często Pan/Pani uprawia jakąkolwiek aktywność fizyczną?</h2>
	
    <input type="radio" name="aktywnosc" value="5" /> Codziennie <br /><br />
   	<input type="radio" name="aktywnosc" value="4" /> 3 lub wiecej razy w tygodniu<br /><br />
	<input type="radio" name="aktywnosc" value="3" /> 1-2 razy w tygodniu <br /><br />
	<input type="radio" name="aktywnosc" value="2" /> 1-2 razy w miesiącu <br /><br />
	<input type="radio" name="aktywnosc" value="1" /> Rzadziej <br /><br />
	
	
	<h2>6. Jaki jest tryb Pana/Pani pracy?</h2>
    <input type="radio" name="tryb" value="4" /> Umysłowa <br /><br />
   	<input type="radio" name="tryb" value="3" /> Fizyczna<br /><br />
	<input type="radio" name="tryb" value="3" /> Nie pracuję<br /><br />

	<h2>7. Jak często jest Pan/Pani poddawana stresującym sytuacjom w domu lub w pracy?</h2>
      <input type="radio" name="stres" value="4" /> Codziennie <br /><br />
	   <input type="radio" name="stres" value="3" /> Kilka razy w tygodniu <br /><br />
	    <input type="radio" name="stres" value="2" /> Kilka razy w miesiącu <br /><br />
		 <input type="radio" name="stres" value="1" /> Rzadko <br /><br />
		 
		 <h2>8. Czy pali Pan/Pani papierosy?</h2>
      <input type="radio" name="nikotyna" value="4" /> Tak <br /><br />
	   <input type="radio" name="nikotyna" value="3" /> Nie <br /><br />
	    <input type="radio" name="nikotyna" value="2" /> Paliłem/am w przeszłości <br /><br />
		 <input type="radio" name="nikotyna" value="1" /> Jestem biernym palaczem <br /><br />
		 
		 <h2>9. Jak często pije Pan/Pani alkohol?</h2>
      <input type="radio" name="alkohol" value="5" /> Codziennie<br /><br />
	   <input type="radio" name="alkohol" value="4" /> 1-2 razy w tygodniu <br /><br />
	    <input type="radio" name="alkohol" value="3" /> Kilka razy w miesiącu <br /><br />
		 <input type="radio" name="alkohol" value="2" /> Rzadziej <br /><br />
		 <input type="radio" name="alkohol" value="1" /> Nie piję <br /><br />

		 <h2>10. Jakie ma Pan/Pani ciśnienie tętnicze krwi?</h2>
      <input type="radio" name="cisnienie" value="4"  /> Prawidłowe/prawidłowe wysokie (<120/80 - 140/90)<br /><br />
	   <input type="radio" name="cisnienie" value="3" /> Nadciśnienie łagodne/umiarkowane (140/90 - 170/95) <br /><br />
	    <input type="radio" name="cisnienie" value="2" /> Nadciśnienie ciężkie ( powyżej 170/100) <br /><br />
		 <input type="radio" name="cisnienie" value="1" /> Nie wiem<br /><br />
		
		 <h2>11. Jaki ma Pan/Pani poziom cholesterolu (całkowitego) we krwi?</h2>
        <input type="radio" name="cholesterol" value="4" /> Optymalny - poniżej 200 mg/dl<br /><br />
	    <input type="radio" name="cholesterol" value="3" /> Podwyższony  <br /><br />
	    <input type="radio" name="cholesterol" value="2" /> Nadciśnienie ciężkie ( powyżej 170/100) <br /><br />
		<input type="radio" name="cholesterol" value="1" />Nie wiem<br /><br />
		
		<h2>12. Czy choruje Pan/Pani na którąś z poniższych chorób? </h2>
        <input type="checkbox" name="choroba1" value="1" /> Miażdzyca<br /><br />
	    <input type="checkbox" name="choroba2" value="1" /> Choroba wieńcowa<br /><br />
	    <input type="checkbox" name="choroba3" value="1" /> Cukrzyca <br /><br />
		<input type="checkbox" name="choroba4" value="1" /> Zaburzenia rytmu serca<br /><br />
	    <input type="checkbox" name="choroba5" value="1" /> Nadciśnienie tętnicze<br /><br />
	    <input type="checkbox" name="choroba6" value="1" /> Nie choruje<br /><br />
		
		 <h2>13. Czy ktoś u Pana/Pani w rodzinie wśród najbliższych chorował na wyżej wymienione choroby?</h2>
        <input type="radio" name="choroby_rodzina" value="Tak" /> Tak<br /><br />
	    <input type="radio" name="choroby_rodzina" value="Nie" /> Nie <br /><br />
	    <input type="radio" name="choroby_rodzina" value="Nie wiem" /> Nie wiem <br /><br />
		
        <input type="submit" name="wyslij" value="Wyślij" />
	    <input type="reset" name="wyczyść" value="Wyczyść" />
	    <br /><br />
	   
    </form>
  </body>
</html>