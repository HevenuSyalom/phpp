<form action="" method="post">
    email :
    <input type="email" name="email">
    password :
    <input type="password" nama="password">
    <input type="subnit" nama="kirim" value="kirim">
</form>

<?php 

    if ( isset($_POST['kirim']) ) {
        $email = $_POST['email'];
        $password = $_POST['password'];

        echo $email;
        echo '<br>';
        echo $passwaord;
    }

    

?>

