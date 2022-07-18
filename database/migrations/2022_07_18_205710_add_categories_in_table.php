<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

class AddCategoriesInTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        DB::table('categories')
            ->insert([
                [
                    'name' => 'Программирование',
                    'slug' => 'programming'
                ],
                [
                    'name' => 'Популярное',
                    'slug' => 'popular'
                ]
            ]);
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        DB::table('categories')
            ->where('name', '=', 'Программирование')
            ->orWhere('name', '=', 'Популярное')
            ->delete();
    }
}
