<?php
use App\Models\Institution;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('projects', function (Blueprint $table) {
            $table->increments('id');
            $table->foreignIdFor(Institution::class);
            $table->string('NombreProyecto',250);
            $table->string('fuenteFondos',250);
            $table->double('MontoPlanificado', 18,2);
            $table->double('MontoPatrocinado', 18,2);
            $table->double('MontoFondosPropios', 18,2);
            $table->boolean('activate')->default(1);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('projects');
    }
};
