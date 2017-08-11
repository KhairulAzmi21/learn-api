<?php

namespace App\Http\Controllers;

use App\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        /*  1. All is bad
        2. No way to attach meta data
        3. Linking db structure to API output
        4. no way to signal response/headers code
         */
        $lessons = Lesson::orderBy('title', 'asc')->get();

        return response()->json([
            'data' => $this->transformCollection($lessons),
        ], 200);
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
        info($request);
        $lesson = Lesson::create([
            'title' => $request->title,
            'body' => $request->body,
            'image' => $request->image,
            'some_bool' => $request->some_bool
        ]);

        if (!$lesson) {
            return response()->json([
                'message' => 'Failed To Insert Data',
            ], 404);
        }
        return response()->json([
            'message' => 'Data Successfully Inserted',
        ], 200);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $lesson = Lesson::find($id);

        if (!$lesson) {
            return response()->json([
                'message' => 'Lesson does not exist',
            ], 404);
        }

        return response()->json([
            'data' => $this->transform($lesson),
        ], 200);
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
        info("request is ".$request. " id is ".$id);
        $lesson = Lesson::find($id);

        $lesson->title = $request->title;
        $lesson->body = $request->body;
        $lesson->image = $request->image;
        $lesson->some_bool = $request->some_bool;

        $lesson->save();
        return response()->json([
                'message' => "Successfully updated",
            ], 200);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Lesson::destroy($id);

        return response()->json([
            'message' => "Successfully deleted",
        ], 200);
    }

    public function transformCollection($lessons)
    {
        return array_map([$this,'transform'], $lessons->toArray());
    }

    private function transform($lesson)
    {
        return [
            'id' => $lesson['id'],
            'title'  => $lesson['title'],
            'body'   => $lesson['body'],
            'active' => (boolean)$lesson['some_bool'],
            'image'  => $lesson['image'],
        ];
    }
}
