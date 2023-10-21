<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Community</title>
</head>
<body>
    <?php 
    foreach($data as $post){
        echo('<h1>' . $post['title'] . '</h1>');
        if($post['type'] == 'video'){
            echo('<video width="320" height="240" controls>');
            echo('<source src="'. BASEURL.'/assets/' . $post['photo'] . '" type="video/mp4">');
            echo('</video>');
        }
        else{
            echo '<img src="'. BASEURL.'/assets/' . $post['photo'] . '" alt="' . $post['title'] . '">';
        }
        echo('<br>');
        echo('<form action="'.BASEURL.'/admin/verifikasi/'.$post['post_id'].'" method="POST">');
        echo('<label for="verifikasi">Verifikasi</label>');
        echo('<input type="radio" name="verifikasi" value="verifikasi" required>');
        echo('<label for="hapus">Hapus</label>');
        echo('<input type="radio" name="verifikasi" value="hapus">');
        echo('<input type="submit" value="submit">');
        echo('</form>');
    } 
    ?>
</body>
</html>