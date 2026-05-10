<?php
// recaptcha.php
$site_key = '-';
?>

<div class="g-recaptcha" 
     data-sitekey="<?= htmlspecialchars($site_key) ?>" 
     data-theme="dark" 
     data-size="normal"
     style="margin: 25px 0 15px 0; display: inline-block;"></div>

<script src="https://www.google.com/recaptcha/api.js" async defer></script>

<style>
    .g-recaptcha {
        transform: scale(0.95);
        transform-origin: left top;
    }
    @media (max-width: 480px) {
        .g-recaptcha {
            transform: scale(0.82);
        }
    }
</style>