<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\User;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('admin/users');
    }

    public function get_users(Request $request) {
        $columns = ['id', 'name', 'email', 'domain', 'api_token'];
        $data = $request->all();
        $draw = $data['draw'];
        $start = $data['start'];
        $limit = $data['length'];
        $order = $columns[$data['order'][0]['column']];
        $dir = $data['order'][0]['dir'];
        $search = $data['search']['value'];

        $totalData = User::count();
        $totalFiltered = $totalData;
        
        $users = User::query();
        if (empty($search)) {
            $results = $users->where("role", 1)->offset($start)->limit($limit)->orderBy($order, $dir)->get();
        } else {
            $results = $users->where("role", 1)->where(function($query) {
                $query->where("email", "like", "%$search%")
                ->orWhere("domain", "like", "%$search")
                ->orWhere("api_token", "like", "%$search%");
            })->offset($start)->limit($limit)->orderBy($order, $dir)->get();
            $totalFiltered = $users->count();
        }
        return response()->json([
            "draw" => intval($draw),
            "recordsTotal" => intval($totalData),
            "recordsFiltered" => intval($totalFiltered),
            "data" => $results
        ]);
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
        //
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
