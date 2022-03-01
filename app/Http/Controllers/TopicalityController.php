<?php

namespace App\Http\Controllers;

use App\Http\Resources\Topicality as ResourcesTopicality;
use App\Models\Topicality;
use Illuminate\Http\Request;

class TopicalityController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $topicatliies = Topicality::orderByDesc('created_at')->get();
        //return $topicatliies->toJson(JSON_PRETTY_PRINT);
        return ResourcesTopicality::collection($topicatliies);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        if (Topicality::create($request->all()))
        {
            return response()->json([
                'success' => 'Actualité créée avec succès'
            ], 200);

        } else {
            return response()->json([
                'success' => 'error'
            ], 400);
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function show(Topicality $topicality)
    {
        if ($topicality)
        {
            return  new ResourcesTopicality($topicality);

        } else {
            return response()->json([
                'success' => 'error',
                'message' => 'Objet non trouvé dans la bdd'
            ], 404);
        }
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Topicality $topicality)
    {
        if ($topicality->update($request->all()))
        {
            return response()->json([
                'success' => 'Actualité modifiée avec succès'
            ], 200);

        } else {
            return response()->json([
                'success' => 'error'
            ], 400);
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Topicality  $topicality
     * @return \Illuminate\Http\Response
     */
    public function destroy(Topicality $topicality)
    {
        if ($topicality->delete()) {
            return response()->json([
                'success' => 'Actualité supprimée avec succès'
            ], 200);
        }
    }
}
