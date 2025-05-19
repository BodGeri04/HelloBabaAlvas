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
        Schema::table('blogs', function (Blueprint $table) {
            $table->text('quote')->nullable()->after('views');
            $table->string('quote_author')->nullable()->after('quote');
            $table->string('quote_title')->nullable()->after('quote_author');
            $table->string('second_main_title')->nullable()->after('quote_title');
            $table->string('second_cover_image')->nullable()->after('second_main_title');
            $table->text('second_content')->nullable()->after('second_cover_image');
            $table->text('end_content')->nullable()->after('second_content');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('blogs', function (Blueprint $table) {
            $table->dropColumn([
                'quote',
                'quote_author',
                'quote_title',
                'second_main_title',
                'second_cover_image',
                'second_content',
                'end_content'
            ]);
        });
    }
};
