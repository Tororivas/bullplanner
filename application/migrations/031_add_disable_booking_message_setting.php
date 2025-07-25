<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * BullPlanner - Easy scheduling for your business
 *
 * @package     BullPlanner
 * @author      J.Rivas <rivas.j@me.com>
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://bullplanner.com
 * @since       v1.4.0
 * ---------------------------------------------------------------------------- */

class Migration_Add_disable_booking_message_setting extends EA_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        if (!$this->db->get_where('settings', ['name' => 'disable_booking_message'])->num_rows()) {
            $this->db->insert('settings', [
                'name' => 'disable_booking_message',
                'value' =>
                    '<p style="text-align: center;">Thanks for stopping by!</p><p style="text-align: center;">We are not accepting new appointments at the moment, please check back again later.</p>',
            ]);
        }
    }

    /**
     * Downgrade method.
     */
    public function down(): void
    {
        if ($this->db->get_where('settings', ['name' => 'disable_booking_message'])->num_rows()) {
            $this->db->delete('settings', ['name' => 'disable_booking_message']);
        }
    }
}
