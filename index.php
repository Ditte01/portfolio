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
    <div>
        <img src="ikoner/ForsideMEDIUM.png" alt="hjem"><br>hjem
    </div>
    <div>
        <img src="ikoner/CaseMEDIUM.png" alt="cases"><br>Cases
    </div>
    <div>
        <img src="images/Profilbillede.jpeg" alt="profil"><br>Om mig
    </div>
</nav>

<section class="hero">
    <h2>Now playing: Ditte Frydenreim Kjær</h2>

    <div class="hero-content">
        <div class="hero-text">
            <p>
                Her er din tekst. Erstat med rigtig beskrivelse.
                Kort intro om hvem du er og hvad du laver.
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
    <h3>Udvalgte cases</h3>

    <div class="case-grid">
        <?php for($i=0; $i<2; $i++): ?>
            <div class="case">
                <img src="images/VinylpladeMEDIUM.jpg" alt="case">
                <div class="case-content">
                    <div><?php echo $cases[$i]['title']; ?></div>
                    <div class="play">
                        Afspil case <img class="knap" src="ikoner/PlaybuttonMEDIUM.png">
                    </div>

                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>

<section class="section">
    <h3>Nyeste cases</h3>

    <div class="case-grid">
        <?php for($i=2; $i<4; $i++): ?>
            <div class="case">
                <img src="images/VinylpladeMEDIUM.jpg" alt="case">
                <div class="case-content">
                    <div><?php echo $cases[$i]['title']; ?></div>
                    <div class="play">
                        Afspil case<div> <img class="knap" src="ikoner/PlaybuttonMEDIUM.png"></div>

                    </div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>

<footer>
    <a href="#">LinkedIn</a>
    <a href="#">Instagram</a>
    <a href="#">Facebook</a>
    <a href="#">Til toppen</a> <img src="ikoner/Pil%20m.%20stregMEDIUM.png" alt="top pil">
</footer>

</body>
</html>
