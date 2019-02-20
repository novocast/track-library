<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Api\Controller;
use App\Http\Requests\TrackStoreRequest;

use App\Repositories\Interfaces\TrackInterface as Track;

class TrackController extends Controller
{
    private $repository;

    public function __construct(Track $repository)
    {
        $this->repository = $repository;
    }

    /**
     * Store a Track
     */
    public function store(TrackStoreRequest $request)
    {
        $track = $this->repository->create($request->all());
        
        return $this->response($track, 201);

    }
}
