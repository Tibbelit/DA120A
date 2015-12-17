<h2>Grundläggande formulärskomponenter</h2>

<h3>1. Inledning</h3>
<p>Nu när vi lärt oss att skapa formulär i HTML, vill vi kunna kunna samla in data från användaren på fler sätt än bara textrutor. Elementet <code>&lt;input&gt;</code> get oss möjlighet att samla in information genom bl.a. följande komponenter:</p>
<ul>
    <li>Text-fält
        <ul>
            <li>I HTML 5 finns det många varianter av text-fält, t.ex. epost, färg, nummer, etc. <a href="http://www.w3schools.com/tags/att_input_type.asp">här</a> kan ni läsa om alla möjligheterna som finns</li>
        </ul>
    </li>
    <li>Checkboxar</li>
    <li>Radioboxar</li>
    <li>Knappar
        <ul>
            <li>Vanlig "knapp" (som inte gör något om man inte i JavaScript säger detta)</li>
            <li>Submit "knapp", som skickar iväg formuläret</li>
            <li>Knapp som låter oss ladda upp filer</li>
        </ul>
    </li>
    <li>M.m.</li>
</ul>
<p>För att skapa de olika varianterna av indata-fält genom <code>&lt;input&gt;</code>-element, så använder man attributet <code>type</code>. Man anger alltså vilken typ indata-elementet ska använda sig utav. Exempel:</p>
<pre class="language-markup line-numbers codepen" data-type="html"><code class="language-markup line-numbers">
&lt;!-- Skapar ett textfält --&gt;
&lt;input type="text"&gt;

&lt;!-- Skapar en checkbox --&gt;
&lt;input type="checkbox"&gt;

&lt;!-- Skapar en radiobox --&gt;
&lt;input type="radio"&gt;

&lt;!-- Skapar en "vanlig" knapp --&gt;
&lt;input type="button" value="Knappens namn"&gt;

&lt;!-- Skapar en "submit" knapp --&gt;
&lt;input type="submit" value="Skicka"&gt;</code></pre>
<p><code>&lt;input&gt;</code> ovan borde ju sedan ha vars sitt <code>name</code>-attribut som vi tog upp i tidigare föreläsning.</p>
<p>Ni kan läsa mer om <code>&lt;input&gt;</code>-elementet hos <a href="http://www.w3schools.com/tags/tag_input.asp">W3Schools</a>.</p>

<h3>2. Textfält</h3>
<p>För att skapa</p>