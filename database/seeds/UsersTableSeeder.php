<?php

use Illuminate\Database\Seeder;
use ComercEnergia\Models\User;
class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::firstOrCreate(
        [
            'name' => 'admin',
            'email' => 'admin@comercenergia.com',
            'password' => bcrypt('admin123')
        ]
        );
    }
}
