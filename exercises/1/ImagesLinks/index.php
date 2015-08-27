<h2>Övning 3 - Bilder & länkar</h2>
    <h3>1. Fräscha upp hemsidan</h3>
        <p>Vegano har övervägt och man önskar ha smakfull bild på restaurangen samt ett par länkar till de vanligaste sociala medierna som man använder:                facebook, twitter och instagram.</p>

        <p>Vi ska i denna övning utgå från föregående kod som vi har lyckats få ihop hittills. Resultatet efter våra tillägg bör rimligen se ut på detta                vis:</p>
            <a href="/exercises/1/ImagesLinks/ex2.png" data-lightbox="Webbsida" data-title="Exempellösning"><img src="/exercises/1/ImagesLinks/ex2.png"                    style="width:250px; box-shadow:0 0 5px #000; display:block; margin:auto;">.</a></p>
    <h3>2. Bild</h2>
        <p>Det första vi kan börja med är att leta upp en trevlig bild på en restaurang. Har du ingen inspiration kan du ta denna 
            <a href="http://www.svenskamassan.se/Global/svenskamassan/bilder/restaurang.jpg">bild</a>. Du kan antingenanvända länken direkt till bildtaggen             eller ladda ner den och länka till bilden i din mapp. Vegano önskar ha bilden precis under sina huvudrubriker, ungefär såhär.</p>
                <pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
                &lt;head&gt;
                    &lt;meta charset="UTF-8"&gt;
                    &lt;title&gt;&lt;/title&gt;
                &lt;/head&gt;
                &lt;body&gt;
                    &lt;h1&gt;&lt;/h1&gt;
                    &lt;img src="-lägg in länken till bilden här-"&gt;
                &lt;/body&gt;
                </code></pre> <!--Kan man gömma detta och låta studenten trycka på en knapp för att se lösningen?-->

<h3>3. Rubriker</h3>
<p>Nu när vi fått ordning på informationen om dokumentet ifråga ska vi börja med det inledande innehållet. Vi går nedåt ett snäpp från huvudet och ner på resten av <i>kroppen</i> (eng. body). Därför behöver vi definiera var detta innehåll ska vara.</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;head&gt;
    &lt;title&gt;&lt;/title&gt;
&lt;/head&gt;
&lt;body&gt;

&lt;/body&gt;
</code></pre>
<p>Försök nu att placera in en passande rubrik mellan 'kropp'-taggarna samt en mindre rubrik nedanför den stora med en slogan. Storlek på rubriken bestäms från h1 (störst) till h6 (minst).
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;h1&gt;&lt;h2&gt;&lt;h3&gt;&lt;h4&gt;&lt;h5&gt;&lt;h6&gt;
</code></pre>
    
<!-- Sätt in exempel -->


<h3>3. Presentation och paragrafer</h3>
<p>Förhoppningsvis sitter rubriken på plats! Nu är det dags att skriva en presentation och placera den i rätt ordning. Restaurangen har önskat en egen presentation, men du får gärna strunta i vad de tycker och skriva en bättre om du önskar. Använd paragraf-taggar för presentationen!</p>

<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;p&gt;&lt;/p&gt;
</code></pre>
<br>
<p><i>"Vegano erbjuder helekologisk och vegetarisk lunchbuffé för endast 69 kronor. Under kvällstid har du som gäst möjlighet att boka ett Vin & Vego-bord med säsongsbetonad meny med passande viner till. Vi är belägna på Vildmåsvägen 111 i Lund, välkomna! Vår lunchmeny finner ni nedan."</i></p>

<h3>4. Menylista </h3>
<p>Slutligen vill restaurangen att en del av deras lunchmeny ska finnas tillgänglig. Uppdelningen bör vara i rubriker med kalla och varma rätter med varsin punktad lista.</p>

<p>De kalla rätterna ska vara pasta romano, broccolipaj och vegetarisk pastrami. De varma rätterna ska vara svamprisotto, ärtlasagne och pasta arrabiata.   </p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;ul&gt;
   &lt;li&gt;&lt;/li&gt;
   &lt;li&gt;&lt;/li&gt;
   &lt;li&gt;&lt;/li&gt;
&lt;/ul&gt;
</code></pre>

<p>Har du klarat detta är du på god väg att ha skapat din första hemsida à 1998 style! Oroa dig inte, det kommer bli bättre med tiden. Resultatet än så länge bör se ut ungefär såhär: 
    <br>
    <a href="/exercises/1/Text/ex1.png" data-lightbox="Webbsida" data-title="Exempellösning"><img src="/exercises/1/text/ex1.png" style="width:250px; box-shadow:0 0 5px #000; display:block; margin:auto;">.</p><!--Vill gärna ha in facit html men vet ej hur--!>
