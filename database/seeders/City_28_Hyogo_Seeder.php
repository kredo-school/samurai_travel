<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_28_Hyogo_Seeder extends Seeder
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
                'code' => '281000',
                'prefecture_id' => 28,
                'name_en' => 'Koube-shi',
                'name_jp' => '神戸市',
            ],
            [
                'code' => '282014',
                'prefecture_id' => 28,
                'name_en' => 'Himeji-shi',
                'name_jp' => '姫路市',
            ],
            [
                'code' => '282022',
                'prefecture_id' => 28,
                'name_en' => 'Amagasaki-shi',
                'name_jp' => '尼崎市',
            ],
            [
                'code' => '282031',
                'prefecture_id' => 28,
                'name_en' => 'Akashi-shi',
                'name_jp' => '明石市',
            ],
            [
                'code' => '282049',
                'prefecture_id' => 28,
                'name_en' => 'Nishinomiya-shi',
                'name_jp' => '西宮市',
            ],
            [
                'code' => '282057',
                'prefecture_id' => 28,
                'name_en' => 'Sumoto-shi',
                'name_jp' => '洲本市',
            ],
            [
                'code' => '282065',
                'prefecture_id' => 28,
                'name_en' => 'Ashiya-shi',
                'name_jp' => '芦屋市',
            ],
            [
                'code' => '282073',
                'prefecture_id' => 28,
                'name_en' => 'Itami-shi',
                'name_jp' => '伊丹市',
            ],
            [
                'code' => '282081',
                'prefecture_id' => 28,
                'name_en' => 'Aioi-shi',
                'name_jp' => '相生市',
            ],
            [
                'code' => '282090',
                'prefecture_id' => 28,
                'name_en' => 'Toyooka-shi',
                'name_jp' => '豊岡市',
            ],
            [
                'code' => '282103',
                'prefecture_id' => 28,
                'name_en' => 'Kakogawa-shi',
                'name_jp' => '加古川市',
            ],
            [
                'code' => '282120',
                'prefecture_id' => 28,
                'name_en' => 'Akou-shi',
                'name_jp' => '赤穂市',
            ],
            [
                'code' => '282138',
                'prefecture_id' => 28,
                'name_en' => 'Nishiwaki-shi',
                'name_jp' => '西脇市',
            ],
            [
                'code' => '282146',
                'prefecture_id' => 28,
                'name_en' => 'Takarazuka-shi',
                'name_jp' => '宝塚市',
            ],
            [
                'code' => '282154',
                'prefecture_id' => 28,
                'name_en' => 'Miki-shi',
                'name_jp' => '三木市',
            ],
            [
                'code' => '282162',
                'prefecture_id' => 28,
                'name_en' => 'Takasago-shi',
                'name_jp' => '高砂市',
            ],
            [
                'code' => '282171',
                'prefecture_id' => 28,
                'name_en' => 'Kawanishi-shi',
                'name_jp' => '川西市',
            ],
            [
                'code' => '282189',
                'prefecture_id' => 28,
                'name_en' => 'Ono-shi',
                'name_jp' => '小野市',
            ],
            [
                'code' => '282197',
                'prefecture_id' => 28,
                'name_en' => 'Sanda-shi',
                'name_jp' => '三田市',
            ],
            [
                'code' => '282201',
                'prefecture_id' => 28,
                'name_en' => 'Kasai-shi',
                'name_jp' => '加西市',
            ],
            [
                'code' => '282219',
                'prefecture_id' => 28,
                'name_en' => 'Tanba-Sasayama-shi',
                'name_jp' => '丹波篠山市',
            ],
            [
                'code' => '282227',
                'prefecture_id' => 28,
                'name_en' => 'Yabu-shi',
                'name_jp' => '養父市',
            ],
            [
                'code' => '282235',
                'prefecture_id' => 28,
                'name_en' => 'Tanba-shi',
                'name_jp' => '丹波市',
            ],
            [
                'code' => '282243',
                'prefecture_id' => 28,
                'name_en' => 'Minamiawaji-shi',
                'name_jp' => '南あわじ市',
            ],
            [
                'code' => '282251',
                'prefecture_id' => 28,
                'name_en' => 'Asago-shi',
                'name_jp' => '朝来市',
            ],
            [
                'code' => '282260',
                'prefecture_id' => 28,
                'name_en' => 'Awaji-shi',
                'name_jp' => '淡路市',
            ],
            [
                'code' => '282278',
                'prefecture_id' => 28,
                'name_en' => 'Shiso-shi',
                'name_jp' => '宍粟市',
            ],
            [
                'code' => '282286',
                'prefecture_id' => 28,
                'name_en' => 'Kato-shi',
                'name_jp' => '加東市',
            ],
            [
                'code' => '282294',
                'prefecture_id' => 28,
                'name_en' => 'Tatsuno-shi',
                'name_jp' => 'たつの市',
            ],
            [
                'code' => '283011',
                'prefecture_id' => 28,
                'name_en' => 'Inagawa-cho',
                'name_jp' => '猪名川町',
            ],
            [
                'code' => '283657',
                'prefecture_id' => 28,
                'name_en' => 'Takacho',
                'name_jp' => '多可町',
            ],
            [
                'code' => '283819',
                'prefecture_id' => 28,
                'name_en' => 'Inami-cho',
                'name_jp' => '稲美町',
            ],
            [
                'code' => '283827',
                'prefecture_id' => 28,
                'name_en' => 'Harima-cho',
                'name_jp' => '播磨町',
            ],
            [
                'code' => '284424',
                'prefecture_id' => 28,
                'name_en' => 'Ichikawa-cho',
                'name_jp' => '市川町',
            ],
            [
                'code' => '284432',
                'prefecture_id' => 28,
                'name_en' => 'Fukusaki-cho',
                'name_jp' => '福崎町',
            ],
            [
                'code' => '284467',
                'prefecture_id' => 28,
                'name_en' => 'Kamikawa-cho',
                'name_jp' => '神河町',
            ],
            [
                'code' => '284645',
                'prefecture_id' => 28,
                'name_en' => 'Taishi-cho',
                'name_jp' => '太子町',
            ],
            [
                'code' => '284815',
                'prefecture_id' => 28,
                'name_en' => 'Kamigori-cho',
                'name_jp' => '上郡町',
            ],
            [
                'code' => '285013',
                'prefecture_id' => 28,
                'name_en' => 'Sayo-cho',
                'name_jp' => '佐用町',
            ],
            [
                'code' => '285854',
                'prefecture_id' => 28,
                'name_en' => 'Kamicho',
                'name_jp' => '香美町',
            ],
            [
                'code' => '285862',
                'prefecture_id' => 28,
                'name_en' => 'Shinonsen-cho',
                'name_jp' => '新温泉町',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
