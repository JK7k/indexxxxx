<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <header><h1>polaczenie z baza danych</h1></header>
    <main>
        <h2>Ustawienie polaczenia</h2>
        <p>$polaczenie-mysql_connect('adres bazy','nazwa','haslo','nazwa bazy')</p>
        <h2>sprawdzanie czy podlaczylismy sie do bazy</h2>
        <p>if (!$polaczenie){}</p>
        <h2>Wykonanie zadania i zapisanie wyniku zmiennej</h2>
        <p>mysql_query($polaczenie,'zapytanie sql')</p>
        <h2>wyswietlanie wyniku zapytania na stronie </h2>
        <p>while($wiersz-mysql_fetch_array($zmienna))<br>
        {<br>
            echo $wiersz['nazwa kolumny']." ".$row['nazwa kolumny drugiej'];<br>
        }
        <h2> Zamkniecie polaczenia z baza danych
        <p>mysqli_close($polaczenie)</p>
        <div>
            <h2>Testowe polacznie z baza danych</h2>
            <?php
                $polaczenie=mysqli_connect('localhost','root','','ksiegarnia4tie');
                if($polaczenie)
                {
                    echo "Połączylismy sie z baza danych";
                    $zapytanie="select * FROM klient";
                    $wynik=mysqli_query($polaczenie,$zapytanie);
                    while($wiersz=mysqli_fetch_array($wynik)){
                        echo $wiersz['imie']." ".$wiersz['nazwisko']."<br>";
                    }
                }
                else
                {
                    exit("blad polaczenia z baza");
                }
            ?>
    
</body>
</html>