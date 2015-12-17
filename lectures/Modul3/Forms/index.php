<h2>Formulär</h2>

<h3>1. Inledning</h3>
<p>Som du säkert lagt märket till när du surfar runt på nätet, så finns det formulär nästa överallt. På ett eller annat sätt vill vi kunna ge indata, alltså skicka med information till de olika webbplatserna som vi besöker. Det kan vara allt från en sökning via <a href="http://google.se">google</a> (där vi skriver in vår söksträng i ett text-fält), till inloggningar till diverse webbplatser (där vi skriver in användarnamn/lösenord i text-fält), till att kommentera på webbplatser (nere på denna sida t.ex.) osv. Nästan överallt finns formulär, ett sätt för oss att skicka data till de olika webbplatserna som vi besöker.</p>
<p>Vi ska i denna föreläsning titta på de mest grundläggande delarna av ett formulär.</p>

<h3>2. Grunden för ett formulär i HTML</h3>
<p>Det finns vissa saker som alltid ska finnas med i ett formulär, som krävs för att formuläret ska fungera på ett önskvärt sätt. Följande delar är bra att ha koll på:</p>
<ul>
    <li>Elementet: <code>&lt;form&gt;</code>
        <ul>
            <li>Atrribut: <code>action</code> (vart formuläret ska skickas)</li>
            <li>Attribut: <code>method</code> (hur data i formuläret ska skickas)</li>
        </ul>
    </li>
    <li>Elementet: <code>&lt;input&gt;</code>
        <ul>
            <li>Attribut: <code>type</code> (vilket typ av input-element vi vill skapa, vi kommer titta på typen "text" och "submit" här)</li>
            <li>Attribut: <code>name</code> (namnet på vårt element)</li>
            <li>Attribut: <code>value</code> (eventuellt värde för vårt element)</li>
        </ul>
    </li>
</ul>
<p>Ett väldigt basalt formulär skulle alltså kunna se ut på följande sätt:</p>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;form action="server.php" method="GET"&gt;
    Förnamn: &lt;input type="text" name="first-name"&gt;
    Efternamn: &lt;input type="text" name="last-name"&gt;
    &lt;input type="submit" value="Skicka"&gt;
&lt;/form&gt;</code></pre>
<p class="figure-center">Figur 1. Ett enkelt formulär i HTML</p>
<p>Det vi kan utläsa från formuläret är att:</p>
<ol>
    <li>Formuläret kommer att skickas till adressen <code>server.php</code></li>
    <li>Formuläret kommer att skickas med metoden <code>GET</code></li>
    <li>Formuläret har två textfält:
        <ol>
            <li>Förnamn, vars fält "heter" <code>first-name</code></li>
            <li>Efternamn, vars fält "heter" <code>last-name</code></li>
        </ol>
    </li>
    <li>En knapp, där det står "Skicka" och när man klickar på den, så skickas formuläret iväg (till adressen <code>server.php</code>). <strong>Värt att notera</strong> är att <code>&lt;input&gt;</code>-element med attributet <code>submit</code> skapar en knapp, som när man klickar på den skickar iväg formuläret till angiven adress.</li>
</ol>
<p>Detta ser i en webbläsare ut på följande sätt:</p>
<figure>
    <img src="/lectures/Modul3/Forms/basic_form.png" alt="Basic HTML form">
    <figcaption>Figur 2. Ett enkelt formulär i HTML</figcaption>
</figure>
<p>Skulle jag alltså fylla i formuläret ovan enligt följande:</p>
<figure>
    <img src="/lectures/Modul3/Forms/basic_form_name.png" alt="Basic HTML form">
    <figcaption>Figur 3. Exempel på ifyllt formulär</figcaption>
</figure>
<p>Och sedan klicka på knappen "skicka", så kommer formuläret att skickas iväg till platsen <code>server.php</code>, med metoden <code>GET</code>, tillsammans med följande data: <code>first-name = Anton</code>, <code>last-name = Tibblin</code>. Enligt följande skiss:</p>
<figure>
    <img src="/lectures/Modul3/Forms/basic_form_send.png" alt="Basic HTML form">
    <figcaption>Figur 4. Exempelskiss på ett skickat formulär</figcaption>
</figure>
<p>Den data som skickas (<code>first-name</code> och <code>last-name</code>) är de namn som vi angivit till våra text-fält (<code>&lt;input type="text" name="first-name"&gt;</code> och <code>&lt;input type="text" name="last-name"&gt;</code>, och värdet som skickas med (<code>Anton</code> och <code>Tibblin</code>) är det som vi skrev i våra text-rutor.</p>
<p>Detta är den grundläggande principen för hur data skickas iväg med formulär, genom en nyckel (<code>first-name</code>/<code>last-name</code>) som kopplas ihop med värde (<code>Anton</code>/<code>Tibblin</code>).</p>


<h3>3. Testa att skicka data</h3>
<p>Här nedan finns ett formulär där ni kan testa att skicka data med. Er data kommer skickas till ett exempelsvarsskipt som berättar för er vilken data ni skickat med formuläret. Titta och se vilka nycklar och vilka värden som skickas med.</p>
<hr>
<form action="/form_answer.php" method="get">
    <p>
        Namn: <input type="text" name="name">
    </p>
    <p>
        Meddelande: <input type="text" name="message">
    </p>
    <p>
        <input type="submit" value="Skicka formulär">
    </p>
</form>
<hr>
<p>HTML-koden för formuläret ovan är följande:</p>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;form action="/form_answer.php" method="get"&gt;
    &lt;p&gt;
        Namn: &lt;input type="text" name="name"&gt;
    &lt;/p&gt;
    &lt;p&gt;
        Meddelande: &lt;input type="text" name="message"&gt;
    &lt;/p&gt;
    &lt;p&gt;
        &lt;input type="submit" value="Skicka formulär"&gt;
    &lt;/p&gt;
&lt;/form&gt;</code></pre>


<h3>4. Metod: GET eller POST?</h3>
<p>När man skickar data genom ett HTML-formulär så kan man välja att skicka den via två olika metoder:</p>
<ul>
    <li>GET (standard, om inget anges)</li>
    <li>POST</li>
</ul>
<p>Mycket kort sagt så innebär <code>GET</code> att man skickar med formulärsdata (nycklar + värden) genom URL:n (synligt för användaren), alltså webbadressen, medan metoden <code>POST</code> skickar nycklar och värden "bakom kulisserna", alltså ej läsligt för en vanlig webbanvändare. Att skicka data med <code>POST</code> innebär dock inte att det man skicka är hemligt på något sätt, utan en person med bara lite kunskap om webben kan mycket enkelt snappa upp det som skickas. Med andra ord är <code>POST</code> inte "säkert" (t.ex. att skicka lösenord med), bara ett annat sätt att skicka data på.</p>
<p>Ni kan läsa mer om <code>GET</code>/<code>POST</code> hos <a href="http://www.w3schools.com/tags/ref_httpmethods.asp">W3Schools</a>.</p>