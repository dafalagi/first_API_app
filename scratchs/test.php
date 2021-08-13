<?php
$ch = curl_init();

curl_setopt($ch, CURLOPT_URL, 'https://v2.convertapi.com/convert/jpg/to/webp?Secret=ewcp8KOU5rfx9aKO');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
$post = array(
    'File' => 'http://image.tmdb.org/t/p/original/bwBmo4I3fqMsVvVtamyVJHXGnLF.jpg'
);
curl_setopt($ch, CURLOPT_POSTFIELDS, $post);

$result = curl_exec($ch);
if (curl_errno($ch)) {
    echo 'Error:' . curl_error($ch);
}
curl_close($ch);
?>
<img src="<?php echo $result["Files"] ?>" alt="">


