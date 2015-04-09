
</div>

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