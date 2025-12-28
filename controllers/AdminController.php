<?php 
class AdminController {
    public function addBook(){
        require_once __DIR__ ."/../views/admin/addBook.php"; 
    }
    public function borrows(){
       require_once __DIR__ ."/../views/admin/borrows.php";  
    }
    public function books(){                 
       require_once __DIR__ ."/../views/admin/books.php";  
    }
    public function readers(){
       require_once __DIR__ ."/../views/admin/readers.php";  
    }
    public function updateBook(){
       require_once __DIR__ ."/../views/admin/updateBook.php";  
    }

}