<?php
// perezvonit.php — Страница "Перезвоните мне" (Литовская версия)
$pageTitle = 'Paskambinkite man — Golden Hands Vilnius';
$pageDescription = 'Palikite savo telefono numerį — mes jums perskambinsime per 5-15 minučių';
$canonical = 'https://golden-hands.lt/perezvonit.php';

include 'header.php';

// Обработка статуса после отправки формы
$status = $_GET['status'] ?? '';
?>

<div style="padding-top:90px; min-height:100vh; background:#05070f; display:flex; align-items:center; justify-content:center;">
    <div style="max-width:560px; width:100%; margin:40px 20px;">
     
        <?php if ($status === 'callback_success'): ?>
            <!-- ==================== КРАСИВОЕ СООБЩЕНИЕ УСПЕХА ==================== -->
            <div style="background:linear-gradient(135deg, #1e2937 0%, #0f172a 100%); 
                        border-radius:28px; 
                        padding:55px 40px; 
                        text-align:center; 
                        border:3px solid #34d399; 
                        box-shadow:0 30px 70px rgba(0,0,0,0.75);">

                <div style="font-size:5rem; margin-bottom:15px;">🎉</div>
                
                <h1 style="color:#34d399; font-size:2.45rem; margin-bottom:18px; line-height:1.1;">
                    Jūsų užklausa priimta!
                </h1>
                
                <p style="font-size:1.28rem; color:#e2e8f0; line-height:1.65; margin-bottom:35px;">
                    Ačiū! Mes jau matėme jūsų prašymą.<br>
                    <strong>Mūsų vadybininkai netrukus su jumis susisieks</strong>
                </p>

                <!-- Блок с менеджерами -->
                <div style="background:rgba(52,211,153,0.08); border:1px solid rgba(52,211,153,0.3); 
                            border-radius:20px; padding:25px; margin-bottom:40px;">
                    <p style="color:#34d399; font-weight:600; margin-bottom:12px;">Artimiausiu metu su jumis susisieks:</p>
                    <p style="margin:12px 0; color:#e2e8f0;">
                        <strong>Tatjana</strong> — +370 641 09990
                    </p>
                    <p style="margin:12px 0; color:#e2e8f0;">
                        <strong>Modestas</strong> — +370 606 08502
                    </p>
                </div>

                <a href="/perezvonit.php" 
                   style="display:inline-flex; align-items:center; gap:14px; background:linear-gradient(90deg,#f59e0b,#eab308); 
                          color:#111827; padding:18px 52px; border-radius:50px; text-decoration:none; 
                          font-weight:700; font-size:1.22rem; box-shadow:0 10px 30px rgba(245,158,11,0.4);">
                    Siųsti dar vieną užklausą 
                    <i class="fas fa-arrow-right"></i>
                </a>
            </div>

        <?php else: ?>
            <!-- Основная форма -->
            <div style="background:linear-gradient(135deg, #0f172a, #1e2937); border-radius:28px; overflow:hidden; 
                        box-shadow:0 30px 80px rgba(0,0,0,0.7); border:1px solid rgba(245,158,11,0.4);">
                
                <!-- Заголовок -->
                <div style="background:linear-gradient(90deg,#f59e0b,#eab308); padding:40px 30px; text-align:center;">
                    <h1 style="margin:0; color:#111827; font-size:2.1rem;">Norite, kad jums perskambintume?</h1>
                    <p style="color:#111827; margin:12px 0 0 0; font-size:1.15rem;">Palikite numerį — perskambinsime per 5–15 minučių</p>
                </div>

                <!-- Форма -->
                <div style="padding:45px 35px;">
                    <form action="/callback.php" method="POST" style="display:flex; flex-direction:column; gap:22px;">
                        <input type="tel" name="phone" placeholder="+370 ___ _____" required
                               style="padding:18px 24px; font-size:1.25rem; background:#1e2937; border:none; 
                                      border-radius:16px; color:white; text-align:center;">
                        
                        <?php include 'recaptcha.php'; ?>
                        
                        <button type="submit"
                                style="padding:20px; background:linear-gradient(90deg,#f59e0b,#eab308); color:#111827;
                                       font-weight:700; font-size:1.3rem; border:none; border-radius:50px; cursor:pointer;">
                            Paskambinkite man
                        </button>
                    </form>

                    <!-- Или позвоните сами -->
                    <div style="text-align:center; margin-top:40px;">
                        <p style="color:#94a3b8; margin-bottom:15px;">Arba paskambinkite patys:</p>
                        
                        <button onclick="showPhones(this)" id="show-phone-btn"
                                style="background:#1e2937; color:#f59e0b; border:2px solid #f59e0b; padding:14px 36px;
                                       border-radius:50px; font-weight:600; cursor:pointer; transition:all 0.3s;">
                            📞 Rodyti telefonus
                        </button>
                        
                        <div id="phones-block" style="display:none; margin-top:20px;">
                            <p style="margin:12px 0;">
                                <strong><a href="tel:+37064109990" style="color:#f59e0b; font-size:1.28rem;">+370 641 09990</a></strong> — Tatjana
                            </p>
                            <p style="margin:12px 0;">
                                <strong><a href="tel:+37060608502" style="color:#f59e0b; font-size:1.28rem;">+370 606 08502</a></strong> — Modestas
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