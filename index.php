<!DOCTYPE html>
<html>
<head>
    <title>Puslapis su forma</title>
</head>
<body>

<!-- GET forma vartotojui -->
<form method="get" action="">
    <h2>Įveskite savo informaciją:</h2>
    Vardas: <input type="text" name="vardas"><br>
    Pavarde: <input type="text" name="pavarde"><br>
    Komentaras: <textarea name="komentaras" rows="4" cols="50"></textarea><br>
    <input type="submit" value="Siųsti">
</form>

<?php
// Tikriname, ar buvo atsiųsti GET duomenys
if (isset($_GET['vardas']) && isset($_GET['pavarde']) && isset($_GET['komentaras'])) {
    $vardas = $_GET['vardas'];
    $pavarde = $_GET['pavarde'];
    $komentaras = $_GET['komentaras'];
    // Čia galite daryti su įvestais duomenimis, ką norite
    echo "<h3>Jūsų duomenys:</h3>";
    echo "Vardas: $vardas<br>";
    echo "Pavarde: $pavarde<br>";
    echo "Komentaras: $komentaras<br>";
}

// POST forma administratoriui
if (isset($_POST['prisijungimo_vardas']) && isset($_POST['pavarde'])) {
    $prisijungimo_vardas = $_POST['prisijungimo_vardas'];
    $slaptazodis = $_POST['slaptazodis'];

    // Tikriname prisijungimo duomenis
    $teisingas_slaptazodis = substr($vardas, 0, 3) . substr($pavarde, 0, 3);

    if ($prisijungimo_vardas == 'lukas.skuzinskas@stud.kitm.lt' && $slaptazodis == $teisingas_slaptazodis) {
        echo "<h3>Prisijungta sėkmingai</h3>";
    } else {
        echo "<h3>Blogi prisijungimo duomenys</h3>";
    }
}
?>

<!-- POST forma administratoriui -->
<h2>Administratoriaus prisijungimas:</h2>
<form method="post" action="">
    Prisijungimo vardas: <input type="text" name="prisijungimo_vardas"><br>
    Slaptažodis: <input type="password" name="slaptazodis"><br>
    <input type="submit" value="Prisijungti">
</form>

</body>
</html>