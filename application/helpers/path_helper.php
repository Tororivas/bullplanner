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

if (!function_exists('storage_path')) {
    /**
     * Get the path to the storage folder.
     *
     * Example:
     *
     * $logs_path = storage_path('logs'); // Returns "/path/to/installation/dir/storage/logs"
     *
     * @param string $path
     *
     * @return string
     */
    function storage_path(string $path = ''): string
    {
        return FCPATH . 'storage/' . trim($path);
    }
}

if (!function_exists('base_path')) {
    /**
     * Get the path to the base of the current installation.
     *
     * $controllers_path = base_path('application/controllers'); // Returns "/path/to/installation/dir/application/controllers"
     *
     * @param string $path
     *
     * @return string
     */
    function base_path(string $path = ''): string
    {
        return FCPATH . trim($path);
    }
}
