<?php

use Illuminate\Database\Seeder;
use Seed\UsuarioCriado;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(InsertChamado::class);
        // factory(App\Usuario::class, 10)->create();
    }
}
