<?php
// SEO parameters for index.php (English version)
$pageTitle = 'Golden Hands — Advertising Structures of Any Complexity in Vilnius and Lithuania';
$pageDescription = 'Professional manufacturing of advertising structures in Vilnius: signs, light boxes, 3D letters, exhibition stands, POSM. Full cycle from design to installation. 12+ years of experience • Own production facility';
$pageKeywords = 'advertising structures Vilnius, signs Vilnius, light boxes Vilnius, 3D letters, exhibition stands, POSM Vilnius, outdoor advertising Lithuania, sign manufacturing, Golden Hands';

$canonical = 'https://golden-hands.lt/en/';
?>

<!-- Critical Mobile Styles -->
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

/* Material Icons Styles */
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
    <!-- HERO SECTION - Strong & Impactful -->
    <section style="padding:160px 5% 120px; text-align:center; background:linear-gradient(rgba(10,15,28,0.82), rgba(10,15,28,0.92)), url('assets/img/hero.jpg') center/cover no-repeat; position:relative;">
        <div style="max-width:1280px; margin:auto; padding:0 5%;">
            <h1 style="font-size:clamp(2.8rem, 7vw, 5rem); color:white; margin-bottom:24px; line-height:1.05; font-weight:700;">
                Manufacturing Advertising Structures<br>and Branded Objects of Any Complexity in Vilnius
            </h1>
            <p style="font-size:clamp(1.2rem, 4.2vw, 1.55rem); max-width:860px; margin:auto; color:#e2e8f0; line-height:1.6;">
                Signs, light boxes, 3D letters, exhibition stands, POSM and custom projects.<br>
                Full production and installation cycle across Lithuania and Europe.
            </p>
            
            <div style="margin-top:45px; display:flex; gap:20px; justify-content:center; flex-wrap:wrap;">
                <a href="/en/contact" style="background:#f59e0b; color:#111827; padding:20px 52px; border-radius:50px; text-decoration:none; font-weight:700; font-size:1.25rem;">Get a Quote</a>
                <a href="#services" style="border:2.5px solid white; color:white; padding:18px 46px; border-radius:50px; text-decoration:none; font-weight:600; font-size:1.2rem;">Our Services</a>
                
                <!-- Callback Button -->
                <a href="perezvonit.php" onclick="showCallbackPopup(); return false;"
                   style="background:#1e2937; color:#f59e0b; border:2px solid #f59e0b; padding:19px 42px; border-radius:50px;
                          text-decoration:none; font-weight:700; font-size:1.22rem; display:flex; align-items:center; gap:10px;
                          transition:all 0.3s; box-shadow:0 8px 25px rgba(245,158,11,0.3);">
                    <i class="fas fa-phone-volume"></i>
                    Call me back
                </a>
            </div>
        </div>
    </section>

    <!-- SEO Introduction -->
    <div style="max-width:1280px; margin:auto; padding:90px 5% 60px; text-align:center; color:#cbd5e1; font-size:1.22rem; line-height:1.75;">
        <p><strong>Golden Hands</strong> is a leading manufacturer of advertising structures in Vilnius and Lithuania. For over 12 years we have been helping businesses attract more customers with bright and effective outdoor advertising.</p>
        <p style="margin-top:25px;">We offer a full-cycle service: from design and 3D modeling to production, delivery, and professional installation. Our structures are used in shopping centers, petrol stations, shops, and major events across Lithuania and Europe.</p>
    </div>

    <!-- ==================== SERVICES ==================== -->
    <section id="services" style="padding:120px 5%; background:#0a0f1c;">
        <div style="max-width:1400px; margin:auto;">
            <h2 style="text-align:center; font-size:clamp(2.6rem, 5.5vw, 3.2rem); margin-bottom:24px; color:white;">Our Services</h2>
            <p style="text-align:center; font-size:1.35rem; max-width:780px; margin:auto; margin-bottom:80px; color:#cbd5e1;">
                Full cycle of advertising structure production — from idea to installation
            </p>
         
            <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px,1fr)); gap:32px;">
              
                <!-- 1. Outdoor Structures -->
                <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                    <i class="fas fa-store fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                    <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Outdoor Structures</h3>
                    <p style="color:#cbd5e1; line-height:1.65;">Signs, light boxes, 3D letters, facade constructions for shops and shopping centers</p>
                </div>

                <!-- 2. Exhibition Stands -->
                <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                    <i class="fas fa-chalkboard-teacher fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                    <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Exhibition Stands</h3>
                    <p style="color:#cbd5e1; line-height:1.65;">Custom and modular stands for exhibitions and B2B events</p>
                </div>

                <!-- 3. POSM / Retail -->
                <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                    <i class="fas fa-tags fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                    <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">POSM / Retail</h3>
                    <p style="color:#cbd5e1; line-height:1.65;">Retail equipment, racks, dispensers, promotional constructions</p>
                </div>

                <!-- 4. Event Decorations -->
                <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                    <i class="fas fa-lightbulb fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                    <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Event Decorations</h3>
                    <p style="color:#cbd5e1; line-height:1.65;">Photo zones, festive installations, corporate decorations</p>
                </div>

                <!-- 5. Theater & Stage Design -->
                <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                    <i class="fas fa-theater-masks fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                    <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Theater & Stage Design</h3>
                    <p style="color:#cbd5e1; line-height:1.65;">Theatrical scenery, portals, podiums, stage structures, lighting trusses and complex staging solutions</p>
                </div>

                <!-- 6. TV & Studio -->
                <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                    <i class="fas fa-tv fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                    <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">TV & Studio Production</h3>
                    <p style="color:#cbd5e1; line-height:1.65;">Studio scenery, LED screens, green screens, TV panels, mobile studios and lighting equipment</p>
                </div>

                <!-- 7. Custom Projects -->
                <div style="background:#1e2937; padding:40px 32px; border-radius:24px; transition:all 0.4s cubic-bezier(0.4,0,0.2,1);">
                    <i class="fas fa-pencil-ruler fa-3x" style="color:#f59e0b; margin-bottom:24px;"></i>
                    <h3 style="color:#f59e0b; font-size:1.65rem; margin-bottom:14px;">Custom Projects</h3>
                    <p style="color:#cbd5e1; line-height:1.65;">Development and production of unique advertising structures according to your specifications</p>
                </div>
            </div>
        </div>
    </section>
	<!-- ==================== MATERIALS ==================== -->
