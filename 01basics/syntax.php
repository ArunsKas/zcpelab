
<?php
  /* Standard Tags */
  echo "Standard Tags<br>";
?>

<!--
	PHP also allows for short open tags <? and ?> 
	(which are discouraged because they are only available 
	if enabled with short_open_tag php.ini configuration file directive,
	or if PHP was configured with the --enable-short-tags option.
		-->
<?php
	// Short Tags
	$variable = 'Short Tags<br>';
?>
<?= $variable ?>


<script language="php">
  //Script Tags
  echo "Script Tags<br>";
</script>

<!--
  ASP Tags don't work with standard php configuration.
-->
<%
  echo "works4";
%>



<?php
/*
* Comments
*/

  echo 'This is a test'; // This is a one-line c++ style comment
  /* This is a multi line comment 
     yet another line of comment */
  echo 'This is yet another test';
  echo 'One Final Test'; # This is a one-line shell-style comment
?>
<h1>This is an <?php // echo 'simple';?> example</h1>
<p>The header above will say 'This is an  example'.</p>


