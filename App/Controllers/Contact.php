<?php

namespace App\Controllers;

use Core\Controller;

class Contact extends Controller {
    public function index() {
        $this->render('Contact/index', [
            'title' => 'Inquire | Lloyds'
        ]);
    }

    public function send() {
        // In a real application, this would handle the form submission
        $this->render('Contact/success', [
            'title' => 'Inquiry Sent | Lloyds'
        ]);
    }
}
