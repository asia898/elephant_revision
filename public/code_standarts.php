<?php
    function isShopOpen(string $day): bool {
        if(empty($day)){
            return false;
        }

        $openingDays = ['friday', 'saturday', 'sunday'];

        return(in_array($day, $openingDays, true));
    }

    print_r(isShopOpen('friday'));
?>