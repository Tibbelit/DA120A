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
                var disqus_shortname = 'da120aht15'; // required: replace example with your forum shortname

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
		<div class="col-lg-8 create-submenu">
			<h2>Föreläsningar</h2>
			<p>Här finns ett index över de föreläsningar som kursen har. Indexet kommer att uppdateras i takt med att nya moduler publiceras.</p>
			<p><b>Notera att:</b> videoföreläsningarna har ett "hands on"-perspektiv, alltså vi tittar praktiskt (snarare än teoretiskt) på <i>hur</i> vi löser olika problem. Saker som historik om HTML m.m. förväntas ni själv studera in genom kurslitteraturen.</p>

			<h3>1. Kursintroduktion</h3>
			<h4>1.1. Videoföreläsningar</h4>
			<div class="list-group">
                <a href="lectures.php?type=Intro&nr=intro" class="list-group-item">Introduktion till kursen<span class="desc">Bra att veta</span></a>
            	<a href="lectures.php?type=Intro&nr=dvwebb" class="list-group-item">Introduktion till dvwebb<span class="desc">MAHs webbpubliceringssystem</span></a>
			</div>

			<h3>2. HTML</h3>
			<h4>2.1. Videoföreläsningar</h4>
			<div class="list-group">
                <a href="lectures.php?type=Modul1&nr=Program" class="list-group-item">Program för webbutveckling<span class="desc">Textedtior & webbläsare</span></a>
				<a href="lectures.php?type=Modul1&nr=HTML" class="list-group-item">Intro till HTML<span class="desc">Grunderna</span></a>
			</div>
			<h4>2.2. Skrivna föreläsningar</h4>
            <div class="list-group">
			  <a href="/lectures.php?type=Modul1&nr=Indentering" class="list-group-item">Indentering av kod<span class="desc">Hur och varför?</span></a></li>
              <a href="/lectures.php?type=Modul1&nr=Headings" class="list-group-item">HTML: Rubriker<span class="desc">Elementen <code>&lt;h1&gt;</code>-<code>&lt;h6&gt;</code></span></a></li>
              <a href="/lectures.php?type=Modul1&nr=Paragraphs" class="list-group-item">HTML: Paragrafer & text<span class="desc">Elementen <code>&lt;p&gt;</code>, <code>&lt;strong&gt;</code>, <code>&lt;em&gt;</code></span></a></li>
              <a href="/lectures.php?type=Modul1&nr=Images" class="list-group-item">HTML: Bilder<span class="desc">Elementet <code>&lt;img&gt;</code></span></a></li>
              <a href="/lectures.php?type=Modul1&nr=Links" class="list-group-item">HTML: Länkar<span class="desc">Elementet <code>&lt;a&gt;</code></span></a></li>
              <a href="/lectures.php?type=Modul1&nr=Lists" class="list-group-item">HTML: Listor<span class="desc">Elementen <code>&lt;ul&gt;</code>, <code>&lt;ol&gt;</code>,<code>&lt;li&gt;</code></span></a></li>
              <a href="/lectures.php?type=Modul3&nr=Forms" class="list-group-item">HTML: Formulär<span class="desc">Grunderna för ett HTML-formulär</span></a></li>
			</div>

			<h3>CSS</h3>
			<h4>Videoföreläsningar</h4>
			<div class="list-group">
				<a href="lectures.php?type=Modul4&nr=Inline-CSS" class="list-group-item">Intro till CSS och inline-style</a>
				<a href="lectures.php?type=Modul5&nr=CSS-powerpoint" class="list-group-item">CSS i externt dokument (föreläsning)</a>
				<a href="lectures.php?type=Modul5&nr=CSS-exempel" class="list-group-item">CSS i externt dokument (exempel)</a>
				<a href="lectures.php?type=Modul6&nr=MediaQueriesIntro" class="list-group-item">Introduktion till media queries</a>
				<a href="lectures.php?type=Modul6&nr=MediaQueriesCase" class="list-group-item">Ett exempelcase för media queries</a>
			</div>
		</div>
		<div class="col-lg-4 submenu-area">
		</div>
	</div>

    <hr>

    <div id="disqus_thread"></div>
    <script type="text/javascript">
        /* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
        var disqus_shortname = 'da120aht15'; // required: replace example with your forum shortname

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
