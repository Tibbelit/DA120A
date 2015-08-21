<?php
	include "_header.php";
	if(isset($_GET['type']) and isset($_GET['nr'])){
		$type = $_GET['type'];
		$nr = $_GET['nr'];
		$link2 = "lectures/$type/";
		$link = "lectures/$type/$nr/";
		if (file_exists("lectures/$type/$nr/index.php")) {
            ?>
            <div class="row">
                <div class="col-lg-8 create-submenu">
                    <?php
                     include "lectures/$type/$nr/index.php";
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
		} else {
			echo "<h4>Detta är inte sidan du letar efter...</h4>";
		}
	}else{
	?>
	<div class="row">
		<div class="col-lg-8">
			<h2>Föreläsningar</h2>
			<p>Här finns ett index över de föreläsningar som kursen har. Indexet kommer att uppdateras i takt med att nya moduler publiceras.</p>
			<p><b>Notera att:</b> videoföreläsningarna har ett "hands on"-perspektiv, alltså vi tittar praktiskt (snarare än teoretiskt) på <i>hur</i> vi löser olika problem. Saker som historik om HTML m.m. förväntas ni själv studera in genom kurslitteraturen.</p>
			<h3>Kursintroduktion</h3>
			<!--
			<h4>Skrivna föreläsningar</h4>
			<div class="list-group">
			  <a href="lectures.php?type=JavaScript&nr=1" class="list-group-item">Introdution till HTML <span class="desc">Exempelföreläsning</span></a>
			</div>
			-->
			<h4>Videoföreläsningar</h4>
			<div class="list-group">
                <a href="lectures.php?type=Intro&nr=intro" class="list-group-item">Introduktion till kursen<span class="desc">Bra att veta</span></a>
            	<a href="lectures.php?type=Intro&nr=dvwebb" class="list-group-item">Introduktion till dvwebb<span class="desc">MAHs webbpubliceringssystem</span></a>
			</div>
			
			<h3>HTML</h3>
			<h4>Videoföreläsningar</h4>
			<div class="list-group">
                <a href="lectures.php?type=Modul1&nr=Program" class="list-group-item">Program för webbutveckling<span class="desc">Textedtior & webbläsare</span></a>
				<a href="lectures.php?type=Modul1&nr=HTML" class="list-group-item">Intro till HTML<span class="desc">Grunderna</span></a>
			</div>
			<h3>CSS</h3>
			<h4>Videoföreläsningar</h4>
			<div class="list-group">
				<a href="lectures.php?type=Modul6&nr=MediaQueriesIntro" class="list-group-item">Introduktion till media queries</a>
				<a href="lectures.php?type=Modul6&nr=MediaQueriesCase" class="list-group-item">Ett exempelcase för media queries</a>
			</div>
		</div>
		<div class="col-lg-4">
		</div>
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
	}
	include "_footer.php";
?>