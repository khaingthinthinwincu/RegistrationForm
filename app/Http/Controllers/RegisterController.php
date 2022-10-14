<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\Register; //Register.php use

class RegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return ("Successfully added");
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $data['region'] = ['1','2','3','4','5','6','7','8','9','10','11','12','13','14'];
        return view('create',$data);

    }

    public function nrc(Request $request)
    {
        if($request->region_id == '1'){
            $data['names'] = ['BaMaNa','KhaHpaNa','DaHpaYa','HaPaNa','HpaKaNa','AhGaYa','KaMaNa','KaMaTa','KaPaTa','KhaLaHpa','LaGaNa','MaKhaBa','MaSaNa','MaKaTa','MaNyaNa','MaMaNa','MaKaNa','MaLaNa','NaMaNa','PaWaNa','PaNaDa','PaTaAh','SaDaNa','YaBaYa','YaKaNa','SaBaNa','SaPaBa','SaPaYa','TaNaNa','SaLaNa','TaSaLa','WaMaNa'];
            return response()->json($data);
        }
        else if($request->region_id == '2'){
            $data['names'] = ['BaLaKha','DaMaSa','HpaSaNa','HpaYaSa','LaKaNa','MaSaNa','YaTaNa','YaThaNa'];
            return response()->json($data);
        }
        else if($request->region_id == '3'){
            $data['names'] = ['BaGaLa','LaBaNa','BaAhNa','HpaPaNa','BaThaSa','KaMaMa','KaKaYa','KaDaNa','KaSaKa','KaDaNa','KaDaTa','LaThaNa','MaWaTa','PaKaNa','YaYaTha','SaKaLa','ThaTaNa','ThaTaKa','WaLaMa'];
            return response()->json($data);
        }
        else if($request->region_id == '4'){
            $data['names'] = ['KaKhaNa','HpaLaNa','HaKhaNa','KaPaLa','MaTaPa','MaTaNa','PaLaWa','YaZaNa','YaKhaDa','SaMaNa','TaTaNa','HtaTaLa','TaZaNa'];
            return response()->json($data);
        }
        else if($request->region_id == '5'){
            $data['names'] = ['KaKhaNa','HpaLaNa','HaKhaNa','KaPaLa','MaTaPa','MaTaNa','PaLaWa','YaZaNa','YaKhaDa','SaMaNa','TaTaNa','HtaTaLa','TaZaNa'];
            return response()->json($data);
        }
        else if($request->region_id == '6'){
            $data['names'] = ['KaKhaNa','HpaLaNa','HaKhaNa','KaPaLa','MaTaPa','MaTaNa','PaLaWa','YaZaNa','YaKhaDa','SaMaNa','TaTaNa','HtaTaLa','TaZaNa'];
            return response()->json($data);
        }
        else if($request->region_id == '7'){
            $data['names'] = ['KaKhaNa','HpaLaNa','HaKhaNa','KaPaLa','MaTaPa','MaTaNa','PaLaWa','YaZaNa','YaKhaDa','SaMaNa','TaTaNa','HtaTaLa','TaZaNa'];
            return response()->json($data);
        }
        else if($request->region_id == '8'){
            $data['names'] = ['KaKhaNa','HpaLaNa','HaKhaNa','KaPaLa','MaTaPa','MaTaNa','PaLaWa','YaZaNa','YaKhaDa','SaMaNa','TaTaNa','HtaTaLa','TaZaNa'];
            return response()->json($data);
        }
        else if($request->region_id == '9'){
            $data['names'] = ['KaKhaNa','HpaLaNa','HaKhaNa','KaPaLa','MaTaPa','MaTaNa','PaLaWa','YaZaNa','YaKhaDa','SaMaNa','TaTaNa','HtaTaLa','TaZaNa'];
            return response()->json($data);
        }
        else if($request->region_id == '10'){
            $data['names'] = ['KaKhaNa','HpaLaNa','HaKhaNa','KaPaLa','MaTaPa','MaTaNa','PaLaWa','YaZaNa','YaKhaDa','SaMaNa','TaTaNa','HtaTaLa','TaZaNa'];
            return response()->json($data);
        }
        else if($request->region_id == '11'){
            $data['names'] = ['KaKhaNa','HpaLaNa','HaKhaNa','KaPaLa','MaTaPa','MaTaNa','PaLaWa','YaZaNa','YaKhaDa','SaMaNa','TaTaNa','HtaTaLa','TaZaNa'];
            return response()->json($data);
        }
        else if($request->region_id == '12'){
            $data['names'] = ['KaKhaNa','HpaLaNa','HaKhaNa','KaPaLa','MaTaPa','MaTaNa','PaLaWa','YaZaNa','YaKhaDa','SaMaNa','TaTaNa','HtaTaLa','TaZaNa'];
            return response()->json($data);
        }
        else if($request->region_id == '13'){
            $data['names'] = ['KaKhaNa','HpaLaNa','HaKhaNa','KaPaLa','MaTaPa','MaTaNa','PaLaWa','YaZaNa','YaKhaDa','SaMaNa','TaTaNa','HtaTaLa','TaZaNa'];
            return response()->json($data);
        }
        else if($request->region_id == '14'){
            $data['names'] = ['KaKhaNa','HpaLaNa','HaKhaNa','KaPaLa','MaTaPa','MaTaNa','PaLaWa','YaZaNa','YaKhaDa','SaMaNa','TaTaNa','HtaTaLa','TaZaNa'];
            return response()->json($data);
        }
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $nrc = "$request->regionNo/$request->regionName$request->citizen$request->no";
        //dd($nrc);

        $status;
        if(isset($request->marriage)){
            $status = "single";
        }
        else{
            $status = "marriage";
        }      

        //dd("Hey I am working");
        Register::create([
            'name' => $request->name,
            'phone' => $request->phone,
            'date' => $request->dob,
            'gender' => $request->gender,
            'nrc' => $nrc,
            'marriage'=> $status,
            'township' => $request->township,
            'biography' => $request->biography

        ]);

        return redirect('/registers');

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
