<?php

use Illuminate\Database\Seeder;

class SqlSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $sql = storage_path('doan_bieuhoang.sql');    //sql script     
        $db = [
            'username'  => env('DB_USERNAME'),
            'password'  => env('DB_PASSWORD'),
            'host'      => env('DB_HOST'),
            'database'  => env('DB_DATABASE')
        ];
  
        exec("mysql --user={$db['username']} --password={$db['password']} --host={$db['host']} --database {$db['database']} < $sql");
    }
}
