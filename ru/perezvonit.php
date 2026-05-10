<?php
// perezvonit.php — Отдельная страница "Перезвоните мне"
$pageTitle = 'Перезвоните мне — Golden Hands Вильнюс';
$pageDescription = 'Оставьте номер телефона — мы перезвоним вам в течение 5-15 минут';
$canonical = 'https://golden-hands.lt/ru/perezvonit.php';

include 'header.php';

// Обработка статуса после отправки формы
$status = $_GET['status'] ?? '';
?>

<div style="padding-top:90px; min-height:100vh; background:#05070f; display:flex; align-items:center; justify-content:center;">
    <div style="max-width:520px; width:100%; margin:40px 20px;">
       
        <?php if ($status === 'callback_success'): ?>
            <!-- Сообщение об успехе -->
            <div style="background:#1e2937; border-radius:28px; padding:60px 40px; text-align:center; border:3px solid #34d399; box-shadow:0 25px 60px rgba(0,0,0,0.6);">
                <h1 style="color:#34d399; font-size:2.4rem; margin-bottom:20px;">✅ Ваша заявка принята!</h1>
                <p style="font-size:1.35rem; color:#e2e8f0; line-height:1.6; margin-bottom:35px;">
                    Спасибо! Мы получили ваш запрос.<br>
                    Наш менеджер свяжется с вами в течение <strong>15-30 минут</strong>.
                </p>
                <a href="/ru/perezvonit.php" 
                   style="background:#f59e0b; color:#111827; padding:18px 48px; border-radius:50px; 
                          text-decoration:none; font-weight:700; font-size:1.2rem; display:inline-block;">
                    Отправить ещё одну заявку
                </a>
            </div>

        <?php else: ?>
            <!-- Основная форма -->
            <div style="background:linear-gradient(135deg, #0f172a, #1e2937); border-radius:28px; overflow:hidden; box-shadow:0 30px 80px rgba(0,0,0,0.7); border:1px solid rgba(245,158,11,0.4);">
               
                <!-- Заголовок -->
                <div style="background:linear-gradient(90deg,#f59e0b,#eab308); padding:40px 30px; text-align:center;">
                    <h1 style="margin:0; color:#111827; font-size:2.1rem;">Хотите, мы вам перезвоним?</h1>
                    <p style="color:#111827; margin:12px 0 0 0; font-size:1.15rem;">Оставьте номер — перезвоним в течение 15-30 минут</p>
                </div>

                <!-- Форма -->
                <div style="padding:45px 35px;">
                    <form action="/ru/callback.php" method="POST" style="display:flex; flex-direction:column; gap:22px;">
                        <input type="tel" name="phone" placeholder="+370 ___ _____" required
                               style="padding:18px 24px; font-size:1.25rem; background:#1e2937; border:none; border-radius:16px; color:white; text-align:center;">
                        
                        <?php include 'recaptcha.php'; ?>
                        
                        <button type="submit"
                                style="padding:20px; background:linear-gradient(90deg,#f59e0b,#eab308); color:#111827;
                                       font-weight:700; font-size:1.3rem; border:none; border-radius:50px; cursor:pointer;">
                            Перезвоните мне
                        </button>
                    </form>

                    <!-- Блок "Или позвоните сами" -->
                    <div style="text-align:center; margin-top:40px;">
                        <p style="color:#94a3b8; margin-bottom:15px;">Или позвоните сами:</p>
                       
                        <button onclick="showPhones(this)" id="show-phone-btn"
                                style="background:#1e2937; color:#f59e0b; border:2px solid #f59e0b; padding:14px 36px;
                                       border-radius:50px; font-weight:600; cursor:pointer; transition:all 0.3s;">
                            📞 Показать телефоны
                        </button>
                        
                        <div id="phones-block" style="display:none; margin-top:20px;">
                            <p style="margin:12px 0;">
                                <strong><a href="tel:+37064109990" style="color:#f59e0b; font-size:1.28rem;">+370 641 09990</a></strong> — Татьяна
                            </p>
                            <p style="margin:12px 0;">
                                <strong><a href="tel:+37060608502" style="color:#f59e0b; font-size:1.28rem;">+370 606 08502</a></strong> — Модестас
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        <?php endif; ?>
    </div>
</div>

<script>
function showPhones(btn) {
    document.getElementById('phones-block').style.display = 'block';
    btn.style.display = 'none';
}
</script>

<?php include 'footer.php'; ?>