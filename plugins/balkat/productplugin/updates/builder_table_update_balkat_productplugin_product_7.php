<?php namespace Balkat\ProductPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatProductpluginProduct7 extends Migration
{
    public function up()
    {
        Schema::table('balkat_productplugin_product', function($table)
        {
            $table->text('short_description')->nullable()->unsigned(false)->default(null)->change();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_productplugin_product', function($table)
        {
            $table->string('short_description', 255)->nullable()->unsigned(false)->default(null)->change();
        });
    }
}
