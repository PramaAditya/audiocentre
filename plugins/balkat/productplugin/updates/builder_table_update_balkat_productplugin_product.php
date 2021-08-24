<?php namespace Balkat\ProductPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatProductpluginProduct extends Migration
{
    public function up()
    {
        Schema::table('balkat_productplugin_product', function($table)
        {
            $table->bigInteger('discounted_price');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::table('balkat_productplugin_product', function($table)
        {
            $table->dropColumn('discounted_price');
            $table->dropColumn('created_at');
            $table->dropColumn('updated_at');
        });
    }
}
