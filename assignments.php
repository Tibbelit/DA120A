<?php
	include "_header.php";
	if(isset($_GET['nr'])){
		$assignment = $_GET['nr'];
		if(file_exists("assignments/$assignment/index.php")){
			include "assignments/$assignment/index.php";
        ?>
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
		}else{
			echo "<h3>Här fanns tyvärr inget, dubbelkolla adressen</h3>";	
		}
	}else{
	?>
	<div class="row">
		<div class="col-lg-8">
			<h2>Inlämningsuppgifter</h2>
			<p>Här finns kursens inlämningsuppgifter samlade.</p>
			<div class="list-group">
				<div class="list-group-item"><a href="assignments.php?nr=1">Inlämningsuppgift 1</a></div>
				<div class="list-group-item"><a href="assignments.php?nr=2">Inlämningsuppgift 2</a></div>
                <div class="list-group-item"><a href="assignments.php?nr=3">Inlämningsuppgift 3</a></div>
				<div class="list-group-item"><a href="assignments.php?nr=4">Inlämningsuppgift 4</a></div>
                <div class="list-group-item"><a href="assignments.php?nr=5">Inlämningsuppgift 5</a></div>
				<div class="list-group-item"><a href="assignments.php?nr=6">Inlämningsuppgift 6</a></div>
			</div>			
			<p>Det inlämnade resultatet ska vara skapat av dig och ska representera ditt individuellt utförda arbete. Samarbete (gemensamt skapande av resultat) är inte tillåtet.</p>
		</div>
		<div class="col-lg-4">
			<!--<h2>Bra länkar</h2>-->
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