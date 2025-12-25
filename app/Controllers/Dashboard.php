<?php

namespace App\Controllers;

use App\Controllers\BaseController;
// Importez vos modèles ici plus tard (ex: use App\Models\RoomModel;)

class Dashboard extends BaseController
{
    public function index()
    {
        // Données à passer à la vue
        $data = [
            'title'   => 'Tableau de Bord',
            'stats'   => [
                'rooms'     => 150,
                'bookings'  => 45,
                'clients'   => 1200,
                'revenue'   => "15,400"
            ]
        ];

        return view('dashboard/index', $data);
    }
}