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
    $current_file = file_get_contents("Modele/userDatabase.json");
    $parsed = json_decode($current_file);
    foreach ($parsed as $item => $val) {
        if ($parsed[$val]->User == @$password['inputUsername']) {
            $i = $val;
        }
    }


    if (@$password['pwd'] == $parsed[$i]->Password && @$password['inputUsername'] == $parsed[$i]->User)
        return true;
    else
        return false;


}

/**
 * function for create a user and write to json file the user data
 * @param $userData
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
