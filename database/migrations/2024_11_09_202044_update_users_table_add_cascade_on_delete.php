<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropForeign(['major_id']);  // Drop the existing foreign key
        $table->foreign('major_id')->references('id')->on('majors')->onDelete('cascade');  // Add the new foreign key with CASCADE
    });
}

public function down()
{
    Schema::table('users', function (Blueprint $table) {
        $table->dropForeign(['major_id']);  // Drop the new foreign key
        $table->foreign('major_id')->references('id')->on('majors');  // Restore the previous foreign key without CASCADE
    });
}
};
