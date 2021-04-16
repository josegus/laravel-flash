<?php

return [

    /*
     * If true, all flash notifications will have an "x" to make them dismissible
     */
    'dismissible' => true,

    /**
     * Defines which css framework will be used. Allowed values are "tailwind" and "bootstrap"
     */
    'framework' => (string) env('FLASH_FRAMEWORK', 'tailwind'),

    /*
     * Extra class applied to each html alert notification
     */
    'class' => 'text-white',

    /**
     * Classes applied on each type of alert notification.
     */
    'classes' => [
        'tailwind' => [
            'success' => 'bg-green-500',
            'error' => 'bg-red-600',
            'warning' => 'bg-yellow-400',
            'stored' => 'bg-green-500',
            'updated' => 'bg-green-500',
            'deleted' => 'bg-green-500',
            'queued' => 'bg-green-500',
        ],

        'bootstrap' => [
            'success' => 'alert-success',
            'error' => 'alert-danger',
            'warning' => 'alert-warning',
            'stored' => 'alert-success',
            'updated' => 'alert-success',
            'deleted' => 'alert-success',
            'queued' => 'alert-success',
        ],
    ],

    /*
     * Default messages used for all available actions
     */
    'messages' => [
        /*
         * Default success message
         */
        'success' => 'Operation executed successfully',

        /*
         * Default error message
         */
        'error' => 'An error occurred',

        /*
         * Default warning message
         */
        'warning' => 'Be careful',

        /*
         * Used when a new resource has been stored
         */
        'stored' => 'Stored successfully',

        /*
         * Used when an existing resource has been updated
         */
        'updated' => 'Updated successfully',

        /*
         * Used when a resource has been deleted
         */
        'deleted' => 'Deleted successfully',

        /*
         * Used when you want to notify that something has been pushed to queue
         */
        'queued' => 'Operation queued successfully',
    ],

    /*
     * The package can use the included generic error list view when a validation occurs
     */
    'validations' => [

        /*
         * Determine if the package will use the included validations errors view
         */
        'enabled' => true,

        /*
         * Path to errors view. Only available if "validations.enabled" is true.
         * This view can be published to adapt to your needs
         */
        'view' => 'flash::validations',

        /*
         * Class applied to alert validation box.
         */
        'classes' => [
            /**
             * Any tailwindcss class
             */
            'tailwind' => 'bg-red-600 text-white text-sm',

            /**
             * Should be any available bootstrap alert type: success, warning, danger, etc.
             */
            'bootstrap' => 'alert-danger',
        ],

        /*
         * Determine if alert validation will be dismissible
         */
        'dismissible' => true,

        /*
         * Extra class applied to alert validation
         */
        'class' => '',
    ]
];
