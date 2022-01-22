
<!DOCTYPE html>
<html lang="en-us">
    <head>
        <meta charset="UTF-8">
        <title>PHP Motors</title>

        <!--STYLE SHEETS-->
        <link href="css/small.css" rel="stylesheet">
        <link href="css/medium.css" rel="stylesheet">
        <link href="css/large.css" rel="stylesheet">

        <!--FONTS-->
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=VT323&display=swap" rel="stylesheet">
    </head>

<body>
    <section>
        <header id="header_page">
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>
        </header>

        <nav>
            <?php /*echo $navList;*/require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/navigation.php';?> 
        </nav>

        <main>
            <h1>Welcome to PHP Motors!</h1>
                <div class="description">
                    <h2>DMC Delorean</h2>
                    <p>3 Cup holders<br>
                    Superman doors<br>
                    Fuzzy dice!</p>
                    <button type="button">Own Today</button>
                    <img src="/phpmotors/images/delorean.jpg" alt="DMC Delorean">
                </div>
                <div class="upgrades">
                    <section>
                        <h3>Delorean Upgrades</h3>
                        <div>
                            <img src="/phpmotors/images/upgrades/flux-cap.png" alt="Flux Capacitor">
                            <a>Flux Capacitor</a>
                        </div>
                        <div>
                            <img src="/phpmotors/images/upgrades/bumper_sticker.jpg" alt="Bumper Stickers">
                            <a>Bumper Stickers</a>
                        </div>
                        <div>
                            <img src="/phpmotors/images/upgrades/flame.jpg" alt="Flames">
                            <a>Flame Decals</a>
                        </div>
                        <div>
                            <img src="/phpmotors/images/upgrades/hub-cap.jpg" alt="Hub Caps">
                            <a>Hub Caps</a>
                        </div>
                    </section>
                    <section>
                        <h3>DMC Delorean Reviews</h3>
                        <li>"So fast its almost like traveling in time." (4/5)</li>
                        <li>"Coolest ride on the road." (4/5)</li>
                        <li>"I'm feeling Marty McFly!" (5/5)</li>
                        <li>"The most futuristic ride of our day." (4.5/5)</li>
                        <li>"80's livin and I love it!" (5/5)</li>
                    </section>
                </div>
        </main>

        <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </section>
</body>
</html> 

