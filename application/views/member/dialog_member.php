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
    $ind = 1;
    $table = '<div class="container">';
    $element_header = '<table>';

    $element_footer = '</table></div>';
    $total_data = count((array) $members);
    foreach ($members as $member) {
        if ($ind == 8) {
            $member->member_name;
        }
        if ($member->member_name != '') {
            if ($ind % 2 == 1) {
                $element_header .= '<tr style="height: 10px;">';
            }
            $element_header .= '<td style="padding-right: 30px;">';
            $element_header .= "<input class='form-check-input' type='radio' value=" . $member->member_name . " id='dlg_member' name='dlg_member'><label class='form-check-label'>";
            $element_header .= $member->member_name;
            $element_header .= '</label>';
            $element_header .= '</td>';

            if ($ind % 2 == 0) {
                $element_header .= '</tr>';
            }
            $ind += 1;
        }
    }
    $table .= $element_header;
    $table .= $element_footer;

    echo $table;

    ?>


</body>

</html>