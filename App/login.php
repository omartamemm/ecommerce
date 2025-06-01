<?php
namespace App;
session_start();


 use PDO;
 use PDOException;
    

include_once "../functions/function.php";



class login{
   private $db;
   private $email;
   private $password;   
    public function __construct(PDO $db, $email, $password) {
         $this->db = $db;
         $this->email = $email;
         $this->password = $password;
    }

    public function user_login() {
        $stmt = $this->db->prepare("SELECT * FROM users WHERE email = ? and password = ?");
        $stmt->execute([$this->email, $this->password]);
        if ($stmt->rowCount() == 0) {
            set_message("Invalid email or password.", "danger");
            header("Location: ../../index.php?page=login");
            exit;
        }
        $user = $stmt->fetch(PDO::FETCH_ASSOC);


        if ($user ) {
            $_SESSION['user_id'] = $user['id'];
            $_SESSION['user_name'] = $user['name'];
            $_SESSION['user_email'] = $user['email'];
            $_SESSION['user_image'] = $user['image'];
            $_SESSION['user_phone'] = $user['phone'];
            set_message("Login successful.", "success");
            header("Location: ../../index.php?page=home");
            exit;
        } else {
            set_message("Invalid email or password.", "danger");
            header("Location: ../../index.php?page=login");
            exit;
        }
    }
}
