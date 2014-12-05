function sprawdzPole(pole_id, obiektRegex) {
    var obiektPole = document.getElementById(pole_id);
    if (!obiektRegex.test(obiektPole.value))
        return (false);
    else
        return (true);
}

function sprawdz_radio(nazwa_radio) {
    var obiekt = document.getElementsByName(nazwa_radio);
    for (i = 0; i < obiekt.length; i++)
    {
        wybrany = obiekt[i].checked;
        if (wybrany)
            return true;
    }
    return false;
}

function sprawdz_box(box_id)
{
    var obiekt = document.getElementById(box_id);
    if (obiekt.checked)
        return true;
    else
        return false;
}

function sprawdz()
{
    var ok = true;
    obiektNazw = /^[a-zA-Z]{2,20}$/;
    obiektemail =
            /^([a-zA-Z0-9])+([.a-zA-Z0-9_-])*@([a-zA-Z0-9_-])+(.[a-zA-Z0-9_-]+)+/;
    obiektWiek = /^[1-9][0-9]{1,2}$/;

    var dane = "Dane: ";



    if (!sprawdzPole("nazw", obiektNazw))
    {
        ok = false;
        document.getElementById("nazw_error").innerHTML =
                dane;//"Wpisz poprawnie nazwisko!";
    }
    else {
        document.getElementById("nazw_error").innerHTML = "";
    }

    if (!sprawdzPole("wiek", obiektWiek))
    {
        ok = false;
        document.getElementById("wiek_error").innerHTML =
                "Wpisz poprawnie wiek!";
    }
    else {
        document.getElementById("wiek_error").innerHTML = "";
    }

    if (!sprawdzPole("email", obiektemail))
    {
        ok = false;
        document.getElementById("email_error").innerHTML =
                "Wpisz poprawnie email!";
    }
    else {
        document.getElementById("email_error").innerHTML = "";
    }

    if (!sprawdz_radio("zaplata"))
    {
        ok = false;
        document.getElementById("zaplata_error").innerHTML =
                "Wpisz poprawnie email!";
    }
    else {
        document.getElementById("zaplata_error").innerHTML = "";
    }


    if (!((sprawdz_box("php")) | (sprawdz_box("java")) | (sprawdz_box("c"))))
    {
        ok = false;
        document.getElementById("produkt_error").innerHTML =
                "Wybierz produkt!";
    }
    else {
        document.getElementById("produkt_error").innerHTML = "";
    }

    if (ok) {
        dane += "Nazwisko: " + document.getElementById("nazw").value + "\n" +
                "Wiek: " + document.getElementById("wiek").value + "\n" +
                "Kraj: " + document.getElementById("kraj").value + "\n" +
                "Email: " + document.getElementById("email").value + "\n";
        
        if (sprawdz_box("php")) {
            dane += "Produkt: PHP";
        }
        if (sprawdz_box("c")) {
            dane += "Produkt: C";
        }
        if (sprawdz_box("java")) {
            dane += "Produkt: Java";
        }
        
        
        alert(dane);
    }

    return ok;
}
