<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        $this->call(AdminUserSeeder::class);
        $this->call([
            AreaSeeder::class,
            PrefectureSeeder::class,
            // Cities
            City_01_HokkaidoSeeder::class,
            City_02_Aomori_Seeder::class,
            City_03_Iwate_Seeder::class,
            City_04_Miyagi_Seeder::class,
            City_05_Akita_Seeder::class,
            City_06_Yamagata_Seeder::class,
            City_07_Fukushima_Seeder::class,
            City_08_Ibaragi_Seeder::class,
            City_09_Tochigi_Seeder::class,
            City_10_Gunma_Seeder::class,
            City_11_Saitama_Seeder::class,
            City_12_Chiba_Seeder::class,
            City_13_Tokyo_Seeder::class,
            City_14_Kanagawa_Seeder::class,
            City_15_Niigata_Seeder::class,
            City_16_Toyama_Seeder::class,
            City_17_Ishikawa_Seeder::class,
            City_18_Fukui_Seeder::class,
            City_19_Yamanashi_Seeder::class,
            City_20_Nagano_Seeder::class,
            City_21_Gifu_Seeder::class,
            City_22_Shizuoka_Seeder::class,
            City_23_Aichi_Seeder::class,
            City_24_Mie_Seeder::class,
            City_25_Shiga_Seeder::class,
            City_26_Kyoto_Seeder::class,
            City_27_Osaka_Seeder::class,
            City_28_Hyogo_Seeder::class,
            City_29_Nara_Seeder::class,
            City_30_Wakayama_Seeder::class,
            City_31_Tottori_Seeder::class,
            City_32_Shimane_Seeder::class,
            City_33_Okayama_Seeder::class,
            City_34_Hiroshima_Seeder::class,
            City_35_Yamaguchi_Seeder::class,
            City_36_Tokushima_Seeder::class,
            City_37_Kagawa_Seeder::class,
            City_38_Ehime_Seeder::class,
            City_39_Kochi_Seeder::class,
            City_40_Fukuoka_Seeder::class,
            City_41_Saga_Seeder::class,
            City_42_Nagasaki_Seeder::class,
            City_43_Kumamoto_Seeder::class,
            City_44_Oita_Seeder::class,
            City_45_Miyazaki_Seeder::class,
            City_46_Kagoshima_Seeder::class,
            City_47_Okinawa_Seeder::class,
        ]);
    }
}
