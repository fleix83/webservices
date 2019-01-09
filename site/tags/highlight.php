<?php

kirbytext::$tags['highlight'] = array(
  'attr' => array(
    'class'
  ),
  'html' => function($tag) {


    $class = $tag->attr('class');
    $text = $tag->attr('highlight');


    $html = '<span class="' . $class . '">' . $text . '</span>';
    return $html;

  }
);
