<?php

use Medoo\Medoo;

class Auth {

  var $database = null;
  var $user = null;

  public function __construct(Medoo $database) {
      $this->database = $database;
  }

  public function authenticate() {
      $this->user = $this->database->get('users', '*', [
          'sessionid' => session_id()
      ]);
  }

  public function login() {
      $this->user = $this->database->get('users', '*', [
          'username' => $_POST['username'] ?? '',
          'password' => $_POST['password'] ?? ''
      ]);

      if ($this->user) {
          $this->database->update('users', [
            'sessionid' => session_id()
          ],[
            'id' => $this->user['id']
          ]);
      }
  }

  public function logout() {
      if ($this->user) {
          $this->database->update('users', [
            'sessionid' => null
          ],[
            'id' => $this->user['id']
          ]);
      }
  }

}
