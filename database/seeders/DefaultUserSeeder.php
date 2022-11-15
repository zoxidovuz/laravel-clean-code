<?php

declare(strict_types=1);

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;

class DefaultUserSeeder extends Seeder
{
    public function run(): void
    {
        User::factory()->create([
            'first_name' => 'Umidjon',
            'last_name' => 'Zoxidov',
            'email' => 'umidjonzoxidov96@gmail.com',
        ]);
    }
}
