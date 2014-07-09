@section('link')
    <!-- Place favicon.ico and apple-touch-icon(s) here  -->
    <link rel="shortcut icon" href="http://cdn.ink.sapo.pt/3.0.0/img/favicon.ico">
    <link rel="apple-touch-icon-precomposed" href="http://cdn.ink.sapo.pt/3.0.0/img/touch-icon.57.png">
    <link rel="apple-touch-icon-precomposed" sizes="72x72" href="http://cdn.ink.sapo.pt/3.0.0/img/touch-icon.72.png">
    <link rel="apple-touch-icon-precomposed" sizes="114x114" href="http://cdn.ink.sapo.pt/3.0.0/img/touch-icon.114.png">
    <link rel="apple-touch-startup-image" href="http://cdn.ink.sapo.pt/3.0.0/img/splash.320x460.png" media="screen and (min-device-width: 200px) and (max-device-width: 320px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="http://cdn.ink.sapo.pt/3.0.0/img/splash.768x1004.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:portrait)">
    <link rel="apple-touch-startup-image" href="http://cdn.ink.sapo.pt/3.0.0/img/splash.1024x748.png" media="screen and (min-device-width: 481px) and (max-device-width: 1024px) and (orientation:landscape)">

    <!-- load inks css from the cdn -->
    <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.0.0/css/ink-flex.min.css">
    <link rel="stylesheet" type="text/css" href="http://cdn.ink.sapo.pt/3.0.0/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('assets/css/front/style.css')}}">
@endsection

@section('meta')
	<meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>AlizayRosayTT.fr</title>
    <meta name="description" content="">
    <meta name="author" content="">
    <meta name="HandheldFriendly" content="True">
    <meta name="MobileOptimized" content="320">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0">
@endsection

@section('js')

    <!-- load inks css for IE8 -->
        <!--[if lt IE 9 ]>
            <link rel="stylesheet" href="http://cdn.ink.sapo.pt/3.0.0/css/ink-ie.min.css" type="text/css" media="screen" title="no title" charset="utf-8">
            <![endif]-->

            <!-- test browser flexbox support and load legacy grid if unsupported -->
            <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.0.0/js/modernizr.js"></script>
            <script type="text/javascript">
                Modernizr.load({
                  test: Modernizr.flexbox,
                  nope : 'http://cdn.ink.sapo.pt/3.0.0/css/ink-legacy.min.css'
              });
            </script>

            <!-- load inks javascript files from the cdn -->
            <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.0.0/js/holder.js"></script>
            <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.0.0/js/ink-all.min.js"></script>
            <script type="text/javascript" src="http://cdn.ink.sapo.pt/3.0.0/js/autoload.js"></script>

@endsection

@section('content')
<head>
            <div class="ink-grid">


        <header class="vertical-space">
            <h1>AlizayRosayTT<small>BLAH BLAH</small></h1>
            <nav class="ink-navigation">
                <ul class="menu horizontal black">
                    <li class="active"><a href="#"><i class="fa fa-home fa-lg" style="color:white;"></i>&nbsp;Accueil</a></li>
                    <li><a href="#">item</a></li>
                    <li><a href="#">item</a></li>
                </ul>
            </nav>
        </header>

        <section class="pub hide-all show-large show-xlarge xlarge-push-right large-push-right">
            <div class="column-group gutters">
                <a href="#" class="all-100 mrec"><img src="../assets/js/holder.js/300x250/ink/auto/text: MREC PUB" /></a>
                <div class="all-50"><img src="../assets/js/holder.js/300x250/ink/auto/text: PUB" /></div>
                <div class="all-50"><img src="../assets/js/holder.js/300x250/ink/auto/text: PUB" /></div>
            </div>
            <p>
                "Red is not the right word," was the reply. "The plague was scarlet.  The whole face and body turned scarlet in an hour's time. Don't I  know? Didn't I see enough of it? And I am telling you it was scarlet  because&mdash;well, because it was scarlet. There is no other word for it."
            </p>
        </section>

        <section class="highlight">
            <div class="highlight-wrapper">
                <div class="column-group gutters">
                    <div class="xlarge-60 large-60 medium-50 small-100 tiny-100">
                        <div class="image">
                            <a href="news.html">
                                <img src="http://rsltt.fr/assets/img/news/resized/539d760cb2b11_coupes%20comite%202014%20002.JPG?1402828301" />
                            </a>
                        </div>
                    </div>
                    <div class="xlarge-40 large-40 medium-50 small-100 tiny-100">
                            <a href="#">
                        <h2>Le Neubourg était beaucoup plus fort</h2>
                        </a>
                        <p>Le vendredi 6 juin , notre équipe fanion se déplaçait au gymnase des Andelys pour y affronter l'équipe du Neubourg en finale de la coupe du comité "A"</p>
                    </div>
                </div>
                <div class="column-group gutters">
                    <div class="all-50 small-100 tiny-100">
                        <figure class="cap-bot">
                            <img src="http://rsltt.fr/assets/img/news/resized/5378be64ac800_mondiaux_de_tennis_de_table_zhang_jike_champion_du_monde.jpg?1400421989">
                            <figcaption>
                                <h4>Fake Title</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, delectus, iste, fugiat saepe quis possimus necessitatibus quaerat fugit deserunt odit hic maxime illum amet corporis natus facilis odio. Accusamus, veritatis!</p>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="all-50 small-100 tiny-100">
                        <figure class="cap-bot">
                            <img src="http://rsltt.fr/assets/img/news/resized/53720abf9295f_DSC05415.JPG?1399982784">
                            <figcaption>
                                <h4>Fake Title</h4>
                                <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Adipisci, delectus, iste, fugiat saepe quis possimus necessitatibus quaerat fugit deserunt odit hic maxime illum amet corporis natus facilis odio. Accusamus, veritatis!</p>
                            </figcaption>
                        </figure>
                    </div>
                </div>
                <div class="column-group gutters">
                    <div class="all-33 small-100 tiny-100">
                        <figure class="cap-bot">
                            <a href="#"><img src="http://rsltt.fr/assets/img/news/resized/53720abf9295f_DSC05415.JPG?1399982784">
                            <figcaption>
                                    <h4>Fake Title</h4>
                                </a>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="all-33 small-100 tiny-100">
                        <figure class="cap-bot">
                            <img src="http://rsltt.fr/assets/img/news/resized/53720abf9295f_DSC05415.JPG?1399982784">
                            <figcaption>
                                <h4>Fake Title</h4>
                            </figcaption>
                        </figure>
                    </div>
                    <div class="all-33 small-100 tiny-100">
                        <figure class="cap-bot">
                            <img src="http://rsltt.fr/assets/img/news/resized/53720abf9295f_DSC05415.JPG?1399982784">
                            <figcaption>
                                <h4>Fake Title</h4>
                            </figcaption>
                        </figure>
                    </div>
                </div>
            </div>
        </section>

    </div>

    <footer class="clearfix">
        <div class="ink-grid">
            <ul class="unstyled inline half-vertical-space">
                <li class="active"><a href="#">About</a></li>
                <li><a href="#">Sitemap</a></li>
                <li><a href="#">Contacts</a></li>
            </ul>
            <p class="note">Identification of the owner of the copyright, either by name, abbreviation, or other designation by which it is generally known.</p>
        </div>
    </footer>

@stop