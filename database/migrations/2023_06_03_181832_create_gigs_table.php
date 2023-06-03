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
        Schema::create('gigs', function (Blueprint $table) {
            $table->id();
            $table->string('gig_title');
            $table->string('gig_slug');
           // $table->string('gig_category_id');
           // $table->string('gig_tag_id');
           // $table->string('gig_document');
           // $table->string('gig_image')->nullable();
            $table->text('gig_body');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('gigs');
    }
};
