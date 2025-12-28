<?php 
class AdminController {
   public function dashboard(){
      require_once __DIR__ ."/../views/admin/dashboard.php"; 
   }
    public function addBook(){
        require_once __DIR__ ."/../views/admin/addBook.php"; 
    }
    public function borrows(){
       require_once __DIR__ ."/../views/admin/borrows.php";  
    }
    public function books(){     
      $query = "SELECT * FROM books";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute();
      $books = $stmt->fetchAll(PDO::FETCH_ASSOC);
      require_once __DIR__ ."/../views/admin/books.php";  
    }
    public function readers(){
      $query = "SELECT * FROM users where role = 'reader'";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute();
      $readers = $stmt->fetchAll(PDO::FETCH_ASSOC);
       require_once __DIR__ ."/../views/admin/readers.php";  
    }
    public function updateBook(){
      $id = $_GET["id"];
      $query = "SELECT * FROM books where id = ?";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute([$id]);
      $book = $stmt->fetch(PDO::FETCH_ASSOC);
      require_once __DIR__ ."/../views/admin/updateBook.php";  
    }

    public function submitAddBook(){
      $title = $_POST["title"];
      $author = $_POST["author"];
      $year = $_POST["year"];
      $status = $_POST["status"];


      $query = "INSERT INTO books (title, author, year, status) VALUES (?, ?, ?, ?)";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute([$title, $author, $year, $status]);

      header("Location: /admin/books");
      exit();
    }

    public function submitUpdateBook(){
      $id = $_POST["id"];
      $title = $_POST["title"];
      $author = $_POST["author"];
      $year = $_POST["year"];
      $status = $_POST["status"];


      $query = "UPDATE books SET title = ?, author = ?, year = ?, status = ? where id = ?";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute([$title, $author, $year, $status, $id]);
      
      header("Location: /admin/books");
      exit();
    }

    public function deleteBook(){
      $id = $_POST["id"];

      $query = "DELETE FROM books where id = ?";
      $stmt = Database::getConnection()->prepare($query);
      $stmt->execute([$id]);
      
      header("Location: /admin/books");
      exit();
    }
}