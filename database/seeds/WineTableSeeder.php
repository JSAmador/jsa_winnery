<?php

use Illuminate\Database\Seeder;

class WineTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $feed = file_get_contents('https://www.winespectator.com/rss/rss?t=dwp');
        $content = new SimpleXMLElement($feed);
        foreach($content->channel->item as $entry) {
            $name = $entry->title;
            $link = $entry->link;
            $date = date('Y-m-d H:i:s', strtotime($entry->pubDate));
            DB::table('wines')->insert(
                [
                    'name' => $name,
                    'link' => $link,
                    'date' => $date,
                    'is_available' => true
                ]
            );

        }
    }
}
