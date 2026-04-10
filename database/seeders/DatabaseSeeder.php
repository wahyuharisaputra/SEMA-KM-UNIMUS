<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class DatabaseSeeder extends Seeder
{
    public function run(): void
    {
        User::create([
            'name' => 'Super Admin',
            'email' => 'admin@semaunimus.ac.id',
            'password' => Hash::make('password123'),
            'role' => 'superadmin'
        ]);
        
        \App\Models\Pengaturan::insert([
            ['key' => 'sejarah', 'value' => 'Sejarah SEMA KM UNIMUS bermula dari...'],
            ['key' => 'visi_misi', 'value' => 'Visi: Menjadikan SEMA KM...'],
            ['key' => 'email', 'value' => 'infosema@unimus.ac.id'],
            ['key' => 'telepon', 'value' => '+62 812 3456 7890'],
            ['key' => 'alamat', 'value' => 'Gedung Rektorat UNIMUS Lt. 1'],
            ['key' => 'instagram', 'value' => '@semaunimus'],
        ]);
    }
}
