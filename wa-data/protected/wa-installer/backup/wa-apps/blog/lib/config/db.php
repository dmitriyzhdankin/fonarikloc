<?php
return array(
    'blog_blog' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'url' => array('varchar', 255, 'null' => 0, 'default' => ''),
        'name' => array('varchar', 255, 'null' => 0),
        'status' => array('enum', "'public','private'", 'null' => 0, 'default' => 'public'),
        'icon' => array('varchar', 255, 'null' => 0, 'default' => ''),
        'color' => array('varchar', 50, 'null' => 0, 'default' => ''),
        'qty' => array('int', 11, 'null' => 0, 'default' => '0'),
        'sort' => array('int', 11, 'null' => 0, 'default' => '0'),
        ':keys' => array(
            'PRIMARY' => 'id',
            'sort' => 'sort',
            'status' => 'status',
        ),
    ),
    'blog_comment' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'left' => array('int', 11),
        'right' => array('int', 11),
        'depth' => array('int', 11, 'null' => 0, 'default' => '0'),
        'parent' => array('int', 11, 'null' => 0, 'default' => '0'),
        'post_id' => array('int', 11, 'null' => 0),
        'blog_id' => array('int', 11, 'null' => 0),
        'datetime' => array('datetime', 'null' => 0),
        'status' => array('enum', "'approved','deleted'", 'null' => 0, 'default' => 'approved'),
        'text' => array('text', 'null' => 0),
        'contact_id' => array('int', 11, 'null' => 0),
        'name' => array('varchar', 255),
        'email' => array('varchar', 255),
        'site' => array('varchar', 255),
        'auth_provider' => array('varchar', 100),
        'ip' => array('int', 11),
        ':keys' => array(
            'PRIMARY' => 'id',
            'contact_id' => 'contact_id',
            'post_id' => 'post_id',
            'parent' => 'parent',
            'status' => 'status',
        ),
    ),
    'blog_page' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'parent_id' => array('int', 11),
        'domain' => array('varchar', 255),
        'route' => array('varchar', 255),
        'name' => array('varchar', 255, 'null' => 0),
        'title' => array('varchar', 255, 'null' => 0, 'default' => ''),
        'url' => array('varchar', 255),
        'full_url' => array('varchar', 255),
        'content' => array('text', 'null' => 0),
        'create_datetime' => array('datetime', 'null' => 0),
        'update_datetime' => array('datetime', 'null' => 0),
        'create_contact_id' => array('int', 11, 'null' => 0),
        'sort' => array('int', 11, 'null' => 0, 'default' => '0'),
        'status' => array('tinyint', 1, 'null' => 0, 'default' => '0'),
        ':keys' => array(
            'PRIMARY' => 'id',
        ),
    ),
    'blog_page_params' => array(
        'page_id' => array('int', 11, 'null' => 0),
        'name' => array('varchar', 255, 'null' => 0),
        'value' => array('text', 'null' => 0),
        ':keys' => array(
            'PRIMARY' => array('page_id', 'name'),
        ),
    ),
    'blog_post' => array(
        'id' => array('int', 11, 'null' => 0, 'autoincrement' => 1),
        'blog_id' => array('int', 11, 'null' => 0, 'default' => '1'),
        'contact_id' => array('int', 11, 'null' => 0),
        'contact_name' => array('varchar', 150, 'default' => ''),
        'datetime' => array('datetime'),
        'title' => array('varchar', 255, 'null' => 0, 'default' => ''),
        'status' => array('enum', "'draft','deadline','scheduled','published'", 'null' => 0, 'default' => 'draft'),
        'text' => array('mediumtext', 'null' => 0),
        'text_before_cut' => array('text'),
        'cut_link_label' => array('varchar', 255),
        'url' => array('varchar', 255, 'null' => 0, 'default' => ''),
        'comments_allowed' => array('tinyint', 1, 'null' => 0, 'default' => '1'),
        ':keys' => array(
            'PRIMARY' => 'id',
            'contact_id' => 'contact_id',
            'blog' => array('status', 'blog_id', 'datetime'),
        ),
    ),
    'blog_post_params' => array(
        'post_id' => array('int', 11, 'null' => 0),
        'name' => array('varchar', 255, 'null' => 0),
        'value' => array('text', 'null' => 0),
        ':keys' => array(
            'PRIMARY' => array('post_id', 'name'),
        ),
    ),
);