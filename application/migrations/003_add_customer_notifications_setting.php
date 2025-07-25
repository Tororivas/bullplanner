<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * BullPlanner - Easy scheduling for your business
 *
 * @package     BullPlanner
 * @author      J.Rivas <rivas.j@me.com>
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://bullplanner.com
 * @since       v1.1.0
 * ---------------------------------------------------------------------------- */

class Migration_Add_customer_notifications_setting extends EA_Migration
{
    /**
     * Upgrade method.
     *
     * @throws Exception
     */
    public function up(): void
    {
        if (!$this->db->get_where('settings', ['name' => 'customer_notifications'])->num_rows()) {
            $this->db->insert('settings', [
                'name' => 'customer_notifications',
                'value' => '1',
            ]);
        }
    }

    /**
     * Downgrade method.
     *
     * @throws Exception
     */
    public function down(): void
    {
        if ($this->db->get_where('settings', ['name' => 'customer_notifications'])->num_rows()) {
            $this->db->delete('settings', ['name' => 'customer_notifications']);
        }
    }
}
