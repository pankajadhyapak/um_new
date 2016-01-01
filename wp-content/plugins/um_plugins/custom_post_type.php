<?php
/*
Plugin Name:Uttaradimath Plugins
*/

require 'cpt.php';
require 'custom.php';

$parampara = new JW_Post_Type('Parampara',array(
  'supports' => array('title','editor','thumbnail', 'comments'))

  );

$parampara->add_meta_box('Swamiji Information', array(
  'Sloka ( Sanskrit )' => 'textarea',
  'Sloka ( English )' => 'textarea',
  'Poorvasharama Name' => 'text',
  'Ashrama Name' => 'text',
  'Preceptor' =>'text',
  'Years in Pitha' => 'text',
  'Brindavana At' => 'text',
  'Aradhane' => 'text',
  'Works' => 'textarea',
  'Sloka Audio File' => 'file'
));
$parampara->add_meta_box('Contact Information', array(
    'Details' => 'textarea',
    'Map' =>'textarea'

));