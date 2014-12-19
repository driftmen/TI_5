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
                        <input type="submit" value="Wyślij" /> 
                        <input type="reset" value="Wyczyść" /> 
                    </form> 
                </div>   
                <div> 
                    <?php
                    echo '<h2>Dane odebrane z formularza:</h2>';
                    if (isset($_REQUEST['login']) && ($_REQUEST['login'] != "")) {
                        $imie = htmlspecialchars(trim($_REQUEST['login']));
                        echo 'Imie:' . $imie . '<br />';
                    }
                    else
                        echo 'Nie wpisano imienia <br />';

                    if (isset($_REQUEST['nazw']) && ($_REQUEST['nazw'] != "")) {
                        $nazwisko = htmlspecialchars(trim($_REQUEST['nazw']));
                        echo 'Nazwisko:' . $nazwisko . '<br />';
                    }
                    else
                        echo 'Nie wpisano nazwiska <br />';


                    if (isset($_REQUEST['mail']) && ($_REQUEST['mail'] != "")) {
                        $mail = htmlspecialchars(trim($_REQUEST['mail']));
                        echo 'Mail:' . $mail . '<br />';
                    }
                    else
                        echo 'Nie wpisano maila <br />';

                    echo "Zamowienie: ";

                    $wynik = "";
                    $array = array("C", "Java", "PHP");
                    foreach ($array as $opcja) {
                        if (isset($_REQUEST["$opcja"]) && ($_REQUEST["$opcja"] != "")) {
                            $opcja = htmlspecialchars(trim($_REQUEST["$opcja"]));
                            echo $opcja;
                        }
                    }
                    echo $wynik;
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
