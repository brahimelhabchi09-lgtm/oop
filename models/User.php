<?php
 abstract class User {
    protected int $id;
    protected string $firstName ;
    protected string $lastName ;
    protected string $email ;
    protected string $password ;
    
    public function __construct($id, $firstName, $lastName, $email, $password)
    {
        $this->id = $id;
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    public function getInfos(){
        return [
            "id" => $this->id,
            "firstName" => $this->firstName,
            "lastName" => $this->lastName,
            "email" => $this->email
        ];
    }
} 
 
