<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class ArtistTypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Schema::disableForeignKeyConstraints();
        DB::table('artist_type')->truncate();
        Schema::enableForeignKeyConstraints();

        $artistTypes = [
            [
                'artist_firstname'=>'Daniel',
                'artist_lastname'=>'Marcelin',
                'type'=>'auteur',
            ],
            [
                'artist_firstname'=>'Philippe',
                'artist_lastname'=>'Laurent',
                'type'=>'auteur',
            ],
            [
                'artist_firstname'=>'Daniel',
                'artist_lastname'=>'Marcelin',
                'type'=>'scénographe',
            ],
            [
                'artist_firstname'=>'Philippe',
                'artist_lastname'=>'Laurent',
                'type'=>'scénographe',
            ],
            [
                'artist_firstname'=>'Daniel',
                'artist_lastname'=>'Marcelin',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Marius',
                'artist_lastname'=>'Von Mayenburg',
                'type'=>'auteur',
            ],
            [
                'artist_firstname'=>'Olivier',
                'artist_lastname'=>'Boudon',
                'type'=>'scénographe',
            ],
            [
                'artist_firstname'=>'Anne Marie',
                'artist_lastname'=>'Loop',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Pietro',
                'artist_lastname'=>'Varasso',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Laurent',
                'artist_lastname'=>'Caron',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Élena',
                'artist_lastname'=>'Perez',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Guillaume',
                'artist_lastname'=>'Alexandre',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Claude',
                'artist_lastname'=>'Semal',
                'type'=>'auteur',
            ],
            [
                'artist_firstname'=>'Laurence',
                'artist_lastname'=>'Warin',
                'type'=>'scénographe',
            ],
            [
                'artist_firstname'=>'Claude',
                'artist_lastname'=>'Semal',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Pierre',
                'artist_lastname'=>'Wayburn',
                'type'=>'auteur',
            ],
            [
                'artist_firstname'=>'Gwendoline',
                'artist_lastname'=>'Gauthier',
                'type'=>'auteur',
            ],
            [
                'artist_firstname'=>'Philippe',
                'artist_lastname'=>'Laurent',
                'type'=>'scénographe',
            ],
            [
                'artist_firstname'=>'Pierre',
                'artist_lastname'=>'Wayburn',
                'type'=>'comédien',
            ],
            [
                'artist_firstname'=>'Gwendoline',
                'artist_lastname'=>'Gauthier',
                'type'=>'comédien',
            ],
        ];

        foreach($artistTypes as &$artistType) {
            $artist = DB::table('artists')
                ->where('firstname',$artistType['artist_firstname'])
                ->where('lastname',$artistType['artist_lastname'])
                ->first();
            if($artist==null) {
                dd($artistType);
            }
            $type = DB::table('types')
                ->where('type',$artistType['type'])
                ->first();

            unset($artistType['artist_firstname']);
            unset($artistType['artist_lastname']);
            unset($artistType['type']);

            $artistType['artist_id'] = $artist->id;
            $artistType['type_id'] = $type->id;
        }
        unset($artistType);

        DB::table('artist_type')->insert($artistTypes);
    }
}
