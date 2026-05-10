<?php
// SEO-параметры для contact.php
$pageTitle = 'Kontaktai Golden Hands — Reklamos konstrukcijos Vilniuje';
$pageDescription = 'Susisiekite su mumis: +370 606 08502, +370 641 09990. Biuras Vilniuje, Dangeručio g. 7. Individuali konsultacija lietuvių, rusų ir anglų kalbomis.';
$pageKeywords = 'kontaktai Golden Hands, reklamos konstrukcijos Vilnius, iškabų gamyba Vilnius, kontaktai reklama Lietuva';
$canonical = 'https://golden-hands.lt/contact.php';
include 'header.php';
include 'popup.php';
include 'consultant-widget.php';
?>
<?php
// После include 'header.php';
$status = $_GET['status'] ?? '';
?>
<?php if ($status === 'success'): ?>
    <div style="max-width:800px; margin:40px auto; padding:40px; background:#1e2937; border-radius:20px; text-align:center; border:2px solid #34d399;">
        <h2 style="color:#34d399; font-size:2.2rem;">✅ Jūsų žinutė sėkmingai išsiųsta!</h2>
        <p style="font-size:1.25rem; color:#e2e8f0; margin:20px 0 30px;">
            Ačiū! Mes gavome jūsų užklausą ir susisieksime su jumis artimiausiu metu (paprastai per 1–2 valandas).
        </p>
        <a href="contact.php" style="background:#f59e0b; color:#111827; padding:16px 40px; border-radius:50px; text-decoration:none; font-weight:700;">Siųsti dar vieną užklausą</a>
    </div>
<?php elseif ($status === 'recaptcha_error'): ?>
    <div style="max-width:800px; margin:40px auto; padding:30px; background:#991b1b; border-radius:20px; text-align:center; color:white;">
        <h3>❌ reCAPTCHA patikros klaida</h3>
        <p>Prašome pažymėti langelį „Aš nesu robotas“ ir bandyti siųsti formą dar kartą.</p>
        <a href="contact.php" style="color:white; text-decoration:underline;">← Grįžti į formą</a>
    </div>
