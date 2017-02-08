<?php

use Illuminate\Database\Seeder;

class CategoryTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('categories')->delete();

        $categories = [
            'Брошки и значки' => 'broshi',
            'Мужской альбом' => 'muzhskoy',
            'Кружки' => 'kruzhki',
            'Канцелярия' => 'kancelyariya',
            'Термосы' => 'termosi',
            'Кухня' => 'kuhnya',
            'Star Wars' => 'star_wars',
            'Кошельки' => 'koshelki',
            'Утепляшки' => 'uteplyashki',
            'Новый год' => 'noviy_god',
            'Технические вещи' => 'technicheskiy_veshi',
            'Супергеройское' => 'supergeroyskiye',
            'Чайные штуки' => 'chaynie_shtuki',
            'Поттериана' => 'potteriana',
            'Чехлы' => 'chehli',
            'Украшения' => 'ukrasheniya',
            'Часы' => 'chasi',
            'Уцененные товары' => 'ucenenniy_tovar',
            'Сонное царство' => 'sonnoe_carstvo',
            'Очки' => 'ochki',
        ];

        foreach ($categories as $name => $slug) {
            DB::table('categories')->insert([
                'name' => $name,
                'parent_id' => '0',
                'slug' => $slug,
            ]);
        }

        /*DB::table('categories')->insert([
            'name' => 'Очки',
            'parent_id' => '0',
            'slug' => 'ochki'
        ]);

        DB::table('categories')->insert([
            'name' => 'Солнцезащитные',
            'parent_id' => '1',
            'slug' => 'solncezashitnie'
        ]);

        DB::table('categories')->insert([
            'name' => 'Имиджевые',
            'parent_id' => '1',
            'slug' => 'imidzhevie'
        ]);

        DB::table('categories')->insert([
            'name' => 'Распродажа',
            'parent_id' => '0',
            'slug' => 'rasprodazha'
        ]);

        DB::table('categories')->insert([
            'name' => 'Сонное царство',
            'parent_id' => '0',
            'slug' => 'sonnoe-carstvo'
        ]);

        DB::table('categories')->insert([
            'name' => 'Часы',
            'parent_id' => '0',
            'slug' => 'chasi'
        ]);

        DB::table('categories')->insert([
            'name' => 'Красота',
            'parent_id' => '0',
            'slug' => 'krasota'
        ]);

        DB::table('categories')->insert([
            'name' => 'Подвески',
            'parent_id' => '7',
            'slug' => 'podveski'
        ]);

        DB::table('categories')->insert([
            'name' => 'Кольца',
            'parent_id' => '7',
            'slug' => 'kolca'
        ]);

        DB::table('categories')->insert([
            'name' => 'Браслеты',
            'parent_id' => '7',
            'slug' => 'brasleti'
        ]);

        DB::table('categories')->insert([
            'name' => 'Заколки',
            'parent_id' => '7',
            'slug' => 'zakolki'
        ]);

        DB::table('categories')->insert([
            'name' => 'Тату',
            'parent_id' => '7',
            'slug' => 'tatu'
        ]);

        DB::table('categories')->insert([
            'name' => 'Поттериана',
            'parent_id' => '0',
            'slug' => 'potteriana'
        ]);

        DB::table('categories')->insert([
            'name' => 'Новый Год',
            'parent_id' => '0',
            'slug' => 'noviy-god'
        ]);

        //15
        DB::table('categories')->insert([
            'name' => 'Чехлы',
            'parent_id' => '0',
            'slug' => 'chehli'
        ]);

        DB::table('categories')->insert([
            'name' => 'Iphone',
            'parent_id' => '15',
            'slug' => 'iphone'
        ]);


        DB::table('categories')->insert([
            'name' => 'Samsung',
            'parent_id' => '15',
            'slug' => 'samsung'
        ]);

        //17
        DB::table('categories')->insert([
            'name' => 'Утепляшки',
            'parent_id' => '0',
            'slug' => 'uteplyashki'
        ]);

        DB::table('categories')->insert([
            'name' => 'Носки',
            'parent_id' => '18',
            'slug' => 'noski'
        ]);

        DB::table('categories')->insert([
            'name' => 'Пижамы',
            'parent_id' => '18',
            'slug' => 'pizhami'
        ]);

        DB::table('categories')->insert([
            'name' => 'Шарфы',
            'parent_id' => '18',
            'slug' => 'sharfi'
        ]);

        DB::table('categories')->insert([
            'name' => 'Шапки',
            'parent_id' => '18',
            'slug' => 'shapki'
        ]);

        DB::table('categories')->insert([
            'name' => 'Декоративные штучки',
            'parent_id' => '0',
            'slug' => 'dekorativnie-shtuchki'
        ]);

        //22
        DB::table('categories')->insert([
            'name' => 'Сумочки',
            'parent_id' => '0',
            'slug' => 'sumochki'
        ]);

        DB::table('categories')->insert([
            'name' => 'Кошельки',
            'parent_id' => '24',
            'slug' => 'koshelki'
        ]);

        DB::table('categories')->insert([
            'name' => 'Сумочки',
            'parent_id' => '24',
            'slug' => 'sumochki'
        ]);

        DB::table('categories')->insert([
            'name' => 'Технические штучки',
            'parent_id' => '0',
            'slug' => 'technicheskie-shtuchki'
        ]);

        DB::table('categories')->insert([
            'name' => 'Звездные войны',
            'parent_id' => '0',
            'slug' => 'zvezdnie-voini'
        ]);

        DB::table('categories')->insert([
            'name' => 'Со-Хранение важностей',
            'parent_id' => '0',
            'slug' => 'so-hraneni-vazhnostey'
        ]);

        //28
        DB::table('categories')->insert([
            'name' => 'Кухонное закулисье',
            'parent_id' => '0',
            'slug' => 'kuhonnoe-zakulisye'
        ]);

        DB::table('categories')->insert([
            'name' => 'Половники',
            'parent_id' => '30',
            'slug' => 'polovniki'
        ]);

        DB::table('categories')->insert([
            'name' => 'Формочки для льда',
            'parent_id' => '30',
            'slug' => 'formochki-dlya-lda'
        ]);

        DB::table('categories')->insert([
            'name' => 'Формочки для омлетов',
            'parent_id' => '30',
            'slug' => 'formochki-dlya-omletov'
        ]);

        DB::table('categories')->insert([
            'name' => 'Термосы и бутылочки',
            'parent_id' => '0',
            'slug' => 'termosi-i-butilochki'
        ]);

        DB::table('categories')->insert([
            'name' => 'Ланч - боксы',
            'parent_id' => '0',
            'slug' => 'lanch-boksi'
        ]);

        //34
        DB::table('categories')->insert([
            'name' => 'Канцелярия',
            'parent_id' => '0',
            'slug' => 'kancelyariya'
        ]);

        DB::table('categories')->insert([
            'name' => 'Дела чайные',
            'parent_id' => '0',
            'slug' => 'dela-chaynie'
        ]);

        DB::table('categories')->insert([
            'name' => 'Кружки',
            'parent_id' => '37',
            'slug' => 'kruzhki'
        ]);

        DB::table('categories')->insert([
            'name' => 'Заварнички',
            'parent_id' => '37',
            'slug' => 'zavarnichki'
        ]);*/
    }
}
