<?php
include_once "function.php";
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
                    Our First Form
                </h1>
                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Earum iure corrupti perspiciatis tempore
                    ipsam ipsa hic vel natus dolore numquam.</p>
                <p>
                    <?php
                    $fname = '';
                    $lname = '';
                    $checked = '';
                    ?>
                    <?php
                    if (isset($_REQUEST['cb1']) && $_REQUEST['cb1'] == 1) {
                        $checked = 'checked';
                    }
                    ?>
                    <?php
                    if (isset($_REQUEST['fname']) && !empty($_REQUEST['fname'])) {
                        $fname = htmlspecialchars($_REQUEST['fname']);
                    }
                    if (isset($_REQUEST['lname']) && !empty($_REQUEST['lname'])) {
                        $lname = htmlspecialchars($_REQUEST['lname']);
                    }
                    ?>
                <h5>
                    First Name: <?php echo $fname; ?> </br>
                    Last Name: <?php echo $lname; ?> </br>
                </h5>
            </div>
        </div>
        <div class="row">
            <div class="column-column-30 column-offset-20">
                <form method="post">
                    <label for="name">First Name</label>
                    <input type="text" name="fname" id="fname" value=<?php echo $fname; ?>>
                    <label for="name">Last Name</label>
                    <input type="text" name="lname" id="lname" value=<?php echo $lname; ?>>
                    <div>
                        <input type="checkbox" name="cb1" id="cb1" value=1>
                        <label for="cb1" class="label-inline">Some Checkbox</label>
                    </div>
                    <label for="fruits">Select Some Fruits</label>

                    <input type="checkbox" name="fruits[]" value="orange" <?php isChecked('orange'); ?>>
                    <label class="label-inline">Orange</label><br>
                    <input type="checkbox" name="fruits[]" value="mango" <?php isChecked('mango') ?>>
                    <label class="label-inline">Mango</label><br>
                    <input type="checkbox" name="fruits[]" value="banana" <?php isChecked('banana'); ?>>
                    <label class="label-inline">Banana</label><br>
                    <input type="checkbox" name="fruits[]" value="lemon" <?php isChecked('lemon') ?>>
                    <label class="label-inline">Lemon</label><br>
                    <button type="submit">Submit</button>
                </form>
            </div>
        </div>
    </div>
</body>

</html>