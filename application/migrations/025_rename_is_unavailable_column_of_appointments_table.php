<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * BullPlanner - Easy scheduling for your business
 *
 * @package     BullPlanner
 * @author      J.Rivas <rivas.j@me.com>
 * @copyright   Copyright (c) Alex Tselegidis
 * @license     https://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://bullplanner.com
 * @since       v1.5.0
 * ---------------------------------------------------------------------------- */

class Migration_Rename_is_unavailable_column_of_appointments_table extends EA_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        if ($this->db->field_exists('is_unavailable', 'appointments')) {
            $fields = [
                'is_unavailable' => [
                    'name' => 'is_unavailability',
                    'type' => 'TINYINT',
                    'constraint' => '4',
                    'default' => '0',
                ],
            ];

            $this->dbforge->modify_column('appointments', $fields);
        }
    }

    /**
     * Downgrade method.
     */
    public function down(): void
    {
        if ($this->db->field_exists('is_unavailability', 'appointments')) {
            $fields = [
                'is_unavailability' => [
                    'name' => 'is_unavailable',
                    'type' => 'TINYINT',
                    'constraint' => '4',
                    'default' => '0',
                ],
            ];

            $this->dbforge->modify_column('appointments', $fields);
        }
    }
}
