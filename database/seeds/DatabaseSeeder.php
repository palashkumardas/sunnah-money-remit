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
        $this->call(AboutSeeder::class);
        $this->call(ContactSeeder::class);
        $this->call(PrivacyPolicySeeder::class);
        $this->call(TermsConditionSeeder::class);
        $this->call(CookiesPolicySeeder::class);
    }
}
