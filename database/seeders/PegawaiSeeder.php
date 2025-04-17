<?php

namespace Database\Seeders;

use App\Models\admin;
use App\Models\pelaksana;
use App\Models\penugas;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class PegawaiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        admin::create([
            'nama' => 'Ragil',
            'email' => 'ragil@admin',
            'password' => 'password123',
        ]);

        $penugas = [
            [
            'nama' => 'Aden',
            'email' => 'aden@manager',
            'password' => 'password123',
            'jabatan' => 'Manager'
            ],
            [
            'nama' => 'Agil',
            'email' => 'agil@ceo',
            'password' => 'password123',
            'jabatan' => 'Ceo'
            ]
        ];
        
        foreach ($penugas as $pngs){
            penugas::create($pngs);
        }


        pelaksana::create([
            'nama' => 'Rendra',
            'email' => 'rendra@karyawan',
            'password' => 'password123',
        ]);
    }
}
