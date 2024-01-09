<?php

class Wiki
{
  private $id;
  private $title;
  private $content;
  private $author;
  private $category;

  public function __construct($id, $title, $content, $author, $category) {
    $this->id = $id;
    $this->title = $title;
    $this->content = $content;
    $this->author = $author;
    $this->category = $category;
  }

  public function getTitle() {
    return $this->title;
  }

  public function getContent() {
    return $this->content;
  }

  public function getAuthor() {
    return $this->author;
  }

  public function getCategory() {
    return $this->category;
  }
}