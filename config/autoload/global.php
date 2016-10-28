<?php
/**
 * Global Configuration Override
 *
 * You can use this file for overriding configuration values from modules, etc.
 * You would place values in here that are agnostic to the environment and not
 * sensitive to security.
 *
 * @NOTE: In practice, this file will typically be INCLUDED in your source
 * control, so do not include passwords or other sensitive information in this
 * file.
 */

return array(
    'service_manager' => array(
        'factories' => array(
            'ZendDbAdapterAdapterdb1' => function($sm) {
                $config = $sm->get('Config');
                return new Zend\Db\Adapter\Adapter($config['db1conf']);
            },
            'ZendDbAdapterAdapterdb2' => function($sm) {
                $config = $sm->get('Config');
                return new Zend\Db\Adapter\Adapter($config['db2conf']);
            },
        ),
    ),
);