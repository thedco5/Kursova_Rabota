<?php
    class Utils {
        static function session() : void {
            if (session_status() === PHP_SESSION_NONE) { session_start(); }
        }
        static function get_user(PDO $pdo, String $username) : array {
            return $pdo->query("SELECT * FROM profiles WHERE username LIKE '$username';")->fetchAll(PDO::FETCH_ASSOC);
        }
        static function add_user(PDO $pdo, String $username, String $password) : void {
            $sql = "INSERT INTO profiles (username, password) VALUES ('$username', '";
            $sql .= password_hash($password, PASSWORD_DEFAULT) . "');";
            $pdo->query($sql); 
        }
        static function set_user(String $username, String $link) : void {
            Utils::session();
            $_SESSION["usr"] = $username;
            header("Location: $link");
        }
        static function current_user() {
            Utils::session();
            if (isset($_SESSION["username"])) return $_SESSION["username"];
            else return null;
        }
        static function error_message(int $n) : void {
            echo "<br> <span class='error'>There's an error! :: $n</span> <br>";
        }
        static function get_recipe(int $id) : Recipe {
            include "../models/dbconn.php";
            $info = $pdo->query("SELECT * FROM recipes WHERE id LIKE $id;")->fetchAll()[0];
            $author_id = $info["author"];
            $author = $pdo->query("SELECT username FROM profiles WHERE id LIKE $author_id;")->fetchAll()[0];
            $recipe = new Recipe();
            $recipe->id = $id;
            $recipe->score = $info["score"];
            $recipe->name = $info["name"];
            $recipe->author = $author["username"];
            $recipe->datetime = $info["datetime"];
            $file = file_get_contents("../controllers/recipes/r$id.json");
            $arr = @json_decode($file, true);
            $recipe->ingredients = $arr["ingredients"];
            $recipe->steps = $arr["steps"];
            $recipe->category = $info["category"];
            return $recipe; 
        } 
    }
    class Recipe {
        public int $id, $score;
        public String $name, $author, $datetime, $ingredients, $steps, $category;
    }
?>
