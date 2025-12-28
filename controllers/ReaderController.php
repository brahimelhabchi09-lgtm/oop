<?php
class ReaderController {
   public function home(){
        require_once __DIR__ ."/../views/home.php"; 
   } 
   public function books(){
        require_once __DIR__ ."/../views/books.php"; 
   } 
   public function book(){
        require_once __DIR__ ."/../views/book.php"; 
   } 
   public function profile(){
        require_once __DIR__ ."/../views/profile.php"; 
   } 
     public function returnBook() : void{
     
   }
   public function borrowBook() : Borrow{

   }
    public function login() : bool {

   }
}