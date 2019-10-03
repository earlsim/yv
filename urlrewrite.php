<?php
$arUrlRewrite=array (
  1 => 
  array (
    'CONDITION' => '#^/seminary/([a-zA-Z0-9_\\-]+)#',
    'RULE' => 'CODE=$1',
    'ID' => '',
    'PATH' => '/seminary/detail.php',
    'SORT' => 100,
  ),
  0 => 
  array (
    'CONDITION' => '#^/rest/#',
    'RULE' => '',
    'ID' => NULL,
    'PATH' => '/bitrix/services/rest/index.php',
    'SORT' => 100,
  ),
 2 =>
     array (
         'CONDITION' => '#^/internship/([a-zA-Z0-9_\\-]+)#',
         'RULE' => 'CODE=$1',
         'ID' => '',
         'PATH' => '/internship/detail.php',
         'SORT' => 100,
     ),
    3 =>
        array (
            'CONDITION' => '#^/locations/([a-zA-Z0-9_\\-]+)#',
            'RULE' => 'CODE=$1',
            'ID' => '',
            'PATH' => '/locations/detail.php',
            'SORT' => 100,
        ),
);
