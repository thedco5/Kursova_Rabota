<?php
    session_start();
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
            $_SESSION["usr"] = $_POST["username"];
            header("Location: $link");
        }
        static function current_user() {
            if (isset($_SESSION["usr"])) return $_SESSION["usr"];
            else return null;
        }
        static function error_message(int $n) : void {
            echo "<br> <span class='error'>There's an error! :: $n</span> <br>";
        }
        static function get_recipe(PDO $pdo, int $id) : Recipe{
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
?>
