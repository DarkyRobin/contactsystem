<?php
    // include database and object files
    require_once('inc/database.php');
    require_once('models/contacts_model.php');

    $result = array();
    $json = json_decode(file_get_contents("php://input"))->data;

    if(!empty($json)){
        $f = $json->f;
        $result = $f($json);
        // $result = $json;
    }

    function addContact($data){
        $res = array();
        $val=array();
        $val['name'] = $data->name;
        $val['emailaddress'] = $data->emailaddress;
        $val['password'] = $data->password;

        $contactsmodel = new ContactsModel;
        $res['res'] = $contactsmodel->addContact($val);

        return $res;
    }

    // required headers
    header("Access-Control-Allow-Origin: *");
    header("Content-Type: application/json; charset=UTF-8");
    header("Expires: 0");
    header("Cache-Control: no-store, no-cache, must-revalidate");
    header("Cache-Control: post-check=0, pre-check=0", false);
    header("Pragma: no-cache");
    echo json_encode($result);
?>