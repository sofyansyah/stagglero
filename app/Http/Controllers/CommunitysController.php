<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests;
use App\Community;
use Auth;
class CommunitysController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Response
     */
    public function index()
    {
        $communitys = Community::join('users', 'communities.user_id', '=', 'users.id')->select('communities.*','users.username')->get();
        return view ('communitys.feeds', compact('communitys'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        return view('communitys.create');
    }
    /**
     * Store a newly created resource in storage.
     *
     * @return Response
     */
    public function store(Request $request)
    {
     // $community = new Community;
     // $community->user_id = Auth::user()->id;
     // $community->title= $request->title;
     // $community->description= $request->description;
     // $community->tags= $request->tags; 
     // $community->location= $request->location; 
     // $community->image= $request->image;
     // $community->featured= $request->featured;  
     // $community->save();
        Community::create ($request->all());
        // Community::create ([
        //     'user_id' =>Auth::user()->id,
        //     'title'=> $request->title,
        //     'description'=> $request->description,
        //     'tags'=> $request->tags,
        //     'image'=> $request->image,
        //     'location' => $request->location,
        //     'featured' => $request->featured,
        //     ]);
       return redirect ('/communitys');
    }
    public function show($id)
    {
        $community = Community::join('users', 'communities.user_id', '=', 'users.id')->where('communities.id', $id)->select('communities.*','users.username')->first();
        return view('communitys.show', compact ('community'));
    }
    public function edit($id)
    {
    $community = Community::join('users', 'communities.user_id', '=', 'users.id')->where('communities.id', $id)->select('communities.*','users.username')->first();
        return view('communitys.edit', compact ('community'));
    }
    public function update(Request $request, $id)
    {
        $community = Community::join('users', 'communities.user_id', '=', 'users.id')->where('communities.id', $id)->select('communities.*','users.username')->first();
        $community->update($request->all());
        return redirect ('/communitys');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return Response
     */
    public function destroy($id)
    {
         $community = Community::join('users', 'communities.user_id', '=', 'users.id')->where('communities.id', $id)->select('communities.*','users.username')->first();
         $community->delete();
         return redirect ('/communitys');
    }
}