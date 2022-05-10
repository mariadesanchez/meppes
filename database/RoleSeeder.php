<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class RoleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {    DB::table('roles')->truncate();
         DB::table('roles')->insert([
            'TipoRole' => 'Farmacia',
        ]);
          DB::table('roles')->insert([
            'TipoRole' => 'Afiliado',
        ]);
           DB::table('roles')->insert([
            'TipoRole' => 'Superuser',
        ]);
    }
}
