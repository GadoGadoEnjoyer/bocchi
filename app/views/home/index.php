<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bocchi</title>
</head>
<body>
    <?php 
        foreach($data as $img){
            echo '<img src=https://safebooru.org//images/'. $img['directory'] .'/'. $img['image'] . '?'. $data['id'] . ' width=150>';
        }
    ?>
</body>
</html>