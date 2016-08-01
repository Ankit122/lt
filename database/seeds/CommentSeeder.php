<?php

use Illuminate\Database\Seeder;

class CommentSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
            'hotel_id' => '1',
            'comments' => 'Check in was good and staff took good take all the way to the room. Like the furniture in room and the kikchens utensils are good quality.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '1',
            'comments' => 'Yes! The Kids room! our Kids loved it ? The Staff!   The hotel nice modern and big.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '2',
            'comments' => 'Everything was perfect....Congratulations! For your hotel, we really had very good time. We will certainly come back again one day.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '2',
            'comments' => 'Thank you for a very nice hotel with great services'
        ]);

        DB::table('comments')->insert([
            'hotel_id' => '3',
            'comments' => 'Had a wonderful stay at the hotel, the staff were fantastic. Will definitely stay again'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '3',
            'comments' => 'We were delighted by our stay at Hotel A La Commedia, and could easily see why Michelin Italia had liked it !'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '4',
            'comments' => 'The front desk staff are exceptional, always friendly and helpful. I do not speak Italian and I was welcomed as an old friend returning home.'
        ]);
        DB::table('comments')->insert([
            'hotel_id' => '4',
            'comments' => 'The roof top bar is rare treat, I watched on a big screen TV as Portugal beat France. Great night, one I will not soon forget.'
        ]);

    }
}
