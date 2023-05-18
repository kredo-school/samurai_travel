<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_06_Yamagata_Seeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $data = collect([
            [
                'code' => '062014',
                'prefecture_id' => 6,
                'name_en' => 'Yamagata-shi',
                'name_jp' => '山形市',
            ],
            [
                'code' => '062022',
                'prefecture_id' => 6,
                'name_en' => 'Yonezawa-shi',
                'name_jp' => '米沢市',
            ],
            [
                'code' => '062031',
                'prefecture_id' => 6,
                'name_en' => 'Tsuruoka-shi',
                'name_jp' => '鶴岡市',
            ],
            [
                'code' => '062049',
                'prefecture_id' => 6,
                'name_en' => 'Sakata-shi',
                'name_jp' => '酒田市',
            ],
            [
                'code' => '062057',
                'prefecture_id' => 6,
                'name_en' => 'Shinjo-shi',
                'name_jp' => '新庄市',
            ],
            [
                'code' => '062065',
                'prefecture_id' => 6,
                'name_en' => 'Saga-e-shi',
                'name_jp' => '寒河江市',
            ],
            [
                'code' => '062073',
                'prefecture_id' => 6,
                'name_en' => 'Kaminoyama-shi',
                'name_jp' => '上山市',
            ],
            [
                'code' => '062081',
                'prefecture_id' => 6,
                'name_en' => 'Murayama-shi',
                'name_jp' => '村山市',
            ],
            [
                'code' => '062090',
                'prefecture_id' => 6,
                'name_en' => 'Nagai-shi',
                'name_jp' => '長井市',
            ],
            [
                'code' => '062103',
                'prefecture_id' => 6,
                'name_en' => 'Tendo-shi',
                'name_jp' => '天童市',
            ],
            [
                'code' => '062111',
                'prefecture_id' => 6,
                'name_en' => 'Higashine-shi',
                'name_jp' => '東根市',
            ],
            [
                'code' => '062120',
                'prefecture_id' => 6,
                'name_en' => 'Obanazawa-shi',
                'name_jp' => '尾花沢市',
            ],
            [
                'code' => '062138',
                'prefecture_id' => 6,
                'name_en' => 'Nanyo-shi',
                'name_jp' => '南陽市',
            ],
            [
                'code' => '063011',
                'prefecture_id' => 6,
                'name_en' => 'Yamanobe-machi',
                'name_jp' => '山辺町',
            ],
            [
                'code' => '063029',
                'prefecture_id' => 6,
                'name_en' => 'Nakayama-machi',
                'name_jp' => '中山町',
            ],
            [
                'code' => '063215',
                'prefecture_id' => 6,
                'name_en' => 'Kahoku-cho',
                'name_jp' => '河北町',
            ],
            [
                'code' => '063223',
                'prefecture_id' => 6,
                'name_en' => 'Nishikawa-machi',
                'name_jp' => '西川町',
            ],
            [
                'code' => '063231',
                'prefecture_id' => 6,
                'name_en' => 'Asahi-machi',
                'name_jp' => '朝日町',
            ],
            [
                'code' => '063240',
                'prefecture_id' => 6,
                'name_en' => 'Ooe-machi',
                'name_jp' => '大江町',
            ],
            [
                'code' => '063410',
                'prefecture_id' => 6,
                'name_en' => 'Oi-machi Tadami',
                'name_jp' => '大石田町',
            ],
            [
                'code' => '063614',
                'prefecture_id' => 6,
                'name_en' => 'Kaneyama-machi',
                'name_jp' => '金山町',
            ],
            [
                'code' => '063622',
                'prefecture_id' => 6,
                'name_en' => 'Mogami-machi',
                'name_jp' => '最上町',
            ],
            [
                'code' => '063631',
                'prefecture_id' => 6,
                'name_en' => 'Funagata-machi',
                'name_jp' => '舟形町',
            ],
            [
                'code' => '063649',
                'prefecture_id' => 6,
                'name_en' => 'Mamurogawa-machi',
                'name_jp' => '真室川町',
            ],
            [
                'code' => '063657',
                'prefecture_id' => 6,
                'name_en' => 'Okura-mura',
                'name_jp' => '大蔵村',
            ],
            [
                'code' => '063665',
                'prefecture_id' => 6,
                'name_en' => 'Sakegawa-mura',
                'name_jp' => '鮭川村',
            ],
            [
                'code' => '063673',
                'prefecture_id' => 6,
                'name_en' => 'Tsuruoka-machi',
                'name_jp' => '戸沢村',
            ],
            [
                'code' => '063819',
                'prefecture_id' => 6,
                'name_en' => 'Takahata-machi',
                'name_jp' => '高畠町',
            ],
            [
                'code' => '063827',
                'prefecture_id' => 6,
                'name_en' => 'Kawanishi-machi',
                'name_jp' => '川西町',
            ],
            [
                'code' => '064017',
                'prefecture_id' => 6,
                'name_en' => 'Oguni-machi',
                'name_jp' => '小国町',
            ],
            [
                'code' => '064025',
                'prefecture_id' => 6,
                'name_en' => 'Shirataka-machi',
                'name_jp' => '白鷹町',
            ],
            [
                'code' => '064033',
                'prefecture_id' => 6,
                'name_en' => 'Iide-machi',
                'name_jp' => '飯豊町',
            ],
            [
                'code' => '064262',
                'prefecture_id' => 6,
                'name_en' => 'Mikawa-machi',
                'name_jp' => '三川町',
            ],
            [
                'code' => '064289',
                'prefecture_id' => 6,
                'name_en' => 'Shonai-machi',
                'name_jp' => '庄内町',
            ],
            [
                'code' => '064611',
                'prefecture_id' => 6,
                'name_en' => 'Yuzawa-machi',
                'name_jp' => '遊佐町',
            ],
        ]);
        
        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
