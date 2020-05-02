<?php

/**
 * Highest and Lowest
 *
 * @description return the highest and lowest number
 *              in format of "$high $low" string.
 *
 * @param string $numbers string of space separated numbers
 * @return string
 *
 * @author akerayoui
 */
function highAndLow( $numbers )
{

    // explode string as array of numbers
    $explode = explode( " ", $numbers );

    // return the desired string value
    return max( $explode ) . " " . min( $explode );
}