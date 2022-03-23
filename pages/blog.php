<?php

$url = "https://blog.teqly.ch/c58698ebfd3b763bd64860a78a99a4/rss";
if(isset($_POST['submit'])){
    if($_POST['feedurl'] != ''){
        $url = $_POST['feedurl'];
    }
}

$invalidurl = false;
if(@simplexml_load_file($url)){
    $feeds = simplexml_load_file($url);
}else{
    $invalidurl = true;
    echo "<h2>Invalid RSS feed URL.</h2>";
}


$i=0;
if(!empty($feeds)){

    $site = $feeds->channel->title;
    $sitelink = $feeds->channel->link;

    echo "<h1>".$site."</h1>";
    foreach ($feeds->channel->item as $item) {

        $title = $item->title;
        $link = $item->link;
        $description = $item->description;
        $postDate = $item->pubDate;
        $pubDate = date('D, d M Y',strtotime($postDate));


        if($i>=2) break;
        ?>
        <div class="post">
            <div class="post-head">
                <h2><a class="feed_title" href="<?php echo $link; ?>"><?php echo $title; ?></a></h2>
                <span style="color: white"><?php echo $pubDate; ?></span>
            </div>
            <div class="post-content" style="color: white">
                <?php echo implode(' ', array_slice(explode(' ', $description), 0, 20)) . "..."; ?> <a href="<?php echo $link; ?>">Mehr erfahren</a>
            </div>
        </div>

        <?php
        $i++;
    }
}else{
    if(!$invalidurl){
        echo "<h2>No item found</h2>";
    }
}
?>