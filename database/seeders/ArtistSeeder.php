<?php

namespace Database\Seeders;

use App\Models\Artist;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArtistSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Empty the table
        Artist::truncate();

        $artists = [
            [
                'firstname' => 'Daniel',
                'lastname' => 'Marcelin',
            ],
            [
                'firstname' => 'Philippe',
                'lastname' => 'Laurent',
            ],
            [
                'firstname' => 'Marius',
                'lastname' => 'Von Mayenburg',
            ],
            [
                'firstname' => 'Olivier',
                'lastname' => 'Boudon',
            ],
            [
                'firstname' => 'Anne Marie',
                'lastname' => 'Loop',
            ],
            [
                'firstname' => 'Pietro',
                'lastname' => 'Vassaro',
            ],
            [
                'firstname' => 'Laurent',
                'lastname' => 'Caron',
            ],
            [
                'firstname' => 'Élena',
                'lastname' => 'Perez',
            ],
            [
                'firstname' => 'Guillaume',
                'lastname' => 'Alexandre',
            ],
            [
                'firstname' => 'Claude',
                'lastname' => 'Semal',
            ],
            [
                'firstname' => 'Laurence',
                'lastname' => 'Warin',
            ],
            [
                'firstname' => 'Pierre',
                'lastname' => 'Wayburn',
            ],
            [
                'firstname' => 'Gwendoline',
                'lastname' => 'Gauthier',
            ],
        ];

        //Insert data into table
        DB::table('artists')->insert($artists);
    }
}
