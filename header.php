<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

		<?php wp_head(); ?>
	</head>

	<body>
    <header>
      <?php global $row_number; ?>
      <?php $row_number = '1'; ?>
      <?php include(TEMPLATEPATH.'/header-row.php'); ?>
      
      <?php $row_number = '2'; ?>
      <?php include(TEMPLATEPATH.'/header-row.php'); ?>
      
      <?php $row_number = '3'; ?>
      <?php include(TEMPLATEPATH.'/header-row.php'); ?>
    </header>