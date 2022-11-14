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
    class User
    {
        public $name;
        public $login;
        public $password;

        public function __construct($name, $login, $password)
        {  
            $this->name = $name;
            $this->login = $login;
            $this->password = $password;
        }

        public function __destruct()
        {
            echo 'The user [' . $this->login . '] is removed. <br>';
        }

        public function showInfo()
        {
            echo 'This is '. $this->name.'. <br> Login: '.$this->login.'<br> Password: '.$this->password.'<br><br>';
        }
    }

    $user1 = new User('Ivan', 'ivanov', 'abcdefg');
    $user2 = new User('Petr', 'petr', '67890');
    $user3 = new User('Vadim', 'vadimcka', '12345');
    $user1->showInfo();
    $user2->showInfo();
    $user3->showInfo();
    ?>
</body>
</html>