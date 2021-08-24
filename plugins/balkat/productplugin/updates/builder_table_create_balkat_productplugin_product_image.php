<?php namespace Balkat\ProductPlugin\Updates;

use Schema;
use October\Rain\Database\Updates\Migration;

class BuilderTableCreateBalkatProductpluginProductImage extends Migration
{
    public function up()
    {
        Schema::create('balkat_productplugin_product_image', function($table)
        {
            $table->engine = 'InnoDB';
            $table->increments('id')->unsigned();
            $table->integer('product_id');
            $table->text('image_url');
            $table->timestamp('created_at')->nullable();
            $table->timestamp('updated_at')->nullable();
        });
    }
    
    public function down()
    {
        Schema::dropIfExists('balkat_productplugin_product_image');
    }
}
