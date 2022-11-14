<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    //Task 1
    class User
    {
        public $name;
        public $login;
        public $password;

        public function showInfo()
        {
            echo 'This is '. $this->name.'. <br> Login: '.$this->login.'<br> Password: '.$this->password.'<br><br>';
        }
    }
    
    $user1 = new User();
    $user1->name = 'Ivan';
    $user1->login = 'ivanov';
    $user1->password = 'abcdefg';

    $user2 = new User();
    $user2->name = 'Petr';
    $user2->login = 'petr';
    $user2->password = '67890';

    $user3 = new User();
    $user3->name = 'Vadim';
    $user3->login = 'vadimcka';
    $user3->password = '12345';

    $user1->showInfo();
    $user2->showInfo();
    $user3->showInfo();
    ?>
</body>
</html>