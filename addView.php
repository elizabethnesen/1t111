<?php 

    $host = 'localhost';
    $db   = 'examen';
    $user = 'root';
    $pass = '';
    $charset = 'utf8';

    $dsn = "mysql:host=$host;dbname=$db;charset=$charset";

    $opt = [
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        PDO::ATTR_EMULATE_PREPARES   => false,
    ];
    $pdo = new PDO($dsn, $user, $pass, $opt);

    $name = $_POST['name'];
    $phone = $_POST['phone'];
    $email =  $_POST['email'];

    $errors = [];
    $success = [];
    $isValid = true;
    if (empty(trim($name))) 
    {
        $errors['name'] ="Введите ваше имя";
        $isValid = false;
    }
    if (empty(trim($phone))) 
    {
        $errors['phone'] ="Введите свой номер телефона";
        $isValid = false;
    }
    if($isValid)
    {
        $values = ['name'=>$name, 
                    'phone'=>$phone,
                    'email'=>$email
                ];
        $sql = "INSERT INTO users SET name=:name, phone=:phone, email=:email";
        $stm = $pdo->prepare($sql);
        $stm->execute($values);

        $success['success'] = "Спасибо! Мы свяжемся с вами";
    }

    echo json_encode(compact(['errors', 'success']));

?>