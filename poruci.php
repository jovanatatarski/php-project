<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Poruči</title>
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
    <main>
        <?php
        $mysqli=new mysqli ("localhost","root","","prodavnica");
        if($mysqli->connect_errno){
            echo "Greska u konekciji!";
            exit();
        }

        $sql = "INSERT INTO `cajevi`(`broj`,`naziv`, `proizvodjac`, `cena`) VALUES (?,?,?,?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssss", $broj, $naziv, $proizvodjac, $cena);
        $naziv = "kamilica";
        $proizvodjac = "Organic india";
        $cena = "400";
        $stmt->execute();
        if($stmt->affected_rows > 0) {
            echo "uspesno dodato u tabelu!";
        }
        else {
            echo "Greska pri unosu!";
        }
        ?>

        <?php
        $mysqli=new mysqli ("localhost","root","","prodavnica");
        if($mysqli->connect_errno){
            echo "Greska u konekciji!";
            exit();
        }
        $sql = "INSERT INTO `cajevi`(`broj`,`naziv`, `proizvodjac`, `cena`) VALUES (?,?,?,?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssss", $broj, $naziv, $proizvodjac, $cena);
        $naziv = "zeleni caj";
        $proizvodjac = "Organic india";
        $cena = "500";
        $stmt->execute();
        if($stmt->affected_rows > 0) {
            echo "uspesno dodato u tabelu!";
        }
        else {
            echo "Greska pri unosu!";
        }
        ?>

        <?php
        $mysqli=new mysqli ("localhost","root","","prodavnica");
        if($mysqli->connect_errno){
            echo "Greska u konekciji!";
            exit();
        }
        $sql = "INSERT INTO `cajevi`(`broj`,`naziv`, `proizvodjac`, `cena`) VALUES (?,?,?,?)";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ssss", $broj, $naziv, $proizvodjac, $cena);
        $naziv = "zeleni caj sa limunom";
        $proizvodjac = "Organic india";
        $cena = "600";
        $stmt->execute();
        if($stmt->affected_rows > 0) {
            echo "uspesno dodato u tabelu!";
        }
        else {
            echo "Greska pri unosu!";
        }
        ?>

        <?php
        try {
        $dbh = new PDO("mysql:host=localhost;dbname=prodavnica", "root", "");

        $sql = "UPDATE cajevi SET cena = ? WHERE broj = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("ss", $cena, $broj);
        $cena = "450";
        $broj = "1";
        $stmt->execute();
        if($stmt->affected_rows > 0) {
            echo "Zapis uspesno izmenjen!";
        }
        else {
            echo "Greska pri izmeni zapisa!";
        }

        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
        ?>

        <?php
        $mysqli=new mysqli ("localhost","root","","prodavnica");
        if($mysqli->connect_errno){
            echo "Greska u konekciji!";
            exit();
        }
        $sql = "DELETE FROM cajevi WHERE broj = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $broj);
        $broj = "12";
        $stmt->execute();
        if($stmt->affected_rows > 0) {
            echo "uspesno obrisan!";
        }
        else {
            echo "Greska pri brisanju!";
        }
        ?>

        
        <h1 id="poruci">Poruci</h1>
        <p class="caj">Molimo Vas da porucite Vas ekskluzivni caj pre isteka zaliha, popunite sledeci obrazac.<br>Najvise prodavani caj je:

        <?php
        try {
        $dbh = new PDO("mysql:host=localhost;dbname=prodavnica", "root", "");

        $sql = "SELECT * FROM cajevi WHERE broj = ?";
        $stmt = $mysqli->prepare($sql);
        $stmt->bind_param("s", $broj);
        $broj = "1";
        $stmt->execute();
        $result = $stmt->get_result();
        while($row = $result->fetch_assoc()) {
        echo $row['naziv'] . "<br>";
        }
        }
        catch(PDOException $e) {
            echo $e->getMessage();
        }
        ?></p>

        <div class="forma">
        <form action="" method="POST">
            <label>Naziv proizvoda:</label>
            <input class="polje" type="text" name="naziv">

            <label>Proizvodjac:</label>
            <input class="polje" type="text" name="proizvodjac">

            <label>Cena proizvoda:</label>
            <input class="polje" type="text" name="cena">
        </div>
            <input type="submit" value="Potvrdi" name="potvrdi" class="btn">
        </form>
    </main>

    
    <footer>
        <p class="futer">Copyright 2023</p>
    </footer>

</body>

    <?php
    if(isset($_POST['potvrdi'])){   
        if(ctype_alnum($_POST['naziv']))
            $naziv = $_POST['naziv'];
        else
            $poruka = "Naziv proizvoda se moze sastojati samo iz slova i brojeva";
        if(ctype_alnum($_POST['proizvodjac']))
            $proizvodjac = $_POST['proizvodjac'];
        else
            $poruka = "Proizvodjac se moze sastojati samo iz slova i brojeva";
        if(ctype_digit($_POST['cena']))
            $cena = $_POST['cena'];
        else
            $poruka = "Cena proizvoda se moze sastojati samo iz brojeva";
    } 

    ?>

</html>