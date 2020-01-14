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
 * @param $password * user login input data
 * @return bool
 */

function checklogin($password)
{
    $current_file = file_get_contents("Modele/userDatabase.json");
    $parsed = json_decode($current_file);
    foreach ($parsed as $item => $value) {
        if ($value->User == @$password['inputUsername']) {
            if (@$password['pwd'] == $value->Password && @$password['inputUsername'] == $value->User)
                return true;
            else
                return false;

        }
    }




}

/**
 * function for create a user and write to json file the user data
 * @param $userData /*user register data name + password
 */
function creatUser($userData)
{
    $current_file = file_get_contents('Modele/userDatabase.json');
    $array_data = json_decode($current_file, true);
    $association = array(
        'User' => $userData['createUser'],
        'Password' => $userData['createpwd']

    );
    $array_data[] = $association;
    $inputed_data = json_encode($array_data);
    file_put_contents('Modele/userDatabase.json', $inputed_data);
}
