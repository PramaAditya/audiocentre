<?php namespace Balkat\ProductPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableUpdateBalkatProductpluginProduct10 extends Migration
{
    public function up()
    {
        Schema::table('balkat_productplugin_product', function($table)
        {
            $table->renameColumn('specificationt_lists', 'specification_lists');
        });
    }
    
    public function down()
    {
        Schema::table('balkat_productplugin_product', function($table)
        {
            $table->renameColumn('specification_lists', 'specificationt_lists');
        });
    }
}