<?php endif; ?>
<div style="padding-top:80px; min-height:100vh; background:#05070f;">
   
    <!-- Hero -->
    <section style="padding:130px 5% 90px; text-align:center; background:linear-gradient(rgba(10,15,28,0.88), rgba(10,15,28,0.94)), url('assets/img/contact-bg.webp') center/cover no-repeat;">
        <h1 style="font-size:clamp(2.4rem, 6.5vw, 4.5rem); color:white; margin-bottom:20px;">Susisiekite su mumis</h1>
        <p style="font-size:clamp(1.1rem, 4vw, 1.4rem); max-width:780px; margin:auto; color:#cbd5e1;">
            Papasakokite apie savo projektą — mes greitai paruošime individualų pasiūlymą
        </p>
    </section>
    <div style="max-width:1350px; margin:auto; padding:80px 5%; display:grid; grid-template-columns:repeat(auto-fit, minmax(340px,1fr)); gap:60px;">
       
        <!-- ЛЕВЫЙ БЛОК - Форма -->
        <div>
            <h2 style="color:#f59e0b; font-size:clamp(2rem, 5vw, 2.5rem); margin-bottom:35px;">Siųsti užklausą</h2>
          
            <form action="send.php" method="POST" style="display:flex; flex-direction:column; gap:22px;">
                <input type="text" name="name" placeholder="Jūsų vardas *" required
                       style="padding:18px 22px; background:#1e2937; border:none; border-radius:16px; color:white; font-size:1.05rem;">
              
                <input type="email" name="email" placeholder="El. paštas *" required
                       style="padding:18px 22px; background:#1e2937; border:none; border-radius:16px; color:white; font-size:1.05rem;">
              
                <input type="tel" name="phone" placeholder="Telefono numeris"
                       style="padding:18px 22px; background:#1e2937; border:none; border-radius:16px; color:white; font-size:1.05rem;">
              
                <textarea name="message" rows="7" placeholder="Aprašykite savo projektą *" required
                          style="padding:18px 22px; background:#1e2937; border:none; border-radius:16px; color:white; font-size:1.05rem; resize:vertical;"></textarea>
                <!-- reCAPTCHA -->
                <?php include 'recaptcha.php'; ?>
                <button type="submit"
                        style="padding:20px; background:#f59e0b; color:#111827; font-size:1.2rem; font-weight:700; border:none; border-radius:50px; cursor:pointer; margin-top:10px; transition:all 0.3s;">
                    Siųsti užklausą
                </button>
            </form>
        </div>
        <!-- ПРАВЫЙ БЛОК - Контакты + Адрес + Карта -->
        <div>
            <h2 style="color:#f59e0b; font-size:clamp(2rem, 5vw, 2.5rem); margin-bottom:35px;">Kontaktinė informacija</h2>
          
            <!-- Основные контакты -->
            <div style="display:flex; flex-direction:column; gap:38px; margin-bottom:50px;">
                <div style="display:flex; gap:22px; align-items:flex-start;">
                    <i class="fas fa-phone" style="font-size:2.4rem; color:#f59e0b; width:50px; margin-top:4px;"></i>
                    <div>
                        <strong style="font-size:1.3rem;">Bendras telefono numeris LT</strong><br>
                        <a href="tel:+37060608502" style="color:#e2e8f0; font-size:1.25rem;">+370 606 08502</a>
                    </div>
                </div>
                <div style="display:flex; gap:22px; align-items:flex-start;">
                    <i class="fas fa-envelope" style="font-size:2.4rem; color:#f59e0b; width:50px; margin-top:4px;"></i>
                    <div>
                        <strong style="font-size:1.3rem;">El. paštas</strong><br>
                        <a href="mailto:email@golden-hands.lt" style="color:#e2e8f0; font-size:1.25rem;">email@golden-hands.lt</a>
                    </div>
                </div>
            </div>
            <!-- Татьяна -->
            <div style="background:#1e2937; padding:32px; border-radius:20px; margin-bottom:50px;">
                <h3 style="color:#f59e0b; margin-bottom:20px; font-size:1.65rem;">Asmeninė konsultacija</h3>
                <div style="display:flex; gap:22px; align-items:flex-start;">
                    <i class="fas fa-user-tie" style="font-size:2.6rem; color:#f59e0b; width:55px;"></i>
                    <div>
                        <strong style="font-size:1.4rem;">Tatjana</strong><br>
                        <span style="color:#94a3b8;">Klientų vadybininkė</span><br><br>
                        <p style="margin:12px 0;">
                            <i class="fas fa-phone"></i>
                            <a href="tel:+37064109990" style="color:#e2e8f0; font-size:1.25rem;">+370 641 09990</a>
                        </p>
                        <p style="margin:12px 0;">
                            <i class="fab fa-telegram"></i>
                            <a href="https://t.me/+37064109990" target="_blank" style="color:#e2e8f0; font-size:1.25rem;">Telegram</a>
                        </p>
                        <p style="color:#94a3b8;">🇷🇺 Русский | 🇬🇧 English</p>
                    </div>
                </div>
            </div>
            <!-- Адрес -->
            <div style="background:#1e2937; padding:32px; border-radius:20px; margin-bottom:50px;">
                <h3 style="color:#f59e0b; margin-bottom:20px;">Mūsų adresas</h3>
                <div>
                    <p style="color:white; margin:0; font-size:1.15rem;">Vilnius, Lietuva</p>
                    <p style="color:#cbd5e1; margin:8px 0 0 0; font-size:1.1rem;">Dangeručio g. 7</p>
                   
                    <a href="https://maps.google.com/?q=Dangeručio+g.+7,Vilnius"
                       target="_blank"
                       style="color:#f59e0b; font-size:0.98rem; text-decoration:none; display:inline-flex; align-items:center; gap:8px; margin-top:16px; transition:all 0.3s ease;"
                       onmouseover="this.style.gap='14px'">
                        Atidaryti Google Maps
                        <i class="fas fa-external-link-alt"></i>
                    </a>
                </div>
            </div>
            <!-- Карта -->
            <div>
                <h3 style="color:#f59e0b; margin-bottom:18px;">Mes žemėlapyje</h3>
                <div id="osm-map" style="height:420px; border-radius:20px; overflow:hidden; box-shadow:0 15px 35px rgba(0,0,0,0.6);"></div>
            </div>
        </div>
    </div>
</div>
<!-- Leaflet Map -->
<link rel="stylesheet" href="https://unpkg.com/leaflet@1.9.4/dist/leaflet.css" />
<script src="https://unpkg.com/leaflet@1.9.4/dist/leaflet.js"></script>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const map = L.map('osm-map', { zoomControl: true }).setView([54.6878, 25.2793], 16);
    L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
        attribution: '&copy; OpenStreetMap contributors'
    }).addTo(map);
   
    L.marker([54.6878, 25.2793]).addTo(map)
        .bindPopup('<b>Golden Hands</b><br>Dangeručio g. 7, Vilnius')
        .openPopup();
});
</script>
<?php include 'footer.php'; ?>