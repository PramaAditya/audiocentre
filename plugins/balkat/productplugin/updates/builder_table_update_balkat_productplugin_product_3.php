<?php namespace Balkat\ProductPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatProductpluginProduct3 extends Migration
{
    public function up()
    {
        Schema::table('balkat_productplugin_product', function($table)
        {
            $table->string('short_description')->nullable();
            $table->boolean('is_call_for_price')->default(0);
            $table->text('description')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_productplugin_product', function($table)
        {
            $table->dropColumn('short_description');
            $table->dropColumn('is_call_for_price');
            $table->text('description')->nullable(false)->change();
        });
    }
}
