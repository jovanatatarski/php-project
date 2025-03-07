<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Document</title>
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
    <h1 id="istorija">Nasa  istorija</h1>
    <div class="onas">
    <?php
        for($i=0;$i<5;$i++)
            echo ("$i")
    ?> 
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    <p>It is a long established fact that a reader will be distracted by the readable content of a page when looking at its layout. The point of using Lorem Ipsum is that it has a more-or-less normal distribution of letters, as opposed to using 'Content here, content here', making it look like readable English. Many desktop publishing packages and web page editors now use Lorem Ipsum as their default model text, and a search for 'lorem ipsum' will uncover many web sites still in their infancy. Various versions have evolved over the years, sometimes by accident, sometimes on purpose (injected humour and the like).</p>
    <p>U ponudi imamo sledece vrste:</p>
    <?php
        $nazivi=array("Kamilica","Zeleni caj sa limunom","Zeleni caj");
        foreach($nazivi as $vrednost){
            echo"$vrednost ";
    }
    ?> 
    </div>
    <img src="slike/kamilica.jpg" alt="kamilica">
    <img src="slike/zeleni.jpg" alt="zeleni">
    <img src="slike/klasik.jpg" alt="hibiskus">

    <footer>
        <p class="futer">Copyright 2023</p>
    </footer>
</body>
</html>