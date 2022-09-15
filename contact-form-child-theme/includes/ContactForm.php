<?php

// 3. Open up the  ContactForm.php file in the child theme and replace this line (at the very top): 

class ET_Builder_Module_Contact_Form extends ET_Builder_Module_Type_WithSpamProtection

// with

class Custom_ET_Builder_Module_Contact_Form extends ET_Builder_Module_Type_WithSpamProtection

// Replace:
  $this->vb_support = 'on';   
 
// with

$this->vb_support = 'off';

// Remove this line from the bottom:  
new ET_Builder_Module_Contact_Form;  


// https://www.elegantthemes.com/forum/viewtopic.php?f=187&t=902670&hilit=contact+from+email+address&p=4902065#p4902065
// change the line on 626 from

$headers[] = "From: \"{$contact_name}\" <mail@{$http_host}>";

// to 
$headers[] = "From: \"{$contact_name}\" <whatever@{$http_host}>";
?>