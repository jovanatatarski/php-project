<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Pocetna</title>
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
    <div class="parallax"><p id="natpis">NASI CAJEVI SU NAJBOLJI :)</p><a href="onama.php"><button>Saznaj vise</button></a></div>
    <div id="text"><div class="okvir">
    <img src="slike/kamilica.jpg" alt="kamilica">
    <img src="slike/zeleni.jpg" alt="zeleni">
    <img src="slike/klasik.jpg" alt="hibiskus">
    </div>
    </div> 
    <style>a{color:black;}</style>

    <?php
    class Caj{
        private $naziv;
        private $cena;
        public function dajNaziv(){
            return $this->naziv;
        }
        public function postaviNaziv($naziv){
            $this->naziv=$naziv;
        }
    }
    $caj1=new Caj();
    $caj1->postaviNaziv("Organski caj od kamilice");
    echo $caj1->dajNaziv();
    $cena1=new Caj();
    $cena1->postaviNaziv(" 500,00 din.");
    echo $cena1->dajNaziv();
    ?>

    <div id="nazivi">
    <p>Zeleni caj sa limunom 450,00 din.</p>
    <p>Zeleni caj classic 400,00 din.</p>
    </div>

    <footer>
        <p class="futer">Copyright 2023</p>
    </footer>

    
</body>
</html>





