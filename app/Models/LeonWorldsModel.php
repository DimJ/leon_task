<?php

namespace App\Models;

use Illuminate\Foundation\Auth\User as Authenticatable;

use MongoDB\Client;

class LeonWorldsModel extends Authenticatable
{

    public function getUsers(){

        $client = new Client(config('app.mongo_uri'));
        $collection = $client->sample_mflix->leon_users;
        $filter = ['name' => 'John'];
        return $collection->find();
    }

    public function addUser($name, $email){

        $client = new Client(config('app.mongo_uri'));
        $collection = $client->sample_mflix->leon_users;
        $result = $collection->insertOne(array('name'=>$name, 'email'=>$email));
        return $result;
    }

    public function deleteUser($name){

        $client = new Client(config('app.mongo_uri'));
        $collection = $client->sample_mflix->leon_users;
        $filter = array('name' => $name);
        $result = $collection->deleteOne($filter);
        return $result;
    }

}
