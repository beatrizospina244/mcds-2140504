<?php

use Illuminate\Database\Seeder;
use App\Category;
class CategorySeeder extends Seeder

{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories') ->insert([
            'name' => 'Xbox Serie X',
            'description' => 'Nueva cosola de Microsoft para la siguiente generación',
            'created_at'=> now()
        ]);
        DB::table('categories') ->insert([
            'name' => 'Nintendo Switch',
            'description' => 'Consola Híbrida de Nintendo',
            'created_at'=> now()
        ]);
            $cat = new Category;
            $cat->name='Play Station';
            $cat->description='Consola nueva generación';
            $cat->save();
    }
}
