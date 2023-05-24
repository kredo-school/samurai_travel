<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_27_Osaka_Seeder extends Seeder
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
                'code' => '271004',
                'prefecture_id' => 27,
                'name_en' => 'Osaka-shi',
                'name_jp' => '大阪市',
            ],
            [
                'code' => '271403',
                'prefecture_id' => 27,
                'name_en' => 'Sakai-shi',
                'name_jp' => '堺市',
            ],
            [
                'code' => '272027',
                'prefecture_id' => 27,
                'name_en' => 'Kishiwada-shi',
                'name_jp' => '岸和田市',
            ],
            [
                'code' => '272035',
                'prefecture_id' => 27,
                'name_en' => 'Toyonaka-shi',
                'name_jp' => '豊中市',
            ],
            [
                'code' => '272043',
                'prefecture_id' => 27,
                'name_en' => 'Ikeda-shi',
                'name_jp' => '池田市',
            ],
            [
                'code' => '272051',
                'prefecture_id' => 27,
                'name_en' => 'Suita-shi',
                'name_jp' => '吹田市',
            ],
            [
                'code' => '272060',
                'prefecture_id' => 27,
                'name_en' => 'Izumiotsu-shi',
                'name_jp' => '泉大津市',
            ],
            [
                'code' => '272078',
                'prefecture_id' => 27,
                'name_en' => 'Takatsuki-shi',
                'name_jp' => '高槻市',
            ],
            [
                'code' => '272086',
                'prefecture_id' => 27,
                'name_en' => 'Kaizuka-shi',
                'name_jp' => '貝塚市',
            ],
            [
                'code' => '272094',
                'prefecture_id' => 27,
                'name_en' => 'Moriguchi-shi',
                'name_jp' => '守口市',
            ],
            [
                'code' => '272108',
                'prefecture_id' => 27,
                'name_en' => 'Hirakata-shi',
                'name_jp' => '枚方市',
            ],
            [
                'code' => '272116',
                'prefecture_id' => 27,
                'name_en' => 'Ibaraki-shi',
                'name_jp' => '茨木市',
            ],
            [
                'code' => '272124',
                'prefecture_id' => 27,
                'name_en' => 'Yaotsu-shi',
                'name_jp' => '八尾市',
            ],
            [
                'code' => '272132',
                'prefecture_id' => 27,
                'name_en' => 'Izumisano-shi',
                'name_jp' => '泉佐野市',
            ],
            [
                'code' => '272141',
                'prefecture_id' => 27,
                'name_en' => 'Tondabayashi-shi',
                'name_jp' => '富田林市',
            ],
            [
                'code' => '272159',
                'prefecture_id' => 27,
                'name_en' => 'Neyagawa-shi',
                'name_jp' => '寝屋川市',
            ],
            [
                'code' => '272167',
                'prefecture_id' => 27,
                'name_en' => 'Kawachinagano-shi',
                'name_jp' => '河内長野市',
            ],
            [
                'code' => '272175',
                'prefecture_id' => 27,
                'name_en' => 'Matsubara-shi',
                'name_jp' => '松原市',
            ],
            [
                'code' => '272183',
                'prefecture_id' => 27,
                'name_en' => 'Daito-shi',
                'name_jp' => '大東市',
            ],
            [
                'code' => '272191',
                'prefecture_id' => 27,
                'name_en' => 'Izumi-shi',
                'name_jp' => '和泉市',
            ],
            [
                'code' => '272205',
                'prefecture_id' => 27,
                'name_en' => 'Minoa-shi',
                'name_jp' => '箕面市',
            ],
            [
                'code' => '272213',
                'prefecture_id' => 27,
                'name_en' => 'Kashiwara-shi',
                'name_jp' => '柏原市',
            ],
            [
                'code' => '272221',
                'prefecture_id' => 27,
                'name_en' => 'Habikino-shi',
                'name_jp' => '羽曳野市',
            ],
            [
                'code' => '272230',
                'prefecture_id' => 27,
                'name_en' => 'Kadoma-shi',
                'name_jp' => '門真市',
            ],
            [
                'code' => '272248',
                'prefecture_id' => 27,
                'name_en' => 'Settsu-shi',
                'name_jp' => '摂津市',
            ],
            [
                'code' => '272256',
                'prefecture_id' => 27,
                'name_en' => 'Takatsuki-shi',
                'name_jp' => '高石市',
            ],
            [
                'code' => '272264',
                'prefecture_id' => 27,
                'name_en' => 'Fujiidera-shi',
                'name_jp' => '藤井寺市',
            ],
            [
                'code' => '272272',
                'prefecture_id' => 27,
                'name_en' => 'Higashiosaka-shi',
                'name_jp' => '東大阪市',
            ],
            [
                'code' => '272281',
                'prefecture_id' => 27,
                'name_en' => 'Sennan-shi',
                'name_jp' => '泉南市',
            ],
            [
                'code' => '272299',
                'prefecture_id' => 27,
                'name_en' => 'Shijonawate-shi',
                'name_jp' => '四條畷市',
            ],
            [
                'code' => '272302',
                'prefecture_id' => 27,
                'name_en' => 'Katanoshi',
                'name_jp' => '交野市',
            ],
            [
                'code' => '272311',
                'prefecture_id' => 27,
                'name_en' => 'Osaka-sayama-shi',
                'name_jp' => '大阪狭山市',
            ],
            [
                'code' => '272329',
                'prefecture_id' => 27,
                'name_en' => 'Hannan-shi',
                'name_jp' => '阪南市',
            ],
            [
                'code' => '273015',
                'prefecture_id' => 27,
                'name_en' => 'Shimamoto-cho',
                'name_jp' => '島本町',
            ],
            [
                'code' => '273210',
                'prefecture_id' => 27,
                'name_en' => 'Toyono-cho',
                'name_jp' => '豊能町',
            ],
            [
                'code' => '273228',
                'prefecture_id' => 27,
                'name_en' => 'Nose-cho',
                'name_jp' => '能勢町',
            ],
            [
                'code' => '273414',
                'prefecture_id' => 27,
                'name_en' => 'Tadaoka-cho',
                'name_jp' => '忠岡町',
            ],
            [
                'code' => '273619',
                'prefecture_id' => 27,
                'name_en' => 'Kumatori-cho',
                'name_jp' => '熊取町',
            ],
            [
                'code' => '273627',
                'prefecture_id' => 27,
                'name_en' => 'Tajiri-cho',
                'name_jp' => '田尻町',
            ],
            [
                'code' => '273660',
                'prefecture_id' => 27,
                'name_en' => 'Misaki-cho',
                'name_jp' => '岬町',
            ],
            [
                'code' => '273813',
                'prefecture_id' => 27,
                'name_en' => 'Taishi-cho',
                'name_jp' => '太子町',
            ],
            [
                'code' => '273821',
                'prefecture_id' => 27,
                'name_en' => 'Kanan-cho',
                'name_jp' => '河南町',
            ],
            [
                'code' => '273830',
                'prefecture_id' => 27,
                'name_en' => 'Chihayaakasaka-mura',
                'name_jp' => '千早赤阪村',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
