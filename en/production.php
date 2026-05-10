<?php
// Production page - English version
$pageTitle = 'Production Facility — Advertising Structures Manufacturing in Vilnius | Golden Hands';
$pageDescription = 'Modern own production facility in Vilnius. CNC laser cutting, large-format UV printing, 3D modeling, metal processing, LED lighting systems and professional installation. Full cycle from idea to installation.';
$pageKeywords = 'advertising structures manufacturing Vilnius, CNC laser cutting, UV printing, 3D modeling, sign production, light boxes manufacturing, LED backlighting, professional installation, own production facility';

$canonical = 'https://golden-hands.lt/en/production';

include 'header.php';
include 'consultant-widget.php';
?>

<div style="padding-top:90px; background:#05070f;">
    <!-- Hero -->
    <section style="padding:140px 5% 100px; text-align:center; background:linear-gradient(rgba(10,15,28,0.9), rgba(10,15,28,0.95)), url('images/production-bg.webp') center/cover no-repeat;">
        <h1 style="font-size:clamp(2.8rem, 7vw, 4.5rem); color:white; margin-bottom:20px;">Our Production Facility</h1>
        <p style="font-size:1.4rem; max-width:800px; margin:auto; color:#cbd5e1;">
            Modern equipment + 12 years of experience = highest quality advertising structures
        </p>
    </section>

    <div style="max-width:1400px; margin:auto; padding:100px 5%;">
        <!-- Introductory SEO Text -->
        <div style="max-width:900px; margin:auto; text-align:center; margin-bottom:80px; font-size:1.2rem; line-height:1.8; color:#cbd5e1;">
            <p>Golden Hands has its own modern production complex in Vilnius. We provide a full-cycle manufacturing service for advertising structures — from technical drawings and 3D modeling to final installation.</p>
            <p style="margin-top:25px;">Thanks to advanced equipment and an experienced team, we deliver projects of any complexity on time, guaranteeing excellent quality and precise compliance with the technical specifications.</p>
        </div>

        <h2 style="color:#f59e0b; text-align:center; margin-bottom:60px; font-size:2.6rem;">Our Production Capabilities</h2>
        
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(340px,1fr)); gap:30px;">
           
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-cut" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">CNC Laser Cutting & Milling</h3>
                <p>Precise cutting of metal, composite, acrylic and wood. Maximum metal thickness — 20 mm.</p>
            </div>
            
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-print" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">Large-Format UV Printing</h3>
                <p>Bright and durable printing on any materials. Resolution up to 1440 dpi.</p>
            </div>
            
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-cube" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">3D Modeling & Prototyping</h3>
                <p>Development of 3D models, photorealistic visualization and prototype manufacturing before full production.</p>
            </div>
            
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-industry" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">Metal & Aluminum Processing</h3>
                <p>Bending, welding, powder coating, anodizing and assembly of metal structures.</p>
            </div>
            
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-lightbulb" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">LED Lighting Systems</h3>
                <p>Installation of energy-efficient LED backlighting, light boxes and illuminated 3D letters.</p>
            </div>
            
            <div style="background:#1e2937; padding:35px; border-radius:16px; transition:0.3s;">
                <i class="fas fa-truck-loading" style="font-size:2.8rem; color:#f59e0b; margin-bottom:15px;"></i>
                <h3 style="color:#f59e0b;">Professional Installation Team</h3>
                <p>Installation at height, on facades, roofs and indoors. 3-year installation warranty.</p>
            </div>
        </div>

        <!-- Production Photos -->
        <h2 style="color:#f59e0b; text-align:center; margin:100px 0 60px; font-size:2.6rem;">Inside Our Production Facility</h2>
       
        <div style="display:grid; grid-template-columns:repeat(auto-fit, minmax(300px,1fr)); gap:25px;">
            <?php
            $productionImages = glob('images/{IMG_*.jpg,IMG_*.jpeg,*.jpg,*.jpeg,*.png,*.webp}', GLOB_BRACE);
            $limitedImages = array_slice($productionImages, 0, 6);
            foreach ($limitedImages as $img) {
                $filename = basename($img);
                echo '
                <div style="border-radius:16px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.4);">
                    <img src="' . htmlspecialchars($img) . '"
                         alt="Golden Hands Production Facility — ' . htmlspecialchars($filename) . '"
                         loading="lazy"
                         style="width:100%; height:260px; object-fit:cover;">
                </div>';
            }
            ?>
        </div>

        <!-- Additional SEO Block -->
        <div style="margin-top:100px; background:#1e2937; padding:50px; border-radius:20px; line-height:1.8; font-size:1.15rem;">
            <h3 style="color:#f59e0b; text-align:center; margin-bottom:30px;">Why Clients Choose Our Production</h3>
            <ul style="list-style:none; display:grid; grid-template-columns:repeat(auto-fit, minmax(280px,1fr)); gap:20px;">
                <li style="padding:15px 0;">✅ Full production cycle under one roof</li>
                <li style="padding:15px 0;">✅ 99% of projects delivered on time</li>
                <li style="padding:15px 0;">✅ Only certified premium materials</li>
                <li style="padding:15px 0;">✅ Product warranty up to 5 years</li>
                <li style="padding:15px 0;">✅ Individual approach to every order</li>
                <li style="padding:15px 0;">✅ Strict quality control at every stage</li>
            </ul>
        </div>
    </div>
</div>

<?php include 'footer.php'; ?>