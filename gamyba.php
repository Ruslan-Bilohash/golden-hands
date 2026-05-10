<?php
// SEO-параметры для production.php
$pageTitle = 'Gamyba — Reklamos konstrukcijos Vilniuje | Golden Hands';
$pageDescription = 'Moderni nuosava reklamos konstrukcijų gamyba Vilniuje. CNC lazerinis pjovimas, plačioformatė UV spauda, 3D modeliavimas, metalo apdirbimas, LED apšvietimas ir profesionalus montavimas. Pilnas ciklas nuo idėjos iki įrengimo.';
$pageKeywords = 'reklamos konstrukcijų gamyba Vilnius, CNC lazerinis pjovimas, UV spauda, 3D modeliavimas, iškabų gamyba, šviečiančių dėžių gamyba, LED apšvietimas, reklamos montavimas, nuosava gamyba';
$canonical = 'https://golden-hands.lt/gamyba.php';
include 'header.php';
include 'consultant-widget.php';
?>
<div style="padding-top:90px; background:#05070f;">
    <!-- Hero -->
    <section style="padding:140px 5% 100px; text-align:center; background:linear-gradient(rgba(10,15,28,0.9), rgba(10,15,28,0.95)), url('images/production-bg.webp') center/cover no-repeat;">
        <h1 style="font-size:clamp(2.8rem, 7vw, 4.5rem); color:white; margin-bottom:20px;">Mūsų gamyba</h1>
        <p style="font-size:1.4rem; max-width:800px; margin:auto; color:#cbd5e1;">Moderni įranga + 12 metų patirtis = aukščiausios kokybės reklamos konstrukcijos</p>
    </section>
    <div style="max-width:1400px; margin:auto; padding:100px 5%;">
        <!-- Вступительный SEO-текст -->
        <div style="max-width:900px; margin:auto; text-align:center; margin-bottom:80px; font-size:1.2rem; line-height:1.8; color:#cbd5e1;">
            <p>Golden Hands turi nuosavą gamybos kompleksą Vilniuje. Mes atliekame pilną reklamos konstrukcijų gamybos ciklą: nuo techninių brėžinių ir 3D modeliavimu iki galutinio montavimo.</p>
            <p style="margin-top:25px;">Dėl modernios įrangos ir patyrusios komandos mes įgyvendiname bet kokio sudėtingumo projektus per trumpus terminus, garantuodami aukštą kokybę ir tikslią atitiktį techninei užduočiai.</p>
        </div>
        <h2 style="color:#f59e0b; text-align:center; margin-bottom:60px; font-size:2.6rem;">Mūsų gamybinės galimybės</h2>
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(340px,1fr)); gap:30px;">
           
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-cut" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">CNC lazerinis pjovimas ir frezavimas</h3>
                <p>Tikslus metalo, kompozito, akrilo ir medžio pjovimas. Maksimalus metalo storis — 20 mm.</p>
            </div>
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-print" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">Plačioformatė UV spauda</h3>
                <p>Ryški ir ilgaamžė spauda ant bet kokių medžiagų. Rezoliucija iki 1440 dpi.</p>
            </div>
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-cube" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">3D modeliavimas ir prototipavimas</h3>
                <p>3D modelių kūrimas, vizualizacija ir prototipų gamyba prieš paleidžiant į serijinę gamybą.</p>
            </div>
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-industry" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">Metalo ir aliuminio apdirbimas</h3>
                <p>Lankstymas, suvirinimas, miltelinis dažymas, anodavimas ir metalinių konstrukcijų surinkimas.</p>
            </div>
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-lightbulb" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">LED apšvietimo sistemos</h3>
                <p>Energiją taupančio LED apšvietimo montavimas, šviečiančios dėžės ir tūrinės raidės su vidiniu apšvietimu.</p>
            </div>
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-truck-loading" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">Profesionali montuotojų brigada</h3>
                <p>Montavimas aukštyje, fasaduose, stoguose ir patalpose. Montavimo garantija — 3 metai.</p>
            </div>
        </div>
        <!-- Блок с картинками производства -->
        <h2 style="color:#f59e0b; text-align:center; margin:100px 0 60px; font-size:2.6rem;">Kaip atrodo mūsų gamyba</h2>
       
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px,1fr)); gap:25px;">
            <?php
            $productionImages = glob('images/{IMG_*.jpg,IMG_*.jpeg,*.jpg,*.jpeg,*.png,*.webp}', GLOB_BRACE);
            $limitedImages = array_slice($productionImages, 0, 6);
            foreach ($limitedImages as $img) {
                $filename = basename($img);
                echo '
                <div style="border-radius:16px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.4);">
                    <img src="' . htmlspecialchars($img) . '"
                         alt="Golden Hands gamyba — ' . htmlspecialchars($filename) . '"
                         loading="lazy"
                         style="width:100%; height:260px; object-fit:cover;">
                </div>';
            }
            ?>
        </div>
        <!-- Дополнительный SEO-текст -->
        <div style="margin-top:100px; background:#1e2937; padding:50px; border-radius:20px; line-height:1.8; font-size:1.15rem;">
            <h3 style="color:#f59e0b; text-align:center; margin-bottom:30px;">Kodėl klientai renkasi mūsų gamybą</h3>
            <ul style="list-style:none; display:grid; grid-template-columns:repeat(auto-fit, minmax(280px,1fr)); gap:20px;">
                <li style="padding:15px 0;">✅ Pilnas gamybos ciklas po vienu stogu</li>
                <li style="padding:15px 0;">✅ Terminų laikymasis — 99% projektų pristatomi laiku</li>
                <li style="padding:15px 0;">✅ Tik sertifikuotos medžiagos</li>
                <li style="padding:15px 0;">✅ Gaminio garantija iki 5 metų</li>
                <li style="padding:15px 0;">✅ Individualus požiūris į kiekvieną užsakymą</li>
                <li style="padding:15px 0;">✅ Kokybės kontrolė kiekviename etape</li>
            </ul>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>