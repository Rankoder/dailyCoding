<!--Implement String#ipv4_address?, which should return true if given object is
an IPv4 address - four numbers (0-255) separated by dots.

It should only accept addresses in canonical representation, so no leading 0s,
spaces etc.-->
<?php
function ipv4_address($address) {
   if(filter_var($address, FILTER_VALIDATE_IP)) {
        return true;
    }
}

