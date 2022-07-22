<?php

/**
 * This file is used to automatically import PHP files
 * so you can forget about handleling it.
 * 
 * You can add signle files or directories. If it's a directory,
 * all PHP files inside and in subdirectories will be imported.
 */

return [
    // Files or directories always imported:
    'always' => [
        '/endpoints'
    ],

    /*
    * Files that are named as the class declared inside.
    * The autoload feature will be used to load those files 
    * only when that class is used.
    */
    'classByFile' => [
        '/models'
    ],

    /**
     * Same, but here you manually specify the class name
     * and which files to load depending on it.
     */
    'classByName' => [
        // 'classname' => ['file1', 'file2', 'file3', ...]
    ]
];