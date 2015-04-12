
<footer class="page-footer" id="footer">
    <div class="container">
        <div class="row">
            <div class="col 16 s12">
                <h5 class="white-text">SuitSwap</h5>
                <h6 class="white-text">Helping People On To Their Feet</h6>
            </div>
        </div>
    </div>
    <div class="footer-copyright">
        <div class="container">
            <p> &copy; <?php echo date('Y'); ?></p>
        </div>
    </div>
</footer>

<!--<footer id="footer">-->
<!--    <p class="text-center"> &copy; --><?php //echo date("Y.m.d"); ?><!--</p>-->
<!--</footer>-->

<!-- JS -->
<?php
helpers\assets::js(helpers\url::template_path() . 'js/jquery.js');
helpers\assets::js(helpers\url::template_path() . 'js/modernizr.min.js');

helpers\assets::js(array(
    '//cdnjs.cloudflare.com/ajax/libs/materialize/0.96.1/js/materialize.min.js',
    '//ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js'
));

helpers\assets::js(helpers\url::template_path() . 'js/materialize.min.js');
//helpers\assets::js(array(
//    '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/materialize.min.js'
//));

?>

<script type="text/javascript">
        // Initialize collapse button
        //$(".button-collapse").sideNav();
        // Initialize collapsible (uncomment the line below if you use the dropdown variation)
        $('.collapsible').collapsible();
</script>

</body>
</html>