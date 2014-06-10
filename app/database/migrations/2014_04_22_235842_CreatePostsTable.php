<?php

use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreatePostsTable extends Migration {

	/**
	 * Run the migrations.
	 *
	 * @return void
	 */
	public function up()
	{
        Schema::create('posts', function($table) {
            $table->increments('id');
            $table->string('title', 200);
            $table->string('slug', 150)->unique();
            $table->string('thumbnail', 255);
            $table->string('page_tag_line', 200)->unique();
            $table->string('tag_line', 200)->unique();
            $table->text('summary');
            $table->text('article_raw');
            $table->text('article');
            $table->boolean('active')->default(false);
            $table->timestamp('published_at')->nullable();
            $table->softDeletes();
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
        Schema::drop('posts');
	}

}
