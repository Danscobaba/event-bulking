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
        Schema::create('status', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->timestamps();
        });


        $st = [
            [
                'name' => 'Director'
            ],
            [
                'name' => 'Sapphire Director'
            ],
            [
                'name' => '1 Ruby Director'
            ],
            [
                'name' => '2 Ruby Director'
            ],
            [
                'name' => '3 Ruby Director'
            ],
            [
                'name' => '4 Ruby Director'
            ],
            [
                'name' => '5 Ruby Director'
            ],
            [
                'name' => '1 Diamond Director'
            ],

        ];

        foreach($st as $item){
            DB::table('status')->insert([
                'name' => $item['name'],
                'created_at' => now()
            ]);
        }

    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('status');
    }
};