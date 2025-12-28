<?php
class ReaderController {
   public function home(){
        $page = "home";
          require_once __DIR__ . "/../views/templates/layout.php";  
   } 
   public function books(){
          $query = "SELECT * FROM books";
          $stmt = Database::getConnection()->prepare($query);
          $stmt->execute();
          $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
          $page = "books";
          require_once __DIR__ . "/../views/templates/layout.php"; 
   } 
   public function book(){
        $id = $_GET["id"];
          $query = "SELECT * FROM books where id = ?";
          $stmt = Database::getConnection()->prepare($query);
          $stmt->execute([$id]);
          $book = $stmt->fetch(PDO::FETCH_ASSOC);
        $page = "book";
        require_once __DIR__ . "/../views/templates/layout.php"; 
   } 
   public function profile(){
          session_start();
          $user = $_SESSION["user"]->getInfos();
          $page = "profile";
          require_once __DIR__ . "/../views/templates/layout.php"; 
   } 
     public function returnBook() : void{
     
   }
   public function borrowBook() {
     session_start();
     $readerId = $_SESSION["user"]->getInfos()['id'];
     $bookId = $_POST["bookId"];
     $borrowDate = new DateTime();
     $returnDate = date_add($borrowDate, new DateInterval("P7D"));

     $query = "INSERT INTO borrows (readerId, bookId, borrowDate, returnDate) VALUES (?, ?, ?, ?)";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute([$readerId, $bookId, $borrowDate->format('Y-m-d H:i:s'), $returnDate->format('Y-m-d H:i:s')]);

     $query = "UPDATE books SET status = 'borrowed' WHERE id = ?";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute([$bookId]);
      header("Location: /books");
      exit();
   }
}