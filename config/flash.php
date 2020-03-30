<?php

return [

    /*
     * Determine if all flash messages will be dismissible
     */
    'dismissible' => true,

    /*
     * Extra class applied to each alert
     */
    'class' => 'fade show',

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
        'deleted' => 'Deleted successfully'
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
         * Type of alert validation.
         *
         * Should be any available bootstrap alert type: success, warning, danger, etc.
         */
        'type' => 'danger',

        /*
         * Determine if alert validation will be dismissible
         */
        'dismissible' => true,

        /*
         * Extra class applied to alert validation
         */
        'class' => 'fade show',
    ]
];
