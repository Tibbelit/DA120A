<h2>Inlämningsuppgift 6</h2>
<h3>1. Inledning</h3>
<p>I den sista inlämningsuppgiften ska vi fortsätta att arbeta med layout för webbplatser. Vi ska nu, utöver att titta på den övergripande layouten, även fokusera på att presentera text och bilder. Dessutom ska vi titta på hur vi (mycket enkelt) kan mobilanpassa våra webbplatser.</p>

<h3>2. Syfte</h3>
<p>Syftet med uppgiften är att utöka er kunskap kring layout för webbplats - med fokus på innehåll samt anpassning för olika enheter.</p>

<h3>3. Uppgiften</h3>
<p>Uppgiften går ut på att ni ska skapa en sida som följer denna mall (den behöver inte ha Star Wars-tema, men eftersom det snart är premiär för <a href="http://www.imdb.com/title/tt2488496/?ref_=nv_sr_1" target="_blank">Star Wars: The Force Awakens</a> blev det mitt tema):</p>
<a href="/assignments/6/screen.jpg" data-lightbox="Webbsida2" data-title="Exempellösning2">
  <img src="/assignments/6/screen.jpg" alt="skiss" class="preview">
</a>
<p>Bilden ovan visar alltså struktren på er sida, inte <i>exakt</i> hur den ska se ut. Ni får själva välja färger/typsnitt/andra egenskaper som ni tycker gör er webbplats snygg. Men alla komponenterna ovan måste dock finnas med på er webbplats.</p>
<p>Här kommer en lite mer detaljerad beskrivning av vad som förväntas:</p>
<a href="/assignments/6/Mall.jpg" data-lightbox="Webbsida2" data-title="Exempellösning2">
  <img alt="skiss" src="/assignments/6/Mall.jpg" class="preview">
</a>
<p>Länkarna i menyn behöver inte fungera, men de ska representera riktiga länkar (alltså <code>&lt;a&gt;</code>-element).</p>
<p>För att göra sidan mer responsiv - i detta fallet mobilanpassad - ska den utformas på följande sätt om man surfar in på en mobiltelefon:</p>
<a href="/assignments/6/Mobile.jpg" data-lightbox="Webbsida2" data-title="Exempellösning2">
  <img alt="skiss" src="/assignments/6/Mobile.jpg" class="preview" style="height:300px; width:auto">
</a>
<p>Som ni kan se så finns alla element <b>utom logotypen</b> med i mobilversionen av webbplatsen (som ses bäst genom att surfa in till sidan genom en mobiltelefon).</p>

<h4>3.1. Innehåll på webbsidan ska alltså vara följande</h4>
<h5>3.1.1. Om man surfar in genom en dator</h5>
<ul>
  <li>En vänsterkolumn
    <ul>
      <li>Logotyp</li>
      <li>Meny</li>
    </ul>
  </li>
  <li>
    En huvudkolumn
    <ul>
      <li>Huvudrubrik</li>
      <li>Tre bilder med tillhörande bildtext</li>
      <li>2st avgänsningslinjer</li>
      <li>Ett avsnitt med text tillsammans med bild till höger om sig</li>
      <li>En sidfot</li>
    </ul>
  </li>
</ul>
<h5>3.1.2. Om man surfar in med en mobil</h5>
<ul>
  <li>En vänsterkolumn (som nu ligger <i>ovanför</i> innehållet)
    <ul>
      <li>Meny</li>
    </ul>
  </li>
  <li>
    En huvudkolumn (som nu ligger <i>under</i> menyn)
    <ul>
      <li>Huvudrubrik</li>
      <li>Tre bilder med tillhörande bildtext</li>
      <li>2st avgänsningslinjer</li>
      <li>Ett avsnitt med text tillsammans med bild till höger om sig</li>
      <li>En sidfot</li>
    </ul>
  </li>
</ul>
<p>Detta löser man genom "media queries" där man kan ange <b>vilka CSS-regler som gäller för vilken skärmupplösning</b>, ni kan läsa om detta <a href="http://www.w3schools.com/cssref/css3_pr_mediaquery.asp">här</a>.</p>

<h3>4. Krav</h3>
<h4>4.1. Generella krav</h4>
<ul>
  <li>Webbplatsen måste följa beskrivningen ovan, avseende innehåll och visuell utformning.</li>
  <li>All HTML-kod ska validera enligt HTML 5-standard (validera dina sidor <a href="http://validator.w3.org" target="_blank">här</a>)</li>
  <li>All HTML-kod ska vara bra indenterad</li>
  <li>Semantisk HTML ska användas. Detta betyder att taggar ska välja, så att de i så stor grad som möjligt beskriver innehåll och struktur (t.ex. elementet <code>&lt;header&gt;</code> för sidans sidhuvud osv.).</li>
  <li>All CSS-kod ska validera enligt CSS 3-standard (validera dina sidor <a href="https://jigsaw.w3.org/css-validator/" target="_blank">här</a>)</li>
  <li>Alla webbsidor ska använda samma stilmall(ar).</li>
  <li>Ni får <b>inte</b> använda er utav inline-stylin i denna uppgiften.</li>
  <li>CSS-mall(ar) ska validera enligt CSS nivå 2.1. eller CSS nivå 3.</li>
  <li>Webbsidans layout ska ha en dynamisk höjd och anpassa sig efter sidans innehåll.</li>
</ul>

<p>Även kvalitén på er kod kommer att bedömas.</p>

<h3>5. Redovisning</h3>
<p>När ni är klara med en uppgift, dubbelkollat mot kravlistan, jämfört med resultat-bilden ovan om allt ser bra ut och lämna in alla filer i en ZIP-fil på It's Learning. Ni ska även publicera er lösning på dvwebb.mah.se och bifoga en länk till er sida (i meddelandefältet) vid inlämningen på It's Learning.</p>
<p>Lycka till!</p>
