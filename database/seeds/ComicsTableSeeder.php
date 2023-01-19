<?php

use App\Models\Comic;
use Illuminate\Database\Seeder;

class ComicsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $array_comic = config('comics');

        foreach($array_comic as $item){
            $new_comic = new Comic();
            $new_comic->title = $item['title'];
            $new_comic->description = $item['description'];
            $new_comic->thumb = $item['thumb'];
            $new_comic->price = $item['price'];
            $new_comic->series = $item['series'];
            $new_comic->sale_date = $item['sale_date'];
            $new_comic->type = $item['type'];
            $new_comic->save();
        }
    }
}
