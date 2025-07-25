<?php use JetBrains\PhpStorm\NoReturn;

defined('BASEPATH') or exit('No direct script access allowed');

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

if (!function_exists('dd')) {
    /**
     * Output the provided variables with "var_dump" and stop the execution.
     *
     * Example:
     *
     * dd($appointment, $service, $provider, $customer);
     *
     * @param mixed ...$vars
     */
    #[NoReturn]
    function dd(...$vars): void
    {
        echo is_cli() ? PHP_EOL : '<pre>';
        var_dump($vars);
        echo is_cli() ? PHP_EOL : '</pre>';

        exit(1);
    }
}
