<?php
// subscribe.php — Красивый блок подписки
?>
<section style="padding:100px 5%; background:linear-gradient(135deg, #0a0f1c, #1e2937);">
    <div style="max-width:1100px; margin:auto; text-align:center;">
        
        <div style="background:rgba(15,23,42,0.8); border:1px solid rgba(245,158,11,0.3); border-radius:28px; padding:60px 40px; box-shadow:0 25px 60px -15px rgb(0 0 0 / 0.6);">
            
            <!-- Иконка -->
            <div style="width:90px; height:90px; background:linear-gradient(135deg,#f59e0b,#eab308); border-radius:50%; 
                        margin:0 auto 25px; display:flex; align-items:center; justify-content:center; box-shadow:0 15px 35px rgba(245,158,11,0.4);">
                <span style="font-size:42px;">✉️</span>
            </div>

            <h2 style="font-size:clamp(2.2rem, 5.5vw, 3rem); color:#f59e0b; margin-bottom:16px;">Подпишитесь на новости</h2>
            
            <p style="font-size:1.25rem; color:#cbd5e1; max-width:680px; margin:0 auto 35px; line-height:1.6;">
                Получайте первыми информацию о новых проектах, акциях, полезные советы по наружной рекламе и специальные предложения
            </p>

            <form action="subscribe-handler.php" method="POST" style="max-width:520px; margin:0 auto; display:flex; flex-direction:column; gap:16px;">
                
                <input type="email" name="email" placeholder="Ваш email адрес" required
                       style="padding:18px 24px; background:#1e2937; border:none; border-radius:16px; color:white; font-size:1.1rem; outline:none;">
                
                <!-- reCAPTCHA (если нужно) -->
                <!-- <?php // include 'recaptcha.php'; ?> -->

                <button type="submit" 
                        style="padding:18px 50px; background:linear-gradient(90deg,#f59e0b,#eab308); color:#111827; 
                               font-size:1.25rem; font-weight:700; border:none; border-radius:50px; cursor:pointer; 
                               transition:all 0.3s; box-shadow:0 10px 30px rgba(245,158,11,0.4);">
                    Подписаться
                </button>
            </form>

            <p style="color:#64748b; font-size:0.95rem; margin-top:25px;">
                Мы ценим вашу конфиденциальность. Отписаться можно в любой момент.
            </p>
        </div>
    </div>
</section>