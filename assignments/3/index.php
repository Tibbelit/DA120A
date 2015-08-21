<div class="row">
	<div class="col-lg-8">
		<h2>Inlämningsuppgift 3</h2>
		<h3><span class="a" id="m1"></span>1. Inledning</h3>
        <p>I den tredje inlämningsuppgiften ska vi fokusera på att göra ett formulär i HTML. Vi kommer att använda oss utav olika formulärskomponenter, t.ex. text-fält, checkboxar & radioknappar. Vi kommer även att använda oss utav nya HTML 5-möjligheter så som "placeholders" för text-fält och validering av formulärsdata.</p>

        <h3><span class="a" id="m2"></span>2. Syfte</h3>
		<p>Syftet med uppgiften är att ni ska behärska HTML-formulär med olika indata-typer (text/knappar/drop down-meny m.m.) för att samla in data från användare. I denna uppgift fokuserar vi endast på gränssnittet mot användaren (formuläret) och inte vad som sedan händer med den data som skickas till vår server.</p>
        
		<h3><span class="a" id="m3"></span>3. Uppgiften</h3>
        <p>Ni har fått ett uppdrag om att göra ett förmulär till tidningen <i>Blomstermålabladet</i>. Blomstermålabladets anställda är nyfikna på vem som besöker deras webbplats, och vad deras användare tycker om webbplatsen, samt vilka delar som besöks mest. Dessutom vill de ge personerna som svarar på formuläret möjligheten att vinna en T-shirt om de fyller i sin epost-adress och vad de tycker om webbplatsen.</p>
        <p>Er uppgift är alltså att bygga detta formulär. Hur formuläret bör se ut när det är klart är något i stil med detta: </p>
        <a href="/assignments/3/result.png" data-lightbox="Webbsida2" data-title="Exempellösning2">
            <img src="/assignments/3/result.png" style="width:200px;">
        </a>
        <p>Formuläret ska alltså best utav följande delar:</p>
        <ol>
            <li>Kontaktuppgifter
                <ul>
                    <li>Namn (får innehålla text)</li>
                    <li>Ålder (får bara innehålla siffror)</li>
                </ul>
            </li>
            <li>
                Dina besök på blomstermålabladet
                <ul>
                    <li>Hur ofta besöker du blomstermålabladet?
                        <ul>
                            <li>Varje dag (radio-knapp)</li>
                            <li>Varannan dag (radio-knapp)</li>
                            <li>Varje vecka (radio-knapp)</li>
                        </ul>
                    </li>
                    <li>Vilka delar av blomstermålablader brukar du besöka?
                        <ul>
                            <li>Nyheter (checkbox)</li>
                            <li>Utrikes (checkbox)</li>
                            <li>Inrikes (checkbox)</li>
                            <li>Sport (checkbox)</li>
                            <li>Skvaller (checkbox)</li>
                            <li>Väder (checkbox)</li>
                            <li>Övrigt (checkbox)</li>
                        </ul>
                    </li>
                </ul>
            </li>
            <li>
                Vinn en T-shirt!
                <ul>
                    <li>Bästa med blomstermålabladet (textfält)</li>
                    <li>Sämsta med blomstermålabladet (textfält)</li>
                    <li>Epost (måste vara en korrekt epost-adress)</li>
                    <li>Storlek (drop down-menyn, med "M" förvalt), med följande alternativ (i denna ordning):
                        <ol>
                            <li>XS</li>
                            <li>S</li>
                            <li>M</li>
                            <li>L</li>
                            <li>XL</li>
                        </ol>
                    </li>
                </ul>
            </li>
            <li>
                Skicka/Återställ
                <ul>
                    <li>Skicka (knapp som skickar iväg formuläret)</li>
                    <li>Återställ formulär (knapp som återställer formuläret)</li>
                </ul>
            </li>
        </ol>
        <p>Följande fält <b>måste</b> fyllas i innan formuläret får skickas:</p>
        <ul>
            <li>Namn</li>
            <li>Ålder</li>
            <li>Ett av alternativen under "Hur ofta besöker du blomstermålabladet"</li>
        </ul>
        <p>Varje del (som på bilden ovan har en ram runt sig) ska vara ett eget <code>&lt;fieldset&gt;</code> med korrekt titel (<code>&lt;legend&gt;</code>).</p>
        <p>Formuläret ska sedan skickas (när man klickar på knappen "skicka") till följande adress: "http://webshare.mah.se/m09p1837/Lab3/form_answer.php" med metoden "GET". Den sidan kommer att tolka den data som ni skickar, och skiva ut den, så att ni kan se att ert formulär skickar iväg korrekt data. Exempel på hur det kan se ut när man skickat iväg sitt formulär: </p>
        <a href="/assignments/3/answer.png" data-lightbox="Webbsida2" data-title="Exempellösning2">
            <img src="/assignments/3/answer.png" style="width:200px;">
        </a>
        <h4>Tips</h4>
        <ul>
            <li><a href="http://www.w3schools.com/tags/att_input_type.asp">Här kan ni hitta en lista på olika typer av text-fält</a></li>
            <li><a href="http://www.w3schools.com/tags/att_input_required.asp">För att ett fält <b>måste</b> fyllas i innan formuläret skickas</a></li>
            <li><a href="http://www.w3schools.com/tags/att_input_placeholder.asp">En bekrivning av text-fält</a></li>
            <li>Tänk på att de ny HTML 5-funktionerna som t.ex. "placeholder", "email", "required" (attributen för input-fält) bara fungerar i moderna webbläsare - vilket vi är medvetna om i denna uppgiften.</li>
        </ul>
        
        <h3><span class="a" id="m4"></span>4. Krav</h3>
        <h4>Generella krav</h4>
        <ul>
            <li>All HTML-kod ska validera enligt HTML 5-standard (validera dina sidor <a href="http://validator.w3.org" target="_blank">här</a>)</li>
            <li>All HTML-kod ska vara bra indenterad</li>
            <li>Ni ska använda rätt HTML-element för de olika typerna av information som ni har på eran sida.</li>
        </ul>
        <h4>Specifika krav</h4>
        <ul>
            <li>Ert formulär ska ha med alla delar som beskrivs under punk 3 (Uppgiften), och följa uppgiftsbeskrivningen.</li>
            <li>Varje sektion i formuläret ska vara ett <code>&lt;fieldset&gt;</code> med tillhörande <code>&lt;legend&gt;</code></li>
            <li>Ni ska ha etiketter för alla era indata-fält (&lt;label&gt;) som ska vara kopplade till respektive fält. Så när man klickar på en etikett så blir det fokus på valt formulärs-element</li>
            <li>Fälten "Namn", "Ålder", "Hur ofta besöker du blåmstermålabladet" <b>måste</b> fyllas i.</li>
            <li>Fältet "Ålder" får bara innehålla siffror.</li>
            <li>Fältet "Epost" får bara innehålla korrekta epostadresser.</li>
            <li>Fältet "Storlek" ska ha förifyllt alternativet "M", men lista alternativen i ordningen "XS", "S", "M", "L", "XL".</li>
            <li>Formuläret ska skicka till följande adress "http://webshare.mah.se/m09p1837/Lab3/form_answer.php" med metoden "GET" (när man klickar på knappen "skicka".</li>
            <li>Knappen "Återställ" ska återställa/nollställa formuläret.</li>
        </ul>
        
        <p>Även kvalitén på er kod kommer att bedömas.</p>
                
		<h3><span class="a" id="m5"></span>5. Redovisning</h3>
		<p>När ni är klara med en uppgift, dubbelkollat mot kravlistan, jämfört med resultat-bilden ovan om allt ser bra utoch lämna in alla filer i en ZIP-fil på It's Learning. Ni ska även publicera er lösning på dvwebb.mah.se och bifoga en länk till er sida (i meddelandefältet) vid inlämningen på It's Learning.</p>
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