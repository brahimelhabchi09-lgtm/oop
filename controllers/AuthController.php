<?php
 class AuthControlle{
    public function validationRegidter(){

        session_start();

        if ($_SERVER["REQUEST_METHOD"] === "POST") {

            $err = false;

            $name = trim($_POST["name"] ?? '');
            $email = trim($_POST["email"] ?? '');
            $age = trim($_POST["age"] ?? '');
            $password = trim($_POST["password"] ?? '');
            $confirm_password = trim($_POST["confirm_password"] ?? '');

            $_SESSION['name'] = htmlspecialchars($name, ENT_QUOTES);
            $_SESSION['email'] = htmlspecialchars($email, ENT_QUOTES);
            $_SESSION['age'] = htmlspecialchars($age, ENT_QUOTES);
            $_SESSION['password'] = htmlspecialchars($password, ENT_QUOTES);
            $_SESSION['confirm_password'] = htmlspecialchars($confirm_password, ENT_QUOTES);

            if ($name === "") {
                $_SESSION['name-err'] = "Le nom est obligatoire.";
                $err = true;
            }

            if ($email === "" || !filter_var($email, FILTER_VALIDATE_EMAIL)) {
                $_SESSION['email-err'] = "Email invalide.";
                $err = true;
            }else{
                $query = "SELECT email FROM users WHERE email = ?";
                $stmt = $connection->prepare($query);
                $stmt->bind_param("s", $email);
                $stmt->execute();
                $result = $stmt->get_result();
                if ($result->num_rows > 0) {
                    $_SESSION['email-err'] = "Cet email est déjà utilisé.";
                    $err = true;
                }
            }

            if ($age === "" || !ctype_digit($age) || (int)$age < 0) {
                $_SESSION['age-err'] = "Âge invalide.";
                $err = true;
            }

            if ($password === "") {
                $_SESSION['password-err'] = "Le mot de passe est obligatoire.";
                $err = true;
            }

            if ($confirm_password === "") {
                $_SESSION['confirm_password-err'] = "La confirmation du mot de passe est obligatoire.";
                $err = true;
            }

            if ($password !== $confirm_password) {
                $_SESSION['confirm_password-err'] = "Les mots de passe ne correspondent pas.";
                $err = true;
            }
        }

    }
}