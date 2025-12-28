<?php


class Router {
   private string $page ;
   private array $availablePages = [
        "/" => [
            "controller" => "ReaderController",
            "method" => [
                "GET" => "home"
            ]
        ], 
        "/books" => [
            "controller" => "ReaderController",
            "method" =>[
                 "GET" => "books"
            ]
        ],
        "/book" => [
            "controller" => "ReaderController",
            "method" =>[
                 "GET" => "book"
            ]
        ],
        "/borrowbook" => [
            "controller" => "ReaderController",
            "method" =>[
                 "POST" => "borrowBook"
            ]
        ],
        "/login" => [
            "controller" => "AuthController",
            "method" => [
                "POST" => "submitLogin",
                "GET" => "login"
            ]
        ],
        "/register" => [
            "controller" => "AuthController",
            "method" => [
                "POST" => "submitRegister",
                "GET" => "register"
            ]
        ],
        "/logout" => [
            "controller" => "AuthController",
            "method" => [
                "POST" => "logout"
            ]
        ],
        "/profile" => [
            "controller" => "ReaderController",
            "method" => [
                "GET" => "profile"
            ]
        ],
        "/admin" => [
            "controller" => "AdminController",
            "method" => [
                "GET" => "dashboard"
            ]
        ],
        "/admin/books" => [
            "controller" => "AdminController",
            "method" => [
                "GET" => "books"
            ]
        ],
        "/admin/addbook" => [
            "controller" => "AdminController",
           "method"=>
           [ "POST" => "submitAddBook",
             "GET" =>  "addBook"
           ]
        ],
        "/admin/updatebook" => [
            "controller" => "AdminController",
            "method"=>
           [ "POST" => "submitUpdateBook",
             "GET" =>  "updateBook"
           ]
        ],
        "/admin/deletebook" => [
            "controller" => "AdminController",
            "method"=>
           [
             "POST" =>  "deleteBook"
           ]
        ],
        "/admin/borrows" => [
            "controller" => "AdminController",
            "method"=>
           [
             "GET" =>  "borrows"
           ]
        ],
        "/admin/readers" => [
            "controller" => "AdminController",
            "method"=>
           [ 
             "GET" =>  "readers"
           ]
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
           require_once __DIR__ ."/../views/404.php";
        }

        $controller = $this->availablePages[$this->page]["controller"];
        
        $method = $this->availablePages[$this->page]["method"][$_SERVER["REQUEST_METHOD"]];

        require_once __DIR__ . "/../controllers/$controller.php";
        $c = new $controller();
        $c->$method();
    }
}
