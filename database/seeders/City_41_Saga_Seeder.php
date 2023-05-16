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
                'id' => 1569,
                'code' => '412015',
                'prefecture_id' => 41,
                'name_en' => 'Sagashi',
                'name_jp' => '佐賀市',
            ],
            [
                'id' => 1570,
                'code' => '412023',
                'prefecture_id' => 41,
                'name_en' => 'Karatsumi',
                'name_jp' => '唐津市',
            ],
            [
                'id' => 1571,
                'code' => '412031',
                'prefecture_id' => 41,
                'name_en' => 'Tosshi',
                'name_jp' => '鳥栖市',
            ],
            [
                'id' => 1572,
                'code' => '412040',
                'prefecture_id' => 41,
                'name_en' => 'Takushi',
                'name_jp' => '多久市',
            ],
            [
                'id' => 1573,
                'code' => '412058',
                'prefecture_id' => 41,
                'name_en' => 'Imarishi',
                'name_jp' => '伊万里市',
            ],
            [
                'id' => 1574,
                'code' => '412066',
                'prefecture_id' => 41,
                'name_en' => 'Takeoshi',
                'name_jp' => '武雄市',
            ],
            [
                'id' => 1575,
                'code' => '412074',
                'prefecture_id' => 41,
                'name_en' => 'Kashimashi',
                'name_jp' => '鹿島市',
            ],
            [
                'id' => 1576,
                'code' => '412082',
                'prefecture_id' => 41,
                'name_en' => 'Ogishi',
                'name_jp' => '小城市',
            ],
            [
                'id' => 1577,
                'code' => '412091',
                'prefecture_id' => 41,
                'name_en' => 'Ureshinoshi',
                'name_jp' => '嬉野市',
            ],
            [
                'id' => 1578,
                'code' => '412104',
                'prefecture_id' => 41,
                'name_en' => 'Kanzakishi',
                'name_jp' => '神埼市',
            ],
            [
                'id' => 1579,
                'code' => '413275',
                'prefecture_id' => 41,
                'name_en' => 'Yoshinogaricho',
                'name_jp' => '吉野ヶ里町',
            ],
            [
                'id' => 1580,
                'code' => '413411',
                'prefecture_id' => 41,
                'name_en' => 'Kiyamacho',
                'name_jp' => '基山町',
            ],
            [
                'id' => 1581,
                'code' => '413453',
                'prefecture_id' => 41,
                'name_en' => 'Kamiminecho',
                'name_jp' => '上峰町',
            ],
            [
                'id' => 1582,
                'code' => '413461',
                'prefecture_id' => 41,
                'name_en' => 'Miyakicho',
                'name_jp' => 'みやき町',
            ],
            [
                'id' => 1583,
                'code' => '413879',
                'prefecture_id' => 41,
                'name_en' => 'Genkaicho',
                'name_jp' => '玄海町',
            ],
            [
                'id' => 1584,
                'code' => '414018',
                'prefecture_id' => 41,
                'name_en' => 'Aritacho',
                'name_jp' => '有田町',
            ],
            [
                'id' => 1585,
                'code' => '414239',
                'prefecture_id' => 41,
                'name_en' => 'Oomachicho',
                'name_jp' => '大町町',
            ],
            [
                'id' => 1586,
                'code' => '414247',
                'prefecture_id' => 41,
                'name_en' => 'Koukokumachi',
                'name_jp' => '江北町',
            ],
            [
                'id' => 1587,
                'code' => '414255',
                'prefecture_id' => 41,
                'name_en' => 'Shiroishicho',
                'name_jp' => '白石町',
            ],
            [
                'id' => 1588,
                'code' => '414417',
                'prefecture_id' => 41,
                'name_en' => 'Taracho',
                'name_jp' => '太良町',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
