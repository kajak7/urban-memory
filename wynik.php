<!doctype html>
<html>
  <head>
    <title>Wyniki dodania książki</title>
    <meta charset="utf-8" />
  </head>
  <body>
    <h1>Wyniki dodania książki</h1>
    <?php
      $isbn = trim($_POST['isbn']);
      $autor = trim($_POST['autor']);
      $tytul = trim($_POST['tytul']);
      $cena = trim($_POST['cena']);
      if (!$isbn || !$autor || !$tytul || !$cena)
      {
        echo 'Brak wszystkich danych, wróć do poprzedniej strony i spóbuj ponownie!';
        exit;
      }
      if (!get_magic_quotes_gpc())
      {
        $isbn = addslashes($isbn);
        $autor = addslashes($autor);
        $tytul = addslashes($tytul);
        $cena = doubleval($cena);
      }
      @ $db = new mysqli('localhost','root','admin123','dane_ankietowane');
      
      if (mysqli_connect_errno())
      {
        echo 'Połączenie z bazą nie powiodło się. Spóbuj ponownie';
        exit;
      }
      $db->query('SET NAMES utf8');
      $db->query('SET CHARACTER_SET utf8_unicode_ci');
      $zapytanie = "insert into ksiazki values ('".$isbn."', '".$autor."', '".$tytul."', '".$cena."')";
      $wynik = $db->query($zapytanie);
      if ($wynik) echo 'Liczba książek dodanych do bazy:'.$db->affected_rows;
    ?> 
  </body>
</html>