<?php

function getAndPrintParam() {

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

    if (isset($_REQUEST['wiek']) && ($_REQUEST['nazw'] != "")) {
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
            $wynik = $wynik . " " . $opcja . " ";
        }
    }

    return $imie . " " . $nazwisko . " " . $mail . " " . $wynik . "\r\n";
}

?>
