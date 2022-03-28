<?php

namespace Database\Seeders;

use Carbon\Carbon;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class SoccerSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $now = (new Carbon('now'))->format('Y-m-d H:i:s');
        DB::table('competitions')->insert([
            ['name' => 'Eerste klasse A', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'Nepcompetitie', 'created_at' => $now, 'updated_at' => null],
        ]);

        DB::table('clubs')->insert([
            ['name' => 'Royal Antwerp FC', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'Club Brugge', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'KAA Gent', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'Union Sint-Gillis', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'Cercle Brugge', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'Beerschot VA', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'Standard Luik', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'Oud-Heverlee Leuven', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'KV Kortrijk', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'Sporting Charleroi', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'KV Mechelen', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'KV Oostende', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'RSC Anderlecht', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'RFC Seraing', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'KRC Genk', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'Sint-Truidense VV', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'KAS Eupen', 'created_at' => $now, 'updated_at' => null],
            ['name' => 'SV Zulte Waregem', 'created_at' => $now, 'updated_at' => null],
        ]);

        DB::table('club_grounds')->insert([
            ['club_id' => 1, 'name' => 'Bosuilstadion', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 2, 'name' => 'Jan Breydelstadion', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 3, 'name' => 'Ghelamco Arena', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 4, 'name' => 'Joseph Marienstadion', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 5, 'name' => 'Jan Breydelstadion', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 6, 'name' => 'Olympisch Stadion', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 7, 'name' => 'Maurice Dufrasnestadion', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 8, 'name' => 'King Power at Den Dreef Stadion', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 9, 'name' => 'Guldensporenstadion', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 10, 'name' => 'Stade du Pays de Charleroi', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 11, 'name' => 'AFAS-stadion Achter de Kazerne', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 12, 'name' => 'Diaz Arena', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 13, 'name' => 'Lotto Park', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 14, 'name' => 'Pairaystadion', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 15, 'name' => 'Cegeka Arena', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 16, 'name' => 'Stayen', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 17, 'name' => 'Kehrwegstadion', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
            ['club_id' => 18, 'name' => 'Elindus Arena', 'address_line_1' => 'dummy', 'address_line_2' => 'dummy', 'created_at' => $now, 'updated_at' => null],
        ]);

        DB::table('games')->insert([
            [
                'competition_id' => 1,
                'starts_at' => '2022-04-02 18:30:00',
                'home_club_id' => 12,
                'away_club_id' => 14,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 1,
                'starts_at' => '2022-04-02 18:30:00',
                'home_club_id' => 11,
                'away_club_id' => 9,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 1,
                'starts_at' => '2022-04-01 20:45:00',
                'home_club_id' => 6,
                'away_club_id' => 2,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 1,
                'starts_at' => '2022-04-02 16:15:00',
                'home_club_id' => 18,
                'away_club_id' => 16,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 1,
                'starts_at' => '2022-03-20 21:00:00',
                'home_club_id' => 16,
                'away_club_id' => 6,
                'home_score' => 3,
                'away_score' => 2,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 1,
                'starts_at' => '2022-03-20 18:30:00',
                'home_club_id' => 3,
                'away_club_id' => 13,
                'home_score' => 1,
                'away_score' => 0,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 1,
                'starts_at' => '2022-03-20 16:00:00',
                'home_club_id' => 9,
                'away_club_id' => 7,
                'home_score' => 0,
                'away_score' => 1,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 1,
                'starts_at' => '2022-03-20 13:30:00',
                'home_club_id' => 2,
                'away_club_id' => 15,
                'home_score' => 3,
                'away_score' => 1,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-04-09 19:00:00',
                'home_club_id' => 1,
                'away_club_id' => 2,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-04-08 19:00:00',
                'home_club_id' => 3,
                'away_club_id' => 4,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-04-07 19:00:00',
                'home_club_id' => 5,
                'away_club_id' => 6,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-04-06 19:00:00',
                'home_club_id' => 7,
                'away_club_id' => 8,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-04-05 19:00:00',
                'home_club_id' => 9,
                'away_club_id' => 10,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-04-04 19:00:00',
                'home_club_id' => 11,
                'away_club_id' => 12,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-04-03 19:00:00',
                'home_club_id' => 13,
                'away_club_id' => 14,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-04-02 19:00:00',
                'home_club_id' => 15,
                'away_club_id' => 16,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-04-01 19:00:00',
                'home_club_id' => 17,
                'away_club_id' => 18,
                'home_score' => null,
                'away_score' => null,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-03-24 18:00:00',
                'home_club_id' => 1,
                'away_club_id' => 3,
                'home_score' => 1,
                'away_score' => 3,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-03-24 19:00:00',
                'home_club_id' => 2,
                'away_club_id' => 4,
                'home_score' => 1,
                'away_score' => 1,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-03-24 20:00:00',
                'home_club_id' => 5,
                'away_club_id' => 7,
                'home_score' => 0,
                'away_score' => 0,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-03-25 18:00:00',
                'home_club_id' => 6,
                'away_club_id' => 8,
                'home_score' => 2,
                'away_score' => 1,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-03-25 19:00:00',
                'home_club_id' => 9,
                'away_club_id' => 11,
                'home_score' => 3,
                'away_score' => 1,
                'created_at' => $now,
                'updated_at' => null
            ],
            [
                'competition_id' => 2,
                'starts_at' => '2022-03-25 20:00:00',
                'home_club_id' => 10,
                'away_club_id' => 12,
                'home_score' => 0,
                'away_score' => 1,
                'created_at' => $now,
                'updated_at' => null
            ],


        ]);


    }
}
