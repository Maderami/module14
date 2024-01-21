<?php

class User
{
    private $username;
    private $userpassword;
    private $userlist;

    public function __construct(string $username, string $userpassword, $userlist)
    {
        $this->$username = $username;
        $this->$userpassword = $userpassword;
        $this->$userlist = $userlist;
    }

    function getUsername(): string
    {
        return $this->username;
    }

    function getPassword(): string
    {
        return $this->userpassword;
    }
    function setUsersList(): array
    {
        $userlist = array(
            'Login' => $this->getUsername(),
            'Password' => $this->getPassword(),
        );
        return $this->$userlist;
    }

    function getUseList(){
        $userlist = $this->setUsersList();
        return $this->$userlist;
    }

}
