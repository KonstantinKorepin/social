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
        Schema::create('personal', static function (Blueprint $table) {
            $table->id();
            $table->string('name', 100);
            $table->string('surname', 100);
            $table->enum('gender', ['male', 'female']);
            $table->enum('maritalStatus', ['notMarriedM', 'marriedM', 'notMarriedF', 'marriedF']);
            $table->string('edInst', 255);
            $table->date('birthday');
            $table->string('status', 255);
            $table->text('about');
            $table->unsignedBigInteger('avatar_id');
            $table->foreign('avatar_id')->references('id')->on('files');
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
        Schema::dropIfExists('personal');
    }
}
