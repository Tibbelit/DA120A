<?php
	include "_header.php";
?>
	<div class="row">
		<div class="col-lg-8 create-submenu">
			<?php
				$module = $_GET['module'];
				include "modules/$module/index.php";
			?>
		</div>
		<div class="col-lg-4 submenu-area"></div>
	</div>

    <hr>

    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'webbutvecklinggrundkursvt2015'; // required: replace example with your forum shortname

        /* * * DON'T EDIT BELOW THIS LINE * * */
        (function() {
            var dsq = document.createElement('script'); dsq.type = 'text/javascript'; dsq.async = true;
            dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
            (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
        })();
    </script>
    <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
    

<?php
	include "_footer.php";
?>