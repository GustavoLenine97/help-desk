<?php

use Illuminate\Database\Seeder;
use App\Models\Chamados;

class InsertChamado extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Chamados::create([
            'user_id' => '2',
            'motivo' => 'Teclado',
        ]);
    }
}
