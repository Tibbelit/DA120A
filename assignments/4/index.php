<h2>Inlämningsuppgift 4</h2>
<h3><span class="a" id="m1"></span>1. Inledning</h3>
    <p>I den fjärde inlämningsuppgiften ska vi skapa våra första stylade webbsidor, detta med hjälp utav CSS. Tänk på att HTML och CSS går hand i hand och tillsammans skapar den webbsida som besökarna sedan ser. I denna uppgift ska vi formge våra element på sidan genom <i>inline</i> styling, d.v.s genom HTML-attributet "style".</p>

    <h3><span class="a" id="m2"></span>2. Syfte</h3>
<p>Syftet med uppgiften är att ni ska formge er webbplats genom CSS. Detta så att ni kan ändra färger/typografi/storlek/ramar kring olika element för att förbättra en webbsidas visuella utseende.</p>

<h3><span class="a" id="m3"></span>3. Uppgiften</h3>
    <p>Uppgiften är uppdelad i tre olika sidor (tre separata HTML-sidor):</p>
    <ol>
        <li>En startsida (sidan om er själva som ni gjorde i inlämningsuppgift 1)</li>
        <li>En startsida (Om CSS)</li>
        <li>En sida som ska ha ett specifikt utseende (se beskrivning nedan)</li>
    </ol>
    <p>Dessa sidor ska vara länkade till varandra genom en meny högst upp på sidan, så att man enkelt kan navigera mellan de olika sidorna.</p>

    <h4>Sida 1 - Om er själva</h4>
    <p>Ni ska här återanvända det innehåll som ni gjorde i inlämningsuppgift 1 (eller förbättra det - om ni vill). Sidan ska sedan förbättras genom att ni formger den enligt följande specifikation)</p>
    <ul>
        <li>Ni ska ha en annan bakgrundsfärg på sidan än vit</li>
        <li>Alla era rubriker ska ha centrerad text</li>
        <li>Er huvudrubrik (&lt;h1&gt;-elementet) ska ha typsnittet "Arial", en bakgrundsfärg som avviker från sidans bakgrundsfärg samt en text-färg som gör texten läsbar.</li>
        <li>&lt;h2&gt;-elementen ska ramar runt sig (valfri färg, stil, tjocklek)</li>
        <li>&lt;h3&gt;-elementen ska vara kursiva (genom CSS-egenskaper, inte &lt;i&gt; eller &lt;em&gt;-element)</li>
        <li>Era listor (&lt;ul&gt;/&lt;ol&gt;) ska ha en avvikande bakgrundsfärg</li>
        <li>Er bild ska ha en angiven bredd i CSS och vara centrerad</li>
    </ul>
    <p>Exempel på hur er startsida kan se ut: <br> <a href="/assignments/4/index.png" data-lightbox="Webbsida2" data-title="Exempellösning2">
        <img src="/assignments/4/index.png" style="width:200px; display:block; margin:auto;">
    </a></p>

    <h4>Sida 2 - Om CSS</h4>
    <p>På denna sida ska ni besvara följande frågor:</p>
    <ol>
        <li>Vad är CSS?
            <ul>
                <li>Varför finns CSS?</li>
                <li>Hur använder man CSS?</li>
            </ul>
        </li>
        <li>
            Det finns olika version av CSS
            <ul>
                <li>Vilka olika versioner av CSS finns det?</li>
                <li>Varför finns det olika versioner?</li>
                <li>Varför är det viktigt att veta vilken version som en viss CSS-egenskap tillhör?</li>
            </ul>
        </li>
    </ol>

    <p>Svaren på de två huvudfrågorna ska totalt vara 800 +/- 100 ord.</p>

    <p>Ni ska på denna sida presentera ert innehåll ovan på valfritt sätt, men följande CSS-egenskaper ska användas minst en gång (där ni anser det lämpligt):</p>
    <ul>
        <li>background-color</li>
        <li>color</li>
        <li>text-align</li>
        <li>text-decoration</li>
        <li>font-style</li>
        <li>font-family</li>
        <li>font-size</li>
        <li>font-weigth</li>
    </ul>

    <h4>Sida 3 - Formge sida efter en mall</h4>
    <p>Här ska ni utgå från <a href="/assignments/4/sida-org.html">denna HTML-sida</a>, och omvandlad den, visuellt (<b>bara genom CSS-kod, ändra inte i HTML-koden</b>, <i>undantag:</i> ni ska lägga in er meny högst upp på sidan genom HTML och CSS):</p>
    <figure style="width:50%; float:left;">
         <a href="/assignments/4/sida2-org.jpg" data-lightbox="Webbsida2" data-title="Exempellösning2">
            <img src="/assignments/4/sida2-org.jpg" style="width:200px; display:block; margin:auto;">
        </a>
        <figcaption style="text-align:center">Från detta</figcaption>
    </figure>
    <figure style="width:50%; float:left;">
         <a href="/assignments/4/sida2.jpg" data-lightbox="Webbsida2" data-title="Exempellösning2">
            <img src="/assignments/4/sida2.jpg" style="width:200px; display:block; margin:auto;">
        </a>
        <figcaption style="text-align:center">Till detta</figcaption>
    </figure>
    <p>Följande CSS-egenskaper behövs (minst en gång) för att efterlikna ovanliknande resultat:</p>
    <ul>
        <li>background-color</li>
        <li>text-align</li>
        <li>padding</li>
        <li>border</li>
        <li>color</li>
        <li>font-style</li>
        <li>font-weight</li>
    </ul>

    <h3><span class="a" id="m4"></span>4. Krav</h3>
    <h4>Generella krav</h4>
    <ul>
        <li>All HTML-kod ska validera enligt HTML 5-standard (validera dina sidor <a href="http://validator.w3.org" target="_blank">här</a>)</li>
        <li>All HTML-kod ska vara bra indenterad</li>
        <li>Ni ska använda rätt HTML-element för de olika typerna av information som ni har på er sida.</li>
        <li>All CSS-kod ska validera enligt CSS 3-standard (validera dina sidor <a href="https://jigsaw.w3.org/css-validator/" target="_blank">här</a>)</li>
    </ul>
    <h4>Specifika krav</h4>
    <ul>
        <li>Det ska finnas en meny på varje (era 3st) sidor som leder till de andra sidorna</li>
        <li>De olika sidorna ska uppfylla de krav som finns under uppgiftsbeskrivningen</li>
    </ul>

    <p>Även kvalitén på er kod kommer att bedömas.</p>

<h3><span class="a" id="m5"></span>5. Redovisning</h3>
<p>När ni är klara med en uppgift, dubbelkollat mot kravlistan, jämfört med resultat-bilden ovan om allt ser bra ut och lämna in alla filer i en ZIP-fil på It's Learning. Ni ska även publicera er lösning på dvwebb.mah.se och bifoga en länk till er sida (i meddelandefältet) vid inlämningen på It's Learning.</p>
<p>Lycka till!</p>
