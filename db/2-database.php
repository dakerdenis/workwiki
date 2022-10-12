<?php
class Content {
  // (A) PROPERTIES
  public $pdo = null; // PDO object
  public $stmt = null; // SQL statement
  public $error = ""; // Error message, if any

  // (B) CONSTRUCTOR - CONNECT TO DATABASE
  function __construct () {
    try {
      $this->pdo = new PDO(
        "mysql:host=".DB_HOST.";dbname=".DB_NAME.";charset=".DB_CHARSET,
        DB_USER, DB_PASSWORD, [
          PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
          PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC
        ]
      );
    } catch (Exception $ex) { exit($ex->getMessage()); }
  }

  // (C) DESTRUCTOR - CLOSE DATABASE CONNECTION
  function __destruct () {
    if ($this->stmt!==null) { $this->stmt = null; }
    if ($this->pdo!==null) { $this->pdo = null; }
  }

  // (D) SAVE CONTENT
  function save ($id, $content) {
    try {
      $this->stmt = $this->pdo->prepare(
        "REPLACE INTO `contents` (`content_id`, `content_text`) VALUES (?,?)"
      );
      $this->stmt->execute([$id, $content]);
      return true;
    } catch (Exception $ex) {
      $this->error = $ex->getMessage();
      return false;
    }
  }

  // (E) GET CONTENT
  function get ($id) {
    $this->stmt = $this->pdo->prepare(
      "SELECT `content_text` FROM `contents` WHERE `content_id`=?"
    );
    $this->stmt->execute([$id]);
    $content = $this->stmt->fetch();
    return is_array($content) ? $content["content_text"] : "" ;
  }
}

// (F) DATABASE SETTINGS - CHANGE TO YOUR OWN!
define("DB_HOST", "localhost");
define("DB_NAME", "wiki");
define("DB_CHARSET", "utf8");
define("DB_USER", "root");
define("DB_PASSWORD", "");

// (G) NEW CONTENT OBJECT
$_CONTENT = new Content();
