<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('project_skills', function (Blueprint $table) {
            // Drop existing foreign key constraints
            $table->dropForeign(['project_id']);
            $table->dropForeign(['skill_id']);

            // Add foreign key constraints with cascading delete
            $table->foreign('project_id')
                  ->references('id')
                  ->on('projects')
                  ->onDelete('cascade'); // Add cascading delete

            $table->foreign('skill_id')
                  ->references('id')
                  ->on('skills')
                  ->onDelete('cascade'); // Optional, if needed
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('project_skills', function (Blueprint $table) {
            // Drop the cascading foreign key constraints
            $table->dropForeign(['project_id']);
            $table->dropForeign(['skill_id']);

            // Re-add the original foreign keys without cascading
            $table->foreign('project_id')->references('id')->on('projects');
            $table->foreign('skill_id')->references('id')->on('skills');
        });
    }
};
