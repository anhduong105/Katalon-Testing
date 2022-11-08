<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('tbl_brand')->insert([
            'brand_id'      => '1',
            'brand_name'    => 'NXB Giao Duc',
            'brand_slug'    => 'nxb-giao-duc',
            'brand_desc'    => 'NXB Giao Duc',
            'brand_status'  => '0',
        ]);

        DB::table('tbl_brand')->insert([
            'brand_id'      => '2',
            'brand_name'    => 'NXB Tran Dai',
            'brand_slug'    => 'nxb-tran-dai',
            'brand_desc'    => 'NXB Tran Dai',
            'brand_status'  => '0',
        ]);

        DB::table('tbl_brand')->insert([
            'brand_id'      => '3',
            'brand_name'    => 'NXB Kim Dong',
            'brand_slug'    => 'nxb-kim-dong',
            'brand_desc'    => 'NXB Kim Dong',
            'brand_status'  => '0',
        ]);

        DB::table('tbl_brand')->insert([
            'brand_id'      => '4',
            'brand_name'    => 'NXB Van Hoa',
            'brand_slug'    => 'nxb-van-hoa',
            'brand_desc'    => 'NXB Van Hoa',
            'brand_status'  => '0',
        ]);
    }
}
