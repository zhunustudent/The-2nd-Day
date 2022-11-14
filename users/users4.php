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
    abstract class UserAbstract
    {
        abstract function showInfo();
    }

    interface ISuperUser
    {
        function getInfo();
    }

    interface IAuthorizeUser
    {
        public function auth();
    }

    class User extends UserAbstract
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
            $info = 'This is '. $this->name.'. <br> Login: '.$this->login.'<br> Password: '.$this->password.'<br>';
            echo $info;
        }
    }

    class SuperUser extends User implements ISuperUser, IAuthorizeUser
    {
        public $role;
        
        public function __construct($name, $login, $password, $role)
        {  
            parent::__construct($name, $login, $password);
            $this->role = $role;
        }

        public function showInfo()
        {
            $info = parent::showInfo();
            $info = 'Role: '.$this->login.'<br><br>';
            echo $info;
        }

        public function getInfo()
        {
            $arr = array('name' => $this->name, 'login'=>$this->login, 'password' => $this->password, 'role' => $this->role);
            return $arr;
        }

        public function auth()
        {
            $this->login = $login;
            $this->password = $password;
        }
    }

    $user1 = new User('Ivan', 'ivanov', 'abcdefg');
    $user2 = new User('Petr', 'petr', '67890');
    $user3 = new User('Vadim', 'vadimcka', '12345');
    $user1->showInfo();
    $user2->showInfo();
    $user3->showInfo();

    $admin = new SuperUser('Alexey', 'admin', 'root', 'administrator');
    $admin->showInfo();
    $moder = new SuperUser('Anna', 'moder', 'root', 'moderator');
    $moder->showInfo();

    print_r($admin->getInfo());
    echo '<br>';
    print_r($moder->getInfo());
    echo '<br><br>';

    if($user1 instanceOf IAuthorizeUser) { echo 'True. <br>'; }
    else { echo 'False. <br>'; }
    if($admin instanceOf IAuthorizeUser) { echo 'True. <br>'; }
    else { echo 'False. <br>'; }
    ?>
</body>
</html>