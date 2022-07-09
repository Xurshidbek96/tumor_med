<?php

namespace App\Http\Controllers;

use App\Models\Human;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class HumanController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $human = DB::table('humans')->orderBy('id', 'desc')->paginate(10);

        return view('admin.humans.index', compact('human'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.humans.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('humans')
             ->insert(array(
                'name' => $request->name,
                'phone' => $request->phone,
                'date' => $request->date,
                'gender' => $request->gender,
                'region' => $request->region,
                'district' => $request->district,
                'diagnos' => $request->diagnos,
                'type_disease' => $request->type_disease,
                'psr' => $request->psr,
                'alt' => $request->alt,
                'act' => $request->act,
                'billirubin' => $request->billirubin,
                'ishqor' => $request->ishqor,
                'timol' => $request->timol,
                'igg' => $request->igg,
                'igm' => $request->igm,
                'result' => '0',
         ));

          return redirect()->route('humans.index')
                                    ->with('success','Yangi ma`lumot qo`shildi');
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Human  $human
     * @return \Illuminate\Http\Response
     */
    public function show(Human $human)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Human  $human
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $human = DB::table('humans')->where('id', $id)->get();

        return view('admin.humans.edit', compact('human'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Models\Human  $human
     * @return \Illuminate\Http\Response
     */
    public function update($id, Request $request)
    {
        $arrayName = array(
            'name' => $request->name,
            'phone' => $request->phone,
            'date' => $request->date,
            'gender' => $request->gender,
            'region' => $request->region,
            'district' => $request->district,
            'diagnos' => $request->diagnos,
            'type_disease' => $request->type_disease,
            'psr' => $request->psr,
            'alt' => $request->alt,
            'act' => $request->act,
            'billirubin' => $request->billirubin,
            'ishqor' => $request->ishqor,
            'timol' => $request->timol,
            'igg' => $request->igg,
            'igm' => $request->igm,
            'result' => '0',
        );

        DB::table('humans')->where('id', $id)->update($arrayName);
    

        return redirect()->route('humans.index')
                            ->with('success','Yangilanish bajarildi');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Human  $human
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('humans')->where('id', $id)->delete();

        return redirect()->route('humans.index')
                        ->with('success','Ma`lumot o`chirildi');
    }
}
