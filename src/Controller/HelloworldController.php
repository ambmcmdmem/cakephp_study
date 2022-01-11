<?php

namespace App\Controller;

class HelloworldController extends AppController {
  public function index() {
    $this->render('hello');
  }
}