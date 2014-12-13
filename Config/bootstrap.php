<?php
/**
 * Routes
 *
 * example_routes.php will be loaded in main app/config/routes.php file.
 */
Croogo::hookRoutes('Tescom');

/**
 * Component
 *
 * This plugin's Example component will be loaded in ALL controllers.
 */
Croogo::hookComponent('*', 'Tescom.Tescom');
