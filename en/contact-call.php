<!-- ==================== BLOCK "DISCUSS YOUR PROJECT" ==================== -->
<section id="project-discussion" style="padding:110px 5% 100px; background:#05070f;">
    <div style="max-width:1200px; margin:auto;">
       
        <div style="background:linear-gradient(135deg, #0f172a 0%, #1e2937 100%);
                    border:1px solid rgba(245,158,11,0.35);
                    border-radius:28px;
                    padding:55px 30px;
                    text-align:center;
                    box-shadow:0 30px 70px -15px rgb(0 0 0 / 0.65);">
            
            <!-- Title -->
            <div style="display:flex; align-items:center; justify-content:center; gap:18px; margin-bottom:28px; flex-wrap:wrap;">
                <div style="width:70px; height:70px; background:linear-gradient(135deg,#f59e0b,#eab308); border-radius:22px;
                            display:flex; align-items:center; justify-content:center; box-shadow:0 15px 30px rgba(245,158,11,0.4);">
                    <i class="fas fa-headset" style="color:#111827; font-size:38px;"></i>
                </div>
                <h2 style="font-size:clamp(2.2rem, 6vw, 3.3rem); color:#f59e0b; margin:0; font-weight:700;">Let's Discuss Your Project</h2>
            </div>
            
            <p style="font-size:clamp(1.15rem, 4.2vw, 1.35rem); max-width:740px; margin:0 auto 50px; color:#e2e8f0; line-height:1.65;">
                Our specialists will help you in Russian, English and Lithuanian
            </p>

            <!-- Contacts -->
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px,1fr)); gap:28px; margin-bottom:55px;">
                
                <!-- Tatiana -->
                <div style="background:rgba(15,23,42,0.9); padding:28px; border-radius:22px; border:1px solid rgba(236,72,153,0.35); text-align:left;">
                    <div style="display:flex; gap:16px; align-items:flex-start;">
                        <div style="width:62px; height:62px; background:linear-gradient(135deg,#ec4899,#f43f5e); border-radius:18px;
                                    display:flex; align-items:center; justify-content:center; font-size:30px; flex-shrink:0;">👩‍💼</div>
                       
                        <div style="flex:1;">
                            <div style="display:flex; align-items:center; gap:10px; margin-bottom:8px;">
                                <p style="color:#fcd34d; font-size:1.45rem; font-weight:700; margin:0;">Tatiana</p>
                                <i class="fas fa-phone" style="color:#34d399; font-size:1.4rem;"></i>
                            </div>
                           
                            <p style="color:#94a3b8; margin:0 0 12px 0;">Consultation Specialist</p>
                            <p style="color:#a5b4fc; margin-bottom:16px;">Russian • English</p>
                            
                            <a href="tel:+37064109990" rel="nofollow"
                               style="display:flex; align-items:center; gap:12px; background:#1e2937; color:white;
                                      padding:15px 20px; border-radius:16px; font-size:1.28rem;
                                      text-decoration:none; font-weight:600; width:100%;">
                                <strong style="font-family:monospace;">+370 641 09990</strong>
                            </a>
                            <small style="color:#34d399; display:block; text-align:center; margin-top:8px;">Telegram • WhatsApp</small>
                        </div>
                    </div>
                </div>

                <!-- Modestas -->
                <div style="background:rgba(15,23,42,0.9); padding:28px; border-radius:22px; border:1px solid rgba(59,130,246,0.35); text-align:left;">
                    <div style="display:flex; gap:16px; align-items:flex-start;">
                        <div style="width:62px; height:62px; background:linear-gradient(135deg,#3b82f6,#2563eb); border-radius:18px;
                                    display:flex; align-items:center; justify-content:center; font-size:30px; flex-shrink:0;">👨‍💼</div>
                       
                        <div style="flex:1;">
                            <div style="display:flex; align-items:center; gap:10px; margin-bottom:8px;">
                                <p style="color:#93c5fd; font-size:1.45rem; font-weight:700; margin:0;">Modestas</p>
                                <i class="fas fa-phone" style="color:#f59e0b; font-size:1.4rem;"></i>
                            </div>
                           
                            <p style="color:#94a3b8; margin:0 0 12px 0;">Company Founder</p>
                            <p style="color:#a5b4fc; margin-bottom:16px;">English • Lietuvių</p>
                            
                            <a href="tel:+37060608502" rel="nofollow"
                               style="display:flex; align-items:center; gap:12px; background:#1e2937; color:white;
                                      padding:15px 20px; border-radius:16px; font-size:1.28rem;
                                      text-decoration:none; font-weight:600; width:100%;">
                                <strong style="font-family:monospace;">+370 606 08502</strong>
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Request Button -->
            <a href="/en/contact"
               style="display:inline-flex; align-items:center; gap:16px; background:linear-gradient(90deg,#f59e0b,#eab308);
                      color:#111827; padding:22px 65px; border-radius:9999px; font-weight:700; font-size:1.35rem;
                      text-decoration:none; box-shadow:0 20px 45px -10px rgba(245,158,11,0.55);">
                Send a Request <i class="fas fa-arrow-right"></i>
            </a>
        </div>
    </div>
</section>

<script>
// UX for calls
document.querySelectorAll('a[href^="tel:"]').forEach(link => {
    link.addEventListener('click', () => {
        console.log('%c📞 Call initiated', 'color:#34d399; font-weight:bold');
    });
});
</script>