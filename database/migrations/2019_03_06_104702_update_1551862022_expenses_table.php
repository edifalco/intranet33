<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class Update1551862022ExpensesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('expenses', function (Blueprint $table) {
            if(Schema::hasColumn('expenses', 'service')) {
                $table->dropColumn('service');
            }
            if(Schema::hasColumn('expenses', 'selection_criteria')) {
                $table->dropColumn('selection_criteria');
            }
            
        });
Schema::table('expenses', function (Blueprint $table) {
            
if (!Schema::hasColumn('expenses', 'service')) {
                $table->text('service')->nullable();
                }
if (!Schema::hasColumn('expenses', 'selection_criteria')) {
                $table->text('selection_criteria')->nullable();
                }
        });

    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('expenses', function (Blueprint $table) {
            $table->dropColumn('service');
            $table->dropColumn('selection_criteria');
            
        });
Schema::table('expenses', function (Blueprint $table) {
                        $table->string('service')->nullable();
                $table->string('selection_criteria')->nullable();
                
        });

    }
}
