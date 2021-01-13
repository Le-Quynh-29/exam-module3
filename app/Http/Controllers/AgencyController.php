<?php

namespace App\Http\Controllers;

use App\Http\Requests\checkCreate;
use App\Http\Requests\checkEdit;
use App\Models\Agency;
use App\Models\City;
use App\Models\Order;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;

class AgencyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $agencys = Agency::paginate(5);
        return view('list', compact('agencys'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @return \Illuminate\Http\Response
     */
    public function store(checkCreate $request)
    {
        $agency = new Agency();
        $agency->name = $request->input('name');
        $agency->address = $request->input('address');
        $agency->email = $request->input('email');
        $agency->phone = $request->input('phone');
        $agency->userName = $request->input('userName');
        $agency->static = $request->input('static');
        Session::flash('success', 'Ban da them thanh cong');
        $agency->save();
        return redirect()->route('agencys.list');

    }

    /**
     * Display the specified resource.
     *
     * @param \App\Models\Agency $agency
     * @return \Illuminate\Http\Response
     */

    public function edit($id)
    {
        $agency = Agency::find($id);
        return view('edit', compact('agency'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param \Illuminate\Http\Request $request
     * @param \App\Models\Agency $agency
     * @return \Illuminate\Http\Response
     */
    public function update(checkEdit $request, $id)
    {
        $agency = Agency::findOrFail($id);
        $agency->name = $request->input('name');
        $agency->address = $request->input('address');
        $agency->email = $request->input('email');
        $agency->phone = $request->input('phone');
        $agency->userName = $request->input('userName');
        $agency->static = $request->input('static');
        $agency->save();
        Session::flash('success', 'Cập nhật thành công');
        return redirect()->route('agencys.list');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param \App\Models\Agency $agency
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $agency = Agency::findOrFail($id);
        $agency->delete();
        return redirect()->route('agencys.list');
    }

    public function search(Request $request)
    {
        $search = $request->input('search');
        if (!$search) {
            return redirect()->route('agencys.list');
        }

        $agencys = DB::table('agencies')
            //->where('productName', 'like', '%'.$search.'%')->get();
            ->where('name', 'like', '%' . $search . '%')
            ->paginate(5);
        Session::flash('search_result', true);
        return view('list', compact('agencys'));
    }
}
