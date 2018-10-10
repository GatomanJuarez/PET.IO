<?php

use Illuminate\Database\Seeder;

class MedicamentosTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        factory(App\Medicamentos::class, 100)->create();
    }
}
