<?php
include 'db.php'; //importar informacion de un archivo externo
if (isset($_POST^['register'])){ //hace referencia a un componente, si doy clic a un boton llamado register
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT); //esto encripta aulgun dato, en este caso es la contraseña
    $avatar = $_POST['avatar']; //avatar asignado aleatoriamente

    //comprobamos si el email ya existe
    $checkEmail = $pdo->prepare("SELECT * FROM users WHERE email =: email");
    $checkEmail->execute(['email' => $email]);
    if ($checkEmail->rowCount() > 0) { //verifica con una variable en la tabla de users si es que hay coincidencia en los resultados sucedera
    } else {
        // insertamos el nuevo usuario
        $query = $pdo->
    }
}