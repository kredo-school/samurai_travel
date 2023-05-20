<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_24_Mie_Seeder extends Seeder
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
                'code' => '242012',
                'prefecture_id' => 24,
                'name_en' => 'Tsushi',
                'name_jp' => '津市',
            ],
            [
                'code' => '242021',
                'prefecture_id' => 24,
                'name_en' => 'Yokaichi-shi',
                'name_jp' => '四日市市',
            ],
            [
                'code' => '242039',
                'prefecture_id' => 24,
                'name_en' => 'Ise-shi',
                'name_jp' => '伊勢市',
            ],
            [
                'code' => '242047',
                'prefecture_id' => 24,
                'name_en' => 'Matsusaka-shi',
                'name_jp' => '松阪市',
            ],
            [
                'code' => '242055',
                'prefecture_id' => 24,
                'name_en' => 'Kuwana-shi',
                'name_jp' => '桑名市',
            ],
            [
                'code' => '242071',
                'prefecture_id' => 24,
                'name_en' => 'Suzuka-shi',
                'name_jp' => '鈴鹿市',
            ],
            [
                'code' => '242080',
                'prefecture_id' => 24,
                'name_en' => 'Nabari-shi',
                'name_jp' => '名張市',
            ],
            [
                'code' => '242098',
                'prefecture_id' => 24,
                'name_en' => 'Owase-shi',
                'name_jp' => '尾鷲市',
            ],
            [
                'code' => '242101',
                'prefecture_id' => 24,
                'name_en' => 'Kameyama-shi',
                'name_jp' => '亀山市',
            ],
            [
                'code' => '242110',
                'prefecture_id' => 24,
                'name_en' => 'Toba-shi',
                'name_jp' => '鳥羽市',
            ],
            [
                'code' => '242128',
                'prefecture_id' => 24,
                'name_en' => 'Kumano-shi',
                'name_jp' => '熊野市',
            ],
            [
                'code' => '242144',
                'prefecture_id' => 24,
                'name_en' => 'Inabe-shi',
                'name_jp' => 'いなべ市',
            ],
            [
                'code' => '242152',
                'prefecture_id' => 24,
                'name_en' => 'Shima-shi',
                'name_jp' => '志摩市',
            ],
            [
                'code' => '242161',
                'prefecture_id' => 24,
                'name_en' => 'Iga-shi',
                'name_jp' => '伊賀市',
            ],
            [
                'code' => '243035',
                'prefecture_id' => 24,
                'name_en' => 'Kisosaki-cho',
                'name_jp' => '木曽岬町',
            ],
            [
                'code' => '243248',
                'prefecture_id' => 24,
                'name_en' => 'Toyono-cho',
                'name_jp' => '東員町',
            ],
            [
                'code' => '243418',
                'prefecture_id' => 24,
                'name_en' => 'Komonno-cho',
                'name_jp' => '菰野町',
            ],
            [
                'code' => '243434',
                'prefecture_id' => 24,
                'name_en' => 'Asahi-cho',
                'name_jp' => '朝日町',
            ],
            [
                'code' => '243442',
                'prefecture_id' => 24,
                'name_en' => 'Kawagoe-cho',
                'name_jp' => '川越町',
            ],
            [
                'code' => '244414',
                'prefecture_id' => 24,
                'name_en' => 'Taki-cho',
                'name_jp' => '多気町',
            ],
            [
                'code' => '244422',
                'prefecture_id' => 24,
                'name_en' => 'Meiwa-cho',
                'name_jp' => '明和町',
            ],
            [
                'code' => '244431',
                'prefecture_id' => 24,
                'name_en' => 'Odaicho',
                'name_jp' => '大台町',
            ],
            [
                'code' => '244619',
                'prefecture_id' => 24,
                'name_en' => 'Tamaki-cho',
                'name_jp' => '玉城町',
            ],
            [
                'code' => '244708',
                'prefecture_id' => 24,
                'name_en' => 'Watarai-cho',
                'name_jp' => '度会町',
            ],
            [
                'code' => '244716',
                'prefecture_id' => 24,
                'name_en' => 'Taiki-cho',
                'name_jp' => '大紀町',
            ],
            [
                'code' => '244724',
                'prefecture_id' => 24,
                'name_en' => 'Minamiise-cho',
                'name_jp' => '南伊勢町',
            ],
            [
                'code' => '245437',
                'prefecture_id' => 24,
                'name_en' => 'Kihoku-cho',
                'name_jp' => '紀北町',
            ],
            [
                'code' => '245615',
                'prefecture_id' => 24,
                'name_en' => 'Mihama-cho',
                'name_jp' => '御浜町',
            ],
            [
                'code' => '245623',
                'prefecture_id' => 24,
                'name_en' => 'Kihou-cho',
                'name_jp' => '紀宝町',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
