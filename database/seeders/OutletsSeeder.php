<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
use App\Models\outlets;

class OutletsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        outlets::create([
            'code' => Str::random(5),
            'name' => 'Naufal Fatihul Rizky',
            'status' => 'selesai',
            'address' => 'Citereup RockGYM',
            'phone' => '08133431123',
        ]);

        outlets::create([
            'code' => Str::random(5),
            'name' => 'Abdul adu adudul',
            'status' => 'selesai',
            'address' => 'cibadak',
            'phone' => '08324529123',
        ]);

        outlets::create([
            'code' => Str::random(5),
            'name' => 'Ambarita sihambotang',
            'status' => 'berlangsung',
            'address' => 'kyoto',
            'phone' => '09875824312',
        ]);

        outlets::create([
            'code' => Str::random(5),
            'name' => 'sihontnang',
            'status' => 'berlangsung',
            'address' => 'danau toba',
            'phone' => '08987654321',
        ]);

        outlets::create([
            'code' => Str::random(5),
            'name' => 'Monkey D Luffy',
            'status' => 'selesai',
            'address' => 'Laugh Tale',
            'phone' => '0812345678',
        ]);
    }
}