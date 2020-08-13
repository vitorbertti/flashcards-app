<?php

namespace App\Http\Controllers;

use App\Collection;
use Exception;
use Illuminate\Http\Request;

class CollectionController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resource = Collection::get();

        return view('collections', ['collections' => $resource]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $collection = new Collection();
        $collection->name = $request->name;

        try {
            $collection->save();
        } catch (Exception $e) {
            return response()->json($e, 404);
        }

        return response()->json($collection);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resource = Collection::find($id);

        if (is_null($resource)) {
            return response()->json(['Error' => 'Collection not found'], 404);
        }

        return response()->json($resource);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $resource = Collection::find($id);

        if (is_null($resource)) {
            return response()->json(['Error' => 'Collection not found'], 404);
        }

        $resource->fill($request->all());
        $resource->save();

        return response()->json($resource);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $quantity = Collection::destroy($id);

        if ($quantity === 0) {
            return response()->json(['Error' => 'Collection not found'], 404);
        }

        return response()->json(['Message' => 'The collection was deleted.'], 200);
    }
}
