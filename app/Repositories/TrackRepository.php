<?php

namespace App\Repositories;

use App\Repositories\Interfaces\TrackInterface;
use App\Models\Track;

class TrackRepository implements TrackInterface {
 
    public function all($columns = array('*'))
    {

    }
 
    public function create(array $data) {

        return $data;

    }
 
    public function update(array $data, $id) {


    }

    public function show($id) {


    }
 
    public function delete($id) {


    }
}