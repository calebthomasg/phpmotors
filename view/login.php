        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>

        <nav>
            <?php /*echo $navList;*/require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/navigation.php'; ?>
        </nav>

        <main id="main_page">
            <h1>Sign In</h1>

            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>
            
            <form action="/phpmotors/accounts/index.php" method="post">
                <div class="login">
                    <label for="email"><b>Email</b></label><br>
                    <input type="email" placeholder="Enter Email" name="clientEmail" id="email" <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?> required><br>

                    <label for="psw"><b>Password</b></label><br>
                    <input type="password" placeholder="Enter Password" name="clientPassword" id="password" required
                    pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"><br><br>
                    <p>Passwords must be at least 8 characters and contain at least 1 number,
                    1 capital letter and 1 special character.</p><br><br>

                    <button type="submit">Login</button><br>
                    <input type="hidden" name="action" value="Login">
                    <label>
                    <input type="checkbox" checked="checked" name="remember">Remember me</label>
                </div>

                <div class="member">
                    <a href="?action=registration">Not a member yet?</a>
                </div>
        </main>

        <footer>
            <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        </footer>
    </section>
</body>
</html> 