<?php

namespace App\Http\Controllers;

use App\Card;
use Exception;
use Illuminate\Http\Request;

class CardController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $resource = Card::get();
        return response()->json($resource);
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
        $card = new Card();
        $card->question = $request->question;
        $card->answer = $request->answer;
        $card->collection_id = $request->collection_id;

        try {
            $card->save();
        } catch (Exception $e) {
            return response()->json($e, 404);
        }

        return response()->json($card);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $resource = Card::find($id);

        if (is_null($resource)) {
            return response()->json(['Error' => 'Card not found'], 404);
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
        $resource = Card::find($id);

        if (is_null($resource)) {
            return response()->json(['Error' => 'Card not found'], 404);
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
        $quantity = Card::destroy($id);

        if ($quantity === 0) {
            return response()->json(['Error' => 'Card not found'], 404);
        }

        return response()->json(['Message' => 'The card was deleted.'], 200);
    }
}
