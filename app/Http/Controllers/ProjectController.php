<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Project;
use App\Http\Request\ProjectRequest;
use App\Models\User;
use Carbon\Carbon;
use Auth;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Response;

class ProjectController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::user();
        $projects = Auth::user()->projects()->orderBy('created_at')->get();
        $currenttime = Carbon::now()->format('h:i a');
        $today = Carbon::now()->formatlocalized('%a %d %b %y');
        return view('pages.projects.home', compact('projects', 'currenttime', 'today', 'user'));
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
    public function store(ProjectRequest $request)
    {
        if($request->ajax()){

            $slug = Str::slug($request->name);

            Auth::user()->projects()->create([
                'name' => $request->name,
                'slug' => $slug,
                'desc' => $request->desc,
                'duedate' => $request->duedate
            ]);

            $response = [
                'msg' => 'Awesome! Close window'
            ];

            return Response::json($response);

        }
        else
        {

            $slug = Str::slug($request->name);

            Auth::user()->projects()->create([
                'name' => $request->name,
                'slug' => $slug,
                'desc' => $request->desc,
                'duedate' => $request->duedate
            ]);


            return redirect('projects')->with('success','Project'.ucwords($projects->name).'has been successfully created');

        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
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
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
