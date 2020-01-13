<?php
/**
 * Site - model.php
 *version : ${VERSION}
 *Initial version by: Christnovie.KIALA-BI
 *Initial version created on : 06.01.2020
 *Time : 15:02
 */


/**
 * function for check a validity of password
 * @param $password
 * @return bool
 */

function checklogin($password)
{
    if (@$password['pwd'] == 1234)
        return true;
    else
        return false;

}
