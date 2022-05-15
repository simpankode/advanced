<?php 
if(isset($_POST['g-recaptcha-response'])){
    $captcha = $_POST['g-recaptcha-response'];
}else{
    $captcha = false;
}

if(!$captcha){
    //Lakukan sesuatu dengan kesalahan
}else{
    $secret = 'isi_dengan_secret_key';
    $response = file_get_contents(
        "https://www.google.com/recaptcha/api/siteverify?secret=" . $secret . "&response" . $captcha . "&remoteip" . $_SERVER['REMOTE_ADDR']
    );

    $response = json_decode($response);

    if($response->success === false)
    {
        //Lakukan sesuatu dengan kesalahan
    }
}

if($response->success == true && $response->score <= 0.5){
    //Lakukan sesuatu untuk menolak akses
}
?>

<!DOCTYPE html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Google reCAPTCHA V3</title>
    </head>
    <body>
        
        <form action="" method="post">
            <input type="hidden" name="g-recaptcha-response" id="g-recaptcha-response">
            <input type="hidden" name="action" value="validate_recaptcha">
            
            <!-- Isi Form  -->

        </form>

        <center><h1>protected by reCAPTCHA</h1></center>


        <script src="https://www.google.com/recaptcha/api.js?isi_dengan_site_key"></script>
        <script>
            grecaptcha.ready(function(){
                grecaptcha.execute('g-recaptcha-response', {
                    action:'validate_recaptcha'
                }).then(function(token){
                    document.getElementById('g-recaptcha-response').value = token;
                });
            });
        </script>
    </body>
</html>