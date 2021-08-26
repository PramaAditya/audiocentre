<?php namespace Balkat\ProductPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatProductpluginProduct9 extends Migration
{
    public function up()
    {
        Schema::table('balkat_productplugin_product', function($table)
        {
            $table->text('description_lists')->nullable();
            $table->text('specificationt_lists')->nullable();
            $table->integer('old_id')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_productplugin_product', function($table)
        {
            $table->dropColumn('description_lists');
            $table->dropColumn('specificationt_lists');
            $table->integer('old_id')->nullable(false)->change();
        });
    }
}
