<?php

// * 마이그레이션 
// Laravel에서 데이터베이스 스키마를 관리하는 방법
// 데이터베이스 스키마의 변경 사항을 버전으로 관리하여 언제든지 이전 상태로 롤백할 수 있습니다.
// sail artisan migrate

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * up()
     * Run the migrations.
     * 데이터베이스 스키마를 변경 
     */
    public function up(): void
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->timestamp('email_verified_at')->nullable();
            $table->string('password');
            $table->rememberToken();
            $table->timestamps();
        });
    }

    /**
     * down()
     * Reverse the migrations.
     * 데이터베이스 스키마 복원
     */
    public function down(): void
    {
        Schema::dropIfExists('users');
    }
};
