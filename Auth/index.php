<?php
session_name('login');
session_start([
    'cookie_lifetime' => 300,
]);
$filename = "data/f1.txt";
$_SESSION['loggedIn'] = false;

$fp = fopen($filename, 'r');

while ($data = fgetcsv($fp)) {
    //print_r($data);
    if (isset($_POST['username']) && isset($_POST['password'])) {
        if ($data[0] == $_POST['username'] && $data[1] == $_POST['password']) {
            $_SESSION['loggedIn'] = true;
        } else {
            $_SESSION['loggedIn'] = false;
        }
    }
}
// while($data = fgetcsv( $fp )){
//     if(isset($_POST['username']) && isset($_POST['password'])){
//         if($data[0]==$_POST['username'] && $data[1]==$_POST['password']){
//             $_SESSION['login']=true;
//         }else{
//            $_SESSION['login'] = false; 
//         }

//     }
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
</head>

<body>

    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h3>Simple Auth Example</h3>
                    </div>
                    <div class="card-header">
                        <?php if ($_SESSION['loggedIn'] == true) {
                            echo "Hello, Admin,Welcome";
                        } else {
                            echo "Hello, Stranger, Login Below";
                        }
                        ?>

                    </div>
                    <div class="card-body">
                        <form action="index.php" method="post">
                            <div class="form-group">
                                <label for="username">Username</label>
                                <input type="text" class="form-control" id="username" name="username" required>
                            </div>
                            <div class="form-group">
                                <label for="password">Password</label>
                                <input type="password" class="form-control" id="password" name="password" required>
                            </div>
                            <button type="submit" class="btn btn-primary btn-block">Login</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
</body>

</body>

</html>