<?php

class PostTableSeeder extends Seeder {

    public function run()
    {
        $date = new \DateTime;
        Post::create(array(
            'title' => 'Title for first created',
            'author_id' => 1,
            'slug' => 'this_is_a_slug',
            'thumbnail' => 'http://www.esri.com/news/arcuser/0610/graphics/nospin_1-lg.jpg',
            'page_tag_line' => 'Page tag line motherfucker',
            'tag_line' => 'Tag line motherfucker',
            'summary' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'article_raw' => '',
            'article' => '
    <pre class="prettyprint lang-php">$test = \'foo\';</pre>

    <div class="article-img">
        <img src="http://www.desktopict.com/wp-content/uploads/2014/02/mario-wallpaper-9-1024x819.jpg" class="article-img">
    </div>

    <div class="article-img-container">
        <img src="http://three.org/ippolito/writing/learning_from_mario/uploaded/uploaded_345/real_mario_sma.jpg" class="article-img">
    </div>
    ',
            'active' => true,
            'published_at' => $date->format("Y-m-d H:i:s")
        ));

        $date->sub(new DateInterval('P1D'));

        Post::create(array(
            'title' => 'Title for second created',
            'author_id' => 1,
            'slug' => 'this_is_the_second',
            'thumbnail' => 'http://www.esri.com/news/arcuser/0610/graphics/nospin_1-lg.jpg',
            'page_tag_line' => 'Page tag line motherfucker 2',
            'tag_line' => 'Tag line motherfucker 2',
            'summary' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry\'s standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.',
            'article_raw' => '',
            'article' => 'Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam pulvinar facilisis turpis, sed condimentum risus tincidunt mattis. Sed quis dapibus tortor. In sagittis nunc ut cursus pulvinar. Nullam nisl velit, consectetur ut augue ut, lacinia commodo risus. Curabitur in libero velit. Integer eleifend malesuada est scelerisque iaculis. Morbi suscipit rhoncus risus eu gravida. Quisque laoreet urna diam, vel facilisis neque eleifend et. Fusce at nibh sed felis molestie mollis. Suspendisse velit enim, egestas a luctus at, rutrum ut purus. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nulla mollis suscipit massa, eget consectetur nisi pharetra vel. Nunc non rhoncus sapien. Mauris lobortis quis nisl sit amet pulvinar.

Sed tempus adipiscing nibh, at imperdiet elit convallis ut. Curabitur lectus justo, vehicula id auctor sit amet, adipiscing sit amet nunc. Quisque vel viverra nulla, at semper dui. Aenean viverra elit vel urna faucibus, laoreet convallis quam porta. Sed vitae libero placerat, viverra nibh tincidunt, condimentum nisi. Donec euismod, orci dignissim convallis vehicula, nibh orci fermentum nulla, id ornare ante elit id diam. Donec vehicula nunc erat, a blandit lectus porta ac. Proin ullamcorper at eros ac placerat. Mauris quis mauris porta, fermentum nisi sed, congue magna. Donec condimentum viverra odio, sed pellentesque est consequat id. Cras sollicitudin pellentesque ligula vel mattis. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Nam convallis neque ac placerat viverra.

Nulla vel nisi arcu. Phasellus turpis lacus, sodales eu elementum ut, ultricies quis lorem. Maecenas gravida justo nec hendrerit placerat. Phasellus eu suscipit sem. Curabitur laoreet tortor vel quam eleifend elementum. Pellentesque habitant morbi tristique senectus et netus et malesuada fames ac turpis egestas. Proin sit amet tristique mi. Morbi non ipsum est. Vivamus malesuada tortor eget facilisis vestibulum.

Cras sed sagittis lacus. Nullam nec nibh sodales, suscipit nisl a, aliquet justo. Fusce tristique pellentesque dolor vitae fringilla. In varius erat in faucibus iaculis. Morbi scelerisque lacus vel dui tristique, et euismod nulla semper. Donec pulvinar convallis orci, vitae aliquam ligula adipiscing id. In bibendum consequat eros, blandit posuere mauris rutrum et. Ut at imperdiet mauris, in blandit lorem. Nullam vitae blandit massa.

Morbi eleifend, urna at consequat imperdiet, magna risus ultricies nisl, in auctor diam orci gravida leo. Vestibulum laoreet at magna in ultricies. Nulla imperdiet sodales libero, eget egestas metus malesuada eget. Quisque vitae risus augue. Fusce porta elit in massa aliquet, vel iaculis tortor imperdiet. Etiam accumsan cursus erat, ac condimentum lacus laoreet in. Donec scelerisque sapien condimentum, interdum lectus sit amet, fringilla leo. Aenean et molestie enim, eget accumsan ligula. Aliquam laoreet consequat velit ut pulvinar. Nunc quis commodo urna. Nullam scelerisque ullamcorper lacus id commodo. Aenean viverra, erat a tristique semper, felis massa volutpat leo, a pulvinar enim nisi et risus.',
            'active' => true,
            'published_at' => $date->format("Y-m-d H:i:s")
        ));
    }
}