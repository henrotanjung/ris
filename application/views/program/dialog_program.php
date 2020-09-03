<?php

?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

</head>

<body>
    <?php
    foreach ($programs as $program) {
        echo '<div class="container">';
        echo "<input class='form-check-input' type='radio' value=" . $program->name . " id='dlg_program' name='dlg_program'>";
        echo '<label class="form-check-label">';
        echo $program->name;
        echo '</label>';
        echo '</div>';
    }
    
    ?>
    
</body>

</html>