<?php //if($_SERVER[ 'SERVER_NAME'] !="localhost" ){ exit( "Denna sida är inte publicerad än..."); } ?>

<h2>Inlämningsuppgift 2</h2>
<h3>1. Inledning</h3>
<p>I den andra inlämningsuppgiften ska ni bygga en webbsida med tabeller, bilder och länkar. Innehållet på webbsidan ska presenteras genom en tabell som innehåller information om artister/band från Sverige, Australien och USA. Ni får fria händer på webbsidans utformning - så länge ni följer kravlistan som finns längre ner i uppgiften.</p>
<h3>2. Syfte</h3>
<p>Syftet med denna inlämningsuppgift är att ni ska få förståelse för hur tabeller fungerar i HTML och hur dessa kan verka tillsammans med bilder och länker för att presentera data.</p>

<h3>3. Uppgiften</h3>
<h4>3.1. Tabellen med artister/band</h4>
<p>Uppgiften är alltså att skapa en webbsida som presenterar artister/band från tre olika länder (Australien, Sverige, USA) i form av en tabell. Webbsidan ska innehålla följande:</p>
<ul>
    <li>Artistens/bandets namn</li>
    <li>Omslagsbild för artisten/bandet</li>
    <li>Ev. bandmedlemmar (gitarrist, basist, etc.)</li>
    <li>Senaste album</li>
    <li>Land</li>
    <li>Källor till informationen</li>
</ul>
<p>Det skall vara totalt 10st artister/band med minst två från varje land. All information ska presenteras genom tabellen. De HTML-element som ni måste ha med <i>minst en gång</i> är:</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!-- Obligatoriska element --&gt;
&lt;th&gt;, &lt;tr&gt;, &lt;td&gt;, &lt;table&gt;, &lt;img&gt;, &lt;a&gt;
&lt;!-- Valfria (men rekommenderade) element --&gt;
&lt;tbody&gt;, &lt;thead&gt;, &lt;caption&gt;</code></pre> 
<p style="margin-top:-10px; text-align:center;"><i>Figur. 1</i>
</p>
<p>Ni skall även använda er av tre olika filformat för bilderna i eran tabell. Formatet skall finnas minst en gång är följande:</p>
<pre class="language-markup line-numbers"><code class="language-markup line-numbers">.bmp
.jpg
.png</code></pre>
<p style="margin-top:-10px; text-align:center;"><i>Figur. 2</i>
</p>

<p>Innehållet i tabellen skall vara kortfattat, men heltäckande. Länk till var ni har hämtat informationen skall även finnas med.</p>

<p>Sidan ska sedan valideras, genom denna sida: <a href="http://validator.w3.org/">http://validator.w3.org/</a>. Inga fel ska då visas (varningar är ok). Er kod ska vara bra <a href="http://sv.wikipedia.org/wiki/Indentering">indenterad</a>.</p>
<p>Exempel på hur sidan skulle kunna påbörjas och se ut:</p>
<p>
    <!-- osäker på var du kommer att placera bilden -->
    <a href="assignments/2/webbsida2.png" data-lightbox="Webbsida2" data-title="Exempellösning2">
        <img src="assignments/2/webbsida2.png" style="width:250px; box-shadow:0 0 5px #000; display:block; margin:auto;">
    </a>
</p>
<p style="margin-top:-10px; text-align:center;"><i>Bild. 1</i>
</p>
<p>Denna sida ska sedan valideras, genom denna sida: <a href="http://validator.w3.org/">http://validator.w3.org/</a>. Inga fel ska då visas (varningar är OK). Er kod ska vara bra <a href="http://sv.wikipedia.org/wiki/Indentering">indenterad</a>.</p>

<h3><span class="a" id="m4"></span>4. Krav</h3>
<h4>4.1. Generella krav</h4>
<ul>
    <li>All HTML-kod ska validera enligt HTML 5-standard (validera dina sidor <a href="http://validator.w3.org" target="_blank">här</a>)</li>
    <li>All HTML-kod ska vara bra indenterad</li>
    <li>Ni ska använda rätt HTML-element för de olika typerna av information som ni har på er sida. T.ex. ska ert tabellhuvud vara &lt;th&gt;-element, era tabellrader ska vara &lt;tr&gt;-element.</li>
</ul>
<h4>4.2. Specifika krav</h4>
<ul>
    <li>Alla taggar som finns visade i <i>Figur 1</i> ska finnas med på er webbsida minst en gång.</li>
    <li>Informationen på er webbsida ska vara utformad så att elementeten i <i>Figur 1</i> finns representerade på ett <i>korrekt sätt</i>.</li>
    <li>Det ska finnas följande kolumnnamn: omslag/cover, artist/bandnamn, medlemmar, album, land och källa.</li>
    <li>Tio valda musik artister finns är valda och minst två från varje land skall finnas med.</li>
    <li>De olika bild-filformaten som är angivna i <i>Figur 2</i> används i tabellen.</li>
</ul>

<p>Även kvalitén på er kod kommer att bedömas.</p>

<h3><span class="a" id="m7"></span>5. Redovisning</h3>
<p>När ni är klara med en uppgift, dubbelkollat mot kravlistan, jämfört med resultat-bilden ovan om allt ser bra utoch lämna in alla filer i en ZIP-fil på It's Learning. Ni ska även publicera er lösning på dvwebb.mah.se och bifoga en länk till er sida (i meddelandefältet) vid inlämningen på It's Learning.</p>
<p>Lycka till!</p>