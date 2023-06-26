<?php

namespace Database\Seeders\Samples;

use IntlChar;
use App\Models\Area;
use App\Models\City;
use App\Models\Plan;
use App\Models\User;
use App\Models\Genre;
use App\Models\Place;
use App\Models\Keyword;
use App\Models\Interest;
use App\Models\PlanDetail;
use App\Models\PlaceKeyword;
use App\Models\PlanFavorite;
use App\Models\PlaceFavorite;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class MyPageSeeder extends Seeder
{
    const LOCAL_STORAGE_FOLDER = 'public/sample/';

    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $user = User::create([
            'first_name'  => 'my_page',
            'last_name' => 'user',
            'email' => "my_page_user@example.com",
            'password' => Hash::make('password'),
            'role_id' => User::USER_ROLE_ID,
        ]);

        $genre = Genre::create([
            'name'  => 'My Page Genre',
        ]);

        $city = City::get()->first();
        $prefecture = $city->prefecture;
        $area = $prefecture->area;

        // Add 10 Keywords and Interests
        for ($i = 1; $i <= 10; $i++)
        {
            $keyword = Keyword::create([
                'name'  => "My Page Keyword {$i}",
                'genre_id' => $genre->id,
            ]);

            Interest::create([
                'user_id' => $user->id,
                'keyword_id' => $keyword->id,
            ]);
        }

        // Add 18 Places and Place Keywords and Place Favorites
        for ($i = 1; $i <= 18; $i++)
        {
            $place = Place::create([
                'place_category' => 'spot',
                'name_en'  => "My Page Place {$i}",
                'area_id' => $area->id,
                'prefecture_id' => $prefecture->id,
                'city_id' => $city->id,
                'image' => time() + $i . ".png",
            ]);
            $num = rand(1, 3);
            copy("public/images/sample/place_{$num}.png", "storage/app/public/sample/{$place->image}");

            PlaceKeyword::create([
                'place_id' => $place->id,
                'keyword_id' => $keyword->id,
            ]);

            PlaceFavorite::create([
                'user_id' => $user->id,
                'place_id' => $place->id,
            ]);
        }

        // Add 10 Plans and Plan Details and Plan Favorites
        for ($i = 1; $i <= 10; $i++)
        {
            $plan = Plan::create([
                'user_id' => $user->id,
                'user_type' => 'admin',
                'title'  => "My Page Plan {$i}",
            ]);

            for ($j = 1; $j <= 3; $j++)
            {
                for ($k = 1; $k <= 5; $k++)
                {
                    PlanDetail::create([
                        'plan_id' => $plan->id,
                        'day' => $j,
                        'place_id' => Place::get()->random()->id,
                        'sort_no' => $k,
                    ]);
                }
            }

            PlanFavorite::create([
                'user_id' => $user->id,
                'plan_id' => $plan->id,
            ]);
        }

        // Add 10 My Plans and Plan Details
        for ($i = 1; $i <= 10; $i++)
        {
            $plan = Plan::create([
                'user_id' => $user->id,
                'user_type' => 'user',
                'title'  => "My Page My Own Plan {$i}",
            ]);

            for ($j = 1; $j <= 3; $j++)
            {
                for ($k = 1; $k <= 5; $k++)
                {
                    PlanDetail::create([
                        'plan_id' => $plan->id,
                        'day' => $j,
                        'place_id' => Place::get()->random()->id,
                        'sort_no' => $k,
                    ]);
                }
            }
        }
    }
}
