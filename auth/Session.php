<?php
class Session {
    public static function start() {
        if (session_status() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($key, $value) {
        $_SESSION[$key] = $value;
    }

    public static function get($key) {
        return $_SESSION[$key] ?? null;
    }

    public static function destroy() {
        $_SESSION = [];
        if (ini_get("session.use_cookies")) {
            setcookie(session_name(), '', time() - 42000);
        }
        session_destroy();
    }
}
?>
