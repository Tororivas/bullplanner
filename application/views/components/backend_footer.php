<?php
/**
 * Local variables.
 *
 * @var string $user_display_name
 */
?>
<div id="footer" class="d-lg-flex justify-content-lg-start align-items-lg-center p-2 text-center text-lg-left mt-auto">
    <div class="mb-3 me-lg-5 mb-lg-0">
        <img class="me-1" src="<?= base_url('assets/img/logo-16x16.png') ?>" alt="BullPlanner Logo">

        BullPlanner

        <span>v<?= config('version') ?></span>
    </div>

    <div class="mb-3 me-lg-5 mb-lg-0">
        <img class="me-1" src="<?= base_url('assets/img/toro-logo-16x16.png') ?>" alt="toro Logo">

        Toro

        &copy; <?= date('Y') ?> - Software Development
    </div>

    <div class="mb-3 me-lg-5 mb-lg-0">
        <?= lang('licensed_under') ?>
        <a href="https://www.gnu.org/licenses/gpl-3.0.en.html">
            GPL-3.0
        </a>
    </div>

    <div class="mb-3 me-lg-5 mb-lg-0">
        <span id="select-language" class="badge bg-dark">
            <i class="fas fa-language me-2"></i>
        	<?= ucfirst(config('language')) ?>
        </span>
    </div>

    <div class="mb-3 me-lg-5 mb-lg-0">
        <a href="<?= site_url('appointments') ?>">
            <?= lang('go_to_booking_page') ?>
        </a>
    </div>

    <div class="ms-lg-auto">
        <strong id="footer-user-display-name">
            <?= lang('hello') . ', ' . e($user_display_name) ?>!
        </strong>
    </div>
</div>


