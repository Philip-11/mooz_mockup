<?php

class Session
{
    public static function start()
    {
        if (session_start() === PHP_SESSION_NONE) {
            session_start();
        }
    }

    public static function set($key, $value)
    {
        $_SESSION[$key] = $value;
    }

    public static function get($key): array
    {
        return $_SESSION[$key] ?? null;
    }

    public static function has($key): bool
    {
        return isset($_SESSION[$key]);
    }

    public static function remove($key)
    {
        unset($_SESSION[$key]);
    }

    public static function destroy()
    {
        session_unset();
        session_destroy();
    }
}
