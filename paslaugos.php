<?php
include 'header.php';
include 'consultant-widget.php';
?>
<div style="padding-top:80px; background:#05070f;">
    <!-- Hero Section -->
    <section style="padding:160px 5% 120px; text-align:center; background:linear-gradient(rgba(5,7,15,0.92), rgba(5,7,15,0.96)), url('assets/img/services-bg.jpg') center/cover no-repeat; position:relative; overflow:hidden;">
        <div style="position:absolute; top:0; left:0; right:0; bottom:0; background:radial-gradient(circle at 50% 30%, rgba(245,158,11,0.15), transparent 70%); pointer-events:none;"></div>
       
        <h1 style="font-size:clamp(2.8rem, 7.5vw, 5.2rem); color:#ffffff; margin-bottom:24px; line-height:1.05; font-weight:800; text-shadow:0 4px 20px rgba(0,0,0,0.6);">
            Reklamos konstrukcijos Lietuvoje
        </h1>
        <p style="font-size:clamp(1.2rem, 4.2vw, 1.55rem); max-width:920px; margin:auto; color:#e2e8f0; line-height:1.6; margin-bottom:48px;">
            Profesionalus reklamos konstrukcijų gamyba ir montavimas Vilniuje.<br>
            Pilnas ciklas: nuo idėjos iki įrengimo. Dirbame visoje Europoje.
        </p>
       
        <div style="margin-top:20px;">
            <a href="kontaktai"
               style="background:#f59e0b; color:#111827; padding:20px 56px; border-radius:50px; text-decoration:none; font-weight:800; font-size:1.25rem; display:inline-block; box-shadow:0 10px 30px rgba(245,158,11,0.4); transition:all 0.3s ease;"
               onmouseover="this.style.transform='translateY(-4px)'; this.style.boxShadow='0 20px 40px rgba(245,158,11,0.5)'"
               onmouseout="this.style.transform='translateY(0)'; this.style.boxShadow='0 10px 30px rgba(245,158,11,0.4)'">
                Gauti komercinį pasiūlymą
            </a>
        </div>
       
        <div style="margin-top:80px; display:flex; flex-wrap:wrap; justify-content:center; gap:40px; font-size:1.1rem; color:#94a3b8;">
            <div><i class="fas fa-check-circle" style="color:#f59e0b;"></i> Pilnas gamybos ciklas</div>
            <div><i class="fas fa-check-circle" style="color:#f59e0b;"></i> 3 metų garantija</div>
            <div><i class="fas fa-check-circle" style="color:#f59e0b;"></i> Montavimas visoje Europoje</div>
        </div>
    </section>
    <div style="max-width:1480px; margin:auto; padding:100px 5%;">
       
        <!-- Наружные конструкции -->
        <div style="margin-bottom:140px;">
            <h2 style="color:#f59e0b; font-size:clamp(2.4rem, 5.5vw, 3.2rem); margin-bottom:16px; text-align:center;">Lauko konstrukcijos</h2>
            <p style="font-size:1.3rem; margin-bottom:60px; max-width:960px; margin-left:auto; margin-right:auto; text-align:center; color:#cbd5e1;">
                Iškabos, šviečiančios dėžės, tūrinės raidės, fasadinės konstrukcijos ir navigacija parduotuvėms, prekybos centrams ir biurams
            </p>
           
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px,1fr)); gap:28px;">
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-store fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Šviečiančios dėžės ir iškabos</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Klasikiniai ir premium sprendimai su LED apšvietimu</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-lightbulb fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Tūrinės raidės su apšvietimu</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Priekinis, kontūrinis ir galinis apšvietimas</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-building fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Fasadinės konstrukcijos</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Kompleksinis pastatų fasadų apipavidalinimas</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-sign fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Navigacinės sistemos</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Vidaus ir lauko navigacija</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-archway fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Stoginės konstrukcijos</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Didelio formato konstrukcijos ant stogų</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-monument fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Stelos ir pilonai</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Įvažiavimo grupės ir atskirai stovinčios konstrukcijos</p>
                </div>
            </div>
        </div>

      <!-- Выставочные стенды -->
        <div style="margin-bottom:140px;">
            <h2 style="color:#f59e0b; font-size:clamp(2.4rem, 5.5vw, 3.2rem); margin-bottom:16px; text-align:center;">Parodų stendai</h2>
            <p style="font-size:1.3rem; margin-bottom:60px; max-width:960px; margin-left:auto; margin-right:auto; text-align:center; color:#cbd5e1;">
                Individualūs ir moduliniai stendai su pilnu ciklu: dizainas → gamyba → logistika → montavimas
            </p>
           
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px,1fr)); gap:28px;">
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-cubes fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Modulinės parodų sistemos</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Greitas surinkimas ir daugkartinis naudojimas</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-store-alt fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Individualūs stendai</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Ekskliuzyvus dizainas pagal jūsų prekės ženklą</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-chalkboard-teacher fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Prezentacinės zonos</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Derybų ir produkcijos demonstravimo zonos</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-hand-pointer fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Interaktyvūs elementai</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Jutikliniai ekranai, AR/VR sprendimai</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-tv fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Multimedijos įranga</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Vaizdo sienos, interaktyvūs ekranai</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-truck fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Logistika ir montavimas</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Pristatymas ir profesionalus įrengimas</p>
                </div>
            </div>
        </div>
        <!-- POSM / Retail -->
        <div style="margin-bottom:140px;">
            <h2 style="color:#f59e0b; font-size:clamp(2.4rem, 5.5vw, 3.2rem); margin-bottom:16px; text-align:center;">POSM / Mažmeninė prekyba</h2>
            <p style="font-size:1.3rem; margin-bottom:60px; max-width:960px; margin-left:auto; margin-right:auto; text-align:center; color:#cbd5e1;">
                Prekybos įranga, dispenser'iai, promo stendai ir merchandisinko elementai
            </p>
           
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px,1fr)); gap:28px;">
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-tags fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Prekybos stendai ir dispenser'iai</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Prekėms ir promo medžiagoms</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-bullhorn fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Promo konstrukcijos</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Wobbler'iai, stoperiai, grindų grafika</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-box fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Brenduota įranga</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Šaldytuvai, lentynos, vežimėliai</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-layer-group fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Grindiniai ir stalviršių displėjai</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Kainų laikikliai, informaciniai stendai</p>
                </div>
            </div>
        </div>

       <!-- Event-декорации -->
        <div style="margin-bottom:140px;">
            <h2 style="color:#f59e0b; font-size:clamp(2.4rem, 5.5vw, 3.2rem); margin-bottom:16px; text-align:center;">Renginių dekoracijos</h2>
            <p style="font-size:1.3rem; margin-bottom:60px; max-width:960px; margin-left:auto; margin-right:auto; text-align:center; color:#cbd5e1;">
                Fotozonos, šventinis apipavidalinimas, korporatyvinės ir teminės instaliacijos
            </p>
           
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px,1fr)); gap:28px;">
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-camera fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Fotozonos ir instaliacijos</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Brenduotos zonos nuotraukoms ir video</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-birthday-cake fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Šventinis apipavidalinimas</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Naujieji metai, korporatyvai, atidarymai</p>
                </div>
               
                <div onclick="window.location.href='#'" style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); cursor:pointer; border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-theater-masks fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Korporatyvinės dekoracijos</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Sceninės konstrukcijos ir teminiai elementai</p>
                </div>
            </div>
        </div>
        <!-- Индивидуальные проекты -->
        <div>
            <h2 style="color:#f59e0b; font-size:clamp(2.4rem, 5.5vw, 3.2rem); margin-bottom:16px; text-align:center;">Individualūs projektai</h2>
            <p style="font-size:1.3rem; margin-bottom:60px; max-width:960px; margin-left:auto; margin-right:auto; text-align:center; color:#cbd5e1;">
                Nestandartiniai reklamos konstrukcijų sprendimai pagal jūsų techninę užduotį. Nuo koncepto iki realizacijos
            </p>
           
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(340px,1fr)); gap:28px;">
                <div style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-lightbulb fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Koncepto kūrimas</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Kūrybinės idėjos pagal jūsų verslą</p>
                </div>
               
                <div style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-cube fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">3D modeliavimas ir vizualizacija</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Realistinė projekto vizualizacija</p>
                </div>
               
                <div style="background:#1e2937; padding:36px 30px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1); border:1px solid transparent;"
                     onmouseover="this.style.borderColor='#f59e0b'; this.style.transform='translateY(-12px)'" onmouseout="this.style.borderColor='transparent'; this.style.transform='translateY(0)'">
                    <i class="fas fa-calculator fa-4x" style="color:#f59e0b; margin-bottom:24px; display:block;"></i>
                    <h3 style="font-size:1.5rem; margin-bottom:12px; color:#f1f5f9;">Inžineriniai skaičiavimai</h3>
                    <p style="color:#94a3b8; line-height:1.5;">Stiprumas, vėjo apkrovos, saugumas</p>
                </div>
            </div>
        </div>
        <!-- ==================== БЛОК "РАБОТАЕМ ПО ВСЕЙ ЕВРОПЕ" ==================== -->
        <div style="background:linear-gradient(135deg, #0f172a, #1e2937); padding:140px 5% 120px; margin-top:120px; border-radius:32px;">
            <div style="max-width:1240px; margin:auto; text-align:center;">
                <h2 style="color:#f59e0b; font-size:clamp(2.2rem, 5.5vw, 3rem); margin-bottom:24px;">
                    Dirbame visoje Europoje
                </h2>
                <p style="font-size:1.3rem; color:#cbd5e1; max-width:780px; margin:auto; line-height:1.75;">
                    Projektai sėkmingai įgyvendinti Lietuvoje, Latvijoje, Estijoje, Lenkijoje, Vokietijoje, Švedijoje, Norvegijoje, Suomijoje ir kitose ES šalyse.
                </p>
               
                <!-- Флаги -->
                <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:32px; margin-top:70px;">
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇱🇹</div>
                        <p style="color:#94a3b8;">Lietuva</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇱🇻</div>
                        <p style="color:#94a3b8;">Latvija</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇪🇪</div>
                        <p style="color:#94a3b8;">Estija</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇵🇱</div>
                        <p style="color:#94a3b8;">Lenkija</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇩🇪</div>
                        <p style="color:#94a3b8;">Vokietija</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇸🇪</div>
                        <p style="color:#94a3b8;">Švedija</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇳🇴</div>
                        <p style="color:#94a3b8;">Norvegija</p>
                    </div>
                    <div style="text-align:center;">
                        <div style="font-size:52px; margin-bottom:10px;">🇫🇮</div>
                        <p style="color:#94a3b8;">Suomija</p>
                    </div>
                </div>
               
                <div style="margin-top:80px;">
                    <a href="/kontaktai"
                       style="background:#f59e0b; color:#111827; padding:22px 64px; border-radius:50px; text-decoration:none; font-weight:800; font-size:1.3rem; display:inline-block; box-shadow:0 15px 35px rgba(245,158,11,0.35); transition:all 0.3s ease;"
                       onmouseover="this.style.transform='scale(1.05)'" onmouseout="this.style.transform='scale(1)'">
                        Aptarti projektą bet kurioje ES šalyje
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<?php include 'footer.php'; ?>