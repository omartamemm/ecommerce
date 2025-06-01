<?php

namespace App;

use PDO;

class user {
    private static $name;
    private static $email;
    private static $password;
    private static $image;
    private static $phone;

    public static function create($name, $email, $password, $image, $phone, PDO $dbConnection) {
        
        self::$name = $name;
        self::$email = $email;
        self::$password =$password;
        self::$phone = $phone;
        self::uploadImage($image);

        self::insertUser($dbConnection);
    }

    private static function uploadImage($image) {
        $targetDir = "../uploads/users/";
        $targetFile = $targetDir . basename($image["name"]);

        $check = getimagesize($image["tmp_name"]);
        if ($check === false) {
            throw new \Exception("not a valid image file.");
        }

        if (!move_uploaded_file($image["tmp_name"], $targetFile)) {
            throw new \Exception("Failed to upload image.");
        }

        self::$image = $targetFile;
    }

    private static function insertUser(PDO $dbConnection) {
        $stmt = $dbConnection->prepare("INSERT INTO users (name, email, password, image, phone) VALUES (?, ?, ?, ?, ?)");
        $stmt->execute([self::$name, self::$email, self::$password, self::$image, self::$phone]);
    }

    public static function getUserById($id, PDO $dbConnection) {
        $stmt = $dbConnection->prepare("SELECT * FROM users WHERE id = ?");
        $stmt->execute([$id]);
        return $stmt->fetch(PDO::FETCH_ASSOC);
    }

    public  function __get($property) {
        if ($property === 'name') {
            return self::$name;
        } elseif ($property === 'email') {
            return self::$email;
        } elseif ($property === 'password') {
            return self::$password;
        } elseif ($property === 'image') {
            return self::$image;
        } elseif ($property === 'phone') {
            return self::$phone;
        } else {
            throw new \Exception("Property not found: $property");
        }
    }

    public static function displayUserInfo() {
        return [
            'Name' => self::$name,
            'Email' => self::$email,
            'Image' => self::$image,
            'Phone' => self::$phone
        ];
    }
}