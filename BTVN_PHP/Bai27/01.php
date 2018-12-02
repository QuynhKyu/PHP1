<?php
/**
 * Created by PhpStorm.
 * User: MyPC
 * Date: 29/11/2018
 * Time: 1:14 CH
 */
$course = array("PHP", "Joomla", "Zend", "Jquery");

echo "<pre>";
print_r($course);
echo "</pre>";

echo "Current: " .current($course). "<br />"; // PHP
echo "Next: " .next($course). "<br />"; // Joomla
echo "Current: " .Current($course). "<br />"; // Joomla
echo "Next: " .Next($course). "<br />"; // Zend
echo "Previous: " .prev($course). "<br />"; // Joomla
echo "Reset: " .Reset($course). "<br />"; // PHP
echo "End: " .end($course). "<br />"; // Jquery

