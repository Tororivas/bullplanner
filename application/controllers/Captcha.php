<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * BullPlanner - Easy scheduling for your business
 *
 * @package     BullPlanner
 * @author      J.Rivas <rivas.j@me.com>
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://bullplanner.com
 * @since       v1.0.0
 * ---------------------------------------------------------------------------- */

/**
 * Captcha controller.
 *
 * Handles the captcha operations.
 *
 * @package Controllers
 */
class Captcha extends EA_Controller
{
    /**
     * Class Constructor
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('captcha_builder');
    }

    /**
     * Make a request to this method to get a captcha image.
     */
    public function index(): void
    {
        $this->captcha_builder->setDistortion(true);
        $this->captcha_builder->setMaxBehindLines(1);
        $this->captcha_builder->setMaxFrontLines(1);
        $this->captcha_builder->setBackgroundColor(255, 255, 255);
        $this->captcha_builder->build();
        session(['captcha_phrase' => $this->captcha_builder->getPhrase()]);
        header('Content-type: image/jpeg');
        $this->captcha_builder->output();
    }
}