<section style="padding:120px 5%; background:#05070f;">
    <div style="max-width:1400px; margin:auto; text-align:center;">
       
        <h2 style="font-size:clamp(2.4rem, 5.5vw, 2.9rem); margin-bottom:20px; color:white;">Materials We Work With</h2>
        <p style="font-size:1.3rem; max-width:780px; margin:auto; margin-bottom:70px; color:#cbd5e1;">
            We use only proven and durable materials so that your advertising structures serve for years and look perfect in any conditions
        </p>
       
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(260px,1fr)); gap:28px;">
           
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-hammer fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Metal & Steel</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Reliable and strong constructions for large facade signs and steles. High resistance to weather conditions.</p>
            </div>
           
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-cube fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Plastic & Acrylic</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Perfect for light boxes and interior elements. Excellent light transmission and modern appearance.</p>
            </div>
           
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-tree fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Wood & MDF</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Premium and eco-friendly materials for stylish signs and decorative elements.</p>
            </div>
           
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-gem fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Acrylic & Plexiglass</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">High-quality material for backlighting and creating volumetric illuminated elements.</p>
            </div>
           
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-layer-group fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Aluminum Composite</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Lightweight, strong and durable material for large facade constructions.</p>
            </div>
           
            <div style="background:#1e2937; padding:38px 25px; border-radius:20px; transition:all 0.4s;">
                <i class="fas fa-industry fa-3x" style="color:#f59e0b; margin-bottom:20px;"></i>
                <h3 style="color:#f59e0b; margin-bottom:12px;">Aluminum Profiles</h3>
                <p style="color:#cbd5e1; font-size:1.05rem;">Used for frames, borders and high-strength constructions.</p>
            </div>
        </div>
       
        <p style="margin-top:70px; font-size:1.15rem; color:#94a3b8; max-width:820px; margin-left:auto; margin-right:auto;">
            We carefully select materials for each project, taking into account operating conditions, budget and the desired visual effect. 
            All materials are certified and come with a warranty.
        </p>
    </div>
</section>

