<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class AddSongs extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // query builder
        DB::table('songs')->insert([
             'title'=> 'Nemo',
             'slug'=>'nemo',
             'lyrics'=>'lyrics 1 xxxx \n ccccc',
             'created_at'=>date('Y-m-d H:m:s'),
             'updated_at'=>date('Y-m-d H:m:s')
            ]);
        DB::table('songs')->insert([
             'title'=> 'Eva',
             'slug'=>'eva',
             'lyrics'=>'lyrics 2 yyyy \n ddddd',
             'created_at'=>date('Y-m-d H:m:s'),
             'updated_at'=>date('Y-m-d H:m:s')
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
        DB::table('songs')->where('slug', '=', 'nemo')->delete();
        DB::table('songs')->where('slug', '=', 'eva')->delete();
    }
}
