<?php

use Illuminate\Database\Seeder;
use App\Employee;
use Illuminate\Support\Facades\Hash;
class EmployeesTableDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Employee::create([
            'name' => 'admin',
            'email' => 'admin@admin.com',
            'password' => Hash::make('admin'),
            'is_admin'=>1,
        ]);
    }
}
