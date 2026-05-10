<?php
// SEO-параметры для index.php
$pageTitle = 'Golden Hands — Reklamos konstrukcijos bet kokio sudėtingumo Vilniuje ir Lietuvoje';
$pageDescription = 'Profesionalus reklamos konstrukcijų gamyba Vilniuje: iškabos, šviečiančios dėžės, 3D raidės, parodų stendai, POSM. Pilnas ciklas nuo idėjos iki montavimo. 12+ metų patirtis • Nuosava gamyba';
$pageKeywords = 'reklamos konstrukcijos Vilnius, iškabos Vilnius, šviečiančios dėžės, 3D raidės, parodų stendai, POSM Vilnius, lauko reklama Lietuva, iškabų gamyba, Golden Hands';
$canonical = 'https://golden-hands.lt/';
?>
<!-- Критические мобильные стили -->
<style>
.hero-section {
    position: relative;
    height: 100vh;
    min-height: 640px;
    display: flex;
    align-items: center;
    text-align: center;
    color: white;
    overflow: hidden;
}
@media (max-width: 768px) {
    .hero-section { min-height: 82vh !important; }
    .hero-section h1 { font-size: clamp(2.3rem, 8vw, 3.6rem) !important; line-height: 1.05 !important; }
    .hero-section p { font-size: clamp(1.05rem, 4.5vw, 1.3rem) !important; }
    section { padding: 80px 5% !important; }
}
@media (max-width: 480px) {
    .hero-section { min-height: 78vh !important; }
}
.fade-in { animation: fadeIn 0.9s ease forwards; }
@keyframes fadeIn { from { opacity:0; transform:translateY(25px); } to { opacity:1; transform:translateY(0); } }
/* Стили для иконок материалов */
.material-item {
    background:#1e2937;
    padding:28px 20px;
    border-radius:20px;
    text-align:center;
    transition:all 0.3s;
    min-width:160px;
}
.material-item:hover {
    transform:translateY(-8px);
    box-shadow:0 15px 30px rgba(245,158,11,0.2);
}
.material-item i {
    font-size:3.2rem;
    color:#f59e0b;
    margin-bottom:15px;
}
</style>
<main>
<!-- HERO - Максимально сильный -->
    <section style="padding:160px 5% 120px; text-align:center; background:linear-gradient(rgba(10,15,28,0.82), rgba(10,15,28,0.92)), url('assets/img/hero.jpg') center/cover no-repeat; position:relative;">
        <div style="max-width:1280px; margin:auto; padding:0 5%;">
            </br><h1 style="font-size:clamp(2.8rem, 7vw, 5rem); color:white; margin-bottom:24px; line-height:1.05; font-weight:700;">
                Gaminame reklamos konstrukcijas<br>ir firminius objektus bet kokio sudėtingumo Vilniuje
            </h1>
            <p style="font-size:clamp(1.2rem, 4.2vw, 1.55rem); max-width:860px; margin:auto; color:#e2e8f0; line-height:1.6;">
                Iškabos, šviečiančios dėžės, 3D raidės, parodų stendai, POSM ir individualūs projektai.<br>
                Pilnas gamybos ir montavimo ciklas visoje Lietuvoje ir Europoje.
            </p>
            <div style="margin-top:45px; display:flex; gap:20px; justify-content:center; flex-wrap:wrap;">
                <a href="/kontaktai" style="background:#f59e0b; color:#111827; padding:20px 52px; border-radius:50px; text-decoration:none; font-weight:700; font-size:1.25rem;">Gauti kainos pasiūlymą</a>
                <a href="#services" style="border:2.5px solid white; color:white; padding:18px 46px; border-radius:50px; text-decoration:none; font-weight:600; font-size:1.2rem;">Mūsų paslaugos</a>
                
                <!-- Кнопка "Перезвоните мне" -->
                <a href="perezvonit.php" onclick="showCallbackPopup(); return false;"
                   style="background:#1e2937; color:#f59e0b; border:2px solid #f59e0b; padding:19px 42px; border-radius:50px;
                          text-decoration:none; font-weight:700; font-size:1.22rem; display:flex; align-items:center; gap:10px;
                          transition:all 0.3s; box-shadow:0 8px 25px rgba(245,158,11,0.3);">
                    <i class="fas fa-phone-volume"></i>
                    Paskambinkite man
                </a>
            </div>
        </div>
    </section>
    
    <!-- SEO ВСТУПЛЕНИЕ -->
    <div style="max-width:1280px; margin:auto; padding:90px 5% 60px; text-align:center; color:#cbd5e1; font-size:1.22rem; line-height:1.75;">
        <p><strong>Golden Hands</strong> — pirmaujanti reklamos konstrukcijų gamybos įmonė Vilniuje ir Lietuvoje. Daugiau nei 12 metų padedame verslui pritraukti klientus ryškia ir efektyvia lauko reklama.</p>
        <p style="margin-top:25px;">Siūlome pilną paslaugų ciklą: nuo dizaino kūrimo ir 3D modeliavimu iki gamybos, pristatymo ir profesionalaus montavimo. Mūsų konstrukcijos veikia prekybos centruose, degalinėse, parduotuvėse ir dideliuose renginiuose visoje Lietuvoje ir Europoje.</p>
    </div>

