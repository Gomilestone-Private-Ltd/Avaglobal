<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('ava_documents', function (Blueprint $table) {
            $table->id();
            $table->timestamps();
            $table->integer('case_id');
            $table->string('filename');
            $table->string('filetype');
            $table->string('filesize');
            $table->string('path');
        });
        // Schema::table('ava_documents', function ($table) {
        //     $table->string('brochure_title');
        // });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('ava_documents');
        // Schema::table('ava_documents', function ($table) {
        //     $table->dropColumn('brochure_title');
        // });
    }
};