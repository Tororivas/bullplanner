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

class Migration_Add_booking_field_settings extends EA_Migration
{
    /**
     * @var array
     */
    private $fields = [
        'first_name' => [
            'display' => '1',
            'require' => '1',
        ],
        'last_name' => [
            'display' => '1',
            'require' => '1',
        ],
        'email' => [
            'display' => '1',
            'require' => '1',
        ],
        'phone_number' => [
            'display' => '1',
            'require' => '1',
        ],
        'address' => [
            'display' => '1',
            'require' => '0',
        ],
        'city' => [
            'display' => '1',
            'require' => '0',
        ],
        'zip_code' => [
            'display' => '1',
            'require' => '0',
        ],
        'notes' => [
            'display' => '1',
            'require' => '0',
        ],
    ];

    /**
     * Upgrade method.
     */
    public function up(): void
    {
        foreach ($this->fields as $field => $props) {
            foreach ($props as $prop => $value) {
                $setting_name = $prop . '_' . $field;

                if ($this->db->get_where('settings', ['name' => $setting_name])->num_rows()) {
                    $setting = $this->db->get_where('settings', ['name' => $setting_name])->row_array();

                    $value = $setting['value']; // Use existing value.

                    $this->db->delete('settings', ['name' => $setting_name]);
                }

                if (!$this->db->get_where('settings', ['name' => $setting_name])->num_rows()) {
                    $this->db->insert('settings', [
                        'name' => $setting_name,
                        'value' => $value,
                    ]);
                }
            }
        }
    }

    /**
     * Downgrade method.
     */
    public function down(): void
    {
        foreach ($this->fields as $field => $props) {
            foreach ($props as $prop => $value) {
                $setting_name = $prop . '_' . $field;

                if ($this->db->get_where('settings', ['name' => $setting_name])->num_rows()) {
                    $this->db->delete('settings', ['name' => $setting_name]);
                }
            }
        }
    }
}
