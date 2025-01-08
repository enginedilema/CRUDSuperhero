<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Category;
use App\Models\Lang;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //Crea un listado de nombres de superheroes de Marvel en ingles
        $categories = [
            ['name' => 'Spiderman'],
            ['name' => 'Ironman'],
            ['name' => 'Hulk'],
            ['name' => 'Thor'],
            ['name' => 'Captain America'],
            ['name' => 'Black Widow'],
            ['name' => 'Black Panther'],
            ['name' => 'Doctor Strange'],
            ['name' => 'Antman'],
            ['name' => 'Wolverine'],
            ['name' => 'Deadpool'],
            ['name' => 'Daredevil'],
            ['name' => 'Hawkeye'],
            ['name' => 'Scarlet Witch'],
            ['name' => 'Vision'],
            ['name' => 'Falcon'],
            ['name' => 'Winter Soldier'],
            ['name' => 'Star Lord'],
            ['name' => 'Gamora'],
            ['name' => 'Groot'],
            ['name' => 'Rocket'],
            ['name' => 'Drax'],
            ['name' => 'Mantis'],
            ['name' => 'Nebula'],
            ['name' => 'Thanos'],
            ['name' => 'Loki'],
            ['name' => 'Ultron'],
            ['name' => 'Red Skull'],
            ['name' => 'Green Goblin'],
            ['name' => 'Venom'],
            ['name' => 'Carnage'],
            ['name' => 'Mysterio'],
            ['name' => 'Vulture'],
            ['name' => 'Rhino'],
            ['name' => 'Sandman'],
            ['name' => 'Electro'],
            ['name' => 'Kraven'],
            ['name' => 'Chameleon'],
            ['name' => 'Scorpion'],
            ['name' => 'Shocker'],
        ];

        foreach ($categories as $category) {
            Category::create([
                'name' => $category['name'],
            ]);
        }

        //Crea tabla intermedia category_lang con todos los nombres en ingles
        $lang = Lang::where('code', 'en')->first();
        $categories = Category::all();
        foreach ($categories as $category) {
            $category->langs()->attach($lang, ['name' => $category->name ,'created_at' => now(), 'updated_at' => now()]);
        }
        

    }
}
