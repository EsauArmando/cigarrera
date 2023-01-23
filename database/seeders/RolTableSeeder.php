<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Role;

class RolTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //ROL ADMINISTRADOR
        $role = new Role();
        $role->nombre="admin";
        $role->descripcion="El mero mero";
        $role-> save();
        //ROL CLIENTE
        $role = new Role();
        $role->nombre="cliente";
        $role->descripcion="Comprador";
        $role-> save();
        //ROL EMPLEADO
        $role = new Role();
        $role->nombre="cajero";
        $role->descripcion="El que chambea para mi";
        $role-> save();
    }
}
