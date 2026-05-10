<?php
// popup.php — Красивый popup "Хотите мы вам перезвоним?"
$recaptcha_site_key = '6LdpY-AsAAAAAKZ2r2OKQJIpCAu9bTKIu19sHu7g';
?>

<div id="callback-popup" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.9); z-index:99999; align-items:center; justify-content:center; padding:15px; box-sizing:border-box;">
    
    <div style="background:linear-gradient(135deg, #0f172a, #1e2937); max-width:460px; width:100%; border-radius:24px; overflow:hidden; box-shadow:0 30px 70px rgba(0,0,0,0.8); border:1px solid rgba(245,158,11,0.4);">
        
        <!-- Заголовок -->
        <div style="background:linear-gradient(90deg,#f59e0b,#eab308); padding:28px; text-align:center; position:relative;">
            <button onclick="closePopup()" style="position:absolute; top:15px; right:20px; background:none; border:none; font-size:30px; color:#111827; cursor:pointer; line-height:1;">✕</button>
            <h2 style="margin:0; color:#111827; font-size:1.85rem;">Хотите, мы вам перезвоним?</h2>
        </div>

        <!-- Форма -->
        <div style="padding:40px 35px;">
            <p style="text-align:center; color:#cbd5e1; font-size:1.15rem; margin-bottom:30px;">
                Оставьте номер — наш специалист свяжется с вами в течение 5–15 минут
            </p>

            <form action="callback.php" method="POST" style="display:flex; flex-direction:column; gap:20px;">
                <input type="tel" name="phone" placeholder="+370 ___ _____" required
                       style="padding:18px 20px; font-size:1.25rem; background:#1e2937; border:none; border-radius:16px; color:white; text-align:center;">

                <!-- reCAPTCHA -->
                <div class="g-recaptcha" data-sitekey="<?= htmlspecialchars($recaptcha_site_key) ?>" data-theme="dark" style="margin:10px auto;"></div>

                <button type="submit" 
                        style="padding:18px; background:linear-gradient(90deg,#f59e0b,#eab308); color:#111827; font-weight:700; font-size:1.3rem; border:none; border-radius:50px; cursor:pointer;">
                    Перезвоните мне
                </button>
            </form>
        </div>
    </div>
</div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<script>
// Показывать через 15 секунд
setTimeout(() => {
    if (!sessionStorage.getItem('callbackPopupShown')) {
        document.getElementById('callback-popup').style.display = 'flex';
        sessionStorage.setItem('callbackPopupShown', 'true');
    }
}, 15000);

function closePopup() {
    document.getElementById('callback-popup').style.display = 'none';
}
// Функция открытия popup
function showCallbackPopup() {
    const popup = document.getElementById('callback-popup');
    if (popup) {
        popup.style.display = 'flex';
    }
}
// Закрытие по клику вне формы
document.getElementById('callback-popup').addEventListener('click', function(e) {
    if (e.target === this) closePopup();
});
</script>