<?php
// perezvonit.php — Call Me Back Page (English version)
$pageTitle = 'Call Me Back — Golden Hands Vilnius';
$pageDescription = 'Leave your phone number and we will call you back within 5-15 minutes';
$canonical = 'https://golden-hands.lt/en/perezvonit';

include 'header.php';

// Handle status after form submission
$status = $_GET['status'] ?? '';
?>

<div style="padding-top:90px; min-height:100vh; background:#05070f; display:flex; align-items:center; justify-content:center;">
    <div style="max-width:520px; width:100%; margin:40px 20px;">
      
        <?php if ($status === 'callback_success'): ?>
            <!-- Success Message -->
            <div style="background:#1e2937; border-radius:28px; padding:60px 40px; text-align:center; border:3px solid #34d399; box-shadow:0 25px 60px rgba(0,0,0,0.6);">
                <h1 style="color:#34d399; font-size:2.4rem; margin-bottom:20px;">✅ Your request has been accepted!</h1>
                <p style="font-size:1.35rem; color:#e2e8f0; line-height:1.6; margin-bottom:35px;">
                    Thank you! We have received your callback request.<br>
                    Our manager will contact you within <strong>5-15 minutes</strong>.
                </p>
                <a href="/en/perezvonit.php"
                   style="background:#f59e0b; color:#111827; padding:18px 48px; border-radius:50px;
                          text-decoration:none; font-weight:700; font-size:1.2rem; display:inline-block;">
                    Send another request
                </a>
            </div>

        <?php else: ?>
            <!-- Main Form -->
            <div style="background:linear-gradient(135deg, #0f172a, #1e2937); border-radius:28px; overflow:hidden; box-shadow:0 30px 80px rgba(0,0,0,0.7); border:1px solid rgba(245,158,11,0.4);">
              
                <!-- Header -->
                <div style="background:linear-gradient(90deg,#f59e0b,#eab308); padding:40px 30px; text-align:center;">
                    <h1 style="margin:0; color:#111827; font-size:2.1rem;">Would you like us to call you back?</h1>
                    <p style="color:#111827; margin:12px 0 0 0; font-size:1.15rem;">Leave your number — we will call you back within 5–15 minutes</p>
                </div>

                <!-- Form -->
                <div style="padding:45px 35px;">
                    <form action="/en/callback.php" method="POST" style="display:flex; flex-direction:column; gap:22px;">
                        <input type="tel" name="phone" placeholder="+370 ___ _____" required
                               style="padding:18px 24px; font-size:1.25rem; background:#1e2937; border:none; border-radius:16px; color:white; text-align:center;">
                       
                        <?php include 'recaptcha.php'; ?>
                       
                        <button type="submit"
                                style="padding:20px; background:linear-gradient(90deg,#f59e0b,#eab308); color:#111827;
                                       font-weight:700; font-size:1.3rem; border:none; border-radius:50px; cursor:pointer;">
                            Call Me Back
                        </button>
                    </form>

                    <!-- Or Call Us -->
                    <div style="text-align:center; margin-top:40px;">
                        <p style="color:#94a3b8; margin-bottom:15px;">Or call us directly:</p>
                      
                        <button onclick="showPhones(this)" id="show-phone-btn"
                                style="background:#1e2937; color:#f59e0b; border:2px solid #f59e0b; padding:14px 36px;
                                       border-radius:50px; font-weight:600; cursor:pointer; transition:all 0.3s;">
                            📞 Show Phone Numbers
                        </button>
                       
                        <div id="phones-block" style="display:none; margin-top:20px;">
                            <p style="margin:12px 0;">
                                <strong><a href="tel:+37064109990" style="color:#f59e0b; font-size:1.28rem;">+370 641 09990</a></strong> — Tatiana
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