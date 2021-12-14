<?php

namespace Database\Seeders;

use App\Models\Articles;
use App\Models\ArticleTags;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class ArticleTagsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $articleCount = Articles::all()->count();

        for ($i=1; $i<$articleCount + 1; $i++) {
            DB::table('article_tags')->insert([
                'article_id' => $i,
                'label' => Str::random(10)
            ]);
        }
    }
}
