<?php
class User
{
    public $name;
    public $email;
    public $password;

    //constructor
    public function __construct($name, $email, $password)
    {
        $this->name = $name;
        $this->email = $email;
        $this->password = $password;
    }

    function set_name($name)
    {
        $this->name = $name;
    }
}

$user1 = new User("nihsnaasd", "asa@gasnd.com", "asdasd");

// $user1->name = "Nish";
$user1->set_name("Nishant");

var_dump($user1);
