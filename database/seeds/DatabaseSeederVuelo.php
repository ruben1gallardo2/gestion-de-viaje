<?php


use Illuminate\Database\Seeder;

class DatabaseSeederVuelo extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Vuelo::class, 55)->create();
    }
}
