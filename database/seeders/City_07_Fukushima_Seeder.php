<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_07_Fukushima_Seeder extends Seeder
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
                'code' => '072010',
                'prefecture_id' => 7,
                'name_en' => 'Fukushima-shi',
                'name_jp' => '福島市',
            ],
            [
                'code' => '072028',
                'prefecture_id' => 7,
                'name_en' => 'Aizuwakamatsu-shi',
                'name_jp' => '会津若松市',
            ],
            [
                'code' => '072036',
                'prefecture_id' => 7,
                'name_en' => 'Koriyama-shi',
                'name_jp' => '郡山市',
            ],
            [
                'code' => '072044',
                'prefecture_id' => 7,
                'name_en' => 'Iwaki-shi',
                'name_jp' => 'いわき市',
            ],
            [
                'code' => '072052',
                'prefecture_id' => 7,
                'name_en' => 'Shirakawa-shi',
                'name_jp' => '白河市',
            ],
            [
                'code' => '072079',
                'prefecture_id' => 7,
                'name_en' => 'Sukagawa-shi',
                'name_jp' => '須賀川市',
            ],
            [
                'code' => '072087',
                'prefecture_id' => 7,
                'name_en' => 'Kitakata-shi',
                'name_jp' => '喜多方市',
            ],
            [
                'code' => '072095',
                'prefecture_id' => 7,
                'name_en' => 'Souma-shi',
                'name_jp' => '相馬市',
            ],
            [
                'code' => '072109',
                'prefecture_id' => 7,
                'name_en' => 'Nihonmatsu-shi',
                'name_jp' => '二本松市',
            ],
            [
                'code' => '072117',
                'prefecture_id' => 7,
                'name_en' => 'Tamura-shi',
                'name_jp' => '田村市',
            ],
            [
                'code' => '072125',
                'prefecture_id' => 7,
                'name_en' => 'Minamisoma-shi',
                'name_jp' => '南相馬市',
            ],
            [
                'code' => '072133',
                'prefecture_id' => 7,
                'name_en' => 'Date-shi',
                'name_jp' => '伊達市',
            ],
            [
                'code' => '072141',
                'prefecture_id' => 7,
                'name_en' => 'Motomiya-shi',
                'name_jp' => '本宮市',
            ],
            [
                'code' => '073016',
                'prefecture_id' => 7,
                'name_en' => 'Koori-machi',
                'name_jp' => '桑折町',
            ],
            [
                'code' => '073032',
                'prefecture_id' => 7,
                'name_en' => 'Kunimi-machi',
                'name_jp' => '国見町',
            ],
            [
                'code' => '073083',
                'prefecture_id' => 7,
                'name_en' => 'Kawamata-machi',
                'name_jp' => '川俣町',
            ],
            [
                'code' => '073229',
                'prefecture_id' => 7,
                'name_en' => 'Ootama-mura',
                'name_jp' => '大玉村',
            ],
            [
                'code' => '073423',
                'prefecture_id' => 7,
                'name_en' => 'Kagamiishi-machi',
                'name_jp' => '鏡石町',
            ],
            [
                'code' => '073440',
                'prefecture_id' => 7,
                'name_en' => 'Ten-ei-mura',
                'name_jp' => '天栄村',
            ],
            [
                'code' => '073628',
                'prefecture_id' => 7,
                'name_en' => 'Shimogou-machi',
                'name_jp' => '下郷町',
            ],
            [
                'code' => '073644',
                'prefecture_id' => 7,
                'name_en' => 'Hinoemata-mura',
                'name_jp' => '檜枝岐村',
            ],
            [
                'code' => '073679',
                'prefecture_id' => 7,
                'name_en' => 'Tatami-machi',
                'name_jp' => '只見町',
            ],
            [
                'code' => '073687',
                'prefecture_id' => 7,
                'name_en' => 'Minamiaizu-machi',
                'name_jp' => '南会津町',
            ],
            [
                'code' => '074021',
                'prefecture_id' => 7,
                'name_en' => 'Kitashiobara-mura',
                'name_jp' => '北塩原村',
            ],
            [
                'code' => '074055',
                'prefecture_id' => 7,
                'name_en' => 'Nishiaizu-machi',
                'name_jp' => '西会津町',
            ],
            [
                'code' => '074071',
                'prefecture_id' => 7,
                'name_en' => 'Bandai-machi',
                'name_jp' => '磐梯町',
            ],
            [
                'code' => '074080',
                'prefecture_id' => 7,
                'name_en' => 'Inawashiro-machi',
                'name_jp' => '猪苗代町',
            ],
            [
                'code' => '074217',
                'prefecture_id' => 7,
                'name_en' => 'Aizubange-machi',
                'name_jp' => '会津坂下町',
            ],
            [
                'code' => '074225',
                'prefecture_id' => 7,
                'name_en' => 'Yugawa-mura',
                'name_jp' => '湯川村',
            ],
            [
                'code' => '074233',
                'prefecture_id' => 7,
                'name_en' => 'Yanaizu-machi',
                'name_jp' => '柳津町',
            ],
            [
                'code' => '074446',
                'prefecture_id' => 7,
                'name_en' => 'Mishima-machi',
                'name_jp' => '三島町',
            ],
            [
                'code' => '074454',
                'prefecture_id' => 7,
                'name_en' => 'Kaneyama-machi',
                'name_jp' => '金山町',
            ],
            [
                'code' => '074462',
                'prefecture_id' => 7,
                'name_en' => 'Showa-mura',
                'name_jp' => '昭和村',
            ],
            [
                'code' => '074471',
                'prefecture_id' => 7,
                'name_en' => 'Aizumisato-machi',
                'name_jp' => '会津美里町',
            ],
            [
                'code' => '074616',
                'prefecture_id' => 7,
                'name_en' => 'Nishigou-mura',
                'name_jp' => '西郷村',
            ],
            [
                'code' => '074641',
                'prefecture_id' => 7,
                'name_en' => 'Izumizaki-mura',
                'name_jp' => '泉崎村',
            ],
            [
                'code' => '074659',
                'prefecture_id' => 7,
                'name_en' => 'Nakajima-mura',
                'name_jp' => '中島村',
            ],
            [
                'code' => '074667',
                'prefecture_id' => 7,
                'name_en' => 'Yabuki-machi',
                'name_jp' => '矢吹町',
            ],
            [
                'code' => '074811',
                'prefecture_id' => 7,
                'name_en' => 'Tanagura-machi',
                'name_jp' => '棚倉町',
            ],
            [
                'code' => '074829',
                'prefecture_id' => 7,
                'name_en' => 'Yamatsuri-machi',
                'name_jp' => '矢祭町',
            ],
            [
                'code' => '074837',
                'prefecture_id' => 7,
                'name_en' => 'Hananomai-machi',
                'name_jp' => '塙町',
            ],
            [
                'code' => '074845',
                'prefecture_id' => 7,
                'name_en' => 'Samegawa-mura',
                'name_jp' => '鮫川村',
            ],
            [
                'code' => '075019',
                'prefecture_id' => 7,
                'name_en' => 'Ishikawa-machi',
                'name_jp' => '石川町',
            ],
            [
                'code' => '075027',
                'prefecture_id' => 7,
                'name_en' => 'Tamakawa-mura',
                'name_jp' => '玉川村',
            ],
            [
                'code' => '075035',
                'prefecture_id' => 7,
                'name_en' => 'Hirata-mura',
                'name_jp' => '平田村',
            ],
            [
                'code' => '075043',
                'prefecture_id' => 7,
                'name_en' => 'Asakawa-machi',
                'name_jp' => '浅川町',
            ],
            [
                'code' => '075051',
                'prefecture_id' => 7,
                'name_en' => 'Furudono-machi',
                'name_jp' => '古殿町',
            ],
            [
                'code' => '075213',
                'prefecture_id' => 7,
                'name_en' => 'Miharu-machi',
                'name_jp' => '三春町',
            ],
            [
                'code' => '075221',
                'prefecture_id' => 7,
                'name_en' => 'Ono-machi',
                'name_jp' => '小野町',
            ],
            [
                'code' => '075418',
                'prefecture_id' => 7,
                'name_en' => 'Hirono-machi',
                'name_jp' => '広野町',
            ],
            [
                'code' => '075426',
                'prefecture_id' => 7,
                'name_en' => 'Narahama-machi',
                'name_jp' => '楢葉町',
            ],
            [
                'code' => '075434',
                'prefecture_id' => 7,
                'name_en' => 'Tomioka-machi',
                'name_jp' => '富岡町',
            ],
            [
                'code' => '075442',
                'prefecture_id' => 7,
                'name_en' => 'Kawauchi-mura',
                'name_jp' => '川内村',
            ],
            [
                'code' => '075451',
                'prefecture_id' => 7,
                'name_en' => 'Ookuma-machi',
                'name_jp' => '大熊町',
            ],
            [
                'code' => '075469',
                'prefecture_id' => 7,
                'name_en' => 'Futaba-machi',
                'name_jp' => '双葉町',
            ],
            [
                'code' => '075477',
                'prefecture_id' => 7,
                'name_en' => 'Namie-machi',
                'name_jp' => '浪江町',
            ],
            [
                'code' => '075485',
                'prefecture_id' => 7,
                'name_en' => 'Katsurao-mura',
                'name_jp' => '葛尾村',
            ],
            [
                'code' => '075612',
                'prefecture_id' => 7,
                'name_en' => 'Shinchi-machi',
                'name_jp' => '新地町',
            ],
            [
                'code' => '075647',
                'prefecture_id' => 7,
                'name_en' => 'Iitate-mura',
                'name_jp' => '飯舘村',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
