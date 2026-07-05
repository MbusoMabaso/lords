<?php

namespace App\Controllers;

use Core\Controller;

class Home extends Controller {
    public function index() {
        $this->render('Home/index', [
            'title' => 'Mercedes AMG A45 2016'
        ]);
    }
}
