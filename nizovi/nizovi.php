<?php
    $nizAuta = 
        array("BMW", "Opel", "Toyota");
    $prvaKlupa = array(
        "Nikola",
        "Milica",
        "Jelena",
        "Milica",
        "Vanja",
        "Jelena"
    );

    echo $prvaKlupa[0];
    echo "<br>";
    echo $prvaKlupa[4];
    /*
    $prom = array(....);
    $prom - indeksirani niz
    indeksi se dodalju automatski
    indeksiranje pocinje od 0
    => element i ima indeks i-1
    Poslednji element u nizu
      ima indeks duz_niza - 1.
      
    Ako je n duzina niza,
    onda su elementi niza:
    $prom[0], $prom[1], ...
        $prom[n - 1] */
    
    $drugaKlupa[100] = "Bogdan";
    $drugaKlupa[105] = "Nemanja";
    $drugaKlupa[5] = "Rade";
    $drugaKlupa[200] = "Sanja";

    echo "<br>";
    echo $drugaKlupa[5];
    echo "<br>";

    $niz = array(5, -9, 0, 1, 3, 6);
    $suma = 0;
    foreach($niz as $elem) {
        $suma += $elem;
    }
    echo $suma;
    echo "<br>";

    // Odrediti maksimalnu vrednost
    // celobrojnog niza
    $maks = $niz[0];
    for($i = 1; $i < count($niz); $i++) 
    {
        if($niz[$i] > $maks) 
        {
            $maks = $niz[$i];
        }
    }
    echo $maks;
    echo "<br>";

    $maks = $niz[0];
    $index = 0;
    for($i = 1; $i < count($niz); $i++)
    {
        if($niz[$i] > $maks)
        {
            $maks = $niz[$i];
            $index = $i;
        }
    }
    echo $index;
    echo "<br>";

    // Odrediti broj elemenata koji ima vecu vrednost
    // od srednje vrednosti celobrojnog niza.
    $suma = 0;
    $n = count($niz);
    //echo "<br>Elem je: $element<br>";
    foreach($niz as $element) 
    {
        $suma += $element;
    }
    //echo "<br>Elem je: $element<br>";
    $sr = $suma / $n;
    $broj = 0;
    foreach($niz as $elem) 
    {
        if($elem > $sr)
        {
            $broj++;
        }
    }
    echo $broj;
    echo "<br>";

    //  Izračunati zbir pozitivnih 
    // elemenata celobrojnog niza.
    $suma = 0;
    $i = 0;
    while($i < count($niz)) 
    {
        if($niz[$i] > 0)
        {
            $suma += $niz[$i];
        }
        $i++;
    }
    echo $suma;
    echo "<br>";

    //  Odrediti broj parnih 
    // elemenata u celobrojnom nizu.

    $broj = 0;
    foreach($niz as $elem)
    {
        if($elem % 2 == 0)
        {
            $broj++;
        }
    }
    echo $broj;
    echo "<br>";

    //  Izračunati sumu elemenata 
    // u nizu sa parnim indeksom.
    $suma = 0;
    for($i = 0; $i < count($niz); $i++)
    {
        if($i % 2 == 0) 
        {
            $suma += $niz[$i];
        }
    }
    echo $suma;
    echo "<br>";
    
    function stampajNiz($niz)
    {
        foreach($niz as $elem)
        {
            echo $elem . " ";
        }
        echo "<br>";
    }

    //stampajNiz($niz);
    //  Promeniti znak svakom elementu 
    // celobrojnog niza.
    echo "Pre promene znaka: <br>";
    stampajNiz($niz);
    for($i = 0; $i < count($niz); $i++)
    {
        $niz[$i] = -$niz[$i];
        // $niz[$i] *= -1;
    }
    echo "Posle promene znaka:<br>";
    stampajNiz($niz);

    
    //  Promeniti znak svakom neparnom
    // elementu niza sa parnim indeksom
    echo "Pre promene znaka: <br>";
    stampajNiz($niz);
    for($i = 0; $i < count($niz); $i+=2)
    {
        if($niz[$i] % 2 != 0) {
            $niz[$i] = -$niz[$i];
        }
    }
    echo "Posle promene znaka:<br>";
    stampajNiz($niz);

    $broj = 0;
    for($i = 1; $i < count($niz); $i+=2)
    {
        if($niz[$i] % 2 == 0)
        {
            $broj++;
        }
    }
    echo $broj;
    echo "<br>";

    $zadnjaKlupa = array(
        'Bojana',
        'Nikola',
        'Dimitrije',
        'Vanja',
        'Rade'
    );
    //  Ispisati dužinu svakog elementa 
    // u nizu stringova.
    stampajNiz($zadnjaKlupa);
    foreach($zadnjaKlupa as $ime)
    {
        echo strlen($ime);
        echo "<br>";
    }
    
    //  Odrediti element u nizu 
    // stringova sa najvećom 
    // dužinom.
    $maksDuzina = strlen($zadnjaKlupa[0]);
    $index = 0;
    for($i = 1; $i < count($zadnjaKlupa); $i++)
    {
        if(strlen($zadnjaKlupa[$i]) > $maksDuzina)
        {
            $maksDuzina = strlen($zadnjaKlupa[$i]);
            $index = $i;
        }
    }
    echo "Ime sa najvecom duzinom: " . 
        $zadnjaKlupa[$index];
    echo "<br>";

    //  Odrediti broj elemenata u nizu 
    // stringova čija je dužina veća od 
    // prosečne dužine svih stringova u nizu. 
    $zbir = 0;
    $n = count($zadnjaKlupa);
    foreach($zadnjaKlupa as $ime)
    {
        $zbir += strlen($ime);
    }
    $srDuz = $zbir / $n;
    echo "Srednja duzina imena je: $srDuz";
    echo "<br>";
    $broj = 0;
    foreach($zadnjaKlupa as $ime) 
    {
        if(strlen($ime) > $srDuz)
        {
            $broj++;
        }
    }
    echo "Broj imena: $broj";
    echo "<br>";

    // Odrediti broj elemenata u nizu 
    // stringova koji sadrže slovo 'a'.
    $broj = 0;
    /*
        strpos($s1, $s2)
          - $s1 - string u kojem trazim
          kao podstring $s2
          Kao rezultat se vraca:
          - Ako $s2 postoji u $s1 kao podstring:
               prva pozicija pojavljivanja $s2 u $s1
               npr.
               strpos("Jelena", "ele") => 1
               strpos("Pera", "a") => 3
               strpos("Ana", "A") => 0
               strpos("Jelelena", "ele") => 1
          - Ako $s2 ne postoji u $s1
                => false
    */
    foreach($zadnjaKlupa as $ime)
    {
        if(strpos($ime, "a") !== false) {
            $broj++;
        }
    }
    echo $broj;
    echo "<br>";


    //  Odrediti broj elemenata u nizu 
    // stringova koji počinju na slovo 
    // 'a' ili 'A'.
    $broj = 0;
    foreach($zadnjaKlupa as $ime)
    {
        /*var_dump($ime);  
        var_dump(strpos($ime, 'a'));
        echo " ";
        var_dump(strpos($ime, 'A'));
        echo "<br>";*/
        if(strpos($ime, 'a') === 0 || strpos($ime, 'A') === 0) 
        {
            $broj++;
        }
    }
    echo "Broj stringova koji pocinju na A: $broj<br>";
    /*
     $a = $b (dodela vrednosti $a dobija vrednost $b)
     $a == $b (poredjenje po vrednosti: true ako $a i $b imaju istu vrednost, false inace)
     $a === $b (poredjenje po vrednosti i tipu: true ako $a i $b imaju isti tip i vrednost, false inace) 
    */

    // 2. nacin:
    $broj = 0;
    foreach($zadnjaKlupa as $ime)
    {
        /*
        substr($str, $pos, $len)
         - vraca podstring od stringa $str
           pocev od pozicije $pos
           duzine $len.
        */
        if(substr($ime, 0, 1) == "a" || substr($ime, 0, 1) == "A")
        {
            $broj++;
        }
    }
    echo "Broj stringova koji pocinju na A: $broj<br>";

    $a = array(5, 8, 9, -2);
    $b = array(7, 0, -1, 2);
    $c = array();
    for($i = 0; $i < count($a); $i++)
    {
        $c[2 * $i] = $a[$i];
        $c[2 * $i + 1] = $b[$i];
    }
    for($i = 0; $i < 2 * count($a); $i++)
    {
        if($i % 2 == 0) 
        {
            $c[$i] = $a[$i / 2];
        }
        else 
        {
            $c[$i] = $b[($i - 1) / 2];
        }
    }
    stampajNiz($c);
?>