<!-- ==================== УСЛУГИ ==================== -->
<section id="services" style="padding:120px 5%; background:#0a0f1c;">
    <div style="max-width:1400px; margin:auto;">
        <h2 style="text-align:center; font-size:clamp(2.6rem, 5.5vw, 3.2rem); margin-bottom:24px; color:white;">Mūsų paslaugos</h2>
        <p style="text-align:center; font-size:1.35rem; max-width:780px; margin:auto; margin-bottom:80px; color:#cbd5e1;">
            Pilnas reklamos konstrukcijų gamybos ciklas — nuo idėjos iki montavimo
        </p>
     
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px,1fr)); gap:32px;">
          
            <!-- 1. Наружные конструкции -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-store fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Lauko konstrukcijos</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Iškabos, šviečiančios dėžės, tūrinės raidės, fasadinės konstrukcijos parduotuvėms ir prekybos centrams</p>
            </div>
            <!-- 2. Выставочные стенды -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-chalkboard-teacher fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Parodų stendai</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Individualūs ir moduliniai stendai parodoms ir B2B renginiams</p>
            </div>
            <!-- 3. POSM / Retail -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-tags fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">POSM / Mažmeninė prekyba</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Prekybos įranga, stendai, dispenser'iai, promo konstrukcijos</p>
            </div>
            <!-- 4. Event-декорации -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-lightbulb fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Renginių dekoracijos</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Fotozonos, šventinės instaliacijos, korporatyvinės dekoracijos</p>
            </div>
            <!-- 5. Для Театров и Сценографии -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-theater-masks fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Teatrui ir scenografijai</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Teatro dekoracijos, portalai, podiumai, sceninės konstrukcijos, šviesos fermos ir sudėtingi pastatymo sprendimai</p>
            </div>
            <!-- 6. Для Телевидения и Студий -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-tv fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Televizijai ir studijoms</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Studijinės dekoracijos, LED ekranai, chromakey, televizijos panelės, mobiliosios studijos ir apšvietimo įranga</p>
            </div>
            <!-- 7. Индивидуальные проекты -->
            <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                <i class="fas fa-pencil-ruler fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Individualūs projektai</h3>
                <p style="color:#cbd5e1; line-height:1.65;">Unikalių reklamos konstrukcijų kūrimas ir gamyba pagal jūsų techninę užduotį</p>
            </div>
        </div>
    </div>
</section>
<!-- ==================== МАТЕРИАЛЫ ==================== -->
<section style="padding:120px 5%; background:#05070f;">
    <div style="max-width:1400px; margin:auto; text-align:center;">
       
        <h2 style="font-size:clamp(2.4rem, 5.5vw, 2.9rem); margin-bottom:20px; color:white;">Medžiagos, su kuriomis dirbame</h2>
        <p style="font-size:1.3rem; max-width:780px; margin:auto; margin-bottom:70px; color:#cbd5e1;">
            Naudojame tik patikrintas ir ilgaamžes medžiagas, kad jūsų reklamos konstrukcijos tarnautų daugelį metų ir puikiai atrodytų bet kokiomis sąlygomis
        </p>
       
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px,1fr)); gap:28px;">
           
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-hammer fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Metalas ir plienas</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Patikimos ir tvirtos konstrukcijos didelėms fasadinėms iškaboms ir steloms. Aukštas atsparumas oro sąlygoms.</p>
            </div>
           
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-cube fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Plastikas ir akrilas</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Idealus šviečiančioms dėžėms ir interjero elementams. Puikus šviesos laidumas ir moderni išvaizda.</p>
            </div>
           
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-tree fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Medis ir MDF</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Premium ir ekologiškos medžiagos stilingoms iškaboms ir dekoratyviniams elementams.</p>
            </div>
           
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-gem fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Akrilas ir organinis stiklas</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Aukštos kokybės medžiaga apšvietimui ir tūriniams šviesos elementams.</p>
            </div>
           
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-layer-group fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Kompozitinis aliuminis</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Lengva, tvirta ir ilgaamžė medžiaga didelėms fasadinėms konstrukcijoms.</p>
            </div>
           
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-industry fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Aliumininiai profiliai</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Naudojame karkasams, rėmams ir padidinto stiprumo konstrukcijoms.</p>
            </div>
        </div>
       
        <p style="margin-top:70px; font-size:1.15rem; color:#94a3b8; max-width:820px; margin-left:auto; margin-right:auto;">
            Kiekvienam projektui kruopščiai atrenkame medžiagas, atsižvelgdami į eksploatacijos sąlygas, biudžetą ir norimą vizualinį efektą. 
            Visos medžiagos yra sertifikuotos ir turi garantiją.
        </p>
    </div>
