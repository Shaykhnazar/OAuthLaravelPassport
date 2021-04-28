<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AddJobTitleFkToUserTable extends Migration
{
    public function up()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->foreignId('job_title_id')->nullable()->constrained('job_titles')
                ->onDelete('cascade')->onUpdate('cascade');
        });
    }

    public function down()
    {
        Schema::table('user', function (Blueprint $table) {
            $table->dropConstrainedForeignId('job_title_id');
        });
    }
}
