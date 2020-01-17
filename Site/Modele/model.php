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
        if ($value->User == @$password['inputUsername'] || $value->Email == @$password['inputUsername']) {
            if (@$password['pwd'] == $value->Password && (@$password['inputUsername'] == $value->User || @$password['inputUsername'] == $value->Email))
                return true;
            else
                return false;

        }
    }
}

/**
 *function for reading a json file of snow database
 */
function snowsDatabase()
{
    $current_file = file_get_contents("Modele/snowData.json");
    $parsed_snowData = json_decode($current_file);
    $array_data[] = $parsed_snowData;
    return $array_data;
}

/**
 * function for create a user and write to json file the user data
 * @param $userData /*user register data name + password
 * @return bool
 */
function creatUser($userData)
{



            $current_file = file_get_contents('Modele/userDatabase.json');
            $array_data = json_decode($current_file, true);
            $association = array(
                'User' => $userData['createUser'],
                'Password' => $userData['createpwd'],
                'Email' => $userData['createEmail']

            );
            $array_data[] = $association;
            $inputed_data = json_encode($array_data);
            if (file_put_contents('Modele/userDatabase.json', $inputed_data)) {
                return true;
            } else {
                return false;
            }


}


