<?php
$cases = [
    ["title" => "CASE COMING SOON"],
    ["title" => "CASE COMING SOON"],
    ["title" => "CASE COMING SOON"],
    ["title" => "CASE COMING SOON"]
];
?>

<!DOCTYPE html>
<html lang="da">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <title>Portfolio</title>

</head>

<body>

<header>PORTFOLIO</header>

<nav>
    <a href="index.php" class="nav-item"
        <div>
            <img src="ikoner/ForsideMEDIUM.png" alt="hjem"><br>Hjem
        </div>
    </a>

    <a href="cases.php" class="nav-item">
        <div>
            <img src="ikoner/CaseMEDIUM.png" alt="cases"><br>Cases
        </div>
    </a>

    <a href="om%20mig.php" class="nav-item">
        <div>
            <img src="images/profilbillede.jpeg" alt="profil"><br>Om mig
        </div>
    </a>
</nav>

<section class="hero">
    <h1>Now playing: Ditte Frydenreim Kjær</h1>

    <div class="hero-content">
        <div class="hero-text">
            <p>
                Hey, mit navn er Ditte og til dagligt studerer jeg multimediedesign på Zealand Erhversakademi i Køge.
            </p>

            <div class="buttons">
                <a href="#" class="btn">Kontakt mig</a>
                <a href="#" class="btn">Om mig</a>
            </div>
        </div>

        <img src="images/Portræt.png" alt="mig">

    </div>
</section>

<section class="section">
    <h2>Udvalgte cases</h2>

    <div class="case-grid">
        <?php for($i=0; $i<2; $i++): ?>
            <a href="case.php?id=<?php echo $i; ?>" class="case">
                <img src="images/VinylpladeMEDIUM.jpg" alt="case">
                <div class="case-content">
                    <div class="case-title"><?php echo $cases[$i]['title']; ?></div>
                    <div class="play">
                        Afspil case <img class="knap" src="ikoner/PlaybuttonSMALL.png">
                    </div>

                </div>
            </a>
        <?php endfor; ?>
    </div>
</section>

<section class="section">
    <h2>Nyeste cases</h2>

    <div class="case-grid">
        <?php for($i=2; $i<4; $i++): ?>
            <a href="case.php?id=<?php echo $i; ?>" class="case">
                <img src="images/VinylpladeMEDIUM.jpg" alt="case">
                <div class="case-content">
                    <div class="case-title"><?php echo $cases[$i]['title']; ?></div>
                    <div class="play">
                        Afspil case <img src="ikoner/PlaybuttonSMALL.png">
                    </div>
                </div>
            </a>
        <?php endfor; ?>
    </div>
</section>


<footer>
    <a href="https://www.linkedin.com/in/ditte-frydenreim-kj%C3%A6r-99269a2ba/" target="_blank">LinkedIn</a>
    <a href="https://www.instagram.com/ditte.f.kjaer/" target="_blank">Instagram</a>
    <a href="https://www.facebook.com/profile.php?id=100008896668161" target="_blank">Facebook</a>
    <a href="#">Til toppen</a> <img src="ikoner/Pil%20m.%20stregMEDIUM.png" alt="top pil">
</footer>

</body>
</html>
