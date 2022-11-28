<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\Post;
use App\Models\User;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{

    public function run(): void
    {
//        if (app()->environment('local')) {
//            $this->call(
//                class: DefaultUserSeeder::class
//            );
//        }

        Post::factory(20)->for(
            User::factory()->create([
                'first_name' => 'Umid',
                'last_name' => 'Zoxidov',
                'email' => 'umidjonzoxidov96@gmail.com',
            ])
        )->create();
    }
}
