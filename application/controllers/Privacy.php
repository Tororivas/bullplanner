<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * BullPlanner - Easy scheduling for your business
 *
 * @package     BullPlanner
 * @author      J.Rivas <rivas.j@me.com>
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://bullplanner.com
 * @since       v1.3.2
 * ---------------------------------------------------------------------------- */

/**
 * Privacy controller.
 *
 * Handles the privacy related operations.
 *
 * @package Controllers
 */
class Privacy extends EA_Controller
{
    /**
     * Privacy constructor.
     */
    public function __construct()
    {
        parent::__construct();

        $this->load->driver('cache', ['adapter' => 'file']);

        $this->load->model('customers_model');
    }

    /**
     * Remove all customer data (including appointments) from the system.
     */
    public function delete_personal_information(): void
    {
        try {
            $display_delete_personal_information = setting('display_delete_personal_information');

            if (!$display_delete_personal_information) {
                abort(403, 'Forbidden');
            }

            $customer_token = request('customer_token');

            if (empty($customer_token)) {
                throw new InvalidArgumentException('Invalid customer token value provided.');
            }

            $customer_id = $this->cache->get('customer-token-' . $customer_token);

            if (empty($customer_id)) {
                throw new InvalidArgumentException(
                    'Customer ID does not exist, please reload the page ' . 'and try again.',
                );
            }

            $this->customers_model->delete($customer_id);

            json_response([
                'success' => true,
            ]);
        } catch (Throwable $e) {
            json_exception($e);
        }
    }
}
