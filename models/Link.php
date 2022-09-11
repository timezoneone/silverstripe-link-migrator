<?php

namespace Dynamic\Link\Models;

use SilverStripe\Assets\File;
use SilverStripe\ORM\DataObject;

/**
 * Class Link(obsolete)
 * In order to leverage from SilverStripe's ORM copied the code for DB fields from https://github.com/sheadawson/silverstripe-linkable/blob/master/src/Models/Link.php
 *
 * @property string Title
 * @property string Type
 * @property string URL
 * @property string Email
 * @property string Phone
 * @property bool OpenInNewWindow
 * @property string Template
 */
class Link extends DataObject
{
    /**
     * @var array
     */
    private static $db = [
        'Title' => 'Varchar(255)',
        'Type' => 'Varchar',
        'URL' => 'Varchar(255)',
        'Email' => 'Varchar(255)',
        'Phone' => 'Varchar(255)',
        'OpenInNewWindow' => 'Boolean',
        'Template' => 'Varchar(255)',
    ];

    /**
     * @var array
     */
    private static $has_one = [
        'File' => File::class,
    ];

    /**
     * @var string
     */
    private static $table_name = 'LinkableLink';

    /**
     * A map of object types that can be linked to
     * Custom dataobjects can be added to this
     *
     * @var array
     */
    private static $types = [
        'URL' => 'URL',
        'Email' => 'Email address',
        'Phone' => 'Phone number',
        'File' => 'File on this website',
    ];
}
