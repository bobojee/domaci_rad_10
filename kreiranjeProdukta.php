<?php

    if(!isset($_POST['ime']) || empty($_POST['ime']))
    {
        die("Niste prosledili ime!");
    }

    if(!isset($_POST['opis']) || empty($_POST['opis']))
    {
        die("Niste prosledili opis!");
    }

    if(!isset($_POST['cena']) || empty($_POST['cena']))
    {
        die("Niste prosledili cenu!");
    }

    if(!isset($_POST['slika']) || empty($_POST['slika']))
    {
        die("Niste prosledili sliku!");
    }

    if(!isset($_POST['kolicina']) || empty($_POST['kolicina']))
    {
        die("Niste prosledili kolicinu!");
    }

    require_once "baza.php";
    $ime = $_POST['ime'];
    $opis = $_POST['opis'];
    $cena = $_POST['cena'];
    $slika = $_POST['slika'];
    $kolicina = $_POST['kolicina'];

    $q = "INSERT INTO proizvodi (ime, opis, cena, slika, kolicina) VALUES ('$ime', '$opis', $cena, '$slika', $kolicina)";
    $baza-> query($q);



