<?php if ( ! defined( 'ABSPATH' )  ) { die; } // Cannot access directly.

//
// Set a unique slug-like ID
//
$prefix = '_prefix_my_options';

//
// Create options
//
CSF::createOptions( $prefix, array(
  'menu_title' => 'My Theme Options',
  'menu_slug'  => 'theme-options',
) );

//
// Create a section
//
CSF::createSection( $prefix, array(
  'title'  => 'Overview',
  'icon'   => 'fas fa-rocket',
  'fields' => array(

    //
    // A text field
    //
    array(
      'id'    => 'opt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'    => 'opt-textarea',
      'type'  => 'textarea',
      'title' => 'Textarea',
      'help'  => 'The help text of the field.',
    ),

    array(
      'id'    => 'opt-upload',
      'type'  => 'upload',
      'title' => 'Upload',
    ),

    array(
      'id'    => 'opt-switcher',
      'type'  => 'switcher',
      'title' => 'Switcher',
      'label' => 'The label text of the switcher.',
    ),

    array(
      'id'      => 'opt-color',
      'type'    => 'color',
      'title'   => 'Color',
      'default' => '#3498db',
    ),

    array(
      'id'    => 'opt-checkbox',
      'type'  => 'checkbox',
      'title' => 'Checkbox',
      'label' => 'The label text of the checkbox.',
    ),

    array(
      'id'      => 'opt-radio',
      'type'    => 'radio',
      'title'   => 'Radio',
      'options' => array(
        'yes'   => 'Yes, Please.',
        'no'    => 'No, Thank you.',
      ),
      'default' => 'yes',
    ),

    array(
      'id'          => 'opt-select',
      'type'        => 'select',
      'title'       => 'Select',
      'placeholder' => 'Select an option',
      'options'     => array(
        'opt-1'     => 'Option 1',
        'opt-2'     => 'Option 2',
        'opt-3'     => 'Option 3',
      ),
    ),

    array(
      'id'      => 'opt-image-select',
      'type'    => 'image_select',
      'title'   => 'Image Select',
      'options' => array(
        'opt-1' => 'http://codestarframework.com/assets/images/placeholder/100x80-2ecc71.gif',
        'opt-2' => 'http://codestarframework.com/assets/images/placeholder/100x80-e74c3c.gif',
        'opt-3' => 'http://codestarframework.com/assets/images/placeholder/100x80-ffbc00.gif',
        'opt-4' => 'http://codestarframework.com/assets/images/placeholder/100x80-3498db.gif',
        'opt-5' => 'http://codestarframework.com/assets/images/placeholder/100x80-555555.gif',
      ),
      'default' => 'opt-1',
    ),

    array(
      'id'    => 'opt-background',
      'type'  => 'background',
      'title' => 'Background',
    ),

    array(
      'type'    => 'notice',
      'style'   => 'success',
      'content' => 'A <strong>notice</strong> field with <strong>success</strong> style.',
    ),

    array(
      'id'    => 'opt-icon',
      'type'  => 'icon',
      'title' => 'Icon',
    ),

    array(
      'id'    => 'opt-alt-text',
      'type'  => 'text',
      'title' => 'Text',
    ),

    array(
      'id'         => 'opt-alt-textarea',
      'type'       => 'textarea',
      'title'      => 'Textarea',
      'subtitle'   => 'A textarea with shortcoder.',
      'shortcoder' => 'csf_demo_shortcodes',
    ),

  )
) );

//
// Basic Fields
//
CSF::createSection( $prefix, array(
  'id'    => 'basic_fields',
  'title' => 'Basic Fields',
  'icon'  => 'fas fa-plus-circle',
) );

//
// Field: text
//
CSF::createSection( $prefix, array(
  'parent'      => 'basic_fields',
  'title'       => 'Top Bar Setting',
  'icon'        => 'far fa-square',
  'description' => 'Visit documentation for more details on this field: <a href="http://codestarframework.com/documentation/#/fields?id=text" target="_blank">Field: text</a>',
  'fields'      => array(

    array(
      'id'    => 'cell',
      'type'  => 'text',
      'title' => 'Enter Cell Number',
    ),

    array(
      'id'    => 'email',
      'type'  => 'text',
      'title' => 'Enter Email',
    ),

    array(
      'id'    => 'fb',
      'type'  => 'text',
      'title' => 'Enter Facebook Link',
    ),

    array(
      'id'    => 'twi',
      'type'  => 'text',
      'title' => 'Enter Twi Link',
    ),

    array(
      'id'    => 'inst',
      'type'  => 'text',
      'title' => 'Enter inst Link',
    ),


    array(
      'id'    => 'linkdin',
      'type'  => 'text',
      'title' => 'Enter linkdin Link',
    ),

    array(
      'id'    => 'youtube',
      'type'  => 'text',
      'title' => 'Enter Youtube Link',
    ),

    array(
      'id'    => 'tag',
      'type'  => 'text',
      'title' => 'Enter Logo Text',
    ),



  )
) );

