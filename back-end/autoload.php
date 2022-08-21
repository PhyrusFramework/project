<?php

/**
 * This file is used to import PHP files automatically.
 * 
 * You can add signle files or directories. If it's a directory,
 * all PHP files inside and in subdirectories will be imported.
 */

return [
    // Files or directories imported always in every execution:
    'always' => [
        '/endpoints'
    ],

    /*
    * Files that are named like the class declared inside.
    * The autoload feature will load those files 
    * only when its class is used.
    */
    'classByFile' => [
        '/models'
    ],

    /**
     * Same, but here you manually specify the class name
     * and which files to load when it's used.
     */
    'classByName' => [
        // 'classname' => ['file1', 'file2', 'file3', ...]
    ]
];