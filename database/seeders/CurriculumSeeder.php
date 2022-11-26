<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use DateTime;

class CurriculamSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム01-1',
            'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム02-1',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム03-1',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム03-2',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム04-1',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム05-1',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム06-1',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム06-2',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム07-1',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム08-1',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
             DB::table('curriculums')->insert([
            'name' => 'カリキュラム08-2',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
             DB::table('curriculums')->insert([
            'name' => 'カリキュラム08-3',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
             DB::table('curriculums')->insert([
            'name' => 'カリキュラム08-4',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
             DB::table('curriculums')->insert([
            'name' => 'カリキュラム08-5',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
             DB::table('curriculums')->insert([
            'name' => 'カリキュラム08-6',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
             DB::table('curriculums')->insert([
            'name' => 'カリキュラム09-1',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム09-2',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム09-3',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
            
            DB::table('curriculums')->insert([
            'name' => 'カリキュラム09-4',
             'vote_count' => 0,
            'created_at' => new DateTime(),
            'updated_at' => new DateTime(),
            ]);
    }
}
