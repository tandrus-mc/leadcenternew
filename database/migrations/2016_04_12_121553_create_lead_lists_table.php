<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLeadListsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('lead_lists', function (Blueprint $table) {
            $table->increments('id');
            $table->string( 'list_name' );
            $table->string( 'internal_list_name' );
            $table->unsignedInteger( 'users_id' );
            $table->foreign( 'users_id')->references( 'id' )->on( 'users' );
            $table->string( 'provider_name' );
            $table->json( 'good_tags' );
            $table->json( 'bad_tags' );
            $table->softDeletes();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::drop('lead_lists');
    }
}
