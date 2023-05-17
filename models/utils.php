<?php
    class Utils {
        static function get_user(PDO $pdo, String $username) : array {
            return $pdo->query("SELECT * FROM profiles WHERE username LIKE '$username';")->fetchAll(PDO::FETCH_ASSOC);
        }
        static function add_user(PDO $pdo, String $username, String $password) : void {
            $sql = "INSERT INTO profiles (username, password) VALUES ('$username', '";
            $sql .= password_hash($password, PASSWORD_DEFAULT) . "');";
            $pdo->query($sql); 
        }
        static function set_user(String $username, String $link) : void {
            if (session_status() === PHP_SESSION_NONE) { session_start(); }
            $_SESSION["usr"] = $username;
            header("Location: $link");
        }
        static function current_user() {
            if (session_status() === PHP_SESSION_NONE) { session_start(); }
            if (isset($_SESSION["usr"])) return $_SESSION["usr"];
            else return null;
        }
        static function error_message(int $n) : void {
            echo "<br> <span class='error'>There's an error! :: $n</span> <br>";
        }
        static function get_recipe(int $id) : Recipe{
            $recipe = new Recipe();
            $recipe->id = $id;
            return $recipe; 
        } 
    }
    class Recipe {
        public int $id, $score;
        public String $name, $author, $date, $time, $json_file;
        public array $ingredients, $steps;
    }
    define("DBINFO", json_decode(file_get_contents("../models/info.json"), true)["db"]);
    define("DSN", "mysql:host=" . DBINFO["host"] . ";dbname=" . DBINFO["dbname"]);
    $pdo = new PDO(DSN, DBINFO["username"], DBINFO["password"]);
?>
