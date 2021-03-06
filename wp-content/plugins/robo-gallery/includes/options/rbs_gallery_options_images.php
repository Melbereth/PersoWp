<?php 
/*
*      Robo Gallery     
*      Version: 1.0
*      By Robosoft
*
*      Contact: https://robosoft.co/robogallery/ 
*      Created: 2015
*      Licensed under the GPLv2 license - http://opensource.org/licenses/gpl-2.0.php
*
*      Copyright (c) 2014-2018, Robosoft. All rights reserved.
*      Available only in  https://robosoft.co/robogallery/ 
*/

if ( ! defined( 'ABSPATH' ) ) exit;

$images_group = new_cmb2_box( array(
    'id'            => ROBO_GALLERY_PREFIX . 'images_metabox',
    'title'         => '<span class="dashicons dashicons-format-gallery"></span> '.__( 'Images Manager', 'robo-gallery' ),
    'object_types'  => array( ROBO_GALLERY_TYPE_POST ),
    'context'       => 'side',
    'priority'      => 'high',
    'show_names'	=> false,
));

/*$images_group->add_field(array(
    'name' => __( 'cache_id', 'robo-gallery' ),    
    'id'   => ROBO_GALLERY_PREFIX . 'cache_id', 
    'type' => 'hidden',
    'default' => uniqid(),
));
*/
$images_group->add_field(array(
    'name' => __( 'Manage Images', 'robo-gallery' ),
    'desc' => __( 'Click on Manage Images button to open Images Manager where you can upload, edit or delete images from gallery. Also here you can edit settings of every particular image, define alt, links, description text', 'robo-gallery' ),
    'button' => __( 'Manage Images', 'robo-gallery' ),
    'id'   => ROBO_GALLERY_PREFIX . 'galleryImages', 
    'type' => 'robo_gallery_images_field',
    'sanitization_cb' => 'robo_gallery_images_field_sanitise'
));



/*    $hover_group->add_field(    
	array(
	    'name' => 'Add Image to Gallery',
	    'desc' => 'ctrl to select many',
	    'id' => ROBO_GALLERY_PREFIX . 'file_list',
	    'type' => 'file_list',
	    'preview_size' => array( 50, 50 )
	    // Default: array( 50, 50 )
	)
);*/