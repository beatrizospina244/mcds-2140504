<?php

use Illuminate\Database\Seeder;
use App\Game;

class GameSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table ('games') ->insert([
            'name' => 'Halo Infinite',
            'description' => 'Juego FPS para nueva generación',
            'user_id'     => 1,
            'category_id' =>1,
            'slider'      => 1,
            'price'       => 60,
            'created_at'  => now(),
        ]);  
        $game =new Game;
        $game->name  = 'animal crossing NH';
        $game->description = 'juego de nintendo swtich';
        $game->user_id = 1;
        $game->category_id=1;
        $game->price =50;
        $game->save();
        }
}
