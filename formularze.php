<!DOCTYPE html>
<html>
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/formularze.css" type="text/css" >
        <title> Szybki kurs HTML - Budowanie formularzy</title>
    </head>

    <body>

        <div id="kontener">
            <div id="baner">
                <h2>Szybki kurs</h2>
            </div>
            <div id="menu">
                <a href="index.html">Podstawowe znaczniki</a> 
                <a href="tabele.html">Tworzenie tabel</a> 
                <a href="formularze.html">Budowa formularzy</a>  
            </div>
            <div id="tresc">
                <div> 
                    <form action="formularze.php" method="get"> 
                        <br />
                        <label for="imie">Imie : </label>  <input id="imie" type="text" name="login"/><br /> 
                        <label for="nazwisko">Nazwisko: </label> <input id="nazwisko" type="text" name="nazw"/><br /> 
                        <label for="wiek">Wiek: </label> <input id="wiek" type="number" name="wiek"/><br /> 
                        <label for="nazwisko">Email: </label> <input id="email" type="text" name="mail"/><br /><br /> 
                        Wybierz ulubione języki programowania: <br /> 
                        <input type="checkbox" name="C" value="C" /> Język C/C++
                        <input type="checkbox" name="Java" value="Java" /> Język Java 
                        <input type="checkbox" name="PHP" value="PHP" /> Język PHP <br /> 

                        <select id="select_hobby" name="hobby"> 
                            <option value="t">Turystyka</option> 
                            <option value="m">Muzyka</option> 
                            <option value="f">Film</option> 
                            <option value="s">Sport</option> 
                            <option value="i">Inne</option> 
                        </select><br />
                        Wybierz przeglądarkę, z której korzystasz najczęściej: <br /> 
                        <label for="ff">Firefox</label><input id="ff" type="radio" name="przegladarka" value="Ff" /> <br /> 
                        <label for="ff">Chrome </label><input type="radio" name="przegladarka" value="Ch" /><br /> 
                        <input type="submit" name="send" value="Dodaj" /> 
                        <input type="submit" name="show" value="Pokaz" /> 
                        <input type="submit" name="java" value="Java" />                         
                        <input type="reset" value="Wyczyść" /> 
                    </form> 
                </div>   
                <div> 
                    <?php
                    include_once 'include/function.php';
                    $file = "baza.txt";
                    if (isset($_REQUEST['send'])) {
                        $dane = getAndPrintParam();
                        $dane = date('Y-m-d H:i:s') . " " . $dane;

                        $fp = fopen($file, "a");
                        flock($fp, 2);
                        fwrite($fp, $dane);
                        flock($fp, 3);
                        fclose($fp);
                    }

                    if (isset($_REQUEST['show'])) {
                        $lines = file($file);
                        foreach ($lines as $line) {
                            echo $line . "<br/>";
                        }
                    }

                    if (isset($_REQUEST['java'])) {
                        $lines = file($file);
                        foreach ($lines as $line) {
                            if (strstr($line, 'Java'))
                                echo $line . "<br/>";
                        }
                    }

                    if (isset($_REQUEST['statystyki'])) {
                        $lines = file($file);
                        $ilosc=0;
                        $mlodzi=0;
                        $starzy=0;
                        foreach ($lines as $line) {
                            if (strstr($line, 'Java'))
                                echo $line . "<br/>";
                        }
                    }
                    ?> 
                </div>
                <p> <a href="http://validator.w3.org/">HTML walidator 
                        <img src="http://www.w3.org/Icons/WWW/w3c_home_nb" alt="Walidator" /> </a> 
                </p>
            </div>
            <div id="stopka">&copy;BP 2014</div>
        </div>
    </body>
</html>


