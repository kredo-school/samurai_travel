<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_14_Kanagawa_Seeder extends Seeder
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
                'id' => 704,
                'code' => '141003',
                'prefecture_id' => 14,
                'name_en' => 'Yokohamashi',
                'name_jp' => '横浜市',
            ],
            [
                'id' => 705,
                'code' => '141305',
                'prefecture_id' => 14,
                'name_en' => 'Kawasakishi',
                'name_jp' => '川崎市',
            ],
            [
                'id' => 706,
                'code' => '141500',
                'prefecture_id' => 14,
                'name_en' => 'Sagamiharashi',
                'name_jp' => '相模原市',
            ],
            [
                'id' => 707,
                'code' => '142018',
                'prefecture_id' => 14,
                'name_en' => 'Yokosukashi',
                'name_jp' => '横須賀市',
            ],
            [
                'id' => 708,
                'code' => '142034',
                'prefecture_id' => 14,
                'name_en' => 'Hiratsukashi',
                'name_jp' => '平塚市',
            ],
            [
                'id' => 709,
                'code' => '142042',
                'prefecture_id' => 14,
                'name_en' => 'Kamakurashi',
                'name_jp' => '鎌倉市',
            ],
            [
                'id' => 710,
                'code' => '142051',
                'prefecture_id' => 14,
                'name_en' => 'Fujisawashi',
                'name_jp' => '藤沢市',
            ],
            [
                'id' => 711,
                'code' => '142069',
                'prefecture_id' => 14,
                'name_en' => 'Odawarashi',
                'name_jp' => '小田原市',
            ],
            [
                'id' => 712,
                'code' => '142077',
                'prefecture_id' => 14,
                'name_en' => 'Chigasaki-shi',
                'name_jp' => '茅ヶ崎市',
            ],
            [
                'id' => 713,
                'code' => '142085',
                'prefecture_id' => 14,
                'name_en' => 'Zushi-shi',
                'name_jp' => '逗子市',
            ],
            [
                'id' => 714,
                'code' => '142107',
                'prefecture_id' => 14,
                'name_en' => 'Miurashi',
                'name_jp' => '三浦市',
            ],
            [
                'id' => 715,
                'code' => '142115',
                'prefecture_id' => 14,
                'name_en' => 'Hadano-shi',
                'name_jp' => '秦野市',
            ],
            [
                'id' => 716,
                'code' => '142123',
                'prefecture_id' => 14,
                'name_en' => 'Atsugishi',
                'name_jp' => '厚木市',
            ],
            [
                'id' => 717,
                'code' => '142131',
                'prefecture_id' => 14,
                'name_en' => 'Yamato-shi',
                'name_jp' => '大和市',
            ],
            [
                'id' => 718,
                'code' => '142140',
                'prefecture_id' => 14,
                'name_en' => 'Isehara-shi',
                'name_jp' => '伊勢原市',
            ],
            [
                'id' => 719,
                'code' => '142158',
                'prefecture_id' => 14,
                'name_en' => 'Ebinashi',
                'name_jp' => '海老名市',
            ],
            [
                'id' => 720,
                'code' => '142166',
                'prefecture_id' => 14,
                'name_en' => 'Zamashi',
                'name_jp' => '座間市',
            ],
            [
                'id' => 721,
                'code' => '142174',
                'prefecture_id' => 14,
                'name_en' => 'Minamiashigara-shi',
                'name_jp' => '南足柄市',
            ],
            [
                'id' => 722,
                'code' => '142182',
                'prefecture_id' => 14,
                'name_en' => 'Ayaseshi',
                'name_jp' => '綾瀬市',
            ],
            [
                'id' => 723,
                'code' => '143014',
                'prefecture_id' => 14,
                'name_en' => 'Hayamamachi',
                'name_jp' => '葉山町',
            ],
            [
                'id' => 724,
                'code' => '143219',
                'prefecture_id' => 14,
                'name_en' => 'Samukawamachi',
                'name_jp' => '寒川町',
            ],
            [
                'id' => 725,
                'code' => '143413',
                'prefecture_id' => 14,
                'name_en' => 'Oiso-machi',
                'name_jp' => '大磯町',
            ],
            [
                'id' => 726,
                'code' => '143421',
                'prefecture_id' => 14,
                'name_en' => 'Ninomiyamachi',
                'name_jp' => '二宮町',
            ],
            [
                'id' => 727,
                'code' => '143618',
                'prefecture_id' => 14,
                'name_en' => 'Nakaimachi',
                'name_jp' => '中井町',
            ],
            [
                'id' => 728,
                'code' => '143626',
                'prefecture_id' => 14,
                'name_en' => 'Ooimachi',
                'name_jp' => '大井町',
            ],
            [
                'id' => 729,
                'code' => '143634',
                'prefecture_id' => 14,
                'name_en' => 'Matsudamachi',
                'name_jp' => '松田町',
            ],
            [
                'id' => 730,
                'code' => '143642',
                'prefecture_id' => 14,
                'name_en' => 'Yamakitamachi',
                'name_jp' => '山北町',
            ],
            [
                'id' => 731,
                'code' => '143669',
                'prefecture_id' => 14,
                'name_en' => 'Kaiseimachi',
                'name_jp' => '開成町',
            ],
            [
                'id' => 732,
                'code' => '143821',
                'prefecture_id' => 14,
                'name_en' => 'Hakonemachi',
                'name_jp' => '箱根町',
            ],
            [
                'id' => 733,
                'code' => '143839',
                'prefecture_id' => 14,
                'name_en' => 'Manatsurumachi',
                'name_jp' => '真鶴町',
            ],
            [
                'id' => 734,
                'code' => '143847',
                'prefecture_id' => 14,
                'name_en' => 'Yugawaramachi',
                'name_jp' => '湯河原町',
            ],
            [
                'id' => 735,
                'code' => '144011',
                'prefecture_id' => 14,
                'name_en' => 'Aikawamachi',
                'name_jp' => '愛川町',
            ],
            [
                'id' => 736,
                'code' => '144029',
                'prefecture_id' => 14,
                'name_en' => 'Kiyokawamura',
                'name_jp' => '清川村',
            ],
        ];
        DB::table($table_name)->insert($data);
    }
}