<!-- ==================== WORKFLOW ==================== -->
<section style="padding:120px 5%; background:#0a0f1c;">
    <div style="max-width:1400px; margin:auto;">
        <h2 style="text-align:center; font-size:2.85rem; margin-bottom:80px;">Our Workflow</h2>
        <p style="text-align:center; font-size:1.3rem; max-width:700px; margin:auto; margin-bottom:70px; color:#cbd5e1;">
            Transparent and clear process from idea to realization
        </p>
       
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(280px,1fr)); gap:32px;">
            
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-comments" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">01</strong>
                    <h3>Briefing</h3>
                    <p>We discuss tasks, goals and project requirements. Define budget and deadlines.</p>
                </div>
            </div>
            
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-drafting-compass" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">02</strong>
                    <h3>Design & Engineering</h3>
                    <p>We develop technical documentation, drawings and structural solutions.</p>
                </div>
            </div>
            
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-eye" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">03</strong>
                    <h3>Visualization</h3>
                    <p>We create 3D models and photorealistic visualizations for approval.</p>
                </div>
            </div>
            
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-industry" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">04</strong>
                    <h3>Production</h3>
                    <p>We manufacture structures in our own workshop with strict quality control.</p>
                </div>
            </div>
            
            <div class="workflow-card" style="background:#1e2937; padding:38px; border-radius:20px; transition:all 0.4s; display:flex; gap:20px; align-items:flex-start;">
                <i class="fas fa-truck-loading" style="font-size:3rem; color:#f59e0b; flex-shrink:0; margin-top:8px;"></i>
                <div>
                    <strong style="font-size:3.2rem; color:#f59e0b; display:block; margin-bottom:8px;">05</strong>
                    <h3>Installation</h3>
                    <p>We carry out professional installation and hand over the finished object to the client.</p>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- ==================== OUR CLIENTS ==================== -->
<section style="padding:110px 5%; background:#05070f;">
    <div style="max-width:1400px; margin:auto; text-align:center;">
        <h2 style="font-size:2.85rem; margin-bottom:20px; color:white;">Our Clients</h2>
        <p style="font-size:1.3rem; margin-bottom:70px; color:#cbd5e1;">
            We work with various business segments across Lithuania and Europe
        </p>
      
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(140px,1fr)); gap:40px; align-items:center; justify-items:center; opacity:0.95;">
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-store"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Retail</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-prescription-bottle"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Pharmacies</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-gas-pump"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Petrol Stations</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-shopping-bag"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Shopping Centers</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-briefcase"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Brands</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-calendar-days"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Events</span>
            </div>
           
            <!-- Additional directions -->
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-theater-masks"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Theaters</span>
            </div>
           
            <div style="font-size:2.8rem; color:#f59e0b;">
                <i class="fas fa-tv"></i><br>
                <span style="font-size:1.1rem; color:#cbd5e1; display:block; margin-top:8px;">Television & Studios</span>
            </div>
        </div>
    </div>
</section>

<!-- ==================== WHY US ==================== -->
<section style="padding:120px 5%; background:#0a0f1c;">
    <div style="max-width:1400px; margin:auto;">
        <h2 style="text-align:center; font-size:2.85rem; margin-bottom:20px; color:white;">Why Choose Golden Hands</h2>
        <p style="text-align:center; margin-bottom:70px; font-size:1.3rem; color:#cbd5e1;">
            Advantages of working with us
        </p>
       
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px,1fr)); gap:30px;">
            
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>12+ Years of Experience</strong>
                <p>Successfully completed more than 500 projects for major brands and retail chains across Lithuania and Europe.</p>
            </div>
            
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Strict Adherence to Deadlines</strong>
                <p>Clear planning and control at every stage of production and installation.</p>
            </div>
            
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Quality Guarantee</strong>
                <p>We use only proven materials and modern technologies. Warranty from 12 to 36 months.</p>
            </div>
            
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Full-Cycle Service</strong>
                <p>From idea and design to production, delivery and professional installation — everything under one roof.</p>
            </div>
            
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Individual Approach</strong>
                <p>Every project is tailored to your business goals, target audience and budget.</p>
            </div>
            
            <div class="why-card" style="background:#1e2937; padding:32px; border-radius:20px; transition:all 0.3s;">
                <strong>Own Production Facility</strong>
                <p>Strict quality control and optimal manufacturing timelines in our workshop in Vilnius.</p>
            </div>
        </div>
    </div>
</section>
</main>