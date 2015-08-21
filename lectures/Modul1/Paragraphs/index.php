<h2>HTML: Paragrafer</h2>
<h3>1. Inledning</h3>
<p>När man skriver text/dokument/rapporter/etc. är det viktigt att man delar upp sin brödtext i stycken. Detta framförallt för att läsaren ska få ett bättre "flow" och översikt när denna läser texten. Men även för att texten i varje stycke <i>på något vis hör ihop</i>. När vi läser en text är det enkelt för oss att lista ut vilken text som hör ihop - det är inte lika enkelt (snarare just nu smått omöjligt) för en dator att göra detta på en webbplats. Det är därför viktigt att vi tydligt märker ut stycken i våra texter så att både vi <i>och</i> datorn kan förstå vad som är stycken.</p>

<h3>2. Korrekt styckesindelning i HTML</h3>
<p>För att skapa ett stycke i HTML använder man sig utav elementet <code>&lt;p&gt;</code>, som är en förkortning av "paragraph". Det kan t.ex. se ut såhär:</p>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!-- Det första stycket --&gt;
&lt;p&gt;Detta är mitt första, just nu väldigt korta, stycke&lt;/p&gt;
&lt;!-- Det andra stycket --&gt;
&lt;p&gt;Detta är mitt andra, just nu väldigt korta, stycke&lt;/p&gt;
&lt;!-- Det tredje stycket --&gt;
&lt;p&gt;Detta är mitt tredje, just nu väldigt korta, stycke&lt;/p&gt;</code></pre>
<p class="figure-center">Figur 1. Styckesindelning genom elemtet <code>&lt;p&gt;</code></p>
<p>Klicka gärna på knappen "Öppna i CodePen" för att se hur dessa stycken ser ut i webbläsaren. Du kan då notera att det automatiskt i webbläsaren läggs till "luft", eller mellanrum mellan styckena så att läsbarheten ökar för oss.</p>

<h4>2.1. Felaktig styckesindelning i HTML</h4>
<p>Något som man (tyvärr) ofta ser är att man i HTML-koden skapar sina stycken med elemetet <code>&lt;br&gt;</code> istället för elementet <code>&lt;p&gt;</code>. <code>&lt;br&gt;</code>-elementet finns till för radbrytningar ("br" är förkortning för "break"), och ska användas till radbrytningar <i>inom t.ex. ett stycke</i> och <b>inte för att skapa stycken</b>. Tyvärr ser man ofta att det felaktigt används på detta sätt:</p>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!-- Det är tre stycken --&gt;
&lt;p&gt;
    Detta är mitt första, just nu väldigt korta, stycke
    &lt;br&gt;
    &lt;br&gt;
    Detta är mitt andra, just nu väldigt korta, stycke
    &lt;br&gt;
    &lt;br&gt;
    Detta är mitt tredje, just nu väldigt korta, stycke
&lt;/p&gt;</code></pre>
<p class="figure-center">Figur 2. <b>Felaktig</b> styckesindelning genom elemtet <code>&lt;p&gt;</code></p>
<p>Om ni öppnar exemplet i CodePen så kan ni se att resultatet ser <i>liknande ut</i>, men nu har datorn ingen aning om det faktiskt är tre stycken som vi "har gjort", dator tolkar detta som <b>ett stycke med radbrytningar i</b>.</p>
<p>Så tänk på detta när ni lägger in text och skapar era HTML-dokument, att ni skapar era stycken på ett korrekt sett, enligt HTML-standarden.</p>