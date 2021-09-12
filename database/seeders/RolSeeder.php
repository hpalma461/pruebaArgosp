<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;
use Spatie\Permission\Models\Permission;

class RolSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //para crear los roles en la base de datos
        $role1 = Role::create(['name' => 'Admin']);
        $role2 = Role::create(['name' => 'Blogger']);
        $role3 = Role::create(['name' => 'RolPrueba']);

        Permission::create(['name' => 'admin.home',
                            'description' => 'Ver el dashboard'])->syncRoles([$role1, $role2]);

           //para crear los persmisos en la base de datos
        //para tener consistencia en los datos les damos el mismo nombre de las rutas que queremos proteger
        Permission::create(['name' => 'admin.users.index',
                            'description' => 'Ver el listado de usuarios'])->syncRoles([$role1]);//para asiganrle el permiso a varios roles en un array
        Permission::create(['name' => 'admin.users.edit',
                            'description' => 'Asignar un rol'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.users.update',
                            'description' => 'Actualizar usuario'])->syncRoles([$role1]);

        //para crear los persmisos en la base de datos
        //para tener consistencia en los datos les damos el mismo nombre de las rutas que queremos proteger
        Permission::create(['name' => 'admin.categories.index',
                            'description' => 'Ver listado de categorias'])->syncRoles([$role1, $role2]);//para asiganrle el permiso a varios roles en un array
        Permission::create(['name' => 'admin.categories.create',
                            'description' => 'Crear categorias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.edit',
                            'description' => 'Editar categorias'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.categories.destroy',
                            'description' => 'Eliminar categorias'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.tags.index',
                            'description' => 'Ver listado de etiquetas'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.tags.create',
                            'description' => 'Crear etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.edit',
                            'description' => 'Editar etiquetas'])->syncRoles([$role1]);
        Permission::create(['name' => 'admin.tags.destroy',
                            'description' => 'Eliminar etiquetas'])->syncRoles([$role1]);

        Permission::create(['name' => 'admin.posts.index',
                            'description' => 'Ver listado de publicaciones'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.create',
                            'description' => 'Crear Publicacion'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.edit',
                            'description' => 'Editar Publicacion'])->syncRoles([$role1, $role2]);
        Permission::create(['name' => 'admin.posts.destroy',
                            'description' => 'Eliminar Publicacion'])->syncRoles([$role1, $role2]);

        //para agregar datos la tabla roles_has_permissions
        //utilizar el metodo de laravel para acceder al persmiso
        //$role1->permissions()->attach([1,2,3, .....])




    }
}
