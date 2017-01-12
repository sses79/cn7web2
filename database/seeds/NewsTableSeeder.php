<?php

use Illuminate\Database\Seeder;
use App\Models\News;

class NewsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('news')->truncate();

        $news = array(
            ['title' => 'news 0', 'imageUrl' => '3d.png', 'content' => 'Odit, itaque, deserunt corporis vero ipsum nisi eius odio natus ullam provident.'],
            ['title' => 'news 1', 'imageUrl' => 'compass.png', 'content' => 'Excepturi, obcaecati, quisquam id molestias eaque asperiores voluptatibus cupiditate error assumenda delectus odit similique earum .']
        );

        // Loop through each user above and create the record for them in the database
        foreach ($news as $s_news)
        {
            News::create($s_news);
        }
    }
}
