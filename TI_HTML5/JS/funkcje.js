function oblicz()
{
    var l1 = document.getElementById('l1');
    l1 = l1.value;
    l1 = parseInt(l1);
    var l2 = parseInt(document.getElementById('l2').value);
    var s = document.getElementById('suma');
    s.value = l1 + l2;
}



function obliczRate()
{
    var kwota = document.getElementById('kwota');
    var iloscRat = document.getElementById('iloscRat');
    var procent = document.getElementById('procent');
    var rata = document.getElementById('rata');
    var kwotaIOdsetki = document.getElementById('kwotaIOdsetki');

    
    kwota = parseFloat(kwota.value);
    iloscRat = parseFloat(iloscRat.value);
    procent = parseFloat(procent.value)/10;

    var pr_mc = procent/12;

    var i_rata = (kwota*pr_mc)/(1-(1/(Math.pow((1+pr_mc),iloscRat))));
    
    rata.value = i_rata.toFixed(2);
    kwotaIOdsetki.value = (iloscRat * i_rata).toFixed(2);
    
}


