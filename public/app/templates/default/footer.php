
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
            <p> &Copy; <?php echo date('Y'); ?></p>
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
    '//maxcdn.bootstrapcdn.com/bootstrap/3.3.4/js/bootstrap.min.js'
));
?>

</body>
</html>