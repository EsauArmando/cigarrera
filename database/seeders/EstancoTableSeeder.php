<?php

namespace Database\Seeders;

use App\Models\Estanco;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class EstancoTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $role = new Estanco();
        $role->nombre="San Dolores";
        $role->direccion="Estanco ubicado en san Miguel";
        $role-> save();

        $role = new Estanco();
        $role->nombre="Roma";
        $role->direccion="Estanco ubicado en Romita";
        $role-> save();
    }
}
