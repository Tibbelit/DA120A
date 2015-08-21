<h2>Övning 1 - Introduktion till HTML</h2>
<h3>Del 1</h3>
<p>Ett HTML-dokument kan inledningsvis delas in i två delar</p>
<ul>
    <li>Huvud med information om dokumentet</li>
    <li>Kropp med information i själva dokumentet</li>
</ul>
<p>Gör ett vanligt tomt dokument enligt följande struktur:</p>
<pre>
	&lt;html&gt;
	  &lt;head&gt;
		  &lt;title&gt;Här är titeln på sidan&lt;/title&gt;
	  &lt;/head&gt;
	  &lt;body&gt;
	    Här har vi sidans innehåll
	  &lt;/body&gt;
	&lt;/html&gt;
</pre>
<h3>Del 2</h3>
<p>En tagg (eng. tag) är ett sätt att märka upp text så att en önskad struktur i dokumentet erhålls.</p>
<p>Vi skall använda rubrik taggar i denna övning. </p>
<p>De används ofta i HTML- dokument och deklareras med bokstaven ”h” sedan en siffra för att visa vilken sorts rubrik det är. Kan se ut på följande sätt ”h1” :</p>
<img src="/exercises/1/intro/html.png">
 <p>I din body-tagg så skall du implementera rubrik taggarna h1 till h3.</p>
 <p>Där innehållet i rubrikerna är valfritt. </p>

<h3>Del 3</h3>
<p>Det finns olika typer av taggar:</p>
<ul>
    <li>Omslutande	ex: &lt;ul&gt; &lt;/u&gt;></li>
    <li>Öppna		ex: &lt;br&gt;</li>
    <li>Nästlade		ex: &lt;p&gt;&lt;b&gt;&lt;/b&gt;&lt;/p&gt;</li>
    <li>Attribut		ex: &lt;h1 id=”rubrik”&gt; där id= är attributet</li>
    <li>Kommentarer (Kodkommatering  ”Gömmer kod”) där  &lt;!-- Detta är en kommentar --%gt;</li>
</ul>
<p>Din uppgift är att surfa till w3 schools ( www.w3schools.com) sedan kolla upp vad följande taggar gör för något: ul, br, p, b, li, a, i).</p>
<p>Prova sedan att implementera dessa i ditt HTML-dokument och skriv sedan vad de gör i en p-tagg.</p>
<p>Spara filen som Övning1.html och kör sedan filen.</p>
Övning 2 – Del 1
Bilder och hyperlänkar har egna taggar som de använder
För bilder används &lt;img&gt; -taggen som kan vara t.ex. &lt;mg src="mustanglogo.jpg"&gt;
Om attributet src= används så måste bild filen vara i samma katalog som HTML-filen, annars måste relativ sökväg anges.

<h2>Övning 2 - Länkar</h2>
<p>För hyperlänkar används &lt;a&gt; taggen och kan se ut på följande sätt: <br>
    &lt;a href="http://www.mah.se"&gt;länk&lt;/a&gt; (Länk till Malmö Högskolas hemsida)</p>

<p>Det finns 3 sätt att göra en länk på:</p>
<ol>
        <li>href=http://www.mah.se som är en specificerad extern länk</li>
        <li>href="enfil.html" är extern länk till en angiven HTML-fil och den angivna filen måste vara i samma katalog som HTML-filen</li>
        <li>href="#ankareitext" vilket är en referering i själva HTML-filen där den letar efter attribut namnet ”ankareitext” </li>
</ol>
<p>Skapa ett nytt HTML-dokument där du lägger in 4 valfria bilder totalt där 2 av bildernas sökvägar använder attributen src=” ” och 2 använder href=””. Ändra sedan href attributen till src. Vad blev skillnaden och varför?</p>

<p>Lägg till 3 länkar med de tre olika varianterna som beskrivs ovan och använd de angivna href sätten i ditt HTML-dokument. Skapa sedan ett tomt HTML dokument som heter enfil.html.
Spara dina filer och prova sedan att köra dessa.</p>

<p><a href="/exercises/1/intro/ex.zip">Länk till exempelfiler på övningarna ovan</a></p>
