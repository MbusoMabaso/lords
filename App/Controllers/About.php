<?php

namespace App\Controllers;

use Core\Controller;

class About extends Controller {
    public function index() {
        $this->render('About/index', [
            'title' => 'Our Heritage | Lords Vehicles'
        ]);
    }
}
