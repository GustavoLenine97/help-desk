<?php

namespace Seed;

use Illuminate\Database\Seeder;
use App\Usuario;

class UsuarioCriado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public static function runi($name)
    {
        Usuario::create([
            'nome' => $name ,
        ]);
    }
}
