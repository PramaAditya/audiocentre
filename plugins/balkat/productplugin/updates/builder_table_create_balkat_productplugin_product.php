<?php namespace Balkat\ProductPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBalkatProductpluginProduct extends Migration
{
    public function up()
    {
        Schema::create('balkat_productplugin_product', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->string('name');
            $table->bigInteger('price');
            $table->text('description');
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('balkat_productplugin_product');
    }
}
