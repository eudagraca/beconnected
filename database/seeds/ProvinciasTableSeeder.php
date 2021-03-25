<?php

use App\Provincia;
use Illuminate\Database\Seeder;

class ProvinciasTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Provincia::create([
            'nome' => 'Maputo',
            'regiao' => 'Sul',
        ]);

        Provincia::create([
            'nome' => 'Gaza',
            'regiao' => 'Sul',
        ]);

        Provincia::create([
            'nome' => 'Inhambane',
            'regiao' => 'Sul',
        ]);

        Provincia::create([
            'nome' => 'Manica',
            'regiao' => 'Centro',
        ]);

        Provincia::create([
            'nome' => 'Sofala',
            'regiao' => 'Centro'
        ]);

        Provincia::create([
            'nome' => 'Tete',
            'regiao' => 'Centro',
        ]);

        Provincia::create([
            'nome' => 'Zambezia',
            'regiao' => 'Norte',
        ]);

        Provincia::create([
            'nome' => 'Nampula',
            'regiao' => 'Norte',
        ]);

        Provincia::create([
            'nome' => 'Niassa',
            'regiao' => 'Norte',
        ]);

        Provincia::create([
            'nome' => 'Cabo Delgado',
            'regiao' => 'Norte',
        ]);
    }
}
