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
    /** @var  $current_file * transform data of json file to variable php */
    $current_file = file_get_contents("Modele/userDatabase.json");
    /** affected @var $parsed * with decoding of content of @var $current_file  */
    $parsed = json_decode($current_file);
    /**
     * @var  $item *index element database
     * @var  $value *element for index
     * through all json file for  verified and determine if the login is correct
     */
    foreach ($parsed as $item => $value) {
        if ($value->User == @$password['inputUsername'] || $value->Email == @$password['inputUsername']) {
            if (@$password['pwd'] == $value->Password && (@$password['inputUsername'] == $value->User || @$password['inputUsername'] == $value->Email)) {


                return true;
            }else
                return false;

        }
    }
}

/**
 *function for reading a json file of snow database
 */
function snowsDatabase()
{
    /** @var  $current_file * transform data of json file to variable php */
    $current_file = file_get_contents("Modele/snowData.json");
    /** affected @var $parsed_snowData * with decoding of content of @var $current_file  */
    $parsed_snowData = json_decode($current_file);
    /** @var $array_data * this array content element of snowDatabase  */
    $array_data[] = $parsed_snowData;
    return $array_data;/** return a snow element  */
}

/**
 * function for create a user and write to json file the user data
 * @param $userData /*user register data name + password
 * @return bool
*/
function creatUser($userData)
{


    /** @var  $current_file * transform data of json file to variable php */
    $current_file = file_get_contents('Modele/userDatabase.json');
    /** affected @var $array_data * with decoding of content of @var $current_file  */
    $array_data = json_decode($current_file, true);
    /** @var  $association * this  array synchronizes a data inputed by user with json file  */
    $association = array(
        'User' => $userData['createUser'],
        'Password' => $userData['createpwd'],
        'Email' => $userData['createEmail'],
        'Admin'=> false

    );
    $array_data[] = $association;
    /** @var  $inputed_data * transform variable content to json file */
    $inputed_data = json_encode($array_data);
    /**verified if it can write into the json file */
    if (file_put_contents('Modele/userDatabase.json', $inputed_data)) {
        return true;
    } else {
        return false;
    }


}

/**
 * function for create a item session write to json file
 * @param $userData /*user register data name + password
 * @return bool
 */
function createItemSession($userData)
{


    /** @var  $current_file * transform data of json file to variable php */
    $current_file = file_get_contents('Modele/sessionItem.json');
    /** affected @var $array_data * with decoding of content of @var $current_file  */
    $array_data = json_decode($current_file, true);
    /** @var  $association * this  array synchronizes a data inputed by user with json file  */
    $association = array(
        'Session' => $userData['createUser'],
        'CreateItem'=> []

    );
    $array_data[] = $association;
    /** @var  $inputed_data * transform variable content to json file */
    $inputed_data = json_encode($array_data);
    /**verified if it can write into the json file */
    if (file_put_contents('Modele/sessionItem.json', $inputed_data)) {
        return true;
    } else {
        return false;
    }


}

/**
 * function for add item to json file
 * @param $element
 */
function addItem($element){
    /** @var  $current_file * transform data of json file to variable php */
    $current_file = file_get_contents("Modele/snowData.json");
    /** affected @var $parsed * with decoding of content of @var $current_file  */
    $parsed = json_decode($current_file);
    foreach ($parsed as $item=>$value){
        if($value->name == $element) {
            $current_file = file_get_contents("Modele/sessionItem.json");
            /** affected @var $parsed * with decoding of content of @var $current_file  */
            $parsed_Session = json_decode($current_file);

            foreach ($parsed_Session as $items => $values){
                if( $values->Session == $_SESSION['login']){
                    $values->Items = $values->Items + array( $element)
                    ;
                    $inputdata = json_encode($parsed_Session);
                    file_put_contents("Modele/sessionItem.json",$inputdata);

                }
            }


        }
    }





}


