<main id="content" class="container" role="main">
    <article class="article">
        <header class="article__header">

            <h2 class="article__title"><?php echo $title;?></h2>
            <p class="byline">Posted on <time pubdate="pubdate"><?php echo $pubdate;?></time></p>
            <div class="article__extra-header-info">
                <div class="author">
                    <p class="author__name">By <?php echo $author;?></p>
                    <p class="author__job">The News Beat Staff Reporter</p>
                </div>

            </div>
        </header>
        <?php if (strlen($featured_img) > 1) { ?>
        <h6 style="font-size: .6em; text-align: right"><u><small><strong>Advertiser Content</strong></small></u></h6>
            <a href = "#"><img src="<? echo $featured_img;?>" alt="Sponsered advertisement"></a>
        <?php } ?>
        <hr>

        <? echo $article;?>

        <?php

        include('comments.php');

        ?>

    </article>
</main>
