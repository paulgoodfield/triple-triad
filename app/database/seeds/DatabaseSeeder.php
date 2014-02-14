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
        Card::create( array( 'name' => 'Geezard', 'u' => 1, 'r' => 4, 'd' => 1, 'l' => 5, 'level' => 1 ) );
    	Card::create( array( 'name' => 'Funguar', 'u' => 5, 'r' => 1, 'd' => 1, 'l' => 3, 'level' => 1 ) );
    	Card::create( array( 'name' => 'Bite Bug', 'u' => 1, 'r' => 3, 'd' => 3, 'l' => 5, 'level' => 1 ) );
    	Card::create( array( 'name' => 'Red Bat', 'u' => 6, 'r' => 1, 'd' => 1, 'l' => 2, 'level' => 1 ) );
    	Card::create( array( 'name' => 'Blobra', 'u' => 2, 'r' => 3, 'd' => 1, 'l' => 5, 'level' => 1 ) );
    	Card::create( array( 'name' => 'Gayla', 'u' => 2, 'r' => 1, 'd' => 4, 'l' => 4, 'level' => 1 ) );
    	Card::create( array( 'name' => 'Gesper', 'u' => 1, 'r' => 5, 'd' => 4, 'l' => 1, 'level' => 1 ) );
    	Card::create( array( 'name' => 'Fastitocalon-F', 'u' => 3, 'r' => 5, 'd' => 2, 'l' => 1, 'level' => 1 ) );
    	Card::create( array( 'name' => 'Blood Soul', 'u' => 2, 'r' => 1, 'd' => 6, 'l' => 1, 'level' => 1 ) );
    	Card::create( array( 'name' => 'Caterchipillar', 'u' => 4, 'r' => 2, 'd' => 4, 'l' => 3, 'level' => 1 ) );
    	Card::create( array( 'name' => 'Cockatrice', 'u' => 2, 'r' => 1, 'd' => 2, 'l' => 6, 'level' => 1 ) );
    }
}