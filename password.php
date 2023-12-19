<?php

$caratteri = [
    'ABCDEFGHIJKLMNOPQRSTUVWXYZ',
    'abdcdefghijklmnopqrstuvwxyz',
    '123456789',
    '&!$?%@'
];
$password = '';
for ($i = 0; $i < 20; $i++) {
    $selezione = rand(0, 3);
    $last = strlen($caratteri[$selezione]);
    $password .= $caratteri[$selezione][rand(0, $last)];
}
echo $password;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <div> <?php echo "$password" ?></div>
</body>

</html>