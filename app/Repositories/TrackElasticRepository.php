<?php

namespace App\Repositories;

use App\Repositories\Interfaces\TrackInterface;
use App\Models\TrackElastic as Track; // This can be replaced with different data sources

class TrackElasticRepository implements TrackInterface {
 
    /**
     * Undocumented function
     *
     * @param array $columns
     * @return void
     */
    public function all($columns = array('*'))
    {

    }
 
    public function create(array $data) {

        Track::
        return $data;

    }
 
    public function update(array $data, $id) {


    }

    public function show($id) {


    }
 
    public function delete($id) {


    }
}