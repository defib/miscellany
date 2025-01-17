<?php

return [
    'actions'                   => [
        'actions'           => 'Actions',
        'apply'             => 'Apply',
        'back'              => 'Back',
        'bulk_templates'    => 'Apply Attribute Template',
        'copy'              => 'Copy',
        'copy_mention'      => 'Copy [ ] mention',
        'copy_to_campaign'  => 'Copy to Campaign',
        'explore_view'      => 'Nested View',
        'export'            => 'Export (PDF)',
        'find_out_more'     => 'Find out more',
        'go_to'             => 'Go to :name',
        'json-export'       => 'Export (JSON)',
        'manage_links'      => 'Manage Links',
        'move'              => 'Change or Move',
        'new'               => 'New',
        'next'              => 'Next',
        'reset'             => 'Reset',
    ],
    'add'                       => 'Add',
    'alerts'                    => [
        'copy_attribute'  => 'The attribute\'s mention was copied to your clipboard.',
        'copy_mention'  => 'The entity\'s advanced mention was copied to your clipboard.',
    ],
    'attributes'                => [
        'actions'       => [
            'apply_template'    => 'Apply an Attribute Template',
            'manage'            => 'Manage',
            'more'              => 'More options',
            'remove_all'        => 'Delete All',
        ],
        'errors'        => [
            'loop' => 'There is an endless loop in this attribute calculation!',
        ],
        'fields'        => [
            'attribute'             => 'Attribute',
            'community_templates'   => 'Community Templates',
            'is_private'            => 'Private Attributes',
            'is_star'               => 'Pinned',
            'template'              => 'Template',
            'value'                 => 'Value',
        ],
        'helpers'       => [
            'delete_all'    => 'Are you sure you want to delete all of this entity\'s attributes?',
        ],
        'hints'         => [
            'is_private'    => 'You can hide all the attributes of an entity for all members outside of the admin role by making it private.',
        ],
        'index'         => [
            'success'   => 'Attributes for :entity updated.',
            'title'     => 'Attributes for :name',
        ],
        'placeholders'  => [
            'attribute' => 'Number of conquests, Challenge Rating, Initiative, Population',
            'block'     => 'Block name',
            'checkbox'  => 'Checkbox name',
            'icon'      => [
                'class' => 'FontAwesome or RPG Awesome class: fas fa-users',
                'name'  => 'Icon name',
            ],
            'random'    => [
                'name'  => 'Attribute name',
                'value' => '1-100 or list of values separated by a comma',
            ],
            'section'   => 'Section name',
            'template'  => 'Select a template',
            'value'     => 'Value of the attribute',
        ],
        'template'      => [
            'success'   => 'Attribute Template :name applied to :entity',
            'title'     => 'Apply an Attribute Template for :name',
        ],
        'types'         => [
            'attribute' => 'Attribute',
            'block'     => 'Block',
            'checkbox'  => 'Checkbox',
            'icon'      => 'Icon',
            'random'    => 'Random',
            'section'   => 'Section',
            'text'      => 'Multiline Text',
        ],
        'visibility'    => [
            'entry'     => 'Attribute is displayed on the entity menu.',
            'private'   => 'Attribute only visible to members of the "Admin" role.',
            'public'    => 'Attribute visible to all members.',
            'tab'       => 'Attribute is displayed only on the Attributes tab.',
        ],
    ],
    'boosted'                   => 'Boosted',
    'boosted_campaigns'         => 'Boosted Campaigns',
    'bulk'                      => [
        'actions'       => [
            'edit'  => 'Bulk Edit & Tagging',
        ],
        'age'           => [
            'helper'    => 'You can use + and - before the number to update the age by that amount.',
        ],
        'delete'        => [
            'title'     => 'Deleting multiple entities',
            'warning'   => 'Are you sure you want to delete the selected entities?',
        ],
        'edit'          => [
            'tagging'   => 'Action for tags',
            'tags'      => [
                'add'       => 'Add',
                'remove'    => 'Remove',
            ],
            'title'     => 'Editing multiple entities',
        ],
        'errors'        => [
            'admin'     => 'Only campaign admins can change the private status of entities.',
            'general'   => 'An error occurred processing your action. Please try again and contact us if the problem persists. Error message: :hint.',
        ],
        'permissions'   => [
            'fields'    => [
                'override'  => 'Override',
            ],
            'helpers'   => [
                'override'  => 'If selected, permissions of the selected entities will be overwritten with these. If unchecked, the selected permissions will be added to the existing ones.',
            ],
            'title'     => 'Change permissions for several entities',
        ],
        'success'       => [
            'copy_to_campaign'  => '{1} :count entity copied to :campaign.|[2,*] :count entities copied to :campaign.',
            'editing'           => '{1} :count entity was updated.|[2,*] :count entities were updated.',
            'permissions'       => '{1} Permissions changed for :count entity.|[2,*] Permissions changed for :count entities.',
            'private'           => '{1} :count entity is now private.|[2,*] :count entities are now private.',
            'public'            => '{1} :count entity is now visible.|[2,*] :count entities are now visible.',
            'templates'         => '{1} :count entity had a template applied.|[2,*] :count entities has a template applied.',
        ],
    ],
    'bulk_templates'            => [
        'bulk_title'    => 'Apply a template to multiple entities',
    ],
    'cancel'                    => 'Cancel',
    'click_modal'               => [
        'close'     => 'Close',
        'confirm'   => 'Confirm',
        'title'     => 'Confirm your action',
    ],
    'copy_to_campaign'          => [
        'bulk_title'    => 'Copy entities to another campaign',
        'panel'         => 'Copy',
        'title'         => 'Copy \':name\' to another campaign',
    ],
    'create'                    => 'Create',
    'datagrid'                  => [
        'empty' => 'Nothing to show yet.',
    ],
    'delete_modal'              => [
        'close'         => 'Close',
        'delete'        => 'Delete',
        'description'   => 'Are you sure you want to remove :tag?',
        'mirrored'      => 'Remove mirrored relation.',
        'title'         => 'Delete confirmation',
    ],
    'destroy_many'              => [
        'success'   => 'Deleted :count entity|Deleted :count entities.',
    ],
    'edit'                      => 'Edit',
    'errors'                    => [
        'boosted'                       => 'This feature is only available to boosted campaigns.',
        'boosted_campaigns'             => 'This feature is only available for :boosted.',
        'node_must_not_be_a_descendant' => 'Invalid node (tag, parent location): it would be a descendant of itself.',
        'unavailable_feature'           => 'Unavailable feature',
    ],
    'events'                    => [
        'hint'  => 'Shown below is a list of all the Calendars in which this entity was added using the "Add an event to a calendar" interface.',
    ],
    'export'                    => 'Export',
    'fields'                    => [
        'ability'               => 'Ability',
        'attribute_template'    => 'Attribute Template',
        'calendar'              => 'Calendar',
        'calendar_date'         => 'Calendar Date',
        'character'             => 'Character',
        'colour'                => 'Colour',
        'copy_abilities'        => 'Copy Abilities',
        'copy_attributes'       => 'Copy Attributes',
        'copy_inventory'        => 'Copy Inventory',
        'copy_links'            => 'Copy Entity Links',
        'copy_notes'            => 'Copy Entity Notes',
        'creator'               => 'Creator',
        'dice_roll'             => 'Dice Roll',
        'entity'                => 'Entity',
        'entity_type'           => 'Entity Type',
        'entry'                 => 'Entry',
        'event'                 => 'Event',
        'excerpt'               => 'Excerpt',
        'family'                => 'Family',
        'files'                 => 'Files',
        'gallery_image'         => 'Gallery Image',
        'has_entity_files'      => 'Has entity files',
        'has_entity_notes'      => 'Has entity notes',
        'has_image'             => 'Has an image',
        'header_image'          => 'Header Image',
        'image'                 => 'Image',
        'is_private'            => 'Private',
        'is_private_v2'         => 'Only show this to members of the campaign\'s :admin-role. This overrides any other permission.',
        'is_star'               => 'Pinned',
        'item'                  => 'Item',
        'location'              => 'Location',
        'map'                   => 'Map',
        'name'                  => 'Name',
        'organisation'          => 'Organisation',
        'position'              => 'Position',
        'privacy'               => 'Privacy',
        'race'                  => 'Race',
        'tag'                   => 'Tag',
        'tags'                  => 'Tags',
        'timeline'              => 'Timeline',
        'tooltip'               => 'Tooltip',
        'type'                  => 'Type',
        'visibility'            => 'Visibility',
    ],
    'files'                     => [
        'actions'   => [
            'drop'      => 'Click to Add or Drop a file',
            'manage'    => 'Manage Entity Files',
        ],
        'errors'    => [
            'max'       => 'You have reached the maximum number (:max) of files for this entity.',
            'no_files'  => 'No files.',
        ],
        'files'     => 'Uploaded Files',
        'hints'     => [
            'limit'         => 'Each entity can have a maximum of :max files uploaded to it.',
            'limitations'   => 'Supported formats: :formats. Max file size: :size',
        ],
        'title'     => 'Entity Files for :name',
    ],
    'filter'                    => 'Filter',
    'filters'                   => [
        'all'       => 'Filter to all descendants',
        'clear'     => 'Clear Filters',
        'direct'    => 'Filter to direct descendants',
        'filtered'  => 'Showing :count of :total :entity.',
        'hide'      => 'Hide Filters',
        'options'   => [
            'exclude'   => 'Exclude',
            'include'   => 'Include',
            'none'      => 'None',
        ],
        'show'      => 'Show Filters',
        'sorting'   => [
            'asc'       => ':field Ascending',
            'desc'      => ':field Descending',
            'helper'    => 'Control in which order results appear.',
        ],
        'title'     => 'Filters',
    ],
    'forms'                     => [
        'actions'       => [
            'calendar'  => 'Add a calendar date',
        ],
        'copy_options'  => 'Copy Options',
    ],
    'helpers'                   => [
        'copy_options'  => 'Copy the following related elements from the source to the new entity.',
    ],
    'hidden'                    => 'Hidden',
    'hints'                     => [
        'attribute_template'    => 'Apply an attribute template directly when creating or editing this entity.',
        'calendar_date'         => 'A calendar date allows easy filtering in lists, and also maintains a calendar event in the selected calendar.',
        'gallery_image'         => 'If the entity has no image, display an image from the campaign gallery instead.',
        'header_image'          => 'This image is placed above the entity. For best results, use a wide image.',
        'image_limitations'     => 'Supported formats: jpg, png and gif. Max file size: :size.',
        'image_patreon'         => 'Increase file size limit?',
        'is_private'            => 'If set to private, this entity will only be visible to members who are in the campaign\'s "Admin" role.',
        'is_star'               => 'Pinned elements will appear on the entity\'s menu',
        'map_limitations'       => 'Supported formats: jpg, png, gif and svg. Max file size: :size.',
        'tooltip'               => 'Replace the automatically generated tooltip with the following contents. Any HTML code will be stripped, but you can still mention other entities using advanced mentions.',
        'visibility'            => 'Setting the visibility to admin means only members in the Admin campaign role can view this. Setting it to self means only you can view this.',
    ],
    'history'                   => [
        'created'       => 'Created by <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'created_date'  => 'Created <span data-toggle="tooltip" title=":realdate">:date</span>',
        'unknown'       => 'Unknown',
        'updated'       => 'Last modified by <strong>:name</strong> <span data-toggle="tooltip" title=":realdate">:date</span>',
        'updated_date'  => 'Last modified <span data-toggle="tooltip" title=":realdate">:date</span>',
        'view'          => 'View entity log',
    ],
    'image'                     => [
        'error' => 'We weren\'t able to get the image you requested. It could be that the website doesn\'t allow us to download the image (typically for Squarespace and DeviantArt), or that the link is no longer valid. Please also make sure that the image isn\'t larger than :size.',
    ],
    'is_not_private'            => 'This entity isn\'t currently set to private.',
    'is_private'                => 'This entity is private and only visible to members of the Admin role.',
    'legacy'                    => 'Legacy',
    'linking_help'              => 'How can I link to other entities?',
    'manage'                    => 'Manage',
    'move'                      => [
        'errors'        => [
            'permission'        => 'You aren\'t allowed to create entities of that type in the target campaign.',
            'same_campaign'     => 'You need to select another campaign to move the entity to.',
            'unknown_campaign'  => 'Unknown campaign.',
        ],
        'fields'        => [
            'campaign'  => 'New campaign',
            'copy'      => 'Make a copy',
            'target'    => 'New type',
        ],
        'hints'         => [
            'campaign'  => 'You can also try to move this entity to another campaign.',
            'copy'      => 'Select this option if you want to create copy in the new campaign.',
            'target'    => 'Please be aware that some data might be lost when moving an element from one type to another.',
        ],
        'panels'        => [
            'change'    => 'Change entity type',
            'move'      => 'Move to another campaign',
        ],
        'success'       => 'Entity \':name\' moved.',
        'success_copy'  => 'Entity \':name\' copied.',
        'title'         => 'Change or Move :name',
    ],
    'new_entity'                => [
        'error' => 'Please review your values.',
        'fields'=> [
            'name'  => 'Name',
        ],
        'title' => 'New entity',
    ],
    'or_cancel'                 => 'or <a href=":url">cancel</a>',
    'panels'                    => [
        'appearance'            => 'Appearance',
        'attribute_template'    => 'Attribute Template',
        'calendar_date'         => 'Calendar Date',
        'entry'                 => 'Entry',
        'general_information'   => 'General Information',
        'move'                  => 'Move',
        'system'                => 'System',
    ],
    'permissions'               => [
        'action'            => 'Action',
        'actions'           => [
            'bulk'          => [
                'add'       => 'Allow',
                'deny'      => 'Deny',
                'ignore'    => 'Skip',
                'remove'    => 'Remove',
            ],
            'bulk_entity'   => [
                'allow'     => 'Allow',
                'deny'      => 'Deny',
                'inherit'   => 'Inherit',
            ],
            'delete'        => 'Delete',
            'edit'          => 'Edit',
            'entity_note'   => 'Entity Notes',
            'read'          => 'Read',
            'toggle'        => 'Toggle',
        ],
        'allowed'           => 'Allowed',
        'fields'            => [
            'member'    => 'Member',
            'role'      => 'Role',
        ],
        'helper'            => 'Use this interface to fine-tune which users and roles that can interact with this entity. :allow',
        'helpers'           => [
            'setup' => 'Use this interface to fine-tune how roles and users can interact with this entity. :allow will allow the user or role to do this action. :deny will deny them that action. :inherit will use the user\'s role or main role\'s permission. A user set to :allow is able to do the action, even if their role is set to :deny.',
        ],
        'inherited'         => 'This role already has this permission set for this entity type.',
        'inherited_by'      => 'This user is part of the \':role\' role which grants this permissions on this entity type.',
        'success'           => 'Permissions saved.',
        'title'             => 'Permissions',
        'too_many_members'  => 'This campaign has too many members (>10) to display in this interface. Please use the Permission button on the entity view to control permissions in detail.',
    ],
    'placeholders'              => [
        'ability'       => 'Choose an ability',
        'calendar'      => 'Choose a calendar',
        'character'     => 'Choose a character',
        'entity'        => 'Entity',
        'event'         => 'Choose an event',
        'family'        => 'Choose a family',
        'gallery_image' => 'Choose an image from the campaign gallery',
        'image_url'     => 'You can upload an image from a URL instead',
        'item'          => 'Choose an item',
        'journal'       => 'Choose a journal',
        'location'      => 'Choose a location',
        'map'           => 'Choose a map',
        'note'          => 'Choose a note',
        'organisation'  => 'Choose an organisation',
        'race'          => 'Choose a race',
        'tag'           => 'Choose a tag',
        'timeline'      => 'Choose a timeline',
    ],
    'relations'                 => [
        'actions'   => [
            'add'   => 'Add a relation',
        ],
        'fields'    => [
            'location'  => 'Location',
            'name'      => 'Name',
            'relation'  => 'Relation',
        ],
        'hint'      => 'Relations between entities can be set up to represent their connections.',
    ],
    'remove'                    => 'Remove',
    'rename'                    => 'Rename',
    'save'                      => 'Save',
    'save_and_close'            => 'Save and Close',
    'save_and_copy'             => 'Save and Copy',
    'save_and_new'              => 'Save and New',
    'save_and_update'           => 'Save and Edit',
    'save_and_view'             => 'Save and View',
    'search'                    => 'Search',
    'select'                    => 'Select',
    'superboosted_campaigns'    => 'Superboosted Campaigns',
    'tabs'                      => [
        'abilities'     => 'Abilities',
        'attributes'    => 'Attributes',
        'boost'         => 'Boost',
        'calendars'     => 'Calendars',
        'default'       => 'Default',
        'events'        => 'Events',
        'inventory'     => 'Inventory',
        'links'         => 'Links',
        'map-points'    => 'Map Points',
        'mentions'      => 'Mentions',
        'menu'          => 'Menu',
        'notes'         => 'Entity Notes',
        'permissions'   => 'Permissions',
        'relations'     => 'Relations',
        'reminders'     => 'Reminders',
        'timelines'     => 'Timelines',
        'tooltip'       => 'Tooltip',
    ],
    'update'                    => 'Update',
    'users'                     => [
        'unknown'   => 'Unknown',
    ],
    'view'                      => 'View',
    'visibilities'              => [
        'admin'         => 'Admin',
        'admin-self'    => 'Self & Admin',
        'all'           => 'All',
        'members'       => 'Members',
        'self'          => 'Self',
    ],
];
