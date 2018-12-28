<?php
include_once(dirname( __FILE__ ) .'/vendor/autoload.php');
\PMVC\Load::plug([
  'asset' => [
    'assetsFolder'=> dirname( __FILE__). '/react/bebit/assets',
    'webpackStateFile'=> 'stats.json', 
  ],
  'debug'=>null,
  'debug_console'=>['isReady' => false]
], [
  dirname( __FILE__ ) .'/vendor/pmvc-plugin'
]);

