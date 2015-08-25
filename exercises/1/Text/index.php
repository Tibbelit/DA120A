<h2>Övning 2 - Text (paragrafer, rubriker, listor)</h2>
<h3>1. Restaurang Vegano</h3>
<p>I de kommande övningarna har vi fått i uppdrag att skissa på en hemsida åt en påtagligt påhittad restaurang vid namnet <i>Vegano</i>. Som du säkert förstått vid det här laget används HTML för att strukturera upp en hemsidas innehåll, exempelvis i vilken ordning vi har rubriker eller när listor ska dyka upp. Detta är inte mycket olikt hur man strukturerar upp exempelvis ett word-dokument! Estetiken och utseendet på hemsidan kommer senare så det behöver vi inte oroa oss för nu.</p>

<p>Restaurangen har önskat att följande text ska finnas på hemsidan</p>
<ul>
    <li>Titel för hemsida i webbläsarfliken</li>
    <li>En stor rubrik med restaurangens namn med en mindre rubrik för deras slogan</li>
    <li>En kortare presentation av restaurangen</li>
    <li>En menylista för deras lunchalternativ</li>
</ul>

<h3>2. Titel i webbläsarfliken</h2>
<p>För att komma igång behöver vi sätta upp en grundläggande struktur i dokumentet. Minns du vilka delar ett HTML-dokument brukar delas in i? Vi ska börja med det första, nämligen <i>huvudet</i> (eng. head) och detta bör alltså ligga längst upp i dokumentet, precis som ett huvud oftast gör. Logiskt, eller hur? Eftersom huvudet innehåller information om dokumentet (även kallat <i>metadata</i>) så är det även här vi sätter in titeln som webbläsaren ska läsa av.</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;head&gt;
    &lt;title&gt;&lt;/title&gt;
&lt;/head&gt;
</code></pre> <!--Kan man gömma detta och låta studenten trycka på en knapp för att se lösningen?-->
<p>Med ovanstående struktur ska du nu kunna skriva in titeln på dokumentet. Vad sägs om, vem vet, "Restaurang Vegano" eller "Godast mat i södern"? Ordet är fritt. Om du skrivit rätt kommer titeln att dyka upp på webbläsarfliken.</p>

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


<h3>3. Presentation och paragrafer</h3>
<p>Förhoppningsvis sitter rubriken på plats! Nu är det dags att skriva en presentation och placera den i rätt ordning. Restaurangen har önskat en egen presentation, men du får gärna strunta i vad de tycker och skriva en bättre om du önskar.</p>

<p>"Vår restaurang erbjuder helekologiskt och vegetarisk lunchbuffé för endast 69 kronor. Vi är belägna på Måsvägen 15 i Helsingborg</p>
