<?php

namespace Database\Seeders\Samples;

use App\Models\AffiliateSite;
use App\Models\Answer;
use App\Models\Genre;
use App\Models\Interest;
use App\Models\Keyword;
use App\Models\Place;
use App\Models\PlaceAffiliateSite;
use App\Models\PlaceFavorite;
use App\Models\PlaceImage;
use App\Models\PlaceKeyword;
use App\Models\Plan;
use App\Models\PlanDetail;
use App\Models\PlanFavorite;
use App\Models\PlanKeyword;
use App\Models\Question;
use App\Models\User;
use Illuminate\Database\Seeder;

class TestDataSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // #Users
        $f = fopen("database/seeders/samples/csv/users.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                User::create([
                    'id'  => $line[0],
                    'nick_name'  => $line[1],
                    'first_name'  => $line[2],
                    'last_name'  => $line[3],
                    'age'  => $line[4],
                    'gender'  => $line[5],
                    'email'  => $line[6],
                    'password'  => $line[7],
                    'status'  => $line[8],
                    'role_id'  => $line[9],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }

        fclose($f);

        echo "--- end ---\n";

        // #Place
        echo "---start---\n";

        // #ファイルの読み込み
        $f = fopen("database/seeders/samples/csv/places.csv", "r");

        // csvのデータを取得
        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                Place::create([
                    'id'  => $line[0],
                    'place_category' => $line[1],
                    'name_en' => $line[2],
                    'name_jp' => $line[3],
                    'opening_time' => $line[4],
                    'ending_time' => $line[5],
                    'url' => $line[6],
                    'area_id' => $line[7],
                    'prefecture_id' => $line[8],
                    'city_id' => $line[9],
                    'address' => $line[10],
                    'spend_time' => $line[11],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                    'image' => $line[12],
                    'description' => $line[13],
                    'open_ampm' => $line[14],
                    'end_ampm' => $line[15],
                ]);
            }
            $cnt++;
        }

        // ファイルを閉じる
        fclose($f);

        echo "--- end ---\n";

        echo "---start---\n";

        // #PlaceImages
        $f = fopen("database/seeders/samples/csv/place_images.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                PlaceImage::create([
                    'id'  => $line[0],
                    'place_id' => $line[1],
                    'image_no' => $line[2],
                    'image' => $line[3],
                    'description' => $line[4],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                    'name_en' => $line[5],
                    'name_jp' => $line[6],
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";

        // #Genres
        $f = fopen("database/seeders/samples/csv/genres.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                Genre::create([
                    'id'  => $line[0],
                    'name'  => $line[1],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }

        fclose($f);

        echo "--- end ---\n";

        // #Keywords
        $f = fopen("database/seeders/samples/csv/keywords.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                Keyword::create([
                    'id'  => $line[0],
                    'genre_id'  => $line[1],
                    'name'  => $line[2],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";
    
        // #PlaceKeywords
        $f = fopen("database/seeders/samples/csv/place_keywords.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                PlaceKeyword::create([
                    'place_id' => $line[0],
                    'keyword_id' => $line[1],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";
        
        // #Questions
        $f = fopen("database/seeders/samples/csv/questions.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                Question::create([
                    'id'  => $line[0],
                    'question' => $line[1],
                    'genre_id'  => $line[2],
                    'keyword_id'  => $line[3],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";

        // #Answers
        $f = fopen("database/seeders/samples/csv/answers.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                Answer::create([
                    'id'  => $line[0],
                    'question_id' => $line[1],
                    'answer_no' => $line[2],
                    'answer' => $line[3],
                    'genre_id'  => $line[4],
                    'keyword_id'  => $line[5],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";

        // #Affiliate_sites
        $f = fopen("database/seeders/samples/csv/affiliate_sites.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                AffiliateSite::create([
                    'id'  => $line[0],
                    'site_name' => $line[1],
                    'site_url' => $line[2],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";

        // #Place_affiliate_sites
        $f = fopen("database/seeders/samples/csv/place_affiliate_sites.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                PlaceAffiliateSite::create([
                    'place_id'  => $line[0],
                    'affiliate_id'  => $line[1],
                    'price' => $line[2],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";
        
        // #Plans
        $f = fopen("database/seeders/samples/csv/plans.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                Plan::create([
                    'id'  => $line[0],
                    'user_id'  => $line[1],
                    'user_type' => $line[2],
                    'title' => $line[3],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";

        // #Plan_details
        $f = fopen("database/seeders/samples/csv/plan_details.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                PlanDetail::create([
                    'id'  => $line[0],
                    'plan_id'  => $line[1],
                    'day' => $line[2],
                    'place_id' => $line[3],
                    'sort_no' => $line[4],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";

        // #Plan_keywords
        $f = fopen("database/seeders/samples/csv/plan_keywords.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                PlanKeyword::create([
                    'plan_id'  => $line[0],
                    'keyword_id' => $line[1],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";

        // #Place_favorites
        $f = fopen("database/seeders/samples/csv/place_favorites.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                PlaceFavorite::create([
                    'user_id'  => $line[0],
                    'place_id' => $line[1],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";

        // #Plan_favorites
        $f = fopen("database/seeders/samples/csv/plan_favorites.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                PlanFavorite::create([
                    'user_id'  => $line[0],
                    'plan_id' => $line[1],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";

        // #interests
        $f = fopen("database/seeders/samples/csv/interests.csv", "r");

        $cnt = 1;
        while($line = fgetcsv($f)) {
            if ($cnt !== 1) {
                Interest::create([
                    'id' => $line[0],
                    'user_id'  => $line[1],
                    'keyword_id' => $line[2],
                    'created_at' => date("Y/m/d H:i:s"),
                    'updated_at' => date("Y/m/d H:i:s"),
                ]);
            }
            $cnt++;
        }
        
        fclose($f);

        echo "--- end ---\n";
    }
}
