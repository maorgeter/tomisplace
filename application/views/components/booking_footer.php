<?php
/**
 * Local variables.
 *
 * @var bool $display_login_button
 */
?>


<div id="frame-footer">
<div class="row frame-content">
          <div class="col-4">
            <a href="https://www.facebook.com/tominailsart/" target="_blank">
              <img src=<?= base_url('assets/img/social_facebook.png') ?> style="max-width:50px; max-height:50px; height:100%; width:100%; display:block; margin:0 auto;">
            </a>
          </div>
          <div class="col-4">
            <a href="https://www.instagram.com/tominailsart/" target="_blank">
            <img src=<?= base_url('assets/img/social_instagram.png') ?>  style="max-width:50px; max-height:50px; height:100%; width:100%; display:block; margin:0 auto;">
            </a>
          </div>
          <div class="col-4">
            <a href="https://wa.me/972524454252" target="_blank">
            <img src=<?= base_url('assets/img/social_whatsapp.png') ?>  style="max-width:50px; max-height:50px; height:100%; width:100%; display:block; margin:0 auto;">
            </a>
          </div>
        </div>
        <br />
    <small>
        <span class="footer-powered-by small">
        <a href="https://www.linkedin.com/in/maorgeter/" target="_blank">MG</a>
            &
            <a href="https://easyappointments.org" target="_blank">E!A</a>
        </span>
<!-- 
        <span class="footer-options">
            <span id="select-language" class="badge bg-secondary">
                <i class="fas fa-language me-2"></i>
                <?= ucfirst(config('language')) ?>
            </span>
    
            <?php if ($display_login_button): ?>
                <a class="backend-link badge bg-primary text-decoration-none px-2"
                   href="<?= session('user_id') ? site_url('calendar') : site_url('login') ?>">
                    <i class="fas fa-sign-in-alt me-2"></i>
                    <?= session('user_id') ? lang('backend_section') : lang('login') ?>
                </a>
            <?php endif; ?>
        </span> -->
    </small>
</div>
