<?php
    class SuperUser extends User implements ISuperUser, IAuthorizeUser
    {
        public $role;
        public static $superuserCount = 0;
        
        public function __construct($name, $login, $password, $role)
        {  
            parent::__construct($name, $login, $password);
            $this->role = $role;
            ++self::$superuserCount;
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
?>