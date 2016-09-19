<?php
error_reporting(E_ALL);

require_once(__DIR__.'/lib/php/lib/Thrift/ClassLoader/ThriftClassLoader.php');
require_once('CalculateReasonableUpside.php');
require_once('Types.php');

use Thrift\ClassLoader\ThriftClassLoader;
use Thrift\Protocol\TBinaryProtocol;
use Thrift\Transport\TSocket;
use Thrift\Transport\THttpClient;
use Thrift\Transport\TBufferedTransport;
use Thrift\Exception\TException;

$GEN_DIR = realpath(dirname(__FILE__));

$loader = new ThriftClassLoader();
$loader->registerNamespace('Thrift', __DIR__ . '/lib/php/lib');
$loader->registerDefinition('CalculateReasonableUpside', $GEN_DIR);
$loader->register();

try {

  $array_of_ints = array("Volvo", "BMW", "Toyota");

  $socket	= new TSocket('localhost', 9090);
  $transport	= new TBufferedTransport($socket, 1024, 1024);
  $protocol	= new TBinaryProtocol($transport);
  $client	= new CalculateReasonableUpsideClient($protocol);
  $transport->open();

  echo $client->calculate($array_of_ints);
  echo "\n";

  $transport->close();
} catch (TException $tx) {
  print 'TException: '.$tx->getMessage()."\n";
}
?>
