</main>
<!-- #main -->

<footer id="footer" class="bc-footer">
    <div class="container">
        <div class="row">
            <?php if (is_active_sidebar('footer-logos')) { ?>
                <div class="footer-logos clearfix">
                    <?php dynamic_sidebar('footer-logos'); ?>
                </div>
            <?php } ?>
        </div>
        <div class="row bc-footer-details clearfix">
            <div class="footer-col col-sm-6 col-md-4 col-lg-4">
                <p>
                    <small>
                        <b>Tibbalds Planning and Urban Design</b><br/>19 Maltings Place<br/>169 Tower Bridge Rd<br/>London
                        SE1 3JB<br/>Tel: 0207 089 2121<br/>Copyright © <?php echo date("Y"); ?>
                    </small>
                </p>
            </div>
            <div class="footer-col col-sm-6 col-md-4 col-lg-4">
                <p>
                    <small><b>Latest tweet</b></small>
                </p>
                <a class="twitter-timeline"
                   href="https://twitter.com/Tibbalds"
                   data-widget-id="668539130742181888"
                   width=“100%”
                   data-chrome="nofooter noborders noheader"
                   data-tweet-limit="1">
                    Tweets by @Tibbalds
                </a>
                <script>!function (d, s, id) {
                        var js, fjs = d.getElementsByTagName(s)[0], p = /^http:/.test(d.location) ? 'http' : 'https';
                        if (!d.getElementById(id)) {
                            js = d.createElement(s);
                            js.id = id;
                            js.src = p + "://platform.twitter.com/widgets.js";
                            fjs.parentNode.insertBefore(js, fjs);
                        }
                    }(document, "script", "twitter-wjs");</script>
            </div>
            <div class="footer-col col-sm-12 col-md-4 col-lg-4">
                <div class="social">
                    <a href="http://www.facebook.com/pages/Tibbalds-Planning-and-Urban-Design/182770125133124"
                       target="_blank">
                        <em class="fa fa-facebook-square"></em>
                    </a>
                    <a href="https://twitter.com/#!/Tibbalds" target="_blank">
                        <em class="fa fa-twitter-square"></em>
                    </a>
                </div>
                <div class="hca">
                    <p>
                        <small><a href="http://tibbaldscampbellreithjv.com/" target="_blank">Tibbalds CampbellReith<br>Multidisciplinary Joint Venture<br/><img src="<?php echo get_template_directory_uri(); ?>/img/hcajv-logo.jpg" alt="Tibbalds CampbellReith Multidisciplinary Joint Venture"></a></small>
                    </p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- #foot -->
</div>
<!-- #page -->

<?php wp_footer(); ?>

<!-- jQuery -->
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.js" type="text/javascript"></script>

<!-- Bootstrap Core JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bootstrap.min.js"></script>

<!-- BC JavaScript -->
<script src="<?php echo get_template_directory_uri(); ?>/js/bc.js"></script>
</body></html>