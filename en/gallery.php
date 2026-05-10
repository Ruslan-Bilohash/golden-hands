<?php
// SEO parameters for gallery.php
$pageTitle = 'Gallery — Our Projects | Golden Hands Vilnius';
$pageDescription = 'Gallery of completed projects by Golden Hands. More than 80 advertising structures: signs, light boxes, 3D letters, exhibition stands and custom branded objects.';
$pageKeywords = 'gallery, advertising structures Vilnius, signs portfolio, light boxes, 3D letters, exhibition stands, Golden Hands projects, outdoor advertising Lithuania';

$canonical = 'https://golden-hands.lt/en/gallery';

include 'header.php';
include '../popup.php';
include '../consultant-widget.php';
?>

<div style="padding-top:90px; background:#05070f;">
    <!-- Hero -->
    <section style="padding:140px 5% 100px; text-align:center; background:linear-gradient(rgba(10,15,28,0.9), rgba(10,15,28,0.95)), url('images/portfolio-bg.webp') center/cover no-repeat;">
        <h1 style="font-size:clamp(2.8rem, 7vw, 4.5rem); color:white; margin-bottom:20px;">Our Projects Gallery</h1>
        <p style="font-size:1.4rem; max-width:800px; margin:auto; color:#cbd5e1;">
            More than 80 successfully implemented advertising structures
        </p>
    </section>

    <!-- Gallery -->
    <section style="max-width:1600px; margin:auto; padding:80px 5%;">
       
        <?php
        // === SECURE IMAGE SCANNING ===
        $dir = '../images/';
        $allowed = ['jpg', 'jpeg', 'png', 'webp', 'gif'];
        $images = [];

        if (is_dir($dir)) {
            $files = scandir($dir);
            foreach ($files as $file) {
                if ($file === '.' || $file === '..') continue;
                $ext = strtolower(pathinfo($file, PATHINFO_EXTENSION));
                if (in_array($ext, $allowed)) {
                    $images[] = $dir . $file;
                }
            }
            // Sort newest first
            rsort($images);
        }
        ?>

        <div id="gallery-grid" style="display:grid; grid-template-columns:repeat(auto-fit, minmax(320px, 1fr)); gap:25px; align-items:start;">
            <?php
            if (empty($images)) {
                echo '<p style="grid-column:1/-1; text-align:center; color:#f59e0b; font-size:1.3rem;">No images found in the /images/ folder yet.</p>';
            } else {
                foreach ($images as $img) {
                    $filename = basename($img);
                    $alt = str_replace(['IMG_', '.jpg', '.jpeg', '.png', '.webp', '_', '-'], ' ', $filename);
                    $alt = ucwords(trim($alt));
                    
                    echo '
                    <div class="gallery-item" style="background:#1e2937; border-radius:16px; overflow:hidden; box-shadow:0 10px 30px rgba(0,0,0,0.4); transition:all 0.4s; cursor:pointer;">
                        <img src="' . htmlspecialchars($img) . '" 
                             alt="Golden Hands Project — ' . htmlspecialchars($alt) . '"
                             loading="lazy"
                             style="width:100%; height:320px; object-fit:cover; display:block;">
                        <div style="padding:18px; text-align:center; font-size:1.05rem; color:#f59e0b;">
                            ' . htmlspecialchars($filename) . '
                        </div>
                    </div>';
                }
            }
            ?>
        </div>
    </section>
</div>

<!-- Lightbox -->
<div id="lightbox" style="display:none; position:fixed; top:0; left:0; width:100%; height:100%; background:rgba(0,0,0,0.95); z-index:99999; align-items:center; justify-content:center; padding:20px; box-sizing:border-box;">
    <div style="position:relative; max-width:95%; max-height:95vh; display:flex; align-items:center; justify-content:center;">
        <button onclick="closeLightbox()" 
                style="position:absolute; top:-20px; right:-20px; background:#f59e0b; color:#111827; width:50px; height:50px; border-radius:50%; border:none; font-size:28px; cursor:pointer; z-index:100000;">✕</button>
        <img id="lightbox-image" src="" style="max-width:100%; max-height:90vh; border-radius:16px; box-shadow:0 20px 60px rgba(0,0,0,0.8);" alt="">
    </div>
</div>

<script>
// Lightbox functionality
document.querySelectorAll('.gallery-item').forEach(item => {
    item.addEventListener('click', function() {
        const imgSrc = this.querySelector('img').src;
        document.getElementById('lightbox-image').src = imgSrc;
        document.getElementById('lightbox').style.display = 'flex';
    });
});

function closeLightbox() {
    document.getElementById('lightbox').style.display = 'none';
}

document.getElementById('lightbox').addEventListener('click', function(e) {
    if (e.target.id === 'lightbox') closeLightbox();
});

// Hover effect
document.querySelectorAll('.gallery-item').forEach(item => {
    item.addEventListener('mouseenter', () => item.style.transform = 'scale(1.04)');
    item.addEventListener('mouseleave', () => item.style.transform = 'scale(1)');
});
</script>

<?php include 'footer.php'; ?>
