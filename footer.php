<footer role="contentinfo">

   <div id="inner-footer" class="clearfix">

      <div id="widget-footer" class="clearfix row-fluid">
         <div id="footer-left"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer4')) : ?></div>
         <?php endif; ?>
         <div id="footer-center"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer5')) : ?></div>
         <?php endif; ?>
         <div id="footer-right"><?php if (!function_exists('dynamic_sidebar') || !dynamic_sidebar('footer6')) : ?></div>
         <?php endif; ?>
      </div>

      <nav class="clearfix">
         <?php bones_footer_links(); // Adjust using Menus in Wordpress Admin ?>
      </nav>

   </div> <!-- end #inner-footer -->

</footer> <!-- end footer -->

</div> <!-- end #container -->

<!--[if lt IE 7 ]>
   <script src="//ajax.googleapis.com/ajax/libs/chrome-frame/1.0.3/CFInstall.min.js"></script>
   <script>window.attachEvent('onload',function(){CFInstall.check({mode:'overlay'})})</script>
<![endif]-->

<?php wp_footer(); // js scripts are inserted using this function ?>

</body>

</html>