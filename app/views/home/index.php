<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bocchi</title>
</head>
<body>
    <p>Some Bocchi Image :D </p>
    <?php 
        foreach($data as $img){
            echo '<img src=https://safebooru.org//images/'. $img['directory'] .'/'. $img['image'] . '?'. $data['id'] . ' width=150>';
        }
    ?>
    <p>See some Uploaded pic from community!</p>
    <?php echo '<a href="' . BASEURL . '/community">Community</a>'; ?>
    <p>Upload your own pic or video! (Butuh akun tapi)</p>
    <?php echo '<a href="' . BASEURL . '/community/post">Upload</a>'; ?>
</body>
</html>