<?php
 abstract class User {
    protected int $id;
    protected string $firstName ;
    protected string $lastName ;
    protected string $email ;
    protected string $password ;
    abstract public function login() : bool  ;
    public function logout() : void{
        }
} 
 
