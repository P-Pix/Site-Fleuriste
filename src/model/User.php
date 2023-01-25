<?php

class User {
  private string $name;
  private string $email;
  private string $password;

  public function __construct(string $name, string $email, string $password) {
    $this->name = $name;
    $this->email = $email;
    $this->password = $password;
  }
}
