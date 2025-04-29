<?php

namespace Database\Seeders;

use App\Models\Role;
use App\Models\User;
use App\Models\Produit;
use Illuminate\Database\Seeder;
use Faker\Factory as Faker;


class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // \App\Models\User::factory(10)->create();
        


        // $role = new Role();
        // $role->name = 'Admin';
        // $role->save();
        // $roleInsertion = Role::where('name', 'Admin')->first();


        // $user = new User();
        // $user->firstName = 'admin';
        // $user->lastName = 'admin';
        // $user->email = 'opticien.createur@gmail.com';
        // $user->phone = '0703118311';
        // $user->image = 'https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcStLQwEcXNlG7iENsIznTjG5afKCPoq5e5U2w&s';
        // $user->password = bcrypt('admin');
        // $user->role()->associate($roleInsertion);
        // $user->save();

        
        $faker = Faker::create();

        $images = [
            "https://www.opticien-montlucon.com/cdn/shop/files/dlWuyOEW.jpg?v=1744294357&width=3840",
            "https://i1.wp.com/lesbellesgueules.com/wp-content/uploads/2019/06/1-2.jpg?resize=670%2C390&ssl=1",
            "https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTKabrb2R3rz1adaBxv9lVjG1XHaiHgEU8D3w&s",
            "https://www.mjoptictendance.com/public/img/big/IMG1684jpg_648da9a8a12745.84458363.jpg",
            "https://www.latelierdelopticienmarseille.fr/wp-content/uploads/2016/11/monture-jean-francois-rey-andy-latelier-de-lopticien-1.jpg"
        ];
        for ($i = 0; $i < 22; $i++) {
            Produit::create([
                'name' => $faker->word,
                'description' => $faker->sentence,
                'prix' => $faker->numberBetween(100, 5000),
                'image' => $faker->randomElement($images),
                'promotion' => $faker->numberBetween(0, 50), // random promotion percentage
                'quantiter' => $faker->numberBetween(1, 500),
                'categorie_id' => $faker->numberBetween(1, 3), // assumes categories 1–5 exist
            ]);
        }

    }
}
