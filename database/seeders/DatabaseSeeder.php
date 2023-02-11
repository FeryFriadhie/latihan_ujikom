<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Paket;
use App\Models\Status;
use App\Models\TipeBayar;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Role;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        // Role::create(['name' => 'administrator']);
        // Role::create(['name' => 'pemilik']);
        // Role::create(['name' => 'karyawan']);
        // Role::create(['name' => 'konsumen']);
        // User::factory(10)->create();

        // \App\Models\User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        // PAKET
        Paket::create([
            'nama' => 'Paket Kilat Semalam',
            'jenis' => 'Kilat Express',
            'jumlah_hari' => 1,
            'harga' => 5000,
            'status' => 'KG'
        ]);
        Paket::create([
            'nama' => 'Paket Kilat Setahun',
            'jenis' => 'Silambat Express',
            'jumlah_hari' => 360,
            'harga' => 45000,
            'satuan' => 'KG'
        ]);

        // TIPE BAYAR
        TipeBayar::create([
            'nama' => 'Transfer Bank'
        ]);
        TipeBayar::create([
            'nama' => 'Transfer E-Wallet'
        ]);
        TipeBayar::create([
            'nama' => 'CASH'
        ]);

        // STATUS
        Status::CREATE([
            'nama' => 'BARU'
        ]);
        Status::CREATE([
            'nama' => 'DIPROSES'
        ]);
        Status::CREATE([
            'nama' => 'SELESAI'
        ]);
        Status::CREATE([
            'nama' => 'DIAMBIL'
        ]);
        Status::CREATE([
            'nama' => 'BATAL'
        ]);
    }
}
