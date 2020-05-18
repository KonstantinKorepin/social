<?php /** @noinspection PhpUnused */

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePersonalsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up(): void
    {
        Schema::create('personals', static function (Blueprint $table) {
            $table->id();
            $table->string('name', 100)->nullable();
            $table->string('surname', 100)->nullable();
            $table->enum('gender', ['male', 'female'])->nullable();
            $table->enum('maritalStatus', ['notMarriedM', 'marriedM', 'notMarriedF', 'marriedF'])->nullable();
            $table->string('edInst', 255)->nullable();
            $table->date('birthday')->nullable();
            $table->string('status', 255)->nullable();
            $table->text('about')->nullable();
            $table->unsignedBigInteger('avatar_id')->nullable();
            $table->unsignedBigInteger('user_id')->nullable();
            $table->foreign('avatar_id')->references('id')->on('files')->onDelete('cascade');;
            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');;
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down(): void
    {
        Schema::dropIfExists('personals');
    }
}
