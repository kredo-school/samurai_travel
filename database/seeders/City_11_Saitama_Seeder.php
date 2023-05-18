<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_11_Saitama_Seeder extends Seeder
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
                'code' => '111007',
                'prefecture_id' => 11,
                'name_en' => 'Saitama-shi',
                'name_jp' => 'さいたま市',
            ],
            [
                'code' => '112011',
                'prefecture_id' => 11,
                'name_en' => 'Kawagoe-shi',
                'name_jp' => '川越市',
            ],
            [
                'code' => '112020',
                'prefecture_id' => 11,
                'name_en' => 'Kumagaya-shi',
                'name_jp' => '熊谷市',
            ],
            [
                'code' => '112038',
                'prefecture_id' => 11,
                'name_en' => 'Kawaguchi-shi',
                'name_jp' => '川口市',
            ],
            [
                'code' => '112062',
                'prefecture_id' => 11,
                'name_en' => 'Gyoda-shi',
                'name_jp' => '行田市',
            ],
            [
                'code' => '112071',
                'prefecture_id' => 11,
                'name_en' => 'Chichibu-shi',
                'name_jp' => '秩父市',
            ],
            [
                'code' => '112089',
                'prefecture_id' => 11,
                'name_en' => 'Tokorozawa-shi',
                'name_jp' => '所沢市',
            ],
            [
                'code' => '112097',
                'prefecture_id' => 11,
                'name_en' => 'Hanno-shi',
                'name_jp' => '飯能市',
            ],
            [
                'code' => '112101',
                'prefecture_id' => 11,
                'name_en' => 'Kazo-shi',
                'name_jp' => '加須市',
            ],
            [
                'code' => '112119',
                'prefecture_id' => 11,
                'name_en' => 'Honjo-shi',
                'name_jp' => '本庄市',
            ],
            [
                'code' => '112127',
                'prefecture_id' => 11,
                'name_en' => 'Higashimatsuyama-shi',
                'name_jp' => '東松山市',
            ],
            [
                'code' => '112143',
                'prefecture_id' => 11,
                'name_en' => 'Kasukabe-shi',
                'name_jp' => '春日部市',
            ],
            [
                'code' => '112151',
                'prefecture_id' => 11,
                'name_en' => 'Sayama-shi',
                'name_jp' => '狭山市',
            ],
            [
                'code' => '112160',
                'prefecture_id' => 11,
                'name_en' => 'Hanyu-shi',
                'name_jp' => '羽生市',
            ],
            [
                'code' => '112178',
                'prefecture_id' => 11,
                'name_en' => 'Kounosu-shi',
                'name_jp' => '鴻巣市',
            ],
            [
                'code' => '112186',
                'prefecture_id' => 11,
                'name_en' => 'Fukaya-shi',
                'name_jp' => '深谷市',
            ],
            [
                'code' => '112194',
                'prefecture_id' => 11,
                'name_en' => 'Ageo-shi',
                'name_jp' => '上尾市',
            ],
            [
                'code' => '112216',
                'prefecture_id' => 11,
                'name_en' => 'Soka-shi',
                'name_jp' => '草加市',
            ],
            [
                'code' => '112224',
                'prefecture_id' => 11,
                'name_en' => 'Koshigaya-shi',
                'name_jp' => '越谷市',
            ],
            [
                'code' => '112232',
                'prefecture_id' => 11,
                'name_en' => 'Warabi-shi',
                'name_jp' => '蕨市',
            ],
            [
                'code' => '112241',
                'prefecture_id' => 11,
                'name_en' => 'Toda-shi',
                'name_jp' => '戸田市',
            ],
            [
                'code' => '112259',
                'prefecture_id' => 11,
                'name_en' => 'Iruma-shi',
                'name_jp' => '入間市',
            ],
            [
                'code' => '112275',
                'prefecture_id' => 11,
                'name_en' => 'Asaka-shi',
                'name_jp' => '朝霞市',
            ],
            [
                'code' => '112283',
                'prefecture_id' => 11,
                'name_en' => 'Shiki-shi',
                'name_jp' => '志木市',
            ],
            [
                'code' => '112291',
                'prefecture_id' => 11,
                'name_en' => 'Wakou-shi',
                'name_jp' => '和光市',
            ],
            [
                'code' => '112305',
                'prefecture_id' => 11,
                'name_en' => 'Niiza-shi',
                'name_jp' => '新座市',
            ],
            [
                'code' => '112313',
                'prefecture_id' => 11,
                'name_en' => 'Okegawa-shi',
                'name_jp' => '桶川市',
            ],
            [
                'code' => '112321',
                'prefecture_id' => 11,
                'name_en' => 'Kuki-shi',
                'name_jp' => '久喜市',
            ],
            [
                'code' => '112330',
                'prefecture_id' => 11,
                'name_en' => 'Kitamoto-shi',
                'name_jp' => '北本市',
            ],
            [
                'code' => '112348',
                'prefecture_id' => 11,
                'name_en' => 'Yashio-shi',
                'name_jp' => '八潮市',
            ],
            [
                'code' => '112356',
                'prefecture_id' => 11,
                'name_en' => 'Fujimi-shi',
                'name_jp' => '富士見市',
            ],
            [
                'code' => '112372',
                'prefecture_id' => 11,
                'name_en' => 'Misato-shi',
                'name_jp' => '三郷市',
            ],
            [
                'code' => '112381',
                'prefecture_id' => 11,
                'name_en' => 'Hasuda-shi',
                'name_jp' => '蓮田市',
            ],
            [
                'code' => '112399',
                'prefecture_id' => 11,
                'name_en' => 'Sakado-shi',
                'name_jp' => '坂戸市',
            ],
            [
                'code' => '112402',
                'prefecture_id' => 11,
                'name_en' => 'Satte-shi',
                'name_jp' => '幸手市',
            ],
            [
                'code' => '112411',
                'prefecture_id' => 11,
                'name_en' => 'Tsurugashima-shi',
                'name_jp' => '鶴ヶ島市',
            ],
            [
                'code' => '112429',
                'prefecture_id' => 11,
                'name_en' => 'Hidaka-shi',
                'name_jp' => '日高市',
            ],
            [
                'code' => '112437',
                'prefecture_id' => 11,
                'name_en' => 'Yoshikawa-shi',
                'name_jp' => '吉川市',
            ],
            [
                'code' => '112453',
                'prefecture_id' => 11,
                'name_en' => 'Fujimino-shi',
                'name_jp' => 'ふじみ野市',
            ],
            [
                'code' => '112461',
                'prefecture_id' => 11,
                'name_en' => 'Shiraoka-shi',
                'name_jp' => '白岡市',
            ],
            [
                'code' => '113018',
                'prefecture_id' => 11,
                'name_en' => 'Inamachi',
                'name_jp' => '伊奈町',
            ],
            [
                'code' => '113247',
                'prefecture_id' => 11,
                'name_en' => 'Miyoshimachi',
                'name_jp' => '三芳町',
            ],
            [
                'code' => '113263',
                'prefecture_id' => 11,
                'name_en' => 'Moroyamamachi',
                'name_jp' => '毛呂山町',
            ],
            [
                'code' => '113271',
                'prefecture_id' => 11,
                'name_en' => 'Ogosemachi',
                'name_jp' => '越生町',
            ],
            [
                'code' => '113417',
                'prefecture_id' => 11,
                'name_en' => 'Namegawamachi',
                'name_jp' => '滑川町',
            ],
            [
                'code' => '113425',
                'prefecture_id' => 11,
                'name_en' => 'Ranzan-machi',
                'name_jp' => '嵐山町',
            ],
            [
                'code' => '113433',
                'prefecture_id' => 11,
                'name_en' => 'Ogawamachi',
                'name_jp' => '小川町',
            ],
            [
                'code' => '113468',
                'prefecture_id' => 11,
                'name_en' => 'Kawajimamachi',
                'name_jp' => '川島町',
            ],
            [
                'code' => '113476',
                'prefecture_id' => 11,
                'name_en' => 'Yoshimi-machi',
                'name_jp' => '吉見町',
            ],
            [
                'code' => '113484',
                'prefecture_id' => 11,
                'name_en' => 'Hatoyamamachi',
                'name_jp' => '鳩山町',
            ],
            [
                'code' => '113492',
                'prefecture_id' => 11,
                'name_en' => 'Tokigawa-machi',
                'name_jp' => 'ときがわ町',
            ],
            [
                'code' => '113611',
                'prefecture_id' => 11,
                'name_en' => 'Yokozemachi',
                'name_jp' => '横瀬町',
            ],
            [
                'code' => '113620',
                'prefecture_id' => 11,
                'name_en' => 'Minanomachi',
                'name_jp' => '皆野町',
            ],
            [
                'code' => '113638',
                'prefecture_id' => 11,
                'name_en' => 'Nagatoromachi',
                'name_jp' => '長瀞町',
            ],
            [
                'code' => '113654',
                'prefecture_id' => 11,
                'name_en' => 'Oganomachi',
                'name_jp' => '小鹿野町',
            ],
            [
                'code' => '113697',
                'prefecture_id' => 11,
                'name_en' => 'Higashichichibu-mura',
                'name_jp' => '東秩父村',
            ],
            [
                'code' => '113816',
                'prefecture_id' => 11,
                'name_en' => 'Misatomachi',
                'name_jp' => '美里町',
            ],
            [
                'code' => '113832',
                'prefecture_id' => 11,
                'name_en' => 'Kamikawamachi',
                'name_jp' => '神川町',
            ],
            [
                'code' => '113859',
                'prefecture_id' => 11,
                'name_en' => 'Kamisatomachi',
                'name_jp' => '上里町',
            ],
            [
                'code' => '114081',
                'prefecture_id' => 11,
                'name_en' => 'Yorii-machi',
                'name_jp' => '寄居町',
            ],
            [
                'code' => '114421',
                'prefecture_id' => 11,
                'name_en' => 'Miyashiro-machi',
                'name_jp' => '宮代町',
            ],
            [
                'code' => '114642',
                'prefecture_id' => 11,
                'name_en' => 'Sugito-machi',
                'name_jp' => '杉戸町',
            ],
            [
                'code' => '114651',
                'prefecture_id' => 11,
                'name_en' => 'Matsubushimamachi',
                'name_jp' => '松伏町',
            ],
        ]);
        
        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