</section>

<!-- WORKFLOW с иконками -->
<section style="padding:120px 5%; background:#0a0f1c;">
    <div style="max-width:1400px; margin:auto;">
        <h2 style="text-align:center; font-size:2.85rem; margin-bottom:80px;">Darbo procesas</h2>
        <p style="text-align:center; font-size:1.3rem; max-width:700px; margin:auto; margin-bottom:70px; color:#cbd5e1;">Skaidrus ir suprantamas procesas nuo idėjos iki realizacijos</p>
       
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px,1fr)); gap:32px;">
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-comments" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">01</strong>
                    <h3>Brifas</h3>
                    <p>Aptariame užduotis, tikslus ir projekto reikalavimus. Nustatome biudžetą ir įgyvendinimo terminus.</p>
                </div>
            </div>
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-drafting-compass" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">02</strong>
                    <h3>Projektavimas</h3>
                    <p>Rengiame techninę dokumentaciją, brėžinius ir konstrukcinius sprendimus.</p>
                </div>
            </div>
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-eye" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">03</strong>
                    <h3>Vizualizacija</h3>
                    <p>Kuriame 3D modelius ir fotorealistines vizualizacijas derinimui.</p>
                </div>
            </div>
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-industry" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">04</strong>
                    <h3>Gamyba</h3>
                    <p>Gaminame konstrukcijas savo gamykloje su kokybės kontrole.</p>
                </div>
            </div>
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-truck-loading" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">05</strong>
                    <h3>Montavimas</h3>
                    <p>Atliekame profesionalų įrengimą ir objekto perdavimą klientui.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== НАШИ КЛИЕНТЫ ==================== -->
<section style="padding:110px 5%; background:#05070f;">
    <div style="max-width:1400px; margin:auto; text-align:center;">
        <h2 style="font-size:2.85rem; margin-bottom:20px; color:white;">Mūsų klientai</h2>
        <p style="font-size:1.3rem; margin-bottom:70px; color:#cbd5e1;">
            Dirbame su įvairiais verslo segmentais visoje Lietuvoje ir Europoje
        </p>
      
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(140px,1fr)); gap:40px; align-items:center; justify-items:center; opacity:0.95;">
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-store"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Retail</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-prescription-bottle"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Vaistinės</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-gas-pump"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Degalinės</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-shopping-bag"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Prekybos centrai</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-briefcase"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Prekės ženklai</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-calendar-days"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Renginiai</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-theater-masks"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Teatrai</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-tv"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Televizija</span>
            </div>
        </div>
    </div>
</section>

<!-- WHY US -->
<section style="padding:120px 5%; background:#0a0f1c;">
    <div style="max-width:1400px; margin:auto;">
        <h2 style="text-align:center; font-size:2.85rem; margin-bottom:20px;">Kodėl renkasi mus</h2>
        <p style="text-align:center; margin-bottom:70px; font-size:1.3rem;">Golden Hands privalumai</p>
       
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px,1fr)); gap:30px;">
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>12+ metų patirtis</strong>
                <p>Įgyvendinome daugiau nei 500 projektų dideliems prekės ženklams ir prekybos tinklams</p>
            </div>
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Terminų laikymasis</strong>
                <p>Aiškus planavimas ir kontrolė visuose gamybos etapuose</p>
            </div>
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Kokybės garantija</strong>
                <p>Naudojame patikrintas medžiagas ir gamybos technologijas</p>
            </div>
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Pilnas ciklas</strong>
                <p>Nuo idėjos iki montavimo — visi etapai po vienu stogu</p>
            </div>
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Individualus požiūris</strong>
                <p>Kuriame sprendimus pagal konkrečias jūsų verslo užduotis</p>
            </div>
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Nuosava gamyba</strong>
                <p>Kokybės kontrolė ir optimalūs gamybos terminai</p>
            </div>
        </div>
    </div>
</section>
</main>