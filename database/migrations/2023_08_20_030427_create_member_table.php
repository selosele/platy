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
        Schema::create('MEMBER', function (Blueprint $table) {
            $table->id('NO')->comment('회원 번호');
            $table->string('ACCOUNT', 20)->unique()->comment('회원 계정');
            $table->string('EMAIL', 320)->comment('회원 이메일');
            $table->string('NICKNAME', 20)->comment('회원 닉네임');
            $table->string('PASSWORD', 60)->comment('회원 비밀번호');
            $table->rememberToken()->comment('로그인 유지 토큰');
            $table->char('LEAVED', 1)->default('N')->comment('회원 탈퇴 여부');
            $table->timestamp('REG_DATE')->default(DB::raw('CURRENT_TIMESTAMP'))->comment('회원 가입일시');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('MEMBER');
    }
};
