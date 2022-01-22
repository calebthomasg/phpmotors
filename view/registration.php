<?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/header.php'; ?>

<nav>
    <?php /*echo $navList;*/require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/navigation.php'; ?>
</nav>

        <main id="main_page">
            <h1>Registration</h1>

            <?php
            if (isset($message)) {
                echo $message;
            }
            ?>

            <form method="post" action="/phpmotors/accounts/index.php">
                <div class="registration">

                    <label for="fname"><b>First Name</b></label><br>
                    <input type="text" placeholder="Enter First Name" name="clientFirstname" id="fname" <?php if(isset($clientFirstname)){echo "value='$clientFirstname'";}  ?> required><br>

                    <label for="lname"><b>Last Name</b></label><br>
                    <input type="text" placeholder="Enter Last Name" name="clientLastname" id="lname" <?php if(isset($clientLastname)){echo "value='$clientLastname'";}  ?> required><br>

                    <label for="email"><b>Email</b></label><br>
                    <input type="email" placeholder="Enter Email" name="clientEmail" id="email" <?php if(isset($clientEmail)){echo "value='$clientEmail'";}  ?> required><br>

                    <p>Passwords must be at least 8 characters and contain at least 1 number,
                    1 capital letter and 1 special character.</p>

                    <label for="psw"><b>Password</b></label><br>
                    <input type="password" placeholder="Enter Password" name="clientPassword" id="password" required
                    pattern="(?=^.{8,}$)(?=.*\d)(?=.*\W+)(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$"><br><br>
                    

                    <button type="submit">Register</button>

                    <!-- Add the action name - value pair -->
                    <input type="hidden" name="action" value="register">
                    <label>
                    
                </div>
            </form>
        </main>

        <?php require_once $_SERVER['DOCUMENT_ROOT'] . '/phpmotors/snippets/footer.php'; ?>
        
    </section>
</body>
</html>
