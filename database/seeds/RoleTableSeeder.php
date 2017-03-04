<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Role;

class RoleTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $role_patient = new Role();
        $role_patient->name = 'Patient';
        $role_patient->description = 'This Is Patient Role';
        $role_patient->save();

        $role_doctor = new Role();
        $role_doctor->name = 'Doctor';
        $role_doctor->description = 'This Is Doctor Role';
        $role_doctor->save();

        $role_medical_center = new Role();
        $role_medical_center->name = 'MedicalCenter';
        $role_medical_center->description = 'This Is Medical Center Role';
        $role_medical_center->save();
    }
}
