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
 * User controller.
 *
 * Handles the user related operations.
 *
 * @package Controllers
 */
class User extends EA_Controller
{
    /**
     * User constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->library('accounts');
        $this->load->library('email_messages');
    }

    /**
     * Redirect to the login page.
     */
    public function index(): void
    {
        redirect('login');
    }

    /**
     * Display the login page.
     *
     * @deprecated Since 1.5 Use the Login controller instead.
     */
    public function login(): void
    {
        redirect('login');
    }

    /**
     * Display the logout page.
     *
     * @deprecated Since 1.5 Use the Logout controller instead.
     */
    public function logout(): void
    {
        redirect('logout');
    }

    /**
     * Display the password recovery page.
     *
     * @deprecated Since 1.5 Use the Logout controller instead.
     */
    public function forgot_password(): void
    {
        redirect('recovery');
    }
}
