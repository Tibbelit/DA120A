<h2>Övning 3 - Bilder & länkar</h2>
    <h3>1. Fräscha upp hemsidan</h3>
        <p>Vegano har övervägt hur hemsidan kan bli mer tilltalande, och man därför önskar ha smakfull bild på restaurangen samt ett par länkar till de             vanligaste sociala medierna som man använder: facebook, twitter och instagram. Man skulle även vilja ha en länk som går till en del av hemsidan som         visar deras öppettider.</p>

        <p>Vi ska i denna övning utgå från föregående kod som vi har lyckats få ihop hittills. Resultatet efter våra tillägg bör rimligen se ut på detta                vis:</p>
            <p><a href="/exercises/1/ImagesLinks/ex2.png" data-lightbox="Webbsida" data-title="Exempellösning"><img src="/exercises/1/ImagesLinks/ex2.png"                    style="width:250px; box-shadow:0 0 5px #000; display:block; margin:auto;">.</a></p>
    <h3>2. Huvudbild - absolut sökväg</h2>
        <p>Det första vi kan börja med är att leta upp en trevlig bild på en restaurang. Har du ingen inspiration kan du ta denna 
            <a href="http://www.svenskamassan.se/Global/svenskamassan/bilder/restaurang.jpg">bild</a>. Använd hela länkens adress och stoppa i den i din tagg som en <i><a href="http://localhost:1234/lectures.php?type=Modul1&nr=Images#212-Absoluta-sokvagar">absolut sökväg</a></i>. Vegano önskar ha bilden precis under sina huvudrubriker, ungefär såhär.</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;!doctype html&gt;
&lt;html&gt;
    &lt;head&gt;
        &lt;meta charset="UTF-8"&gt;
        &lt;title&gt;&lt;/title&gt;
    &lt;/head&gt;
    &lt;body&gt;
        &lt;h1&gt;&lt;/h1&gt;
        &lt;img src="-lägg in länken till bilden här-"&gt;
    &lt;/body&gt;
&lt;/html&gt;
</code></pre> <!--Kan man gömma detta och låta studenten trycka på en knapp för att se lösningen?-->

<h3>3. Ikoner - relativ sökväg</h3>
<p>En bild säger mer än tusen rader kod brukar det sägas, vilket lyft! Nästa utmaning vi ska ta oss an är att lägga upp ikonerna för facebook, twitter och instagram på slutet av sidan och sedan gör dem klickbara. Vi börjar med ikonerna. Till skillnad från föregående bild ska vi nu försöka länka dem direkt från en mapp på datorn, det vill säga som en <i><a href="http://localhost:1234/lectures.php?type=Modul1&nr=Images#211-Relativa-sokvagar">relativ sökväg</a></i>. Varje ikon kommer behöva en egen <code>&lt;img&gt;</code> tagg! Ladda ner följande <a href="/DA120A/excercises/1/ImagesLinks/images.zip">zipfil</a> och extrahera den i samma mapp som ditt HTML-dokument. Sökvägen bör se ut ungefär såhär:</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;img src="images/namnet-på-din-bild"&gt;
</code></pre>
<p>Placera nu in ikonerna på rätt plats i dokumentet!
    
<!-- Sätt in exempel -->


<h3>3. Klickbara ikoner</h3>
<p>I <a href="http://localhost:1234/lectures.php?type=Modul1&nr=Links">länkföreläsningen</a> bekantade vi oss med <code>&lt;a&gt;</code> (står för eng. <i>anchor</i>) där vi kan ange relativa eller absoluta sökvägar till en annan plats. Det roliga är att bilder/ikoner också kan vara länkar! För att göra en klickbara ikoner behöver vi definiera dels vad det är som klickas på samt var vi hamnar när vi klickar på det. Du behöver därför "nästla" (eng. <i>nesting</i>) ikonerna innanför din <code>&lt;a&gt;</code> tagg: </p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;a href="länk-till-annan-sida"&gt;&lt;img src="images/namnet-på-din-bild"&gt;&lt;/a&gt;
</code></pre>
<p>Använd gärna adresserna till rätt hemsida till varje ikon. Pröva sedan att byta ut adresserna och se vad som händer!</p>

<h3>4. Öppettider </h3>
<p>Eftersom du redan vid det här laget lyckats få klickbara ikoner så kommer denna delövning vara som en dagisövning. Det första vi behöver göra är att skapa ett nytt HTML-dokument i samma mapp som ditt nuvarande dokument. Du kan döpa den till <code>oppettider.html</code> exempelvis. Det viktiga är att du använder rätt namn senare till din relativa sökväg. Skapa sedan en enkel rubrik med "Våra öppettider" och denna gång får du välja själv när Vegano ska ha öppet.</p>

<p>I ditt huvuddokument ska du nu lägga till en liknande rubrik med "Våra öppettider" precis under huvudbilden. Den ska agera ankare till vårt nyskapade dokument! Nästla nu en <code>&lt;a&gt;</code> tagg runt din rubrik.</p>
<pre class="language-markup line-numbers" data-type="html"><code class="language-markup line-numbers">
&lt;a href="ditt-nya-html-dokument.html"&gt;
   &lt;h2&gt;Namnet-på-din-länk&lt;/h2&gt;
&lt;/a&gt;
</code></pre>

<p>Klarat det? Bra jobbat! Nu har vi lagt till lite trevligare estetik på sidan, mera interaktion och kommit ett steg närmare rätt århundrade. </p>
