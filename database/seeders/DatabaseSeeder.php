<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Post;
use App\Models\Tag;
use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Storage;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        //metodo para eiminar una carpeta en storage antes de ejecutar loos seeders
        Storage::deleteDirectory('posts');
        //metodo para crear una carpeta en storage antes de ejecutar loos seeders
        Storage::makeDirectory('posts');

        //llamar al seeder de rolSeeder quiere decir el de roles
        $this->call(RolSeeder::class);

       $this->call(UserSeeder::class);
       Category::factory(4)->create();
       Tag::factory(8)->create();
       $this->call(PostSeeder::class);
       
    }
}
