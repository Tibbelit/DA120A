<?php
	include "_header.php";
?>
	<div class="row">
		<div class="col-lg-8 create-submenu">
			<h2>Planering</h2>
			<p>Här presenteras kursen planering gällande höstterminen 2015.</p>
            <p>Kursen är uppdelar i sex moduler som hanterar olika områden inom grundläggande webbutveckling. Först visas en översikt av kursen, sedan mer detaljerad information kring de olika modulerna. Deadline för inlämningsuppgiferna i de olika modulerna är alltid söndagen (23:59) den sista veckan för modulen.</p>
            <p><i>Noter att modulerna kommer att presenteras under kursens gång.</i></p>
   			<table class="table table-striped bigPlan">
            	<tr>
                	<th>Vecka</th>
                	<?php
						for($i = 36; $i < 54; $i++){
							echo "\n<th>$i</th>";	
						}
                        for($i = 1; $i < 3; $i++){
							echo "\n<th>$i</th>";	
						}
					?>
                </tr>
                <tr>
                	<th>Modul</th>
                    <td colspan="3"><a href="modules.php?module=1">Modul 1</a></td>
                    <td colspan="3">Modul 2</td>
                    <td colspan="3">Modul 3</td>
                    <td colspan="3">Modul 4</td>
                    <td colspan="3">Modul 5</td>
                    <td colspan="3">Modul 6</td>
                    <td colspan="2">Kompletteringar</td>
                </tr>
            </table>
            <h2></span>Kortfattat om modulerna</h2>
            
            <h3>Modul 1 - Introduktion & en första webbsida</h3>
            <p>I den första modulen ligger fokus på att sätta sig in i utvecklingsmiljön, samt att skapa en första webbsida. Innehållet på sidan kommer vara en presentation av er själva och tekniskt fokus kommer vara på att skriva korrekt HTML-kod (enligt standarden).</p>
            
            <h3>Modul 2 - Tabeller, bilder m.m.</h3>
            <p>I den andra modulen kommer fokus att ligga på att bygga tabeller för att presentera tabelldata. Det kommer även att vara större fokus på andra element, som t.ex. listor, bilder, länkar m.m.</p>
            
            <h3></span>Modul 3 - Formulär</h3>
            <p>I den tredje modulen ska vi fokusera på formulär - hur kan vi på ett smidigt sätt samla in data från användarna på vår webbplats? Vi kommer att titta på olika formulärselement som t.ex. textfält, radioknappar, checkboxar, drop-down-menyer m.m.</p>
            
            <h3>Modul 4 - Introduktion till CSS</h3>
            <p>I den fjärde modulen ändras fokus från HTML (strukturering av information) till CSS (formgivning av information). Vi ska här titta på vilka möjligheter vi har att formge vår webbsida genom t.ex. typsnitt, färger, storlek, ramar osv.</p>
            
            <h3>Modul 5 - Layout med CSS</h3>
            <p>I den femte modulen ska vi bygga layout med CSS. Vi ska lära oss att skapa bra struktur på vår webbplats genom sidhuvud, kolumner, menyer, sidfot m.m.</p>
            <h3>Modul 6 - Responsiv design</h3>
            <p>I den sjätte och sista modulen ska vi titta på hur vi kan mobilanpassa vår webbplats. I dagens situation besöker många personer webbplatser genom sin mobil - vilket vi naturligtvis vill ha stöd för på vår webbplats!</p>
            

      
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
	include "_footer.php";
?>