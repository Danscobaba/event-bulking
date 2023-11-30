<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('payment_settings', function (Blueprint $table) {
            $table->id();
            $table->string('public_key');
            $table->string('secret_key');
            $table->timestamps();
        });
        DB::table('payment_settings')->insert([
            'public_key' => "pk_test_eec2f954222b03e4f13e32820ddfa8380c16f58a",
            'secret_key'=> "sk_test_f6690a6a15dbacc8b9d32dd6e6215c9bc61db073"
        ]);
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('payment_settings');
    }
};
