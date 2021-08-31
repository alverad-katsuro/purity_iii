<?php
declare(strict_types = 1);

/**
 * @package   Update Server
 * @version   1.0.0
 * @author    Alfredo Gabriel
 * @copyright Alverad Development (c) 2021
 * @license   MIT
 */

use Joomla\CMS\Helper\ModuleHelper;

defined('_JEXEC') or die;

// Retrieve parameters and render the module.
$moduleClassSuffix = htmlspecialchars($params->get('moduleclass_sfx', ''), ENT_COMPAT, 'UTF-8');
require ModuleHelper::getLayoutPath('mod_updateserver', $params->get('layout', 'default'));