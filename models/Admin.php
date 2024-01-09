<?php

class Admin extends User
{
  public function __construct($id, $username, $password) {
    parent::__construct($id, $username, $password);
  }

  public function createCategory($name) {
    // To create a new category object and store it in the system
  }

  public function updateCategory($category) {
    // To update the properties of the provided category object
  }

  public function deleteCategory($category) {
    // To remove the provided category object from the system
  }

  public function createTag($name) {
    // To create a new tag object and store it in the system
  }

  public function updateTag($tag) {
    // To update the properties of the provided tag object
  }

  public function deleteTag($tag) {
    // To remove the provided tag object from the system
  }

  public function archiveWiki($wiki) {
    // To move the provided wiki object to the archive
  }
}