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

class Migration_Add_default_language_setting extends EA_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        if (!$this->db->get_where('settings', ['name' => 'default_language'])->num_rows()) {
            $this->db->insert('settings', [
                'name' => 'default_language',
                'value' => 'english',
            ]);
        }
    }

    /**
     * Downgrade method.
     */
    public function down(): void
    {
        if ($this->db->get_where('settings', ['name' => 'default_language'])->num_rows()) {
            $this->db->delete('settings', ['name' => 'default_language']);
        }
    }
}
