<?php

/**
 * Undocumented function
 *
 * @param string $action
 * @return void
 */
function generate_form($action = '')
{
?>
    <form action="<?= $action; ?>" method="POST">
        <input type="text" name="mailTo" value="john.rdna01@gmail.com" style="padding: 4px; margin-bottom: 10px;" placeholder="To">
        <br>
        <input type="text" name="subject" value="Subject is here" style="padding: 4px; margin-bottom: 10px;" placeholder="Subject">
        <br>
        <textarea name="body" id="bodyTestarea" cols="50" rows="8">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Officia veritatis officiis fuga culpa quasi ducimus pariatur! Error qui asperiores ipsa praesentium dignissimos hic minima et, vel voluptatum maiores amet veniam.</textarea>
        <br>
        <button name="submit" style="padding: 6px 15px; margin-top: 12px">Send an Email</button>
    </form>
<?php
}
