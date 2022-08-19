<?php
namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Eloquentorm;

class EloquentormSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //  Query Builder
        // DB::table('eloquentorms')->insert([
        //     'name' => Str::random(15),
        //     'email' => Str::random(20).'@gmail.com',
        // ]);


        //Using Model Factories
        Eloquentorm::factory()
        ->count(50)
        ->create();
        //Using Model Factories End

    }
}
