<html xmlns="http://www.w3.org/1999/html">
<head>
        <meta charset="utf-8">
        <title>Dmitriy Chaban dmi3coder personal website &amp; portfolio</title>
        <meta name="description" content="dmi3coder, android, java, akka, play, framework, startup">
            <meta name="keywords" content="dmi3coder, android, java, akka, play, framework, startup">
            <meta name="viewport" content="width=device-width, initial-scale=1">
            <script type="text/javascript" src="http://cdnjs.cloudflare.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
            <script type="text/javascript" src="http://netdna.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js"></script>
            <link href="http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.3.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
            <link href="style" rel="stylesheet" type="text/css">
            <script>
                (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
                  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

                  ga('create', 'UA-74455808-1', 'auto');
                  ga('send', 'pageview');
            </script>
    </head>
<body>
<?php
require_once 'login.php';
?>
        <div class="navbar navbar-default navbar-fixed-top">
            <div class="container">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navbar-ex-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                    <a class="navbar-brand" href="/"><span>Dmitriy Chaban</span></a>
                </div>
                <div class="collapse navbar-collapse" id="navbar-ex-collapse">
                    <ul class="nav navbar-nav navbar-right">
                        <li class="active">
                            <a href="/">Home</a>
                        </li>
                        <li>
                            <a href="/blog">Blog</a>
                        </li>
                        <li>
                            <a href="/contacts.php">Contacts</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div class="cover">
            <div class="background-image-fixed cover-image" style="background-image : url('https://unsplash.imgix.net/photo-1422513391413-ddd4f2ce3340?w=1024&amp;q=50&amp;fm=jpg&amp;s=282e5978de17d6cd2280888d16f06f04')"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-3">
                        <img src="images/me.jpg" class="center-block img-circle img-responsive">
                    </div>
                    <div class="blackbg col-md-9 filterprogiddximagetransformmicrosoftgradientendcolorstrc0cfe2-startcolorstr='#ffffff',-gradienttype='0'); text-left">
                        <h1 class="text-inverse">Dmitriy Chaban</h1>
                        <p class="text-inverse">Junior Java/Android Developer</p>
                        <br>
                        <br>
                        <a class="btn btn-lg btn-primary" href="/contacts.php">Contact me<br></a>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Strong skills
                            <br>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <?php
                    $conn = new mysqli($hn,$un,$pw,$db);
                    $query = "SELECT * FROM web_skills ORDER BY id ASC ";
                    $result = $conn->query($query);
                    if(!$result) die("oh no!");
                    $rows = $result->num_rows;
                    for($i = 0;$i<$rows;$i++){
                        $result->data_seek($i);
                        $array = mysqli_fetch_array($result,MYSQLI_ASSOC);
                        $name = $array['name'];
                        $description = $array['description'];
                        $image = $array['image'];
                        echo <<< _END
                    <div class="col-md-3">
                        <img src="$image" class="center-block img-responsive">
                        <h2 class="text-success">$name</h2>
                        <p>$description</p>
                    </div>
_END;

                    }
                    ?>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <hr>
                    </div>
                </div>
            </div>
        </div>
        <div class="section">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1 class="text-center">Experience
                            <br>
                        </h1>
                    </div>
                </div>
            </div>
        </div>
        <?php
        $conn = new mysqli($hn,$un,$pw,$db);
        $query = "SELECT * FROM web_experience ORDER BY id DESC";
        $result = $conn->query($query);
        if (!$result) die($conn->error);
        $rows = $result->num_rows;
        for($i = 0; $i< $rows; ++$i){
            $result->data_seek($i);
            $array = mysqli_fetch_array($result,  MYSQLI_ASSOC);
            $name = $array['name'];
            $position = $array['position'];
            $description = $array['description'];
            $image = $array['image'];
            $from_date = $array['from_date'];
            $to_date = $array['to_date'];
            $link = $array['link'];
            $link_place = "";
            if($i != 0){
                $link_place = "<p>
                            <a href=\"$link\">More information</a>
                        </p>";
            }
            else{
                $link_place = "<a class=\"btn btn-primary\" href=\"$link\">More</a>";
            }
            if($to_date == "0000-00-00"){
                $to_date = "NOW";
            }
            echo <<< _END
        <div class="section">
            <div class="container">
                <div class="row">
_END;
            if($i%2 == 0 ){
                echo "<div class=\"col-md-6 hidden-sm hidden-xs\">
                        <img src=\"$image\" class=\"img-responsive img-rounded\">
                    </div>";
            }
            echo <<< _END
                    <div class="col-md-6">
                        <h1>$name<br></h1>
                        <h3>$position</h3>
                        <p>$description</p>
                        $link_place
                        <p class="text-right">
                                <b> $from_date - $to_date</b>
                                <br>
                            </p>
                    </div>
_END;
            if($i%2 != 0 ){
                echo "<div class=\"col-md-6 hidden-sm hidden-xs\">
                        <img src=\"$image\" class=\"img-responsive img-rounded\">
                    </div>";
            }
            echo <<< _END
                </div>
            </div>
        </div> 
_END;
        }
        ?>
        <footer class="section section-primary">
            <div class="container">
                <div class="row">
                    <div class="col-sm-6">
                        <h1>ad verum via fert</h1>
                        <p>It means "path leads to the truth", which is mine creed for anything I
                            do. If you're making some work you'll be one step closer to your dream.
                            <br>
                        </p>
                    </div>
                    <div class="col-sm-6">
                        <div class="col-md-12 text-right">
                            <a href="https://www.linkedin.com/in/dmi3coder"><i class="edin fa fa-3x fa-fw fa-linkedin-square fa-spin text-inverse"></i></a>
                            <a href="https://twitter.com/dmi3coder"><i class="fa fa-3x fa-fw fa-twitter text-inverse"></i></a>
                            <a href="https://facebook.com/dmi3coder"><i class="fa fa-3x fa-fw fa-facebook text-inverse"></i></a>
                            <a href="https://github.com/dmi3coder"><i class="fa fa-3x fa-fw fa-github text-inverse"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    

</body></html>