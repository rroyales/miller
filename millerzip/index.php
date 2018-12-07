<!doctype html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7" lang=""> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8" lang=""> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9" lang=""> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js" lang=""> <!--<![endif]-->
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title></title>
        <meta name="description" content="">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="apple-touch-icon" href="apple-touch-icon.png">
        <link rel="stylesheet" href="css/normalize.min.css">
        <link rel="stylesheet" href="css/main.css">

        <script src="js/vendor/modernizr-2.8.3-respond-1.4.2.min.js"></script>

<meta http-equiv="Content-Language" content="en">

    </head>
    <body>
        <!--[if lt IE 8]>
            <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
        <![endif]-->

        <div class="header-container">
            <header class="wrapper clearfix">
                <h1 class="title">Ronald Royales</h1>
                <nav>
                </nav>
            </header>
        </div>

        <div class="main-container">
            <div class="main wrapper clearfix">

                <article>
                <button class="show">Instructions</button>
                    <header class="instruction">
                        <h1>Instructions</h1>
                        <ul>
                            <li>Change the title element to your name.</li>
                            <li>Change the footer element to your email address.</li>
                            <li>Change the red color scheme to a different color of your choosing.</li>
                            <li>Using PHP, consume and display an RSS feed of your choosing, or the feed from <a href="https://www.reddit.com/r/php/.rss" target="_blank">https://www.reddit.com/r/php/.rss</a></li>
                        </ul>
                        <h3>RSS Details</h3>
                        <ul>
                            <li>Display entries in the <code>&lt;section&gt;</code> element below. Include the title as a link to the post or article along with the time posted in the format 11/28/2018 10:10 AM.</li>
                            <li>When the mouse hovers over the entry, display the content snippet in the "Preview" box to the right.</li>
                            <li>When an entry is clicked, change the background color of that entry to light gray to indicate it has been read. (Links should open in a new tab)</li>
                        </ul>
                    </header>
                    <!-- pagination should be used but no time to implement -->
                    <section class="over">
                    <br /><hr>
                        <!-- RSS entries go here -->
                        <?php
                        // tested in chrome v70 and firefox v63
                        // please install simplexml for testing if not installed
                        if(!function_exists('simplexml_load_file')){
                            echo '<h1>there is no simple_xml installed</h1>
                            <a href="http://php.net/manual/en/simplexml.installation.php"
                            target = "_blank">install simplexml</a>';} 
                        $url = "https://www.reddit.com/r/php/.rss";
                        $rss = simplexml_load_file($url);
                        $entry = $rss->entry;
                        //$author = entry[0]->author;
                        // $app = "<h1>add this</h1>";
                        for($i = 0; $i < count($entry); $i++){
                            $content = $entry[$i]->content;
                            $linkUrl = $entry[$i]->link['href'];
                            $title =  $entry[$i]->title; 
                            $date = $entry[$i]->updated;
                            $dateFormat = date("m/d/Y H:i A", strtotime($date));
                            echo 
                                '<div class="centered">
                                <p class="content">'.htmlspecialchars($content).'</p>
                                <a class="linkUrl" id="'.$i.'" target="_blank" href="'.$linkUrl.'"  >
                                '.$title.' '.$dateFormat.'
                                </a> <br /></div><hr>';}
                        ?>
                    </section>

                </article>

                <aside class="fixedPreview">
                    <h3>Preview</h3>
                    <p class="preview">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aliquam sodales urna non odio egestas tempor. Nunc vel vehicula ante. Etiam bibendum iaculis libero, eget molestie nisl pharetra in. In semper consequat est, eu porta velit mollis nec. Curabitur posuere enim eget turpis feugiat tempor. Etiam ullamcorper lorem dapibus velit suscipit ultrices.</p>
                </aside>

            </div> <!-- #main -->
        </div> <!-- #main-container -->

        <div class="footer-container">
            <footer class="wrapper">
                <h3>rroyales@gmail.com</h3>
            </footer>
        </div>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
        <script>window.jQuery || document.write('<script src="js/vendor/jquery-1.11.2.min.js"><\/script>')</script>
        <script src="js/main.js"></script>
    </body>
</html>
