<?php
set_ini("display_errors",0);
session_start([
    'cookie_lifetime' => 300,
]);

if (isset($POST['username']) && isset($_POST['password'])) {
    if ('anowshad91@gmail.com' == $_POST['username'] && 'rabbit' == $_POST['password']) {
        $_SESSION['loggedIn'] == true;
    } else {
        $_SESSION['loggedIn'] == false;
    }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Form</title>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto:300,300italic,700,700italic">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/8.0.1/normalize.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/milligram/1.4.1/milligram.css">
    <style>
        body {
            margin-top: 30px;
        }
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <div class="column-column-30 column-offset-20">
                <h1>
                    Simple Auth Example
                </h1>
            </div>

        </div>
        <div class="row">
            <div class="column-column-30 column-offset-20">
                <?php
                if (true == $_SESSION['loggedIn']) {
                    echo 'Hello Admin, Welcome! ';
                } else {
                    echo 'Hello Stranger, log in below:';
                }

                ?>

            </div>

        </div>
        <div class="row ">
            <div class="column-column-60 column-offset-20">
                <?php if (false == $_SESSION['loggedIn']) : ?>
                    <form method="post">
                        <label for="username">Username</label>
                        <input type="text" name="username" id="useranme" value=''>
                        <label for="password">Password</label>
                        <input type="password" name="password" id="password" value=''>
                        <button type="submit" class="button-primary" name="submit">Log In</button>
                    </form>
                <?php else :
                ?>
                    <form action="login-form.php?logout=true" method="post">
                        <button type="submit" class="button-primary" name="submit">Log Out</button>
                    </form>
                <?php endif; ?>
            </div>
        </div>
    </div>
</body>

</html>