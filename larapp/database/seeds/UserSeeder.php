<?php

use Illuminate\Database\Seeder;
use App\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table ('users') ->insert([
         'fullname' => 'Beatriz Ospina',
         'email' => 'blospina58@misena.edu.co',
         'phone'=> '3146789141',
         'birthdate'=> '1982-08-20',
         'gender'=> 'Femen',
         'address'=> 'Calle 13 15-34',
         'password' => bcrypt('admin'),
         'role' => 'Admin',
         'created_at'=> now(),
         ]);

         $usr = new User;
         $usr->fullname ='Lucia';
         $usr->email = 'mirringa22@gmail.com';
         $usr->phone = '3117615911';
         $usr->birthdate = '1985-03-10';
         $usr->gender = 'Femen';
         $usr->address = 'pensilvania';
         $usr->password =bcrypt('customer');
         $usr->save();
     
        //Factory
        factory(User::class,100)->create();
        
         
    }
}
