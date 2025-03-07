<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<nav class="navbar">
        <ul>
            <li><a href="index.php">Home</a></li>
            <li><a href="onama.php">O nama</a></li>
            <li><a href="poruci.php">Poruci</a></li>
            <li><a href="kontakt.php">Kontakt</a></li>
        </ul>
    </nav> 
<h1 id="poruci">Kontaktiraj nas</h1>
        <p class="caj">Mozete nas kontaktirati, popunite obrazac ispod.</p>
        <div class="forma">
        <form action="" method="POST">
            <label>Ime i prezime:</label>
            <input class="polje" type="text" name="naziv">

            <label>Vas email:</label>
            <input class="polje" type="email" name="proizvodjac">

            <label>Vasa poruka</label>
            <textarea name="porukica" id="" cols="30" rows="10"></textarea>
        </div>
            <input type="submit" value="Potvrdi" name="potvrdi" class="btn">
        </form>

    <?php

    try {
        $dbh = new PDO("mysql:host=localhost;dbname=prodavnica;charset=utf8", "root", "");

        $dbh->beginTransaction();
        $sql1 = "SELECT cena FROM cajevi WHERE broj = :broj";
        $stmt1 = $dbh->prepare($sql1);
        $stmt1->bindParam(":broj", $broj);
        $broj = "1";
        $stmt1->execute();
        $result = $stmt1->fetchAll();
        $staraCena = $result[0]['cena'];
        
        $sql2 = "UPDATE cajevi SET cena = :cena WHERE broj = :broj";
        $stmt2 = $dbh->prepare($sql2);
        $stmt2->bindParam(":cena", $cena);
        $stmt2->bindParam(":broj", $broj);
        if($staraCena === "400") {
            $cena = "450";
        }
        else {
            $cena = "400";
        }
        $stmt2->execute();

        $dbh->commit();
    }
    catch(PDOException $e) {
        $dbh->rollBack();
        echo $e->getMessage();
    }

    ?>

<?php
try {
    $dbh = new PDO("mysql:host=localhost;dbname=prodavnica;charset=utf8", "root", "");

    $dbh->beginTransaction();
    $sql1 = "SELECT cena FROM cajevi WHERE broj = :broj";
    $stmt1 = $dbh->prepare($sql1);
    $stmt1->bindParam(":broj", $broj);
    $broj = "1";
    $stmt1->execute();
    $result = $stmt1->fetchAll();
    $staraCena = $result[0]['cena'];
    
    $sql2 = "UPDATE cajevi SET cena = :cena WHERE broj = :broj";
    $stmt2 = $dbh->prepare($sql2);
    $stmt2->bindParam(":cena", $cena);
    $stmt2->bindParam(":broj", $broj);
    if($staraCena === "400") {
        $cena = "450";
    }
    else {
        $cena = "400";
    }
    $stmt2->execute();

    $dbh->commit();
}
catch(PDOException $e) {
    $dbh->rollBack();
    echo $e->getMessage();
}
?>

<?php
try {
    $dbh = new PDO("mysql:host=localhost;dbname=prodavnica;charset=utf8", "root", "");

    $dbh->beginTransaction();
    $sql1 = "SELECT cena FROM cajevi WHERE broj = :broj";
    $stmt1 = $dbh->prepare($sql1);
    $stmt1->bindParam(":broj", $broj);
    $broj = "1";
    $stmt1->execute();
    $result = $stmt1->fetchAll();
    $staraCena = $result[0]['cena'];
    
    $sql2 = "DELETE FROM cajevi WHERE broj = :broj";
    $stmt2 = $dbh->prepare($sql2);
    $stmt2->bindParam(":cena", $cena);
    $stmt2->bindParam(":broj", $broj);
    if($staraCena === "400") {
        $cena = "450";
    }
    else {
        $cena = "400";
    }
    $stmt2->execute();

    $dbh->commit();
}
catch(PDOException $e) {
    $dbh->rollBack();
    echo $e->getMessage();
}
?>
        <footer>
        <p class="futer">Copyright 2023</p>
        </footer>
</body>
</html>