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

class Migration_Add_is_private_column_to_users_table extends EA_Migration
{
    /**
     * Upgrade method.
     */
    public function up(): void
    {
        if (!$this->db->field_exists('is_private', 'users')) {
            $fields = [
                'is_private' => [
                    'type' => 'TINYINT',
                    'constraint' => '4',
                    'default' => '0',
                    'after' => 'language',
                ],
            ];

            $this->dbforge->add_column('users', $fields);
        }
    }

    /**
     * Downgrade method.
     */
    public function down(): void
    {
        if ($this->db->field_exists('is_private', 'users')) {
            $this->dbforge->drop_column('users', 'is_private');
        }
    }
}
