<?php

use Illuminate\Database\Seeder;
//use Illuminate\Support\Facades\Hash;
//use Illuminate\Support\Facades\DB;

use App\User;
use App\Role;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {

        $role_patient = Role::where('name','Patient')->first();
        $role_doctor = Role::where('name','Doctor')->first();
        $role_medical_center = Role::where('name','MedicalCenter')->first();

        $patient = new User();

        $patient->username = 'prakhar12';
        $patient->name = 'Prakhar';
        $patient->email = 'prakhar@prakhar.com';
        $patient->password = bcrypt('prakhar12#');
        $patient->save();
        $patient->roles()->attach($role_patient);

        $docror = new User();

        $docror->username = 'komal12';
        $docror->name = 'Komal';
        $docror->email = 'komal@komal.com';
        $docror->password = bcrypt('komal12#');
        $docror->save();
        $docror->roles()->attach($role_doctor);
        $mesical_center = new User();

        $mesical_center->username = 'pankaj12';
        $mesical_center->name = 'Pankaj';
        $mesical_center->email = 'pankaj@pankaj.com';
        $mesical_center->password = bcrypt('pankaj12#');
        $mesical_center->save();
        $mesical_center->roles()->attach($role_medical_center);
    }
}
