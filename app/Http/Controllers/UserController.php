<?php

namespace App\Http\Controllers;

use Illuminate\Routing\Controller as BaseController;
use Illuminate\Http\Request;

use Symfony\Component\Process\Process;
use Symfony\Component\Process\Exception\ProcessFailedException;

use App\Models\LeonWorldsModel;

class UserController extends BaseController
{
    function index(){

        return view('header').view('users').view('footer');
    }

    function getUsers(){

        $leonWorldsModel = new LeonWorldsModel();
        $users = $leonWorldsModel->getUsers();
        $objects = json_decode(json_encode($users->toArray(),true)); // create a proper array
        foreach($objects as &$object){
            unset($object->_id);
        }
        echo json_encode(array('success'=>true, 'items'=>$objects));
    }

    function addUser(){

        $name = request()->post('name');
        $email = request()->post('email');

        $leonWorldsModel = new LeonWorldsModel();
        $result = $leonWorldsModel->addUser($name, $email);

        if($result->getInsertedCount()==1){

            $users = $leonWorldsModel->getUsers();
            $objects = json_decode(json_encode($users->toArray(),true)); // create a proper array
            foreach($objects as &$object){
                unset($object->_id);
            }
            echo json_encode(array('success'=>true, 'message'=>'User is added!', 'users'=>$objects));
        } else {
            echo json_encode(array('success'=>false, 'message'=>'Could not add user.'));
        }
    }

    function addMailChimpUser(){

        $email = request()->post('email');

        $request = 'curl -X PUT \'https://'.config('app.mailchimp_id').'.api.mailchimp.com/3.0/lists/'.config('app.mailchimp_audience_id').'/members/'.md5($email).'?skip_merge_validation=TRUE\' --user "anystring:'.config('app.mailchimp_code').'" -d \'{"email_address":"'.$email.'","status_if_new":"subscribed","email_type":"text","status":"subscribed","merge_fields":{},"interests":{},"language":"","vip":false,"location":{"latitude":0,"longitude":0},"marketing_permissions":[],"ip_signup":"","timestamp_signup":"","ip_opt":"","timestamp_opt":""}\'';
        $process = Process::fromShellCommandline($request);
        $process->run();

        // executes after the command finishes
        if (!$process->isSuccessful()) {
            // throw new ProcessFailedException($process);
            echo json_encode(array('success'=>false, 'message'=>'Problem with CURL request.'));
        } else {

            $output = $process->getOutput();
            $output_array = json_decode($output, true);

            if($output_array['status']=='subscribed'){
                echo json_encode(array('success'=>true, 'message'=>'Added to MailChimp!'));
            } else {
                echo json_encode(array('success'=>false, 'message'=>'Could not add to MailChimp!'));
            }
        }
    }

    function deleteUser(){

        $name = request()->post('name');

        $leonWorldsModel = new LeonWorldsModel();
        $result = $leonWorldsModel->deleteUser($name);

        if($result->getDeletedCount()>0){
            $users = $leonWorldsModel->getUsers();
            $objects = json_decode(json_encode($users->toArray(),true)); // create a proper array
            foreach($objects as &$object){
                unset($object->_id);
            }
            echo json_encode(array('success'=>true, 'message'=>'User is deleted!', 'users'=>$objects));
        } else {
            echo json_encode(array('success'=>false, 'message'=>'Could not add user.'));
        }
    }

}
