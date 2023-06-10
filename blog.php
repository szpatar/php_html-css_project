<?php include "pages/begin.php"; ?>

    <?php

    if(!isset($_GET['read'])){
        echo'
        <section id="blog">
        <div class="blog-heading">
            <span>Legfrissebb posztok</span>
            <h3>-</h3>
        </div>
        <div class="blog-container">';
        $a = 1;

        while(is_file("data/article-". $a . ".txt"))
        {
            $article = file_get_contents("data/article-". $a . ".txt");
            $record = explode(";", $article);

            $title = $record[0];
            $intro = $record[1];
            $image = $record[2];
                echo'<div class="blog-box">
                    <div class="blog-img">
                        <img src="res/'. $image .'" alt="blog">
                    </div>

                    <div class="blog-text">
                        <span>2021 Jan 27</span>
                        <a href="#" class="blog-title">'. $title .'</a>
                        <p>'. $intro .'</p>
                        <a href="blog.php?&read='. $a .'">Tovább</a>
                    </div>

                </div>';
                $a++;
            }
            echo'</div>

            </section>';
    }
    else{
        $read = $_GET['read'];
        echo'<div class="article-open">';
        echo '<h1>Lorem ipsum dolor sit amet.</h1>';
        echo'<article>';
        echo'<h2>Lorem ipsum dolor sit amet.</h2>';
        echo'<img src="res/pexels-photo-2058128.jpeg">';
        echo'</article>';
        echo'<p>Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.Lorem ipsum dolor sit amet consectetur adipisicing elit.</p>';
        echo'<a href="blog.php">Vissza-></a>';
        echo'</div>';

    }
        ?>
<?php include "pages/end.php"; ?>