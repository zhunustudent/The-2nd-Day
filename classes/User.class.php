<?php
    class User extends UserAbstract
    {
        public $name;
        public $login;
        public $password;
        public static $userCount = 0;

        public function __construct($name, $login, $password)
        {  
            $this->name = $name;
            $this->login = $login;
            $this->password = $password;
            ++self::$userCount;
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
?>