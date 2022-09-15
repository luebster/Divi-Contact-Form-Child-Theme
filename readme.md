General instructions


If you want to change the "From" email address to the customer's email address at any cost then it will need customization in the PHP code.

You can customize some code and change it from an address in the contact form. So that you will be receiving email from the email address of the customer who is contacting you.

To change the email address you are receiving email from:
You can do this by editing the ContactForm.php file inside the Divi theme at Divi\includes\builder\module
And check this article on how to customize the contact form properly.
Moving Contact Form Module To Child Theme
You'll learn how to move the default Divi Contact Form Module…

After you have done the basic move then please search for the following line
$headers[] = "From: \"{$contact_name}\" <mail@{$http_host}>";
And replace it with
$headers[] = "From: \"{$contact_name}\" <{$contact_email}>";

Thus you will be receiving emails from the customer's email address.

The other option would be by using 3rd party plugins, you can try checking this:
https://wordpress.org/plugins/wp-change-default-from-email/

The following article should help as well:
https://www.wpbeginner.com/plugins/how-to-change-sender-name-in-outgoing-wordpress-email/
Let me know if this helps 😄


Child Theme guide
https://www.elegantthemes.com/blog/divi-resources/divi-child-theme

Moving contact form module to child theme
https://help.elegantthemes.com/en/articles/2865589-moving-contact-form-module-to-child-theme