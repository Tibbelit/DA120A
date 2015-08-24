<?php
    if($_SERVER['SERVER_NAME'] != "localhost"){
        exit("Denna sida är inte publicerad än...");
    }
?>
<h2>Modul 6 - Responsiv design</h2>
<h3>1. Kom igång med media queries</h3>
<p>Vi ska nu fortsätta med mer layoutbyggande i HTML & CSS. Detta genom att strukturera upp vårt innehåll på webbsidan i olika rader/kolumner, men även lite mer specifik layout som t.ex. bilder bredvid varandra m.m.</p>
<p>Dessutom ska vi nu, i enkelhet, anpassa vår webbsida så att den är mobilanpassad och är enkelt att använda oavsett om man surfar in med en dator eller mobil. Detta genom <code>media queries</code>.</p>

<h2>2. Material</h2>

<div class="row smallerText">
    <div class="col-lg-4">
        <h4>2.1. Föreläsningar</h4>
        <ul>
            <li><a href="lectures.php?type=Modul6&nr=MediaQueriesIntro">[Video] Introduktion till media queries</a></li>
			<li><a href="lectures.php?type=Modul6&nr=MediaQueriesCase">[Video] Ett exempelcase för media queries</a></li>
        </ul>
    </div>
    <div class="col-lg-4">
        <h4>2.2. Kurslitteratur</h4>
        <ul>
            <li>HTML och CSS-boken: Kapitel 5: Formatmallar</li>
            <li>HTML och CSS-boken: Kapitel 6: Mer om text</li>
            <li>HTML och CSS-boken: Kapitel 10: Avancerad CSS</li>
            <li>BYOWUHAC*: Kapitel 4: Shaping up using CSS</li>
			<li>BYOWUHAC*: Kapitel 5: Picture This! Using Images on Your Website</li>
        </ul>
    </div>
    <div class="col-lg-4">
        <h4>2.3. Bra läsning</h4>
        <ul>
            <li><a href="http://www.smashingmagazine.com/2009/10/19/the-mystery-of-css-float-property/">The Mystery Of The CSS Float Property</a></li>
            <li><a href="http://www.smashingmagazine.com/2009/10/05/mastering-css-coding-getting-started/">Mastering CSS Coding: Getting Started</a></li>
            <li><a href="http://www.smashingmagazine.com/mastering-css-principles-comprehensive-reference-guide/">Mastering CSS Principles: A Comprehensive Guide</a></li>
            <li><a href="http://www.w3schools.com/cssref/css3_pr_mediaquery.asp">CSS3 @media Rule</a></li>
            <li><a href="http://www.w3schools.com/css/css_float.asp">CSS - Floating</a></li>
        </ul>
    </div>
</div>
<div class="row smallerText">
    <div class="col-lg-4">
        <h4>2.4. Extra läsning</h4>
        <ul>
            <li class="todo">Bra länkar</li>
        </ul>
    </div>
    <div class="col-lg-4">
        <h4>2.5. Övningar</h4>
        <ul>
            <li class="todo">Övningar</li>
        </ul>
    </div>
    <div class="col-lg-4">
        <h4>2.6. Inlämningsuppgift</h4>
        <p><a href="assignments.php?nr=6">Inlämningsuppgift 6 - Layout och media queries</a></p>
    </div>
</div>