<html><head>
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
    </head><body>
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
                    <div class="col-md-3">
                        <img src="images/androidDev.png" class="center-block img-responsive">
                        <h2 class="text-success">Android SDK</h2>
                        <p>Tried android in summer 2014 and was astonished with this power. In 2015
                            started aggresive deep learning: Intents, Content providers, Services and
                            much much more&nbsp;</p>
                    </div>
                    <div class="col-md-3">
                        <img src="images/javase.jpg" class="img-responsive">
                        <h2 class="text-warning">Java SE</h2>
                        <p>Started learning in fall 2015 righ after small experience with Android
                            SDK because strong basics are matter. &nbsp;Have good backgound in Java
                            SE + Java 8 experience such as lambdas and streams</p>
                    </div>
                    <div class="col-md-3">
                        <img src="images/rest.png" class="img-responsive img-rounded">
                        <h2 class="text-danger">API</h2>
                        <p>Had some small experience with Parse SDK. In winter 2015 started deep
                            learning of REST API with Retrofit library. In spring 2016 created own
                            Spring backend with REST API: authorization and MongoDB.</p>
                    </div>
                    <div class="col-md-3">
                        <img src="images/android.jpg" class="img-responsive">
                        <h2>Some more</h2>
                        <p>Have few
                            <a href="https://github.com/dmi3coder/jZeldaProject">experience with jMonkeyEngine</a>, Spring Framework and huge amount of libraries. Also have good experience
                            with some databases such as: SQLite, Realm, MongoDB
                            <br>
                        </p>
                    </div>
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
        require_once 'login.php';
        $conn = new mysqli($hn,$un,$pw,$db);
        $query = "SELECT * FROM web_experience ORDER BY id DESC";
        $result = $conn->query($query);
        if (!$result) die($conn->error);
        $rows = $result->num_rows;
        for($i = 0; $i< $rows; ++$i){
            $result->data_seek($i);
            $name = $result->fetch_assoc()['name'];
            $result->data_seek($i);
            $position = $result->fetch_assoc()['position'];
            $result->data_seek($i);
            $description = $result->fetch_assoc()['description'];
            $result->data_seek($i);
            $image = $result->fetch_assoc()['image'];
            $result->data_seek($i);
            $from_date = $result->fetch_assoc()['from_date'];
            $result->data_seek($i);
            $to_date = $result->fetch_assoc()['to_date'];
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