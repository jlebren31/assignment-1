<?php
/**
 * Created by PhpStorm.
 * User: 001412684
 * Date: 4/4/2018
 * Time: 10:57 AM
 */
$hexDigit = "";
$table = "<table>\n";
for ($rows = 0; $rows <= 9; $rows++){
    $table .= "\t<tr>";
    for ($cols = 0; $cols <= 9; $cols++){
        $table .= "<td ";
        for ($hex = 0; $hex < 6; $hex++) {
            $hexDigit .= dechex (mt_rand(1, 16));
        }
        $table .= "bgcolor=\"";
        $table .= (string) $hexDigit;
        $table .= "\" >";
        $table .= "<pre>";
        $table .= (string) $hexDigit .= "\n";
        $table .= "<font color=\"white\">";
        $table .= (string) $hexDigit;
        $table .= "</font>";
        $table .= "</pre>";
        $table .= "</td>";
        $hexDigit = "";
    }
    $table .= "</tr>\n";
}
$table .= "</table>";
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Title</title>
</head>
<body>
<?php echo $table; ?>
</body>
</html>