<?php defined("SYSPATH") or die("No direct script access.");

$config['default'] = array(
  'benchmark'	=> false,
  'persistent'	=> false,
  'connection'	=> array(
    'type'	=> 'mysqli',
    'user'	=> 'gallery3hect@gallery3hectmysql',
    'pass'	=> 'cn7a#a-1',
    'host'	=> 'gallery3hectmysql.mysql.database.azure.com',
    'port'	=> false,
    'socket'	=> false,
    'database'	=> 'gallery3',
    'params'	=> null,
  ),
  'character_set' => 'utf8',
  'table_prefix'  => 'demo6',
  'object'        => true,
  'cache'         => false,
  'escape'        => true
);
