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
    <title>Portfolio</title>

    <style>
        /* RESET */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* BASE */
        body {
            font-family: Arial, sans-serif;
            background: #0b0b0b;
            color: white;
        }

        /* HEADER */
        header {
            text-align: center;
            padding: 40px 20px 10px;
            font-size: 40px;
            letter-spacing: 2px;
        }

        /* NAVBAR */
        nav {
            background: #114e68;
            display: flex;
            justify-content: space-around;
            align-items: center;
            padding: 15px;
        }

        nav div {
            text-align: center;
            font-size: 14px;
        }

        nav img {
            width: 40px;
            height: 40px;
            border-radius: 50%;
        }

        /* HERO */
        .hero {
            padding: 20px;
        }

        .hero h2 {
            margin-bottom: 15px;
        }

        .hero-content {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }

        .hero img {
            width: 100%;
            border-radius: 10px;
        }

        /* BUTTONS */
        .buttons {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }

        .btn {
            background: #114e68;
            padding: 10px 20px;
            border-radius: 10px;
            text-decoration: none;
            color: white;
            font-size: 14px;
        }

        /* SECTIONS */
        .section {
            padding: 20px;
        }

        .section h3 {
            margin-bottom: 15px;
        }

        /* CASE CARD */
        .case-grid {
            display: grid;
            gap: 15px;
        }

        .case {
            display: flex;
            background: #114e68;
            border-radius: 10px;
            overflow: hidden;
        }

        .case img {
            width: 40%;
            object-fit: cover;
        }

        .case-content {
            padding: 10px;
            flex: 1;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
        }

        .play {
            text-align: right;
            margin-top: 10px;
        }

        /* FOOTER */
        footer {
            text-align: center;
            padding: 30px 10px;
            font-size: 14px;
        }

        footer a {
            margin: 0 10px;
            color: white;
            text-decoration: none;
        }

        /* DESKTOP */
        @media (min-width: 768px) {

            header {
                font-size: 60px;
            }

            .hero-content {
                flex-direction: row;
                align-items: center;
            }

            .hero-text {
                flex: 1;
            }

            .hero img {
                width: 300px;
            }

            .case-grid {
                grid-template-columns: 1fr 1fr;
            }
        }
    </style>
</head>

<body>

<header>PORTFOLIO</header>

<nav>
    <div>🏠<br>Hjem</div>
    <div>📁<br>Cases</div>
    <div>
        <img src="images/Profilbillede.jpeg" alt="profil">
        <br>Om mig
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

        <img src="https://via.placeholder.com/300x400" alt="profilbillede">
    </div>
</section>

<section class="section">
    <h3>Udvalgte cases</h3>

    <div class="case-grid">
        <?php for($i=0; $i<2; $i++): ?>
            <div class="case">
                <img src="https://via.placeholder.com/150" alt="case">
                <div class="case-content">
                    <div><?php echo $cases[$i]['title']; ?></div>
                    <div class="play">Afspil case ▶</div>
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
                <img src="https://via.placeholder.com/150" alt="case">
                <div class="case-content">
                    <div><?php echo $cases[$i]['title']; ?></div>
                    <div class="play">Afspil case ▶</div>
                </div>
            </div>
        <?php endfor; ?>
    </div>
</section>

<footer>
    <a href="#">LinkedIn</a>
    <a href="#">Instagram</a>
    <a href="#">Facebook</a>
    <a href="#">↑ Til toppen</a>
</footer>

</body>
</html>
