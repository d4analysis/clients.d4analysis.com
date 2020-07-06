<?php

use Illuminate\Database\Seeder;

class CompanySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
      factory(App\Company::class, 50)->create()->each(function ($company) {
        //$user->posts()->save(factory(App\Post::class)->make());
      });
    }
}
