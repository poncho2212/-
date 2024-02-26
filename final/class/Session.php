<?php

/*
セッションに関するクラス
*/

class Session
{
    // セッションに関する処理
    private $sesskey; // セッションのキー
    private $sessname; // セッション名

    public function __construct(){}

    public function set_sesskey($key){
        $this->sesskey = $key;
    }

    public function get_sesskey(){
        return $this->sesskey;
    }

    public function set_sessname($name){
        $this->sessname = $name;
    }

    public function get_sessname(){
        return $this->sessname;
    }

    public function start(){
        // セッションが既に開始している場合は何もしない。
        if (session_status() === PHP_SESSION_ACTIVE) {
            return;
        }
        if ($this->sessname != "") {
            session_name($this->sessname);
        }
        // セッション開始
        session_start();
    }

    // セッション等の情報を破棄
    public function logout(){
        // セッション変数を空にする
        $_SESSION = [];

        // クッキーを削除
        if (ini_get("session.use_cookies")) {
            $params = session_get_cookie_params();
            setcookie(session_name(), '', time() - 42000,
                $params["path"], $params["domain"],
                $params["secure"], $params["httponly"]
            );
        }

        // セッションを破壊
        session_destroy();
    }
}
