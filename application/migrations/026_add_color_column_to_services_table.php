<?php defined('BASEPATH') or exit('No direct script access allowed');

/* ----------------------------------------------------------------------------
 * BullPlanner - Open Source Web Scheduler
 *
 * @package     BullPlanner
 * @author      J.Rivas <rivas.j@me.com>
 * @copyright   Copyright (c) 2013 - 2020, Alex Tselegidis
 * @license     http://opensource.org/licenses/GPL-3.0 - GPLv3
 * @link        https://bullplanner.com
 * @since       v1.4.0
 * ---------------------------------------------------------------------------- */

class Migration_Add_color_column_to_services_table extends EA_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        if (!$this->db->field_exists('color', 'services')) {
            $fields = [
                'color' => [
                    'type' => 'VARCHAR',
                    'constraint' => '256',
                    'default' => '#7cbae8',
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
        if ($this->db->field_exists('color', 'services')) {
            $this->dbforge->drop_column('services', 'color');
        }
    }
}
