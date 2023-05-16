<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class City_20_Nagano_Seeder extends Seeder
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
                'code' => '202011',
                'prefecture_id' => 20,
                'name_en' => 'Naganoshi',
                'name_jp' => '長野市',
            ],
            [
                'code' => '202029',
                'prefecture_id' => 20,
                'name_en' => 'Matsumotoshi',
                'name_jp' => '松本市',
            ],
            [
                'code' => '202037',
                'prefecture_id' => 20,
                'name_en' => 'Uetadashi',
                'name_jp' => '上田市',
            ],
            [
                'code' => '202045',
                'prefecture_id' => 20,
                'name_en' => 'Okayashi',
                'name_jp' => '岡谷市',
            ],
            [
                'code' => '202053',
                'prefecture_id' => 20,
                'name_en' => 'Iidashi',
                'name_jp' => '飯田市',
            ],
            [
                'code' => '202061',
                'prefecture_id' => 20,
                'name_en' => 'Suwashi',
                'name_jp' => '諏訪市',
            ],
            [
                'code' => '202070',
                'prefecture_id' => 20,
                'name_en' => 'Suzakash',
                'name_jp' => '須坂市',
            ],
            [
                'code' => '202088',
                'prefecture_id' => 20,
                'name_en' => 'Komoroshi',
                'name_jp' => '小諸市',
            ],
            [
                'code' => '202096',
                'prefecture_id' => 20,
                'name_en' => 'Inashi',
                'name_jp' => '伊那市',
            ],
            [
                'code' => '202100',
                'prefecture_id' => 20,
                'name_en' => 'Komaganeshi',
                'name_jp' => '駒ヶ根市',
            ],
            [
                'code' => '202118',
                'prefecture_id' => 20,
                'name_en' => 'Nakanoshi',
                'name_jp' => '中野市',
            ],
            [
                'code' => '202126',
                'prefecture_id' => 20,
                'name_en' => 'Oomachishi',
                'name_jp' => '大町市',
            ],
            [
                'code' => '202134',
                'prefecture_id' => 20,
                'name_en' => 'Iiyamashi',
                'name_jp' => '飯山市',
            ],
            [
                'code' => '202142',
                'prefecture_id' => 20,
                'name_en' => 'Chinoshi',
                'name_jp' => '茅野市',
            ],
            [
                'code' => '202151',
                'prefecture_id' => 20,
                'name_en' => 'Shiojirishi',
                'name_jp' => '塩尻市',
            ],
            [
                'code' => '202177',
                'prefecture_id' => 20,
                'name_en' => 'Sakushi',
                'name_jp' => '佐久市',
            ],
            [
                'code' => '202185',
                'prefecture_id' => 20,
                'name_en' => 'Chikumashi',
                'name_jp' => '千曲市',
            ],
            [
                'code' => '202193',
                'prefecture_id' => 20,
                'name_en' => 'Toumishi',
                'name_jp' => '東御市',
            ],
            [
                'code' => '202207',
                'prefecture_id' => 20,
                'name_en' => 'Azuminoshi',
                'name_jp' => '安曇野市',
            ],
            [
                'code' => '203033',
                'prefecture_id' => 20,
                'name_en' => 'Koumimachi',
                'name_jp' => '小海町',
            ],
            [
                'code' => '203041',
                'prefecture_id' => 20,
                'name_en' => 'Kawakamimura',
                'name_jp' => '川上村',
            ],
            [
                'code' => '203050',
                'prefecture_id' => 20,
                'name_en' => 'Minamimakimura',
                'name_jp' => '南牧村',
            ],
            [
                'code' => '203068',
                'prefecture_id' => 20,
                'name_en' => 'Minamiaikimura',
                'name_jp' => '南相木村',
            ],
            [
                'code' => '203076',
                'prefecture_id' => 20,
                'name_en' => 'Kitaikimura',
                'name_jp' => '北相木村',
            ],
            [
                'code' => '203092',
                'prefecture_id' => 20,
                'name_en' => 'Sakuhomachi',
                'name_jp' => '佐久穂町',
            ],
            [
                'code' => '203211',
                'prefecture_id' => 20,
                'name_en' => 'Karuizawamachi',
                'name_jp' => '軽井沢町',
            ],
            [
                'code' => '203238',
                'prefecture_id' => 20,
                'name_en' => 'Miyotamachi',
                'name_jp' => '御代田町',
            ],
            [
                'code' => '203246',
                'prefecture_id' => 20,
                'name_en' => 'Tateshinamachi',
                'name_jp' => '立科町',
            ],
            [
                'code' => '203491',
                'prefecture_id' => 20,
                'name_en' => 'Aokimura',
                'name_jp' => '青木村',
            ],
            [
                'code' => '203505',
                'prefecture_id' => 20,
                'name_en' => 'Nagawamachi',
                'name_jp' => '長和町',
            ],
            [
                'code' => '203611',
                'prefecture_id' => 20,
                'name_en' => 'Shimosuwamachi',
                'name_jp' => '下諏訪町',
            ],
            [
                'code' => '203629',
                'prefecture_id' => 20,
                'name_en' => 'Fujimimachi',
                'name_jp' => '富士見町',
            ],
            [
                'code' => '203637',
                'prefecture_id' => 20,
                'name_en' => 'Haramura',
                'name_jp' => '原村',
            ],
            [
                'code' => '203823',
                'prefecture_id' => 20,
                'name_en' => 'Tatsunomachi',
                'name_jp' => '辰野町',
            ],
            [
                'code' => '203831',
                'prefecture_id' => 20,
                'name_en' => 'Minowamachi',
                'name_jp' => '箕輪町',
            ],
            [
                'code' => '203840',
                'prefecture_id' => 20,
                'name_en' => 'Iijimamachi',
                'name_jp' => '飯島町',
            ],
            [
                'code' => '203858',
                'prefecture_id' => 20,
                'name_en' => 'Minamiminowamura',
                'name_jp' => '南箕輪村',
            ],
            [
                'code' => '203866',
                'prefecture_id' => 20,
                'name_en' => 'Nakagawamura',
                'name_jp' => '中川村',
            ],
            [
                'code' => '203882',
                'prefecture_id' => 20,
                'name_en' => 'Miyadamura',
                'name_jp' => '宮田村',
            ],
            [
                'code' => '204021',
                'prefecture_id' => 20,
                'name_en' => 'Matsukawamachi',
                'name_jp' => '松川町',
            ],
            [
                'code' => '204030',
                'prefecture_id' => 20,
                'name_en' => 'Takamorimachi',
                'name_jp' => '高森町',
            ],
            [
                'code' => '204048',
                'prefecture_id' => 20,
                'name_en' => 'Anancho',
                'name_jp' => '阿南町',
            ],
            [
                'code' => '204072',
                'prefecture_id' => 20,
                'name_en' => 'Achimura',
                'name_jp' => '阿智村',
            ],
            [
                'code' => '204099',
                'prefecture_id' => 20,
                'name_en' => 'Hirayamamura',
                'name_jp' => '平谷村',
            ],
            [
                'code' => '204102',
                'prefecture_id' => 20,
                'name_en' => 'Nebamura',
                'name_jp' => '根羽村',
            ],
            [
                'code' => '204111',
                'prefecture_id' => 20,
                'name_en' => 'Shimojomyomura',
                'name_jp' => '下條村',
            ],
            [
                'code' => '204129',
                'prefecture_id' => 20,
                'name_en' => 'Urukimura',
                'name_jp' => '売木村',
            ],
            [
                'code' => '204137',
                'prefecture_id' => 20,
                'name_en' => 'Tenryuumura',
                'name_jp' => '天龍村',
            ],
            [
                'code' => '204145',
                'prefecture_id' => 20,
                'name_en' => 'Yasuokamura',
                'name_jp' => '泰阜村',
            ],
            [
                'code' => '204153',
                'prefecture_id' => 20,
                'name_en' => 'Takagimura',
                'name_jp' => '喬木村',
            ],
            [
                'code' => '204161',
                'prefecture_id' => 20,
                'name_en' => 'Toyookamura',
                'name_jp' => '豊丘村',
            ],
            [
                'code' => '204170',
                'prefecture_id' => 20,
                'name_en' => 'Ooshikamura',
                'name_jp' => '大鹿村',
            ],
            [
                'code' => '204226',
                'prefecture_id' => 20,
                'name_en' => 'Agematsumachi',
                'name_jp' => '上松町',
            ],
            [
                'code' => '204234',
                'prefecture_id' => 20,
                'name_en' => 'Nagisomachi',
                'name_jp' => '南木曽町',
            ],
            [
                'code' => '204251',
                'prefecture_id' => 20,
                'name_en' => 'Kisomura',
                'name_jp' => '木祖村',
            ],
            [
                'code' => '204293',
                'prefecture_id' => 20,
                'name_en' => 'Outakimura',
                'name_jp' => '王滝村',
            ],
            [
                'code' => '204307',
                'prefecture_id' => 20,
                'name_en' => 'Ookumura',
                'name_jp' => '大桑村',
            ],
            [
                'code' => '204323',
                'prefecture_id' => 20,
                'name_en' => 'Kisomachi',
                'name_jp' => '木曽町',
            ],
            [
                'code' => '204463',
                'prefecture_id' => 20,
                'name_en' => 'Omimura',
                'name_jp' => '麻績村',
            ],
            [
                'code' => '204480',
                'prefecture_id' => 20,
                'name_en' => 'Ikusakamura',
                'name_jp' => '生坂村',
            ],
            [
                'code' => '204501',
                'prefecture_id' => 20,
                'name_en' => 'Yamagatamamura',
                'name_jp' => '山形村',
            ],
            [
                'code' => '204510',
                'prefecture_id' => 20,
                'name_en' => 'Asahimura',
                'name_jp' => '朝日村',
            ],
            [
                'code' => '204528',
                'prefecture_id' => 20,
                'name_en' => 'Chikuhoku-mura',
                'name_jp' => '筑北村',
            ],
            [
                'code' => '204811',
                'prefecture_id' => 20,
                'name_en' => 'Ikedamachi',
                'name_jp' => '池田町',
            ],
            [
                'code' => '204820',
                'prefecture_id' => 20,
                'name_en' => 'Matsumotomura',
                'name_jp' => '松川村',
            ],
            [
                'code' => '204854',
                'prefecture_id' => 20,
                'name_en' => 'Hakubamura',
                'name_jp' => '白馬村',
            ],
            [
                'code' => '204862',
                'prefecture_id' => 20,
                'name_en' => 'Otarimura',
                'name_jp' => '小谷村',
            ],
            [
                'code' => '205214',
                'prefecture_id' => 20,
                'name_en' => 'Sakakimachi',
                'name_jp' => '坂城町',
            ],
            [
                'code' => '205419',
                'prefecture_id' => 20,
                'name_en' => 'Obusemachi',
                'name_jp' => '小布施町',
            ],
            [
                'code' => '205435',
                'prefecture_id' => 20,
                'name_en' => 'Takayamamura',
                'name_jp' => '高山村',
            ],
            [
                'code' => '205613',
                'prefecture_id' => 20,
                'name_en' => 'Yamanouchimachi',
                'name_jp' => '山ノ内町',
            ],
            [
                'code' => '205621',
                'prefecture_id' => 20,
                'name_en' => 'Kijimadaira-mura',
                'name_jp' => '木島平村',
            ],
            [
                'code' => '205630',
                'prefecture_id' => 20,
                'name_en' => 'Nozawaonsen-mura',
                'name_jp' => '野沢温泉村',
            ],
            [
                'code' => '205834',
                'prefecture_id' => 20,
                'name_en' => 'Shinanomachi',
                'name_jp' => '信濃町',
            ],
            [
                'code' => '205885',
                'prefecture_id' => 20,
                'name_en' => 'Ogamura',
                'name_jp' => '小川村',
            ],
            [
                'code' => '205907',
                'prefecture_id' => 20,
                'name_en' => 'Iizunamachi',
                'name_jp' => '飯綱町',
            ],
            [
                'code' => '206024',
                'prefecture_id' => 20,
                'name_en' => 'Sakae-mura',
                'name_jp' => '栄村',
            ],
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
