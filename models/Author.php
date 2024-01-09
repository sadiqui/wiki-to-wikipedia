<?php

class Author extends User
{
  public function __construct($id, $username, $password) {
    parent::__construct($id, $username, $password);
  }

  public function createWiki($title, $content, $category, $tags) {
    // To create a new wiki object and store it in the system
  }

  public function updateWiki($wiki, $title, $content, $category, $tags) {
    // To update the properties of the provided wiki object
  }

  public function deleteWiki($wiki) {
    // To remove the provided wiki object from the system
  }
}