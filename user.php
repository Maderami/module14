<?php

class User
{
    private $username;
    private $userpassword;
    private $email;
    private $userlist;

    public function __construct(string $username, string $userpassword, string $email, array $userlist)
    {
        $this->$username = $username;
        $this->$userpassword = $userpassword;
        $this->$email = $email;
        $this->$userlist = $userlist;
    }

    function getUsername(): string
    {
        return $this->username;
    }
    function getEmail(): string
    {
        return $this->email;
    }
    function getPassword(): string
    {
        return $this->userpassword;
    }
    function setUsersList($user, $password): array
    {
        return $this->userlist;
    }

    function getUserList(){
        return $this->userlist;
    }

}
