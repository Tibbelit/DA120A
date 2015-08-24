<?php
    if($_SERVER['SERVER_NAME'] != "localhost"){
        exit("Denna sida är inte publicerad än...");
    }
?>
<div class="row">
	<div class="col-lg-8">
		<h2>Inlämningsuppgift 5</h2>
		<h3><span class="a" id="m1"></span>1. Inledning</h3>
        <p>I den femte inlämningsuppgiften ska vi skapa uppdatera får webbplats så att den får en layout skapad genom CSS. Vi ska alltså skapa en webbsida med sidhuvud, navigation, en box för nyhetsbrev och sidfot. Detta bl.a. genom de nya HTML 5-elementen som finns tillgängliga för att bygga layouter (t.ex. <code>&lt;header&gt;, &lt;nav&gt;, &lt;aside&gt;, &lt;footer&gt;</code>). I denna uppgiften ska vi (till skillnad från förra) skriva vår CSS-kod i en extern stilmall (en egen CSS-fil) och <i>inline-styling</i> är <b>inte tillåtet</b>.</p>

        <h3><span class="a" id="m2"></span>2. Syfte</h3>
		<p>Syftet med uppgiften är att ni ska lära er att bygga layouter för webbplatser genom HTML och CSS.</p>
        
		<h3><span class="a" id="m3"></span>3. Uppgiften</h3>
        <p>Uppgiften går ut på att ni ska skapa en sida som följer denna mall:</p>
        <a href="/assignments/5/skiss.png" data-lightbox="Webbsida2" data-title="Exempellösning2">
            <img src="/assignments/5/skiss.png" alt="skiss" class="preview">
        </a>
        <p>Bilden ovan visar alltså struktren på er sida, inte <i>exakt</i> hur den ska se ut. Ni får själva välja färger/typsnitt/andra egenskaper som ni tycker gör er webbplats snygg. Men alla komponenterna ovan måste dock finnas med på er webbplats.</p>
        <p>Här kommer en lite mer detaljerad beskrivning av vad som förväntas:</p>
        <a href="/assignments/5/skiss-beskrivning.png" data-lightbox="Webbsida2" data-title="Exempellösning2">
            <img alt="skiss" src="/assignments/5/skiss-beskrivning.png" class="preview">
        </a>
        <h4>Innehåll på webbsidorna</h4>
        <h5>Startsida</h5>
        <p>Här ska ni skriva snabbt om skillnaden mellan <i>inline CSS</i> och <i>externa CSS-mallar</i>, samt fördelar/nackdelar med de olika metoderna. Dessutom ska här finnas en box till höger där ett formulär ska ligga (se bilden ovan). Formuläret ska inte fungera, utan bara göras som en man i HTML/CSS.</p>
        <h5>Om mig</h5>
        <p>Här ska ni återanvända sidan om er själva från förra inlämningsuppgiften.</p>
        <h5>Om CSS</h5>
        <p>Här ska ni återanvända den sida där ni skrev om CSS från förra inlämningsuppgiften.</p>
        <h5>Övrigt</h5>
        <p>Här får ni fylla på med valfri information</p>
        
        <h3><span class="a" id="m4"></span>4. Krav</h3>
        <h4>Generella krav</h4>
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
                
		<h3><span class="a" id="m5"></span>5. Redovisning</h3>
		<p>När ni är klara med en uppgift, dubbelkollat mot kravlistan, jämfört med resultat-bilden ovan om allt ser bra ut och lämna in alla filer i en ZIP-fil på It's Learning. Ni ska även publicera er lösning på dvwebb.mah.se och bifoga en länk till er sida (i meddelandefältet) vid inlämningen på It's Learning.</p>
		<p>Lycka till!</p> 
	</div>
		<div class="col-lg-4">
		<h2>Innehållsförteckning</h2>
		<div class="list-group">
			<a class="list-group-item" href="#m1">1. Inledning</a>
			<a class="list-group-item" href="#m2">2. Syfte</a>
			<a class="list-group-item" href="#m3">3. Uppgiften</a>
            <a class="list-group-item" href="#m4">4. Krav</a>
            <a class="list-group-item" href="#m5">5. Redovisning</a>
		</div>
	</div>
</div>