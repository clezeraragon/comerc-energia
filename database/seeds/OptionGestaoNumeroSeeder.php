<?php

use Illuminate\Database\Seeder;
use ComercEnergia\Models\OptionGestaoNumero;

class OptionGestaoNumeroSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        OptionGestaoNumero::firstOrCreate(
          [
              'name' => 'Imóveis Alugados'
          ]
      );
        OptionGestaoNumero::firstOrCreate(
            [
                'name' => 'Imóveis Vendidos'
            ]
        );
        OptionGestaoNumero::firstOrCreate(
            [
                'name' => 'Imóveis Disponíveis'
            ]
        );
    }
}
