<?php

namespace Database\Seeders;

use App\Models\Employee;
use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class EmployeeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Create single dummy data
        // DB::table('employees')->insert([
        //     'nama' => 'Reihan Fatilla',
        //     'jenis_kelamin' => 'cowo',
        //     'no_telepon' => '08249185839'
        // ]);

        Employee::factory(10)->create();
    }
}
