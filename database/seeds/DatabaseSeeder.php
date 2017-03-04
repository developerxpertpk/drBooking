<?php

use Illuminate\Database\Seeder;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\Admin::create([


            'name' => 'Admin',
            'email' => 'admin@admin.com',
            'username' => 'admin12',
            'password' =>bcrypt('admin12#'),
        ]);

        Eloquent::unguard();

        //disable foreign key check for this connection before running seeders
        DB::statement( 'SET FOREIGN_KEY_CHECKS=0;' );

        $this->call ( RoleTableSeeder::Class );
        $this->call ( UserTableSeeder::Class );

        // supposed to only apply to a single connection and reset it's self
        // undo what is done for clarity
        DB::statement( 'SET FOREIGN_KEY_CHECKS=1;' );

        Eloquent::reguard();


//       $this->call(AdminTableSeeder::class);

    }
}
