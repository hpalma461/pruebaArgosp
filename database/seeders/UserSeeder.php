<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
           'name'=>'Hector Bernal',
           'email'=>  'hpalma461@gmail.com',
           'password'=> bcrypt('Satontin.2')
        ])->assignRole('Admin');//asignar un rol a usuario o con la sentencia syncRoles($roles) se le pueden psar varios roles a un solo usuario
        User::factory(9)->create();
    }
}
