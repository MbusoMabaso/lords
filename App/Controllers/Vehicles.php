<?php

namespace App\Controllers;

use Core\Controller;
use App\Models\Vehicle;

class Vehicles extends Controller {
    public function index() {
        $vehicles = Vehicle::getAll();
        $this->render('Vehicles/index', [
            'title' => 'The Collection | Lloyds',
            'vehicles' => $vehicles
        ]);
    }

    public function view() {
        $slug = $this->route_params['slug'];
        $vehicle = Vehicle::findBySlug($slug);

        if (!$vehicle) {
            throw new \Exception("Vehicle not found", 404);
        }

        $this->render('Vehicles/view', [
            'title' => $vehicle['title'] . ' | Lloyds',
            'vehicle' => $vehicle
        ]);
    }
}
