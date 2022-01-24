<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
         $this->call(UserSeeder::class);
//         $this->call(CurrencySeeder::class);
         $this->call(WalletSeeder::class);
         $this->call(CompanySeeder::class);
         $this->call(AdminSeeder::class);
    }
}
