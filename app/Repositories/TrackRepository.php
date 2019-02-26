<?php

namespace App\Repositories;

use App\Repositories\Interfaces\TrackInterface;
use App\Models\Track; // This can be replaced with different data sources

class TrackRepository implements TrackInterface {
 
    /**
     * Undocumented function
     *
     * @param array $columns
     * @return array
     */
    public function all($columns = array('*'))
    {
        $tracks = Track::all();

        if ($columns == ['*']) {
            return $tracks->toArray();
        }
        return $tracks->pluck($columns)->toArray();
    }
 
    public function create(array $data) 
    {
        $track = Track::create($data);
        $track->save();
        return $track->toArray();
    }
 
    public function update(array $data, $id) 
    {
        $track = Track::find($id)
            ->update($data);
        
        return $track;
    }

    public function show($id) 
    {
        return Track::find($id);
    }
 
    public function delete($id) 
    {
        return Track::find($id)->delete();
    }
}