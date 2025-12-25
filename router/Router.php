<?php


class Router {
   private string $page ;
   private array $availablePages = [
        "/" => [
            "controller" => "ReaderController",
            "method" => "home"
        ], 
        "/books" => [
            "controller" => "ReaderController",
            "method" => "books"
        ],
        "/book" => [
            "controller" => "ReaderController",
            "method" => "book"
        ],
        "/login",
        "/register",
        "/profile",
        "/404",
        "/admin/books" => [
            "controller" => "AdminController",
            "method" => "books"
        ],
        "/admin/addBook" => [
            "controller" => "AdminController",
            "method" => "addBook"
        ],
        "/admin/updateBook" => [
            "controller" => "AdminController",
            "method" => "updateBook"
        ],
        "/admin/borrows" => [
            "controller" => "AdminController",
            "method" => "borrows"
        ],
        "/admin/readers" => [
            "controller" => "AdminController",
            "method" => "readers"
        ]
    ];  

    public function __construct()
    {
        $this->page = strtolower(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH));
    }
    public function dispatch(){
        $found=false;
        foreach ($this->availablePages as $p => $_) {
            if ($this->page === $p) {
                $found = true;
                break;
            }
        }


        if (!$found) {
          $this->page= "404";
        }

        $controller = $this->availablePages[$this->page]["controller"];
        $method = $this->availablePages[$this->page]["method"];

        require_once __DIR__ . "/../controllers/$controller.php";
        $c = new $controller();
        $c->$method();
    }
}
