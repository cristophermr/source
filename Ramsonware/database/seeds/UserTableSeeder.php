<?php

use Illuminate\Database\Seeder;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $Usuario = new \App\User();

        $Usuario::create([
            'name' => 'Cristopher Morales',
            'email' => 'crian@tigomail.cr',
            'password' => bcrypt('admin'),
        ]);
    }
}
