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

class Migration_Create_appointment_location_column extends EA_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        if (!$this->db->field_exists('location', 'appointments')) {
            $fields = [
                'location' => [
                    'type' => 'TEXT',
                    'null' => true,
                    'after' => 'end_datetime',
                ],
            ];

            $this->dbforge->add_column('appointments', $fields);
        }

        if (!$this->db->field_exists('location', 'services')) {
            $fields = [
                'location' => [
                    'type' => 'TEXT',
                    'null' => true,
                    'after' => 'description',
                ],
            ];

            $this->dbforge->add_column('services', $fields);
        }
    }

    /**
     * Downgrade method.
     */
    public function down(): void
    {
        if ($this->db->field_exists('location', 'appointments')) {
            $this->dbforge->drop_column('appointments', 'location');
        }

        if ($this->db->field_exists('location', 'services')) {
            $this->dbforge->drop_column('services', 'location');
        }
    }
}
