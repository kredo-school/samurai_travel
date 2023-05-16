<?php

namespace Database\Seeders;

use App\Models\City;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class City_01_HokkaidoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        City::truncate(); 
        Schema::enableForeignKeyConstraints();

        $data = collect([
            [
                'code' => '011002',
                'prefecture_id' => 1,
                'name_en' => 'Sapporo-shi',
                'name_jp' => '札幌市',
            ],
            [
                'code' => '012025',
                'prefecture_id' => 1,
                'name_en' => 'Hakodate-shi',
                'name_jp' => '函館市',
            ],
            [
                'code' => '012033',
                'prefecture_id' => 1,
                'name_en' => 'Otaru-shi',
                'name_jp' => '小樽市',
            ],
            [
                'code' => '012041',
                'prefecture_id' => 1,
                'name_en' => 'Asahikawa-shi',
                'name_jp' => '旭川市',
            ],
            [
                'code' => '012050',
                'prefecture_id' => 1,
                'name_en' => 'Muroran-shi',
                'name_jp' => '室蘭市',
            ],
            [
                'code' => '012068',
                'prefecture_id' => 1,
                'name_en' => 'Kushiro-shi',
                'name_jp' => '釧路市',
            ],
            [
                'code' => '012076',
                'prefecture_id' => 1,
                'name_en' => 'Obihiro-shi',
                'name_jp' => '帯広市',
            ],
            [
                'code' => '012084',
                'prefecture_id' => 1,
                'name_en' => 'Kitami-shi',
                'name_jp' => '北見市',
            ],
            [
                'code' => '012092',
                'prefecture_id' => 1,
                'name_en' => 'Yubari-shi',
                'name_jp' => '夕張市',
            ],
            [
                'code' => '012106',
                'prefecture_id' => 1,
                'name_en' => 'Iwamizawa-shi',
                'name_jp' => '岩見沢市',
            ],
            [
                'code' => '012114',
                'prefecture_id' => 1,
                'name_en' => 'Abashiri-shi',
                'name_jp' => '網走市',
            ],
            [
                'code' => '012122',
                'prefecture_id' => 1,
                'name_en' => 'Rumoi-shi',
                'name_jp' => '留萌市',
            ],
            [
                'code' => '012131',
                'prefecture_id' => 1,
                'name_en' => 'Tomakomai-shi',
                'name_jp' => '苫小牧市',
            ],
            [
                'code' => '012149',
                'prefecture_id' => 1,
                'name_en' => 'Wakkanai-shi',
                'name_jp' => '稚内市',
            ],
            [
                'code' => '012157',
                'prefecture_id' => 1,
                'name_en' => 'Bibai-shi',
                'name_jp' => '美唄市',
            ],
            [
                'code' => '012165',
                'prefecture_id' => 1,
                'name_en' => 'Ashibetsu-shi',
                'name_jp' => '芦別市',
            ],
            [
                'code' => '012173',
                'prefecture_id' => 1,
                'name_en' => 'Ebetsu-shi',
                'name_jp' => '江別市',
            ],
            [
                'code' => '012181',
                'prefecture_id' => 1,
                'name_en' => 'Akabira-shi',
                'name_jp' => '赤平市',
            ],
            [
                'code' => '012190',
                'prefecture_id' => 1,
                'name_en' => 'Monbetsu-shi',
                'name_jp' => '紋別市',
            ],
            [
                'code' => '012203',
                'prefecture_id' => 1,
                'name_en' => 'Shibetsu-shi',
                'name_jp' => '士別市',
            ],
            [
                'code' => '012211',
                'prefecture_id' => 1,
                'name_en' => 'Nayoro-shi',
                'name_jp' => '名寄市',
            ],
            [
                'code' => '012220',
                'prefecture_id' => 1,
                'name_en' => 'Mikasa-shi',
                'name_jp' => '三笠市',
            ],
            [
                'code' => '012238',
                'prefecture_id' => 1,
                'name_en' => 'Nemuro-shi',
                'name_jp' => '根室市',
            ],
            [
                'code' => '012246',
                'prefecture_id' => 1,
                'name_en' => 'Chitose-shi',
                'name_jp' => '千歳市',
            ],
            [
                'code' => '012254',
                'prefecture_id' => 1,
                'name_en' => 'Takikawa-shi',
                'name_jp' => '滝川市',
            ],
            [
                'code' => '012262',
                'prefecture_id' => 1,
                'name_en' => 'Sunagawa-shi',
                'name_jp' => '砂川市',
            ],
            [
                'code' => '012271',
                'prefecture_id' => 1,
                'name_en' => 'Utashinai-shi',
                'name_jp' => '歌志内市',
            ],
            [
                'code' => '012289',
                'prefecture_id' => 1,
                'name_en' => 'Fukagawa-shi',
                'name_jp' => '深川市',
            ],
            [
                'code' => '012297',
                'prefecture_id' => 1,
                'name_en' => 'Furano-shi',
                'name_jp' => '富良野市',
            ],
            [
                'code' => '012301',
                'prefecture_id' => 1,
                'name_en' => 'Noboribetsu-shi',
                'name_jp' => '登別市',
            ],
            [
                'code' => '012319',
                'prefecture_id' => 1,
                'name_en' => 'Eniwa-shi',
                'name_jp' => '恵庭市',
            ],
            [
                'code' => '012335',
                'prefecture_id' => 1,
                'name_en' => 'Date-shi',
                'name_jp' => '伊達市',
            ],
            [
                'code' => '012343',
                'prefecture_id' => 1,
                'name_en' => 'Kitahiroshima-shi',
                'name_jp' => '北広島市',
            ],
            [
                'code' => '012351',
                'prefecture_id' => 1,
                'name_en' => 'Ishikari-shi',
                'name_jp' => '石狩市',
            ],
            [
                'code' => '012360',
                'prefecture_id' => 1,
                'name_en' => 'Hokuto-shi',
                'name_jp' => '北斗市',
            ],
            [
                'code' => '013030',
                'prefecture_id' => 1,
                'name_en' => 'Tobetsu-chō',
                'name_jp' => '当別町',
            ],
            [
                'code' => '013048',
                'prefecture_id' => 1,
                'name_en' => 'Shinshinotsu-mura',
                'name_jp' => '新篠津村',
            ],
            [
                'code' => '013315',
                'prefecture_id' => 1,
                'name_en' => 'Matsumae-chō',
                'name_jp' => '松前町',
            ],
            [
                'code' => '013323',
                'prefecture_id' => 1,
                'name_en' => 'Fukushima-chō',
                'name_jp' => '福島町',
            ],
            [
                'code' => '013331',
                'prefecture_id' => 1,
                'name_en' => 'Shiraoi-chō',
                'name_jp' => '知内町',
            ],
            [
                'code' => '013340',
                'prefecture_id' => 1,
                'name_en' => 'Shiribeshi-chō',
                'name_jp' => '木古内町',
            ],
            [
                'code' => '013374',
                'prefecture_id' => 1,
                'name_en' => 'Kikōnaichō',
                'name_jp' => '七飯町',
            ],
            [
                'code' => '013439',
                'prefecture_id' => 1,
                'name_en' => 'Nanae-chō',
                'name_jp' => '鹿部町',
            ],
            [
                'code' => '013455',
                'prefecture_id' => 1,
                'name_en' => 'Shikabe-chō',
                'name_jp' => '森町',
            ],
            [
                'code' => '013463',
                'prefecture_id' => 1,
                'name_en' => 'Morimachi',
                'name_jp' => '八雲町',
            ],
            [
                'code' => '013471',
                'prefecture_id' => 1,
                'name_en' => 'Yakumo-chō',
                'name_jp' => '長万部町',
            ],
            [
                'code' => '013617',
                'prefecture_id' => 1,
                'name_en' => 'Oshamanbe-chō',
                'name_jp' => '江差町',
            ],
            [
                'code' => '013625',
                'prefecture_id' => 1,
                'name_en' => 'Esashi-chō',
                'name_jp' => '上ノ国町',
            ],
            [
                'code' => '013633',
                'prefecture_id' => 1,
                'name_en' => 'Kaminokuni-chō',
                'name_jp' => '厚沢部町',
            ],
            [
                'code' => '013641',
                'prefecture_id' => 1,
                'name_en' => 'Oto-becho',
                'name_jp' => '乙部町',
            ],
            [
                'code' => '013676',
                'prefecture_id' => 1,
                'name_en' => 'Okushiri-cho',
                'name_jp' => '奥尻町',
            ],
            [
                'code' => '013706',
                'prefecture_id' => 1,
                'name_en' => 'Imakane-cho',
                'name_jp' => '今金町',
            ],
            [
                'code' => '013714',
                'prefecture_id' => 1,
                'name_en' => 'Setana-cho',
                'name_jp' => 'せたな町',
            ],
            [
                'code' => '013919',
                'prefecture_id' => 1,
                'name_en' => 'Shimamaki-mura',
                'name_jp' => '島牧村',
            ],
            [
                'code' => '013927',
                'prefecture_id' => 1,
                'name_en' => 'Suttsu-cho',
                'name_jp' => '寿都町',
            ],
            [
                'code' => '013935',
                'prefecture_id' => 1,
                'name_en' => 'Kuromatsunai-cho',
                'name_jp' => '黒松内町',
            ],
            [
                'code' => '013943',
                'prefecture_id' => 1,
                'name_en' => 'Rankoshi-cho',
                'name_jp' => '蘭越町',
            ],
            [
                'code' => '013951',
                'prefecture_id' => 1,
                'name_en' => 'Niseko-cho',
                'name_jp' => 'ニセコ町',
            ],
            [
                'code' => '013960',
                'prefecture_id' => 1,
                'name_en' => 'Makkari-mura',
                'name_jp' => '真狩村',
            ],
            [
                'code' => '013978',
                'prefecture_id' => 1,
                'name_en' => 'Rusutsu-mura',
                'name_jp' => '留寿都村',
            ],
            [
                'code' => '013986',
                'prefecture_id' => 1,
                'name_en' => 'Kimohezu-cho',
                'name_jp' => '喜茂別町',
            ],
            [
                'code' => '013994',
                'prefecture_id' => 1,
                'name_en' => 'Kyogoku-cho',
                'name_jp' => '京極町',
            ],
            [
                'code' => '014001',
                'prefecture_id' => 1,
                'name_en' => 'Kutchan-cho',
                'name_jp' => '倶知安町',
            ],
            [
                'code' => '014010',
                'prefecture_id' => 1,
                'name_en' => 'Kyowa-cho',
                'name_jp' => '共和町',
            ],
            [
                'code' => '014028',
                'prefecture_id' => 1,
                'name_en' => 'Iwanai-cho',
                'name_jp' => '岩内町',
            ],
            [
                'code' => '014036',
                'prefecture_id' => 1,
                'name_en' => 'Tomari-mura',
                'name_jp' => '泊村',
            ],
            [
                'code' => '014044',
                'prefecture_id' => 1,
                'name_en' => 'Kamoenai-mura',
                'name_jp' => '神恵内村',
            ],
            [
                'code' => '014052',
                'prefecture_id' => 1,
                'name_en' => 'Shakotan-cho',
                'name_jp' => '積丹町',
            ],
            [
                'code' => '014061',
                'prefecture_id' => 1,
                'name_en' => 'Furubira-cho',
                'name_jp' => '古平町',
            ],
            [
                'code' => '014079',
                'prefecture_id' => 1,
                'name_en' => 'Niki-cho',
                'name_jp' => '仁木町',
            ],
            [
                'code' => '014087',
                'prefecture_id' => 1,
                'name_en' => 'Yoichi-cho',
                'name_jp' => '余市町',
            ],
            [
                'code' => '014095',
                'prefecture_id' => 1,
                'name_en' => 'Akaigawa-mura',
                'name_jp' => '赤井川村',
            ],
            [
                'code' => '014231',
                'prefecture_id' => 1,
                'name_en' => 'Nanporo-cho',
                'name_jp' => '南幌町',
            ],
            [
                'code' => '014249',
                'prefecture_id' => 1,
                'name_en' => 'Naie-cho',
                'name_jp' => '奈井江町',
            ],
            [
                'code' => '014257',
                'prefecture_id' => 1,
                'name_en' => 'Kamisunagawa-cho',
                'name_jp' => '上砂川町',
            ],
            [
                'code' => '014273',
                'prefecture_id' => 1,
                'name_en' => 'Yuni-cho',
                'name_jp' => '由仁町',
            ],
            [
                'code' => '014281',
                'prefecture_id' => 1,
                'name_en' => 'Naganuma-cho',
                'name_jp' => '長沼町',
            ],
            [
                'code' => '014290',
                'prefecture_id' => 1,
                'name_en' => 'Kuriyama-cho',
                'name_jp' => '栗山町',
            ],
            [
                'code' => '014303',
                'prefecture_id' => 1,
                'name_en' => 'Tsukigata-cho',
                'name_jp' => '月形町',
            ],
            [
                'code' => '014311',
                'prefecture_id' => 1,
                'name_en' => 'Urakawa-cho',
                'name_jp' => '浦臼町',
            ],
            [
                'code' => '014320',
                'prefecture_id' => 1,
                'name_en' => 'Shintotsukawa-cho',
                'name_jp' => '新十津川町',
            ],
            [
                'code' => '014338',
                'prefecture_id' => 1,
                'name_en' => 'Moseushi-cho',
                'name_jp' => '妹背牛町',
            ],
            [
                'code' => '014346',
                'prefecture_id' => 1,
                'name_en' => 'Chippubetsu-cho',
                'name_jp' => '秩父別町',
            ],
            [
                'code' => '014362',
                'prefecture_id' => 1,
                'name_en' => 'Uryu-cho',
                'name_jp' => '雨竜町',
            ],
            [
                'code' => '014371',
                'prefecture_id' => 1,
                'name_en' => 'Hokuryu-cho',
                'name_jp' => '北竜町',
            ],
            [
                'code' => '014389',
                'prefecture_id' => 1,
                'name_en' => 'Numata-cho',
                'name_jp' => '沼田町',
            ],
            [
                'code' => '014524',
                'prefecture_id' => 1,
                'name_en' => 'Takasu-cho',
                'name_jp' => '鷹栖町',
            ],
            [
                'code' => '014532',
                'prefecture_id' => 1,
                'name_en' => 'Higashikagura-cho',
                'name_jp' => '東神楽町',
            ],
            [
                'code' => '014541',
                'prefecture_id' => 1,
                'name_en' => 'Toma-cho',
                'name_jp' => '当麻町',
            ],
            [
                'code' => '014559',
                'prefecture_id' => 1,
                'name_en' => 'Pippu-cho',
                'name_jp' => '比布町',
            ],
            [
                'code' => '014567',
                'prefecture_id' => 1,
                'name_en' => 'Aibetsu-cho',
                'name_jp' => '愛別町',
            ],
            [
                'code' => '014575',
                'prefecture_id' => 1,
                'name_en' => 'Kamikawa-cho',
                'name_jp' => '上川町',
            ],
            [
                'code' => '014583',
                'prefecture_id' => 1,
                'name_en' => 'Higashikawa-cho',
                'name_jp' => '東川町',
            ],
            [
                'code' => '014591',
                'prefecture_id' => 1,
                'name_en' => 'Biei-cho',
                'name_jp' => '美瑛町',
            ],
            [
                'code' => '014605',
                'prefecture_id' => 1,
                'name_en' => 'Kamifurano-cho',
                'name_jp' => '上富良野町',
            ],
            [
                'code' => '014613',
                'prefecture_id' => 1,
                'name_en' => 'Nakafurano-cho',
                'name_jp' => '中富良野町',
            ],
            [
                'code' => '014621',
                'prefecture_id' => 1,
                'name_en' => 'Minamifurano-cho',
                'name_jp' => '南富良野町',
            ],
            [
                'code' => '014630',
                'prefecture_id' => 1,
                'name_en' => 'Shimukappu-mura',
                'name_jp' => '占冠村',
            ],
            [
                'code' => '014648',
                'prefecture_id' => 1,
                'name_en' => 'Wassam-cho',
                'name_jp' => '和寒町',
            ],
            [
                'code' => '014656',
                'prefecture_id' => 1,
                'name_en' => 'Kenbuchi-cho',
                'name_jp' => '剣淵町',
            ],
            [
                'code' => '014681',
                'prefecture_id' => 1,
                'name_en' => 'Shimokawa-cho',
                'name_jp' => '下川町',
            ],
            [
                'code' => '014699',
                'prefecture_id' => 1,
                'name_en' => 'Bifuka-cho',
                'name_jp' => '美深町',
            ],
            [
                'code' => '014702',
                'prefecture_id' => 1,
                'name_en' => 'Otoineppu-mura',
                'name_jp' => '音威子府村',
            ],
            [
                'code' => '014711',
                'prefecture_id' => 1,
                'name_en' => 'Nakagawa-cho',
                'name_jp' => '中川町',
            ],
            [
                'code' => '014729',
                'prefecture_id' => 1,
                'name_en' => 'Horokanai-cho',
                'name_jp' => '幌加内町',
            ],
            [
                'code' => '014818',
                'prefecture_id' => 1,
                'name_en' => 'Mashike-cho',
                'name_jp' => '増毛町',
            ],
            [
                'code' => '014826',
                'prefecture_id' => 1,
                'name_en' => 'Obira-cho',
                'name_jp' => '小平町',
            ],
            [
                'code' => '014834',
                'prefecture_id' => 1,
                'name_en' => 'Tomamae-cho',
                'name_jp' => '苫前町',
            ],
            [
                'code' => '014842',
                'prefecture_id' => 1,
                'name_en' => 'Haboro-cho',
                'name_jp' => '羽幌町',
            ],
            [
                'code' => '014851',
                'prefecture_id' => 1,
                'name_en' => 'Shosanbetsu-mura',
                'name_jp' => '初山別村',
            ],
            [
                'code' => '014869',
                'prefecture_id' => 1,
                'name_en' => 'Enbetsu-cho',
                'name_jp' => '遠別町',
            ],
            [
                'code' => '014877',
                'prefecture_id' => 1,
                'name_en' => 'Teshio-cho',
                'name_jp' => '天塩町',
            ],
            [
                'code' => '015113',
                'prefecture_id' => 1,
                'name_en' => 'Sarufutsu-mura',
                'name_jp' => '猿払村',
            ],
            [
                'code' => '015121',
                'prefecture_id' => 1,
                'name_en' => 'Hamatonbetsu-cho',
                'name_jp' => '浜頓別町',
            ],
            [
                'code' => '015130',
                'prefecture_id' => 1,
                'name_en' => 'Nakatombetsu-cho',
                'name_jp' => '中頓別町',
            ],
            [
                'code' => '015148',
                'prefecture_id' => 1,
                'name_en' => 'Esashi-cho',
                'name_jp' => '枝幸町',
            ],
            [
                'code' => '015164',
                'prefecture_id' => 1,
                'name_en' => 'Toyotomi-cho',
                'name_jp' => '豊富町',
            ],
            [
                'code' => '015172',
                'prefecture_id' => 1,
                'name_en' => 'Rebun-cho',
                'name_jp' => '礼文町',
            ],
            [
                'code' => '015181',
                'prefecture_id' => 1,
                'name_en' => 'Rishiri-cho',
                'name_jp' => '利尻町',
            ],
            [
                'code' => '015199',
                'prefecture_id' => 1,
                'name_en' => 'Rishirifuji-cho',
                'name_jp' => '利尻富士町',
            ],
            [
                'code' => '015202',
                'prefecture_id' => 1,
                'name_en' => 'Horonobe-cho',
                'name_jp' => '幌延町',
            ],
            [
                'code' => '015431',
                'prefecture_id' => 1,
                'name_en' => 'Bihoro-cho',
                'name_jp' => '美幌町',
            ],
            [
                'code' => '015440',
                'prefecture_id' => 1,
                'name_en' => 'Tsubetsu-cho',
                'name_jp' => '津別町',
            ],
            [
                'code' => '015458',
                'prefecture_id' => 1,
                'name_en' => 'Shari-cho',
                'name_jp' => '斜里町',
            ],
            [
                'code' => '015466',
                'prefecture_id' => 1,
                'name_en' => 'Kiyosato-cho',
                'name_jp' => '清里町',
            ],
            [
                'code' => '015474',
                'prefecture_id' => 1,
                'name_en' => 'Koshimizu-cho',
                'name_jp' => '小清水町',
            ],
            [
                'code' => '015491',
                'prefecture_id' => 1,
                'name_en' => 'Kunneppu-cho',
                'name_jp' => '訓子府町',
            ],
            [
                'code' => '015504',
                'prefecture_id' => 1,
                'name_en' => 'Oketo-cho',
                'name_jp' => '置戸町',
            ],
            [
                'code' => '015521',
                'prefecture_id' => 1,
                'name_en' => 'Saroma-cho',
                'name_jp' => '佐呂間町',
            ],
            [
                'code' => '015555',
                'prefecture_id' => 1,
                'name_en' => 'Engaru-cho',
                'name_jp' => '遠軽町',
            ],
            [
                'code' => '015598',
                'prefecture_id' => 1,
                'name_en' => 'Yubetsu-cho',
                'name_jp' => '湧別町',
            ],
            [
                'code' => '015601',
                'prefecture_id' => 1,
                'name_en' => 'Takinoue-cho',
                'name_jp' => '滝上町',
            ],
            [
                'code' => '015610',
                'prefecture_id' => 1,
                'name_en' => 'Okoppe-cho',
                'name_jp' => '興部町',
            ],
            [
                'code' => '015628',
                'prefecture_id' => 1,
                'name_en' => 'Nishiokoppe-mura',
                'name_jp' => '西興部村',
            ],
            [
                'code' => '015636',
                'prefecture_id' => 1,
                'name_en' => 'Oumu-cho',
                'name_jp' => '雄武町',
            ],
            [
                'code' => '015644',
                'prefecture_id' => 1,
                'name_en' => 'Ozora-cho',
                'name_jp' => '大空町',
            ],
            [
                'code' => '015717',
                'prefecture_id' => 1,
                'name_en' => 'Toyoura-cho',
                'name_jp' => '豊浦町',
            ],
            [
                'code' => '015750',
                'prefecture_id' => 1,
                'name_en' => 'Soya-cho',
                'name_jp' => '壮瞥町',
            ],
            [
                'code' => '015784',
                'prefecture_id' => 1,
                'name_en' => 'Shiraoi-cho',
                'name_jp' => '白老町',
            ],
            [
                'code' => '015814',
                'prefecture_id' => 1,
                'name_en' => 'Atsuma-cho',
                'name_jp' => '厚真町',
            ],
            [
                'code' => '015849',
                'prefecture_id' => 1,
                'name_en' => 'Touyako-cho',
                'name_jp' => '洞爺湖町',
            ],
            [
                'code' => '015857',
                'prefecture_id' => 1,
                'name_en' => 'Abira-cho',
                'name_jp' => '安平町',
            ],
            [
                'code' => '015865',
                'prefecture_id' => 1,
                'name_en' => 'Mukawa-cho',
                'name_jp' => 'むかわ町',
            ],
            [
                'code' => '016012',
                'prefecture_id' => 1,
                'name_en' => 'Hidaka-cho',
                'name_jp' => '日高町',
            ],
            [
                'code' => '016021',
                'prefecture_id' => 1,
                'name_en' => 'Biratori-cho',
                'name_jp' => '平取町',
            ],
            [
                'code' => '016047',
                'prefecture_id' => 1,
                'name_en' => 'Niikappu-cho',
                'name_jp' => '新冠町',
            ],
            [
                'code' => '016071',
                'prefecture_id' => 1,
                'name_en' => 'Urakawa-cho',
                'name_jp' => '浦河町',
            ],
            [
                'code' => '016080',
                'prefecture_id' => 1,
                'name_en' => 'Samani-cho',
                'name_jp' => '様似町',
            ],
            [
                'code' => '016098',
                'prefecture_id' => 1,
                'name_en' => 'Erimocho',
                'name_jp' => 'えりも町',
            ],
            [
                'code' => '016101',
                'prefecture_id' => 1,
                'name_en' => 'Shinhidakacho',
                'name_jp' => '新ひだか町',
            ],
            [
                'code' => '016314',
                'prefecture_id' => 1,
                'name_en' => 'Otofukecho',
                'name_jp' => '音更町',
            ],
            [
                'code' => '016322',
                'prefecture_id' => 1,
                'name_en' => 'Shihorocho',
                'name_jp' => '士幌町',
            ],
            [
                'code' => '016331',
                'prefecture_id' => 1,
                'name_en' => 'Kamishihorocho',
                'name_jp' => '上士幌町',
            ],
            [
                'code' => '016349',
                'prefecture_id' => 1,
                'name_en' => 'Shikaoicho',
                'name_jp' => '鹿追町',
            ],
            [
                'code' => '016357',
                'prefecture_id' => 1,
                'name_en' => 'Shintokucho',
                'name_jp' => '新得町',
            ],
            [
                'code' => '016365',
                'prefecture_id' => 1,
                'name_en' => 'Shimizucho',
                'name_jp' => '清水町',
            ],
            [
                'code' => '016373',
                'prefecture_id' => 1,
                'name_en' => 'Memurocho',
                'name_jp' => '芽室町',
            ],
            [
                'code' => '016381',
                'prefecture_id' => 1,
                'name_en' => 'Nakasatsunaimura',
                'name_jp' => '中札内村',
            ],
            [
                'code' => '016390',
                'prefecture_id' => 1,
                'name_en' => 'Sarabetsumura',
                'name_jp' => '更別村',
            ],
            [
                'code' => '016411',
                'prefecture_id' => 1,
                'name_en' => 'Taikicho',
                'name_jp' => '大樹町',
            ],
            [
                'code' => '016420',
                'prefecture_id' => 1,
                'name_en' => 'Hiroocho',
                'name_jp' => '広尾町',
            ],
            [
                'code' => '016438',
                'prefecture_id' => 1,
                'name_en' => 'Makubetsucho',
                'name_jp' => '幕別町',
            ],
            [
                'code' => '016446',
                'prefecture_id' => 1,
                'name_en' => 'Ikedacho',
                'name_jp' => '池田町',
            ],
            [
                'code' => '016454',
                'prefecture_id' => 1,
                'name_en' => 'Toyokorocho',
                'name_jp' => '豊頃町',
            ],
            [
                'code' => '016462',
                'prefecture_id' => 1,
                'name_en' => 'Honbetsucho',
                'name_jp' => '本別町',
            ],
            [
                'code' => '016471',
                'prefecture_id' => 1,
                'name_en' => 'Ashorocho',
                'name_jp' => '足寄町',
            ],
            [
                'code' => '016489',
                'prefecture_id' => 1,
                'name_en' => 'Rikubetsucho',
                'name_jp' => '陸別町',
            ],
            [
                'code' => '016497',
                'prefecture_id' => 1,
                'name_en' => 'Urahorocho',
                'name_jp' => '浦幌町',
            ],
            [
                'code' => '016616',
                'prefecture_id' => 1,
                'name_en' => 'Kushirocho',
                'name_jp' => '釧路町',
            ],
            [
                'code' => '016624',
                'prefecture_id' => 1,
                'name_en' => 'Akashicho',
                'name_jp' => '厚岸町',
            ],
            [
                'code' => '016632',
                'prefecture_id' => 1,
                'name_en' => 'Hamanakacho',
                'name_jp' => '浜中町',
            ],
            [
                'code' => '016641',
                'prefecture_id' => 1,
                'name_en' => 'Shibecha-cho',
                'name_jp' => '標茶町',
            ],
            [
                'code' => '016659',
                'prefecture_id' => 1,
                'name_en' => 'Teshikaga-cho',
                'name_jp' => '弟子屈町',
            ],
            [
                'code' => '016675',
                'prefecture_id' => 1,
                'name_en' => 'Tsurimura',
                'name_jp' => '鶴居村',
            ],
            [
                'code' => '016683',
                'prefecture_id' => 1,
                'name_en' => 'Shiranukacho',
                'name_jp' => '白糠町',
            ],
            [
                'code' => '016918',
                'prefecture_id' => 1,
                'name_en' => 'Betsukai-cho',
                'name_jp' => '別海町',
            ],
            [
                'code' => '016926',
                'prefecture_id' => 1,
                'name_en' => 'Nakashibetsucho',
                'name_jp' => '中標津町',
            ],
            [
                'code' => '016934',
                'prefecture_id' => 1,
                'name_en' => 'Shibetsucho',
                'name_jp' => '標津町',
            ],
            [
                'code' => '016942',
                'prefecture_id' => 1,
                'name_en' => 'Rausucho',
                'name_jp' => '羅臼町',
            ]
        ]);

        $data->map(function ($areaAttributes) {
            return City::create($areaAttributes);
        });
    }
}
