<?php
/**
 * Local variables.
 *
 * @var string $company_name
 */
?>

<div id="header">
    <div id="company-name">
        <img src="<?= vars('company_logo') ?: base_url('assets/img/logo.png') ?>" alt="logo" id="company-logo">

        <!-- <span>
            <?= e($company_name) ?>
        </span>

        <div class="d-flex justify-content-center justify-content-md-start">
            <span class="display-selected-service me-1 pe-1 border-end invisible">
                <?= lang('service') ?>
            </span>
            <span class="display-selected-provider invisible">
                <?= lang('provider') ?>
            </span>
        </div> -->
    </div>

</div>
