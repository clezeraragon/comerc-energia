<?php

namespace ComercEnergia\Http\Controllers;

use ComercEnergia\Models\GestaoNumero;
use Illuminate\Http\Request;


class DashboardController extends Controller
{

    private $gestaoNumero;

    public function __construct(GestaoNumero $gestaoNumero)
    {
        $this->gestaoNumero = $gestaoNumero;
    }

    public function index()
    {

        $feed = \Feeds::make('https://publicidadeimobiliaria.com/mercado-imobiliario-corporativo-ensaia-recuperacao/');

        $data = array(
            'title' => $feed->get_title(),
            'permalink' => $feed->get_permalink(),
            'items' => $feed->get_items(),
        );
        return view('dashboard.index', compact('data'));
    }

}
