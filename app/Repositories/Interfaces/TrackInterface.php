<?php

namespace App\Repositories\Interfaces;

interface TrackInterface {
 
    public function all($columns = array('*'));
 
    public function create(array $data);
 
    public function update(array $data, $id);

    public function show($id);
 
    public function delete($id);
}

?>