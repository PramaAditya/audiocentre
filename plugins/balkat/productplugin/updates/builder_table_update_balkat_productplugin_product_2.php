<?php namespace Balkat\ProductPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatProductpluginProduct2 extends Migration
{
    public function up()
    {
        Schema::table('balkat_productplugin_product', function($table)
        {
            $table->bigInteger('discounted_price')->nullable()->change();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_productplugin_product', function($table)
        {
            $table->bigInteger('discounted_price')->nullable(false)->change();
        });
    }
}