//
// Field: textarea
//
CSF::createSection( $prefix, array(
  'parent'      => 'basic_fields',
  'title'       => 'Hero Section',
  'icon'        => 'far fa-square',
  'fields'      => array(

   

    array(
      'id'      => 'hero-title',
      'type'    => 'text',
      'title'   => 'Enter Heor Title',
      'default' => 'WELCOME TO MEDINOVA',
    ),

    array(
      'id'      => 'hero-slogan',
      'type'    => 'textarea',
      'title'   => 'Enter Heor Slogan',
      'default' => 'Best Healthcare Solution In Your City',
    ),

    array(
      'id'      => 'button-one-text',
      'type'    => 'text',
      'title'   => 'Enter Button One Text',
      'default' => 'Find Doctor',
    ),

    array(
      'id'      => 'button-one-link',
      'type'    => 'text',
      'title'   => 'Enter Button One Link',
      'default' => '#',
    ),

    array(
      'id'      => 'button-two-text',
      'type'    => 'text',
      'title'   => 'Enter Button two Text',
      'default' => 'Appointment',
    ),

    array(
      'id'      => 'button-two-link',
      'type'    => 'text',
      'title'   => 'Enter Button two Link',
      'default' => '#',
    ),


    array(
      'id'      => 'hero-image',
      'type'    => 'media',
      'title'   => 'UPload Hero Image',
      
    ),


  )
) );


CSF::createSection( $prefix, array(
  'parent'      => 'basic_fields',
  'title'       => 'About Section',
  'icon'        => 'far fa-square',
  'fields'      => array(

   

    array(
      'id'      => 'about-title',
      'type'    => 'text',
      'title'   => 'Enter About Title',
      'default' => 'WELCOME TO MEDINOVA',
    ),

    array(
      'id'      => 'hero-short-des',
      'type'    => 'textarea',
      'title'   => 'Enter Heor Slogan',
      'default' => 'Best Medical Care For Yourself and Your Family',
    ),

    array(
      'id'      => 'hero-long-des',
      'type'    => 'textarea',
      'title'   => 'Enter Heor long',
      'default' => 'Tempor erat elitr at rebum at at clita aliquyam consetetur. Diam dolor diam ipsum et, tempor voluptua sit consetetur sit. Aliquyam diam amet diam et eos sadipscing labore. Clita erat ipsum et lorem et sit, sed stet no labore lorem sit. Sanctus clita duo justo et tempor consetetur takimata eirmod, dolores takimata consetetur invidunt magna dolores aliquyam dolores dolore. Amet erat amet et magna',
    ),

    array(
      'id'      => 'one-service-icon',
      'type'    => 'text',
      'title'   => ' service One icon',
      'default' => 'fa fa-3x fa-user-md',
    ),

    array(
      'id'      => 'one-service-type',
      'type'    => 'text',
      'title'   => ' service One Type',
      'default' => 'Free',
    ),

    array(
      'id'      => 'one-service-category',
      'type'    => 'text',
      'title'   => ' service One Category',
      'default' => 'Ambulance',
    ),


    array(
      'id'      => 'two-service-icon',
      'type'    => 'text',
      'title'   => ' service two icon',
      'default' => 'fa fa-3x fa-procedures',
    ),

    array(
      'id'      => 'two-service-type',
      'type'    => 'text',
      'title'   => ' service two Type',
      'default' => 'Emergency',
    ),

    array(
      'id'      => 'two-service-category',
      'type'    => 'text',
      'title'   => ' service two Category',
      'default' => 'Services',
    ),
   

    array(
      'id'      => 'three-service-icon',
      'type'    => 'text',
      'title'   => ' service three icon',
      'default' => 'fa fa-3x fa-microscope',
    ),

    array(
      'id'      => 'three-service-type',
      'type'    => 'text',
      'title'   => ' service three Type',
      'default' => 'Accurate',
    ),

    array(
      'id'      => 'three-service-category',
      'type'    => 'text',
      'title'   => ' service three Category',
      'default' => 'Testing',
    ),


    array(
      'id'      => 'four-service-icon',
      'type'    => 'text',
      'title'   => ' service four icon',
      'default' => 'fa fa-3x fa-ambulance',
    ),

    array(
      'id'      => 'four-service-type',
      'type'    => 'text',
      'title'   => ' service four Type',
      'default' => 'Free',
    ),

    array(
      'id'      => 'four-service-category',
      'type'    => 'text',
      'title'   => 'service four Category',
      'default' => 'Ambulance',
    ),


    array(
      'id'      => 'about-image',
      'type'    => 'media',
      'title'   => 'UPload About Image',
      
    ),


  )
) );





