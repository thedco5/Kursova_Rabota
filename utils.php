<?php
    class Utils {
        static function user_exists(PDO $pdo, String $username) : bool  {
            return count($pdo->query("SELECT * FROM profiles WHERE username LIKE '" . $_POST["username"] . "';")->fetchAll()) == 0 ? false : true;
        }
        static function get_user(PDO $pdo, String $username) : array {
            return $pdo->query("SELECT * FROM profiles WHERE username LIKE '$username';")->fetchAll(PDO::FETCH_ASSOC);
        }
        static function add_user(PDO $pdo, String $username, String $password) : void {
            $sql = "INSERT INTO profiles (username, password) VALUES ('$username', '";
            $sql .= password_hash($password, PASSWORD_DEFAULT) . "');";
            $pdo->query($sql);
        }
        static function error_message() : void {
            echo "<span class='error'>There's an error!</span>";
        }
    }   
?>