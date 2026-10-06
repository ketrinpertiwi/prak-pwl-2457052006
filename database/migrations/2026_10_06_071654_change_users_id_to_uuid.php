<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Str;

return new class extends Migration
{
    public function up(): void
    {
        // Tambahkan kolom UUID sementara
        Schema::table('users', function (Blueprint $table) {
            $table->uuid('uuid_temp')->nullable()->after('id');
        });

        // Isi UUID untuk semua user yang sudah ada
        DB::table('users')
            ->select('id')
            ->orderBy('id')
            ->each(function ($user) {
                DB::table('users')
                    ->where('id', $user->id)
                    ->update([
                        'uuid_temp' => (string) Str::uuid(),
                    ]);
            });

        // Hapus primary key lama
        Schema::table('users', function (Blueprint $table) {
            $table->dropPrimary();
        });

        // Hapus kolom id lama
        Schema::table('users', function (Blueprint $table) {
            $table->dropColumn('id');
        });

        // Ubah uuid_temp menjadi id
        Schema::table('users', function (Blueprint $table) {
            $table->renameColumn('uuid_temp', 'id');
        });

        // Jadikan id sebagai primary key
        Schema::table('users', function (Blueprint $table) {
            $table->primary('id');
        });
    }

    public function down(): void
    {
        // Tidak dilakukan otomatis karena konversi UUID
        // kembali ke ID integer dapat menyebabkan perubahan nilai ID.
    }
};