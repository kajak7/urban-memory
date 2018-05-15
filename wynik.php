<!doctype html>
<html>
    <head>
        <link rel="Stylesheet" type="text/css" href="style.css" />
        <title>Wyniki dodania ankiety</title>
        <meta charset="utf-8" />
    </head>
    <body style=" background-attachment: fixed; background-image: url(ankieta2.jpg); 
          background-repeat: no-repeat; background-size: cover ">

        <?php
        error_reporting(E_ALL ^ E_NOTICE);
        $plec = trim($_POST['plec']);
        $wzrost = trim($_POST['wzrost']);
        $wiek = trim($_POST['wiek']);
        $waga = trim($_POST['waga']);
        $aktywnosc = trim($_POST['aktywnosc']);
        $tryb= trim($_POST['tryb']);
        $stres = trim($_POST['stres']);
        $nikotyna = trim($_POST['nikotyna']);
        $alkohol= trim($_POST['alkohol']);
        $cisnienie = trim($_POST['cisnienie']);
        $cholesterol = trim($_POST['cholesterol']);
        $choroba1 = $_POST['choroba1'];
        $choroba2 = $_POST['choroba2'];
        $choroba3 = $_POST['choroba3'];
        $choroba4 = $_POST['choroba4'];
        $choroba5 = $_POST['choroba5'];
        $choroba6 = $_POST['choroba6'];

        $choroby_rodzina= trim($_POST['choroby_rodzina']);
        if (!($plec) || !$wzrost || !$wiek|| !$waga|| !$aktywnosc || !$tryb || !$stres || !$nikotyna || !$alkohol || !$cisnienie || !$cholesterol || 
        !($choroba1 || $choroba2 || $choroba3 || $choroba4 || $choroba5 || $choroba6) || !$choroby_rodzina)
        {

        ?>
        <h1>Brak wszystkich danych, wróć do poprzedniej <br>
        strony i spóbuj ponownie! :)</h1>
        <?php

        exit;
        }

        //wyłączenie magicznych znaków - \
        if (!get_magic_quotes_gpc())
        {
        $plec = addslashes($plec);
        $wzrost = addslashes($wzrost);
        $wiek = addslashes($wiek);
        $waga = addslashes($waga);
        $aktywnosc = doubleval($aktywnosc);
        $tryb = addslashes($tryb);
        $stres = addslashes($stres);
        $nikotyna = doubleval($nikotyna);
        $alkohol = addslashes($alkohol);
        $cisnienie = addslashes($cisnienie);
        $cholesterol = doubleval($cholesterol);
        $choroba1 = addslashes($choroba1);
        $choroba2 = addslashes($choroba2);
        $choroba3 = addslashes($choroba3);
        $choroba4 = addslashes($choroba4);
        $choroba5 = addslashes($choroba5);
        $choroba6 = addslashes($choroba6);
        $choroby_rodzina = addslashes($choroby_rodzina);
        }

        //łaczenie z baza
        $db = new PDO('mysql:host=localhost;dbname=dane_ankietowane','root','new_password',array(PDO::ATTR_PERSISTENT => true));



        ?>
        <h1>Dziekujemy za wypełnienie ankiety! :)</h1>
        <h2>Dzieki Tobie nasza baza danych sie powieksza,<br>
            przez co wyniki beda bardziej wiarygodne!</h2>
        <?php


        if($db === false){
        try{
		$db = new PDO('mysql:host=localhost;dbname=dane_ankietowane', 'root', 'new_password');
        }
        catch (PDOException $e)
        {
        print "Błąd połączenia z bazą!: ".$e -> getMessage()."<br/>";
        die();
        }
        }

        //szkielet zapytania
        $statement = $db->prepare("INSERT INTO ankietowani (plec, wiek, wzrost,waga,aktywnosc,tryb)
        VALUES  (:plec, :wiek, :wzrost, :waga, :aktywnosc, :tryb)");

        //przypisujemy (bindujemy) wartość zmiennej $plec do placeholdera :plec typu Stringa
        //informując tym samym bazę jakiego typu wartości się spodziewać
		
        $statement->bindValue(':plec', $_POST['plec'], PDO::PARAM_STR);
        $statement->bindValue(':wiek',  $_POST['wiek'], PDO::PARAM_INT);
        $statement->bindValue(':wzrost', (float) $_POST['wzrost'], PDO::PARAM_STR);
        $statement->bindValue(':waga', (float) $_POST['waga'], PDO::PARAM_STR);
        $statement->bindValue(':aktywnosc', $_POST['aktywnosc'], PDO::PARAM_INT);
        $statement->bindValue(':tryb',  $_POST['tryb'], PDO::PARAM_INT);
		
        //wysylamy całość do bazy
        $statement->execute();

        $statement1 = $db->prepare("INSERT INTO choroby (cisnienie, cholesterol,stres,choroby_rodzina) 
        VALUES (:cisnienie,:cholesterol, :stres, :choroby_rodzina)");

        $statement1->bindValue(':cisnienie', $_POST['cisnienie'], PDO::PARAM_INT);
        $statement1->bindValue(':cholesterol',  $_POST['cholesterol'], PDO::PARAM_INT);
        $statement1->bindValue(':stres',  $_POST['stres'], PDO::PARAM_INT);
        $statement1->bindValue(':choroby_rodzina',  $_POST['choroby_rodzina'], PDO::PARAM_STR);
        $statement1->execute();


        $statement2 = $db->prepare("INSERT INTO uzaleznienia (nikotyna,alkohol) VALUES (:nikotyna, :alkohol)");

        $statement2->bindValue(':nikotyna', $_POST['nikotyna'], PDO::PARAM_INT);
        $statement2->bindValue(':alkohol',  $_POST['alkohol'], PDO::PARAM_INT);
        $statement2->execute();


        $statement3 = $db->prepare("INSERT INTO choroby_posiadane (miazdzyca,choroba_wiencowa,cukrzyca,zaburzenie_rytmu_serca,nadcisnienie_tetnicze,nie_choruje) 
        VALUES (:choroba1, :choroba2, :choroba3, :choroba4, :choroba5, :choroba6)");

        $statement3->bindValue(':choroba1', (int) $_POST['choroba1'], PDO::PARAM_STR);
        $statement3->bindValue(':choroba2', (int) $_POST['choroba2'], PDO::PARAM_INT);
        $statement3->bindValue(':choroba3', (int) $_POST['choroba3'], PDO::PARAM_INT);
        $statement3->bindValue(':choroba4', (int) $_POST['choroba4'], PDO::PARAM_INT);
        $statement3->bindValue(':choroba5', (int) $_POST['choroba5'], PDO::PARAM_INT);
        $statement3->bindValue(':choroba6', (int) $_POST['choroba6'], PDO::PARAM_INT);
        $statement3->execute();

        //zwalniamy kursor
        $statement->closeCursor();
        $statement1->closeCursor();
        $statement2->closeCursor();
        $statement3->closeCursor();

        ?> 
    </body>
</html>