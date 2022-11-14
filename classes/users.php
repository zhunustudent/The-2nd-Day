<?php
    spl_autoload_register (function ($class) { include $class . '.class.php'; });

    $user1 = new User('Ivan', 'ivanov', 'abcdefg');
    $user1->showInfo();

    $admin = new SuperUser('Alexey', 'admin', 'root', 'administrator');
    $admin->showInfo();

    print_r($admin->getInfo());
    echo '<br>';

    if($user1 instanceOf IAuthorizeUser) { echo 'True. <br>'; }
    else { echo 'False. <br>'; }
    if($admin instanceOf IAuthorizeUser) { echo 'True. <br>'; }
    else { echo 'False. <br>'; }

    echo '<br>The number of users: [' . User::$userCount . ']<br>';
    echo 'The number of super-users: [' . SuperUser::$superuserCount . ']<br><br>';
?>