<?php
try
{
  $dbUrl = getenv('DATABASE_URL');

  $dbOpts = parse_url($dbUrl);

  $dbHost = $dbOpts["ec2-54-243-216-33.compute-1.amazonaws.com"];
  $dbPort = $dbOpts["5432"];
  $dbUser = $dbOpts["user"];
  $dbPassword = $dbOpts["00d8c7e4f8d8f93c5051a7359137c7fc6a671584eb5f6e600a4750a1189822bb"];
  $dbName = ltrim($dbOpts["path"],'/');

  $db = new PDO("pgsql:host=$dbHost;port=$dbPort;dbname=$dbName", $dbUser, $dbPassword);

  $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
}
catch (PDOException $ex)
{
  echo 'Error!: ' . $ex->getMessage();
  die();
}
