<?php
// subscribe.php — Блок подписки (Литовская версия)
// Максимально безопасная работа с сессией

// Проверяем сессию — запускаем только если её ещё нет
if (session_status() === PHP_SESSION_NONE) {
    session_start();
}

// Генерируем CSRF токен (если его ещё нет)
if (empty($_SESSION['csrf_token'])) {
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}
?>
<section style="padding:100px 5%; background:linear-gradient(135deg, #0a0f1c, #1e2937);">
    <div style="max-width:1100px; margin:auto; text-align:center;">
       
        <div style="background:rgba(15,23,42,0.88); border:1px solid rgba(245,158,11,0.35); border-radius:28px; padding:60px 40px; box-shadow:0 25px 60px -15px rgb(0 0 0 / 0.65); transition:all 0.4s ease;">
           
            <!-- Иконка -->
            <div style="width:90px; height:90px; background:linear-gradient(135deg,#f59e0b,#eab308); border-radius:50%;
                        margin:0 auto 25px; display:flex; align-items:center; justify-content:center; box-shadow:0 15px 35px rgba(245,158,11,0.5);">
                <span style="font-size:42px;">✉️</span>
            </div>
            
            <h2 style="font-size:clamp(2.2rem, 5.5vw, 3rem); color:#f59e0b; margin-bottom:16px;">
                Prenumeruokite naujienas
            </h2>
           
            <p style="font-size:1.25rem; color:#cbd5e1; max-width:680px; margin:0 auto 35px; line-height:1.65;">
                Gaukite pirmieji informaciją apie naujus projektus, akcijas, naudingus patarimus lauko reklamai ir specialius pasiūlymus.
            </p>
            
            <form action="subscribe-handler.php" method="POST" style="max-width:520px; margin:0 auto; display:flex; flex-direction:column; gap:16px;" aria-label="Naujienlaiškio prenumerata">
               
                <input type="hidden" name="csrf_token" value="<?= htmlspecialchars($_SESSION['csrf_token'] ?? '', ENT_QUOTES, 'UTF-8') ?>">
                
                <input type="email" name="email" placeholder="Jūsų el. pašto adresas" required
                       style="padding:18px 24px; background:#1e2937; border:none; border-radius:16px; color:white; font-size:1.1rem; outline:none; transition:all 0.3s ease;"
                       onfocus="this.style.boxShadow='0 0 0 3px rgba(245,158,11,0.4)'"
                       onblur="this.style.boxShadow='none'">
               
                <button type="submit"
                        style="padding:18px 50px; background:linear-gradient(90deg,#f59e0b,#eab308); color:#111827;
                               font-size:1.25rem; font-weight:700; border:none; border-radius:50px; cursor:pointer;
                               transition:all 0.3s ease; box-shadow:0 10px 30px rgba(245,158,11,0.45);">
                    Prenumeruoti
                </button>
            </form>
            
            <p style="color:#64748b; font-size:0.95rem; margin-top:25px; line-height:1.5;">
                Mes gerbiame jūsų privatumą. Atsisakyti prenumeratos galite bet kada.
            </p>
        </div>
    </div>
</section>

<style>
section form button:hover {
    transform: translateY(-4px);
    box-shadow: 0 15px 35px rgba(245,158,11,0.6) !important;
}
section form input:focus {
    box-shadow: 0 0 0 3px rgba(245,158,11,0.4) !important;
}
</style>