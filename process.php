<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Process</title>
</head>
<body>
<?php
    if(!empty($_POST['name']) && !empty($_POST['flavor'])){
        echo 'Thank you, '.$_POST['name'].', for your order!<br><br>';

        echo 'Order Summary:';
        if (isset($_POST['flavor'])) {
            echo '<ul>';
            foreach ($_POST['flavor'] as $item) {
                echo '<li>' . $item . '</li>';
            }
            echo '</ul><br>';
        }

        echo 'Order Total: $';
        echo ((double)sizeof($_POST['flavor']) * 3.50);
    }else{
        echo 'Please go back and fill in the form';
    }
?>
</body>
</html>