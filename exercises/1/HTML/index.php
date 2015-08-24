<h2>Övning - Ett första HTML-dokument</h2>
<h3>1. Ett grundläggande HTML-dokument</h3>
<p>Ett HTML-dokument kan inledningsvis delas in i två delar</p>
<ul>
    <li>Huvud med information om dokumentet</li>
    <li>Kropp med information i själva dokumentet</li>
</ul>
<p>Skapa ett tomt HTML-dokument, du kan utgår från denna grundläggande struktur:</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;html&gt;
  &lt;head&gt;
      &lt;title&gt;Här är titeln på sidan&lt;/title&gt;
  &lt;/head&gt;
  &lt;body&gt;
    Här har vi sidans innehåll
  &lt;/body&gt;
&lt;/html&gt;</code></pre>
<p>När du skapat ditt HTML-dokument med ovanstående HTML-kod. Testa att öppna HTML-dokumentet i en webbläsare. Såg det ut som du förväntade dig?</p>
<ul>
    <li>Var någonstans på sidan visas <code>&lt;title&gt;</code>-elementet?</li>
    <li>Var någonstans på sidan visas innehållet i elementet <code>&lt;body&gt;</code>?</li>
</ul>
<p>Var detta vad du förväntade dig? Här kan du läsa mer om elemenet <a href="http://www.w3schools.com/tags/tag_head.asp"><code>&lt;head&gt;</code></a> och <a href="http://www.w3schools.com/tags/tag_body.asp"><code>&lt;body&gt;</code></a>.</p>
<ul>
    <li>Testa nu att ändra texten både i titeln för dokumentet, och i kroppen för dokumentet. Fungerar det som förväntat?</li>
</ul>

<h3>2. Innehåll genom HTML</h3>
<p>Ett element (eng. tag) är ett sätt att märka upp text så att man får den stuktur man vill ha på sin information. Vi ska i del 2 av denna övning lägga till liter mer innehåll på vår sida, och inte bara meningen "<i>Här har vi sidans innehåll</i>".</p>

<p>På bilden nedan visas hur ett element är uppbyggt:</p>
<img src="/exercises/1/HTML/html.png">
<ul>
    <li><b>Starttagg</b> och <b>sluttagg</b>: ett element har en början (starttagg) och ett slut (sluttagg). Innehållet (ofta text) som ligger mellan starttagg och sluttagg definieras som ett visst typ av innehåll (beroende på vilket element man väljer). I Exemplet ovan har vi valt elementet <code>&lt;h1&gt;</code> vilket representerar den största rubriken i HTML. "<i>Detta är en rubrik</i>" kommer alltså visas som den största rubriken på sidan. Hade vi istället använt oss utav elementet <code>&lt;p&gt;</code> så hade texten "<i>Detta är en rubrik</i>" istället visats som en paragraf.</li>
    <li><b>Formatkod</b>: detta är namnet på det element vi vill skapa. Det kan t.ex. vara <code>&lt;h1&gt;</code>, <code>&lt;h2&gt;</code>, <code>&lt;p&gt;</code>, <code>&lt;li&gt;</code>, <code>&lt;strong&gt;</code>, <code>&lt;em&gt;</code>, etc.</li>
    <li><b>Innehåll</b>: är det som vi vill visa upp för användaren, som är synligt i webbläsaren i detta fall.</li>
</ul>

<p>Din uppgift är nu att lägga till mer innehåll till din webbsida, lite mer text som du genom olika element ger olika egenskaper. Du ska lägga till följande element på din sida:</p>
<ul>
    <li>En huvudrubrik (<code>&lt;h1&gt;</code>), läs hur man skapar rubriker <a href="/lectures.php?type=Modul1&nr=Headings" target="_blank">här</a>.</li>
    <li>Två paragrafer (<code>&lt;p&gt;</code>), läs hur man skapar paragrafer <a href="/lectures.php?type=Modul1&nr=Paragraphs" target="_blank">här</a>.</li>
    <li>En underrubrik (<code>&lt;h2&gt;</code>), läs hur man skapar rubriker <a href="/lectures.php?type=Modul1&nr=Headings" target="_blank">här</a>.</li>
    <li>En bild (<code>&lt;img&gt;</code>), läs hur man skapar bilder <a href="/lectures.php?type=Modul1&nr=Images" target="_blank">här</a>.</li>
    <li>En länk (<code>&lt;a&gt;</code>), läs hur man skapar länkar <a href="/lectures.php?type=Modul1&nr=Links" target="_blank">här</a>.</li>
</ul>
<p>För att se hur du skapar dessa olika element kan du titta på deras förläsningar som är länkade till.</p>

<p>
    Exempel på hur det kan se ut:
    <a href="/exercises/1/HTML/ex.png" data-lightbox="Webbsida" data-title="Exempellösning"><img src="/exercises/1/HTML/ex.png" style="width:250px; box-shadow:0 0 5px #000; display:block; margin:auto;"></a>
</p>
<p>Ni kan besöka och ladda ner exempelsidan ovan <a href="/exercises/1/HTML/ex.html">här</a>.</p>

<h3>3. Validering av HTML-kod</h3>
<p>Du ska nu validera det HTML-dokument som du skapat - alltså kontrollera om det följer de regler som finns när man skriver HTML-kod. Det är viktigt att koden validerar, att man håller sig till reglerna, av flera anledningar:</p>
<ul>
    <li>Det skapar kvalité på koden</li>
    <li>Webbsidan kommer visas på samma sätt i olika webbläsare</li>
    <li>Om man samarbetar kring koden är det viktigt att alla har samma inställning till att skriva bra kod</li>
</ul>
<p>Ni validerar er kod på <a href="https://validator.w3.org/" target="_blank">denna sida</a>. Här kan ni validera er kod på tre olika sätt:</p>
<ol>
   <li>Genom att ange länken till er webbsida. <b>OBS.</b> detta går bara om ni laddat upp er webbplats så att den är tillgänglig på internet, t.ex. genom <i>dvwebb</i></li> 
   <li>Genom att ladda upp er HTML-fil</li>
   <li>Genom att klistra in er HTML-kod i en text-ruta</li>
</ol>
<p>Hur ni gör är upp till er, det spelar mindre roll. Det enklaste i början kan vara att använda alternativ 3. och klistra in den HTML-kod man vill validera.</p>
<p>När ni klistrat in er kod/laddat upp er fil/länkat till er webbplats och klickat på knappen <strong>Check</strong> kommer ni att få reda på om er HTML-kod följer reglerna eller inte. Om den följer reglerna är allt bra - snyggt jobbat! Men ofta har man missat något litet. Då berättar sidan (validator) vad som är fel samt på vilken rad felet finns på. Det kan ta ett tag att lista ut de meddelanden som man får tillbaka - men med övning kommer det snart att gå snabbt!</p>

<p><b>Lycka till!</b></p>