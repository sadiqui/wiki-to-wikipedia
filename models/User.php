<?php

class User
{
  private $id;
  private $username;
  private $password;

  public function __construct($id, $username, $password) {
    $this->id = $id;
    $this->username = $username;
    $this->password = $password;
  }

  public function register($name, $email, $password) {
    // To create a new user account in the system
  }

  public function login($username, $password) {
    // To validate the provided credentials and log in the user
  }
}