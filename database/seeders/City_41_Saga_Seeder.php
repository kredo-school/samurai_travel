<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_41_Saga_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $table_name = 'cities';

        $data = [
            [
                'code' => '412015',
                'prefecture_id' => 41,
                'name_en' => 'Sagashi',
                'name_jp' => '佐賀市',
            ],
            [
                'code' => '412023',
                'prefecture_id' => 41,
                'name_en' => 'Karatsumi',
                'name_jp' => '唐津市',
            ],
            [
                'code' => '412031',
                'prefecture_id' => 41,
                'name_en' => 'Tosshi',
                'name_jp' => '鳥栖市',
            ],
            [
                'code' => '412040',
                'prefecture_id' => 41,
                'name_en' => 'Takushi',
                'name_jp' => '多久市',
            ],
            [
                'code' => '412058',
                'prefecture_id' => 41,
                'name_en' => 'Imarishi',
                'name_jp' => '伊万里市',
            ],
            [
                'code' => '412066',
                'prefecture_id' => 41,
                'name_en' => 'Takeoshi',
                'name_jp' => '武雄市',
            ],
            [
                'code' => '412074',
                'prefecture_id' => 41,
                'name_en' => 'Kashimashi',
                'name_jp' => '鹿島市',
            ],
            [
                'code' => '412082',
                'prefecture_id' => 41,
                'name_en' => 'Ogishi',
                'name_jp' => '小城市',
            ],
            [
                'code' => '412091',
                'prefecture_id' => 41,
                'name_en' => 'Ureshinoshi',
                'name_jp' => '嬉野市',
            ],
            [
                'code' => '412104',
                'prefecture_id' => 41,
                'name_en' => 'Kanzakishi',
                'name_jp' => '神埼市',
            ],
            [
                'code' => '413275',
                'prefecture_id' => 41,
                'name_en' => 'Yoshinogaricho',
                'name_jp' => '吉野ヶ里町',
            ],
            [
                'code' => '413411',
                'prefecture_id' => 41,
                'name_en' => 'Kiyamacho',
                'name_jp' => '基山町',
            ],
            [
                'code' => '413453',
                'prefecture_id' => 41,
                'name_en' => 'Kamiminecho',
                'name_jp' => '上峰町',
            ],
            [
                'code' => '413461',
                'prefecture_id' => 41,
                'name_en' => 'Miyakicho',
                'name_jp' => 'みやき町',
            ],
            [
                'code' => '413879',
                'prefecture_id' => 41,
                'name_en' => 'Genkaicho',
                'name_jp' => '玄海町',
            ],
            [
                'code' => '414018',
                'prefecture_id' => 41,
                'name_en' => 'Aritacho',
                'name_jp' => '有田町',
            ],
            [
                'code' => '414239',
                'prefecture_id' => 41,
                'name_en' => 'Oomachicho',
                'name_jp' => '大町町',
            ],
            [
                'code' => '414247',
                'prefecture_id' => 41,
                'name_en' => 'Koukokumachi',
                'name_jp' => '江北町',
            ],
            [
                'code' => '414255',
                'prefecture_id' => 41,
                'name_en' => 'Shiroishicho',
                'name_jp' => '白石町',
            ],
            [
                'code' => '414417',
                'prefecture_id' => 41,
                'name_en' => 'Taracho',
                'name_jp' => '太良町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
