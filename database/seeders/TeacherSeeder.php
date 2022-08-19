<?php

namespace Database\Seeders;
 
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Str;
 
class TeacherSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        // Query Builder data insert
        // DB::table('eloquentorms')->insert([
        //     'name' => Str::random(15),
        //     'email' => Str::random(20).'@gmail.com',
        // ]);

        // Query Builder data insert
        // DB::table('teachers')->insert([
        //     'name' => Str::random(15),
        //     'email' => Str::random(20).'@gmail.com',
        // ]);

        // Query Builder custom data insert 
        // $data=[
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //     ],
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //     ],
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //     ],
        //     [
        //         'name' => Str::random(10),
        //         'email' => Str::random(10).'@gmail.com',
        //     ],
        // ];
        // DB::table('teachers')->insert($data);
        

    }
}
