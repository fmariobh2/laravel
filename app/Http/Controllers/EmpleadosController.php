<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Input;
use App\Http\Requests;
use App\Empleado;
class EmpleadosController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $empleados = Empleado::all();
        return response()->json([
            'estatus' => true,
            'empleados' => $empleados
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('empleados/create');
    }
    
    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = $request->all();

        /* Validacion de datos */
        $validator= Validator::make($data, Empleado::$rules);
        if($validator->fails()) {
            return response()->json([
                'estatus' => false,
                'errors' => $validator->getMessageBag()->toArray()
            ]);
        } 
        $empleado = Empleado::create($data); 
        return response()->json([
            'estatus' => true,
        ]);
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $empleado = Empleado::buscar($id);

        if($empleado!=null){
            return view('empleados/show',compact('empleado'));
        }
        else{
            return redirect('/empleados_');
        }
    }


    /**
     * Show the form for find a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function find()
    {
        return view('empleados/find');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function findEmpleado(Request $request)
    {
        $id= $request->input('id');
        $empleado = Empleado::buscar($id);
        if($empleado!=null){
            return response()->json([
                'estatus' => true,
                'empleado' => $empleado,
            ]);
        }
        else{
            return response()->json([
                'estatus' => false,
                'error' => 'No se ha encontrado ningún registro con el Id: '.$id,
            ]);
        }
    }
}
