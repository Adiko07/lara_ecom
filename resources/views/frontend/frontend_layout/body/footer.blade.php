<footer id="footer" class="footer color-bg">
    <div class="footer-bottom">
        <div class="container">
        <div class="row">
            <div class="logo">
                <a href="{{ route('home') }}" class="">
                    <img src="{{ asset('frontend') }}/assets/images/logo.png" alt="logo" class="img-fluid">
                    {{--<h6 style="font-weight: 700; font-size: 0.65em; color: #000;">
                        SOCIETE DE DISTRIBUTION DE BOIS
                    </h6>--}}
                </a>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
                <div class="module-heading">
                    <h4 class="module-title">à propos de nous</h4>
                </div>
                <!-- /.module-heading -->
                <div class="module-body">
                    <p style="color:#fff;">
                        La SODIB-CI est la plus importante structure de production et de distribution de Bois, Contreplaqués en Côte d’Ivoire, en partenariat avec les plus importantes Entreprises BTP Ivoiriennes. Notre Structure consiste à adapter au fil du temps un important secteur d’activité à l’ère du numérique, en permettant aux particuliers et entreprises avec lesquels nous collaborons, de pouvoir efficacement se procurer les plus importants matériaux de construction tels que le Bois, les Contreplaqués, le Ciment, les Tôles et les Fer à Béton.
                    </p>
                </div>
                <br>
                <!-- /.module-body -->
                </div>
                <!-- /.col -->
                <div class="col-xs-12 col-sm-12 col-md-4">
                    <div class="module-heading">
                        <h4 class="module-title">Service Client</h4>
                    </div>
                    <!-- /.module-heading -->

                    <div class="module-body" style="color:#fff;">
                        <ul class='list-unstyled'>
                        <li class="first"><a href="{{ route('dashboard')}}" style="color:#fff;">Mon compte</a></li>
                        <li><a href="{{ route('user.orders')}}" style="color:#fff;">Historique de commande</a></li>
                        {{--<li><a href="#" title="faq">FAQ</a></li>--}}
                        <li><a href="#" style="color:#fff;">Condition de vente</a></li>
                        <li class="last"><a href="{{ route('about')}}" style="color:#fff;">A propos de nous</a></li>
                        </ul>
                    </div>
                    <!-- /.module-body -->
                    </div>
            <div class="col-xs-12 col-sm-12 col-md-4">
            <div class="module-heading">
                <h4 class="module-title">Nous contacter</h4>
            </div>
            <!-- /.module-heading -->

            <div class="module-body">
                <ul class="toggle-footer" style="">
                <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-map-marker fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body">
                    <p style="color:#fff;">Abidjan, Yopougon, Sideci Lem</p>
                    </div>
                </li>
                <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-mobile fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body">
                    <p style="color:#fff;">+(225) 0757791516<br>
                        +(225) 0102434306</p>
                    </div>
                </li>
                <li class="media">
                    <div class="pull-left"> <span class="icon fa-stack fa-lg"> <i class="fa fa-envelope fa-stack-1x fa-inverse"></i> </span> </div>
                    <div class="media-body"> <span><a href="#" style="color:#fff;">infosodibci@gmail.com</a></span> </div>
                </li>
                </ul>
            </div>
            <!-- /.module-body -->
            </div>
            <!-- /.col -->
            <!-- /.col -->

            {{--<div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
                <h4 class="module-title">Corporation</h4>
            </div>
            <!-- /.module-heading -->

            <div class="module-body">
                <ul class='list-unstyled'>
                <li class="first"><a title="Your Account" href="#">About us</a></li>
                <li><a title="Information" href="#">Customer Service</a></li>
                <li><a title="Addresses" href="#">Company</a></li>
                <li><a title="Addresses" href="#">Investor Relations</a></li>
                <li class="last"><a title="Orders History" href="#">Advanced Search</a></li>
                </ul>
            </div>
            <!-- /.module-body -->
            </div>
            <!-- /.col -->

            <div class="col-xs-12 col-sm-6 col-md-3">
            <div class="module-heading">
                <h4 class="module-title">Why Choose Us</h4>
            </div>
            <!-- /.module-heading -->

            <div class="module-body">
                <ul class='list-unstyled'>
                <li class="first"><a href="#" title="About us">Shopping Guide</a></li>
                <li><a href="#" title="Blog">Blog</a></li>
                <li><a href="#" title="Company">Company</a></li>
                <li><a href="#" title="Investor Relations">Investor Relations</a></li>
                <li class=" last"><a href="contact-us.html" title="Suppliers">Contact Us</a></li>
                </ul>
            </div>
            <!-- /.module-body -->
            </div>--}}
        </div>
        </div>
    </div>
    <div class="copyright-bar">
        <div class="container">
        <div class="col-xs-12 col-sm-6 no-padding social">
            <ul class="link">
            <li class="fb pull-left"><a target="_blank" rel="nofollow" href="https://www.facebook.com/SODIB.CI" title="Facebook"></a></li>
            <li class="tw pull-left"><a target="_blank" rel="nofollow" href="#" title="Twitter"></a></li>
            <li class="googleplus pull-left"><a target="_blank" rel="nofollow" href="#" title="GooglePlus"></a></li>
            <li class="rss pull-left"><a target="_blank" rel="nofollow" href="#" title="RSS"></a></li>
            <li class="pintrest pull-left"><a target="_blank" rel="nofollow" href="#" title="PInterest"></a></li>
            <li class="linkedin pull-left"><a target="_blank" rel="nofollow" href="#" title="Linkedin"></a></li>
            <li class="youtube pull-left"><a target="_blank" rel="nofollow" href="#" title="Youtube"></a></li>
            </ul>
        </div>
        <div class="col-xs-12 col-sm-6 no-padding">
            <div class="clearfix payment-methods" style="color:#fff;">
            {{--<ul>
                <li><img src="{{ asset('frontend') }}/assets/images/payments/1.png" alt=""></li>
                <li><img src="{{ asset('frontend') }}/assets/images/payments/2.png" alt=""></li>
                <li><img src="{{ asset('frontend') }}/assets/images/payments/3.png" alt=""></li>
                <li><img src="{{ asset('frontend') }}/assets/images/payments/4.png" alt=""></li>
                <li><img src="{{ asset('frontend') }}/assets/images/payments/5.png" alt=""></li>
            </ul>--}}
                SODIB-CI || Tous droits réservés &copy; <span id="copy-year">2022</span> .
                <script>
                    var d = new Date();
                    var year = d.getFullYear();
                    document.getElementById("copy-year").innerHTML = year;
                </script>
            </div>
            <!-- /.payment-methods -->
        </div>
        </div>
    </div>
</footer>
