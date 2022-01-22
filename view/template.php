<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/index.php'; ?>
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
            <?php echo $navList;//require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/navigation.php'; ?>
        </nav>

        <main>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/main.php'; ?>
        </main>

        <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </section>
</body>
</html> 