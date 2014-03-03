<?php

class DatabaseSeeder extends Seeder {

	/**
	 * Run the database seeds.
	 *
	 * @return void
	 */
	public function run()
	{
		Eloquent::unguard();

		$this->call('CardsTableSeeder');
		$this->command->info('Cards table seeded!');
	}
}

class CardsTableSeeder extends Seeder {

    public function run()
    {
        DB::table('cards')->delete();

		// Level 1
		Card::create( array( 'id' => 1, 'name' => 'Geezard', 'u' => 1, 'r' => 4, 'd' => 1, 'l' => 5, 'level' => 1 ) );
		Card::create( array( 'id' => 2, 'name' => 'Funguar', 'u' => 5, 'r' => 1, 'd' => 1, 'l' => 3, 'level' => 1 ) );
		Card::create( array( 'id' => 3, 'name' => 'Bite Bug', 'u' => 1, 'r' => 3, 'd' => 3, 'l' => 5, 'level' => 1 ) );
		Card::create( array( 'id' => 4, 'name' => 'Red Bat', 'u' => 6, 'r' => 1, 'd' => 1, 'l' => 2, 'level' => 1 ) );
		Card::create( array( 'id' => 5, 'name' => 'Blobra', 'u' => 2, 'r' => 3, 'd' => 1, 'l' => 5, 'level' => 1 ) );
		Card::create( array( 'id' => 6, 'name' => 'Gayla', 'u' => 2, 'r' => 1, 'd' => 4, 'l' => 4, 'level' => 1 ) );
		Card::create( array( 'id' => 7, 'name' => 'Gesper', 'u' => 1, 'r' => 5, 'd' => 4, 'l' => 1, 'level' => 1 ) );
		Card::create( array( 'id' => 8, 'name' => 'Fastitocalon-F', 'u' => 3, 'r' => 5, 'd' => 2, 'l' => 1, 'level' => 1 ) );
		Card::create( array( 'id' => 9, 'name' => 'Blood Soul', 'u' => 2, 'r' => 1, 'd' => 6, 'l' => 1, 'level' => 1 ) );
		Card::create( array( 'id' => 10, 'name' => 'Caterchipillar', 'u' => 4, 'r' => 2, 'd' => 4, 'l' => 3, 'level' => 1 ) );
		Card::create( array( 'id' => 11, 'name' => 'Cockatrice', 'u' => 2, 'r' => 1, 'd' => 2, 'l' => 6, 'level' => 1 ) );

    	// Level 2
		Card::create( array( 'id' => 12, 'name' => 'Grat', 'u' => 7, 'r' => 1, 'd' => 3, 'l' => 1, 'level' => 2 ) );
		Card::create( array( 'id' => 13, 'name' => 'Buel', 'u' => 6, 'r' => 2, 'd' => 2, 'l' => 3, 'level' => 2 ) );
		Card::create( array( 'id' => 14, 'name' => 'Mesmerize', 'u' => 5, 'r' => 3, 'd' => 3, 'l' => 4, 'level' => 2 ) );
		Card::create( array( 'id' => 15, 'name' => 'Glacial Eye', 'u' => 6, 'r' => 1, 'd' => 4, 'l' => 3, 'level' => 2 ) );
		Card::create( array( 'id' => 16, 'name' => 'Belhelmel', 'u' => 3, 'r' => 4, 'd' => 5, 'l' => 3, 'level' => 2 ) );
		Card::create( array( 'id' => 17, 'name' => 'Thrustaevis', 'u' => 2, 'r' => 1, 'd' => 4, 'l' => 4, 'level' => 2 ) );
		Card::create( array( 'id' => 18, 'name' => 'Anacondaur', 'u' => 5, 'r' => 1, 'd' => 3, 'l' => 5, 'level' => 2 ) );
		Card::create( array( 'id' => 19, 'name' => 'Creeps', 'u' => 5, 'r' => 2, 'd' => 5, 'l' => 2, 'level' => 2 ) );
		Card::create( array( 'id' => 20, 'name' => 'Grendel', 'u' => 4, 'r' => 4, 'd' => 5, 'l' => 2, 'level' => 2 ) );
		Card::create( array( 'id' => 21, 'name' => 'Jelleye', 'u' => 3, 'r' => 2, 'd' => 1, 'l' => 7, 'level' => 2 ) );
		Card::create( array( 'id' => 22, 'name' => 'Grand Mantis', 'u' => 5, 'r' => 2, 'd' => 5, 'l' => 3, 'level' => 2 ) );

		// Level 3
		Card::create( array( 'id' => 23, 'name' => 'Forbidden', 'u' => 6, 'r' => 6, 'd' => 3, 'l' => 2, 'level' => 3 ) );
		Card::create( array( 'id' => 24, 'name' => 'Armadodo', 'u' => 6, 'r' => 3, 'd' => 1, 'l' => 6, 'level' => 3 ) );
		Card::create( array( 'id' => 25, 'name' => 'Tri-Face', 'u' => 3, 'r' => 5, 'd' => 5, 'l' => 5, 'level' => 3 ) );
		Card::create( array( 'id' => 26, 'name' => 'Fastitocalon', 'u' => 7, 'r' => 5, 'd' => 1, 'l' => 3, 'level' => 3 ) );
		Card::create( array( 'id' => 27, 'name' => 'Snow Lion', 'u' => 7, 'r' => 1, 'd' => 5, 'l' => 3, 'level' => 3 ) );
		Card::create( array( 'id' => 28, 'name' => 'Ochu', 'u' => 5, 'r' => 6, 'd' => 3, 'l' => 3, 'level' => 3 ) );
		Card::create( array( 'id' => 29, 'name' => 'SAM08G', 'u' => 5, 'r' => 6, 'd' => 2, 'l' => 4, 'level' => 3 ) );
		Card::create( array( 'id' => 30, 'name' => 'Death Claw', 'u' => 4, 'r' => 4, 'd' => 7, 'l' => 2, 'level' => 3 ) );
		Card::create( array( 'id' => 31, 'name' => 'Cactuar', 'u' => 6, 'r' => 2, 'd' => 6, 'l' => 3, 'level' => 3 ) );
		Card::create( array( 'id' => 32, 'name' => 'Tonberry', 'u' => 3, 'r' => 6, 'd' => 4, 'l' => 4, 'level' => 3 ) );
		Card::create( array( 'id' => 33, 'name' => 'Abyss Worm', 'u' => 7, 'r' => 2, 'd' => 3, 'l' => 5, 'level' => 3 ) );

		// Level 4
		Card::create( array( 'id' => 34, 'name' => 'Turtapod', 'u' => 2, 'r' => 3, 'd' => 6, 'l' => 7, 'level' => 4 ) );
		Card::create( array( 'id' => 35, 'name' => 'Vysage', 'u' => 6, 'r' => 5, 'd' => 4, 'l' => 5, 'level' => 4 ) );
		Card::create( array( 'id' => 36, 'name' => 'T-Rexaur', 'u' => 4, 'r' => 6, 'd' => 2, 'l' => 7, 'level' => 4 ) );
		Card::create( array( 'id' => 37, 'name' => 'Bomb', 'u' => 2, 'r' => 7, 'd' => 6, 'l' => 3, 'level' => 4 ) );
		Card::create( array( 'id' => 38, 'name' => 'Blitz', 'u' => 1, 'r' => 6, 'd' => 4, 'l' => 7, 'level' => 4 ) );
		Card::create( array( 'id' => 39, 'name' => 'Wendingo', 'u' => 7, 'r' => 3, 'd' => 1, 'l' => 6, 'level' => 4 ) );
		Card::create( array( 'id' => 40, 'name' => 'Torama', 'u' => 7, 'r' => 4, 'd' => 4, 'l' => 4, 'level' => 4 ) );
		Card::create( array( 'id' => 41, 'name' => 'Imp', 'u' => 3, 'r' => 7, 'd' => 3, 'l' => 6, 'level' => 4 ) );
		Card::create( array( 'id' => 42, 'name' => 'Blue Dragon', 'u' => 6, 'r' => 2, 'd' => 7, 'l' => 3, 'level' => 4 ) );
		Card::create( array( 'id' => 43, 'name' => 'Adamantoise', 'u' => 4, 'r' => 5, 'd' => 5, 'l' => 6, 'level' => 4 ) );
		Card::create( array( 'id' => 44, 'name' => 'Hexadragon', 'u' => 7, 'r' => 5, 'd' => 4, 'l' => 3, 'level' => 4 ) );

		// Level 5
		Card::create( array( 'id' => 45, 'name' => 'Iron Giant', 'u' => 6, 'r' => 5, 'd' => 6, 'l' => 5, 'level' => 5 ) );
		Card::create( array( 'id' => 46, 'name' => 'Behemoth', 'u' => 3, 'r' => 6, 'd' => 5, 'l' => 7, 'level' => 5 ) );
		Card::create( array( 'id' => 47, 'name' => 'Chimera', 'u' => 7, 'r' => 6, 'd' => 5, 'l' => 3, 'level' => 5 ) );
		Card::create( array( 'id' => 48, 'name' => 'Pupu', 'u' => 3, 'r' => 10, 'd' => 2, 'l' => 1, 'level' => 5 ) );
		Card::create( array( 'id' => 49, 'name' => 'Elastoid', 'u' => 6, 'r' => 2, 'd' => 6, 'l' => 7, 'level' => 5 ) );
		Card::create( array( 'id' => 50, 'name' => 'GIM47N', 'u' => 5, 'r' => 5, 'd' => 7, 'l' => 4, 'level' => 5 ) );
		Card::create( array( 'id' => 51, 'name' => 'Malboro', 'u' => 7, 'r' => 7, 'd' => 4, 'l' => 2, 'level' => 5 ) );
		Card::create( array( 'id' => 52, 'name' => 'Ruby Dragon', 'u' => 7, 'r' => 2, 'd' => 7, 'l' => 4, 'level' => 5 ) );
		Card::create( array( 'id' => 53, 'name' => 'Elnoyle', 'u' => 5, 'r' => 3, 'd' => 7, 'l' => 6, 'level' => 5 ) );
		Card::create( array( 'id' => 54, 'name' => 'Tonberry King', 'u' => 4, 'r' => 6, 'd' => 7, 'l' => 4, 'level' => 5 ) );
		Card::create( array( 'id' => 55, 'name' => 'Biggs, Wedge', 'u' => 6, 'r' => 6, 'd' => 2, 'l' => 7, 'level' => 5 ) );

		// Level 6
		Card::create( array( 'id' => 56, 'name' => 'Fujin, Raijin', 'u' => 2, 'r' => 8, 'd' => 8, 'l' => 4, 'level' => 6 ) );
		Card::create( array( 'id' => 57, 'name' => 'Elvoret', 'u' => 7, 'r' => 8, 'd' => 3, 'l' => 4, 'level' => 6 ) );
		Card::create( array( 'id' => 58, 'name' => 'X-ATM092', 'u' => 4, 'r' => 8, 'd' => 7, 'l' => 3, 'level' => 6 ) );
		Card::create( array( 'id' => 59, 'name' => 'Granaldo', 'u' => 7, 'r' => 2, 'd' => 8, 'l' => 5, 'level' => 6 ) );
		Card::create( array( 'id' => 60, 'name' => 'Gerogero', 'u' => 1, 'r' => 8, 'd' => 8, 'l' => 3, 'level' => 6 ) );
		Card::create( array( 'id' => 61, 'name' => 'Iguion', 'u' => 8, 'r' => 2, 'd' => 8, 'l' => 2, 'level' => 6 ) );
		Card::create( array( 'id' => 62, 'name' => 'Abadon', 'u' => 6, 'r' => 8, 'd' => 4, 'l' => 5, 'level' => 6 ) );
		Card::create( array( 'id' => 63, 'name' => 'Trauma', 'u' => 4, 'r' => 8, 'd' => 5, 'l' => 6, 'level' => 6 ) );
		Card::create( array( 'id' => 64, 'name' => 'Oilboyle', 'u' => 1, 'r' => 8, 'd' => 4, 'l' => 8, 'level' => 6 ) );
		Card::create( array( 'id' => 65, 'name' => 'Shumi Tribe', 'u' => 6, 'r' => 5, 'd' => 8, 'l' => 4, 'level' => 6 ) );
		Card::create( array( 'id' => 66, 'name' => 'Krysta', 'u' => 7, 'r' => 5, 'd' => 8, 'l' => 1, 'level' => 6 ) );

		// Level 7
		Card::create( array( 'id' => 67, 'name' => 'Propagator', 'u' => 8, 'r' => 4, 'd' => 4, 'l' => 8, 'level' => 7 ) );
		Card::create( array( 'id' => 68, 'name' => 'Jumbo Cactuar', 'u' => 8, 'r' => 8, 'd' => 4, 'l' => 4, 'level' => 7 ) );
		Card::create( array( 'id' => 69, 'name' => 'Tri-Point', 'u' => 8, 'r' => 5, 'd' => 2, 'l' => 8, 'level' => 7 ) );
		Card::create( array( 'id' => 70, 'name' => 'Gargantua', 'u' => 5, 'r' => 6, 'd' => 6, 'l' => 8, 'level' => 7 ) );
		Card::create( array( 'id' => 71, 'name' => 'Mobile Type 8', 'u' => 8, 'r' => 6, 'd' => 7, 'l' => 3, 'level' => 7 ) );
		Card::create( array( 'id' => 72, 'name' => 'Sphinxara', 'u' => 8, 'r' => 3, 'd' => 5, 'l' => 8, 'level' => 7 ) );
		Card::create( array( 'id' => 73, 'name' => 'Tiamat', 'u' => 8, 'r' => 8, 'd' => 5, 'l' => 4, 'level' => 7 ) );
		Card::create( array( 'id' => 74, 'name' => 'BGH251F2', 'u' => 5, 'r' => 7, 'd' => 8, 'l' => 5, 'level' => 7 ) );
		Card::create( array( 'id' => 75, 'name' => 'Red Giant', 'u' => 6, 'r' => 8, 'd' => 4, 'l' => 7, 'level' => 7 ) );
		Card::create( array( 'id' => 76, 'name' => 'Catoblepas', 'u' => 1, 'r' => 8, 'd' => 7, 'l' => 7, 'level' => 7 ) );
		Card::create( array( 'id' => 77, 'name' => 'Ultima Weapon', 'u' => 7, 'r' => 7, 'd' => 2, 'l' => 8, 'level' => 7 ) );

		// Level 8
		Card::create( array( 'id' => 78, 'name' => 'Chubby Chocobo', 'u' => 4, 'r' => 4, 'd' => 8, 'l' => 9, 'level' => 8 ) );
		Card::create( array( 'id' => 79, 'name' => 'Angelo', 'u' => 9, 'r' => 6, 'd' => 7, 'l' => 3, 'level' => 8 ) );
		Card::create( array( 'id' => 80, 'name' => 'Gilgamesh', 'u' => 3, 'r' => 7, 'd' => 9, 'l' => 6, 'level' => 8 ) );
		Card::create( array( 'id' => 81, 'name' => 'Mini Mog', 'u' => 9, 'r' => 3, 'd' => 9, 'l' => 2, 'level' => 8 ) );
		Card::create( array( 'id' => 82, 'name' => 'Chocobo', 'u' => 9, 'r' => 4, 'd' => 8, 'l' => 4, 'level' => 8 ) );
		Card::create( array( 'id' => 83, 'name' => 'Quezacotl', 'u' => 2, 'r' => 9, 'd' => 9, 'l' => 4, 'level' => 8 ) );
		Card::create( array( 'id' => 84, 'name' => 'Shiva', 'u' => 6, 'r' => 7, 'd' => 4, 'l' => 9, 'level' => 8 ) );
		Card::create( array( 'id' => 85, 'name' => 'Ifrit', 'u' => 9, 'r' => 6, 'd' => 2, 'l' => 8, 'level' => 8 ) );
		Card::create( array( 'id' => 86, 'name' => 'Siren', 'u' => 8, 'r' => 9, 'd' => 6, 'l' => 2, 'level' => 8 ) );
		Card::create( array( 'id' => 87, 'name' => 'Sacred', 'u' => 5, 'r' => 1, 'd' => 9, 'l' => 9, 'level' => 8 ) );
		Card::create( array( 'id' => 88, 'name' => 'Minotaur', 'u' => 9, 'r' => 5, 'd' => 2, 'l' => 9, 'level' => 8 ) );

		// Level 9
		Card::create( array( 'id' => 89, 'name' => 'Carbuncle', 'u' => 8, 'r' => 4, 'd' => 10, 'l' => 4, 'level' => 9 ) );
		Card::create( array( 'id' => 90, 'name' => 'Diablos', 'u' => 5, 'r' => 10, 'd' => 8, 'l' => 3, 'level' => 9 ) );
		Card::create( array( 'id' => 91, 'name' => 'Leviathan', 'u' => 7, 'r' => 10, 'd' => 1, 'l' => 7, 'level' => 9 ) );
		Card::create( array( 'id' => 92, 'name' => 'Odin', 'u' => 8, 'r' => 10, 'd' => 3, 'l' => 5, 'level' => 9 ) );
		Card::create( array( 'id' => 93, 'name' => 'Pandemona', 'u' => 10, 'r' => 1, 'd' => 7, 'l' => 7, 'level' => 9 ) );
		Card::create( array( 'id' => 94, 'name' => 'Cerberus', 'u' => 7, 'r' => 4, 'd' => 6, 'l' => 10, 'level' => 9 ) );
		Card::create( array( 'id' => 95, 'name' => 'Alexander', 'u' => 9, 'r' => 10, 'd' => 4, 'l' => 2, 'level' => 9 ) );
		Card::create( array( 'id' => 96, 'name' => 'Phoenix', 'u' => 7, 'r' => 2, 'd' => 7, 'l' => 10, 'level' => 9 ) );
		Card::create( array( 'id' => 97, 'name' => 'Bahamut', 'u' => 10, 'r' => 8, 'd' => 2, 'l' => 6, 'level' => 9 ) );
		Card::create( array( 'id' => 98, 'name' => 'Doomtrain', 'u' => 3, 'r' => 1, 'd' => 10, 'l' => 10, 'level' => 9 ) );
		Card::create( array( 'id' => 99, 'name' => 'Eden', 'u' => 4, 'r' => 4, 'd' => 9, 'l' => 10, 'level' => 9 ) );

		// Level 10
		Card::create( array( 'id' => 100, 'name' => 'Ward', 'u' => 10, 'r' => 7, 'd' => 2, 'l' => 8, 'level' => 10 ) );
		Card::create( array( 'id' => 101, 'name' => 'Kiros', 'u' => 6, 'r' => 7, 'd' => 6, 'l' => 10, 'level' => 10 ) );
		Card::create( array( 'id' => 102, 'name' => 'Laguna', 'u' => 5, 'r' => 10, 'd' => 3, 'l' => 9, 'level' => 10 ) );
		Card::create( array( 'id' => 103, 'name' => 'Selphie', 'u' => 10, 'r' => 8, 'd' => 6, 'l' => 4, 'level' => 10 ) );
		Card::create( array( 'id' => 104, 'name' => 'Quistis', 'u' => 9, 'r' => 6, 'd' => 10, 'l' => 2, 'level' => 10 ) );
		Card::create( array( 'id' => 105, 'name' => 'Irvine', 'u' => 2, 'r' => 6, 'd' => 9, 'l' => 10, 'level' => 10 ) );
		Card::create( array( 'id' => 106, 'name' => 'Zell', 'u' => 8, 'r' => 5, 'd' => 10, 'l' => 6, 'level' => 10 ) );
		Card::create( array( 'id' => 107, 'name' => 'Rinoa', 'u' => 4, 'r' => 10, 'd' => 2, 'l' => 10, 'level' => 10 ) );
		Card::create( array( 'id' => 108, 'name' => 'Edea', 'u' => 10, 'r' => 10, 'd' => 3, 'l' => 3, 'level' => 10 ) );
		Card::create( array( 'id' => 109, 'name' => 'Seifer', 'u' => 6, 'r' => 9, 'd' => 10, 'l' => 4, 'level' => 10 ) );
		Card::create( array( 'id' => 110, 'name' => 'Squall', 'u' => 10, 'r' => 4, 'd' => 6, 'l' => 9, 'level' => 10 ) );
    }
}