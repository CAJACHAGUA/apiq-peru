<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\estudiante;

class EstudianteController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
       


        $estudiante = new estudiante();
        $estudiante->codigo ="B7220-75548228" ;
        $estudiante->nombres ="Reyd'll Efrain" ;
        $estudiante->apellidos ="Torres Zenteno ";
        $estudiante->celular = Crypt::encryptString('972113820');
        $estudiante->dni =Crypt::encryptString('75548228') ;
        $estudiante->correo = Crypt::encryptString('refraintzz@gmail.com') ;
        $estudiante->universidad ="Universidad Nacional del Altiplano de Puno" ;
        $estudiante->miembro_whatsapp ="true" ;
        $estudiante->tipo_comprobante ="Boleta" ;
        $estudiante->ruc_factura ="10755482281" ;
        $estudiante->ruta_voucher ="https://drive.google.com/open?id=1ZeyfEEjYVhxpjvpmvRMMabfeK1tCQ_9f
" ;
        
        $estudiante->save();

        
    }

    /**
     * Display the specified resource.
     */
    public function show(Request $request)
    {
        $request->validate([
            'codigo' => 'required',
        ]);
    
        $codigo = $request->input('codigo');
        
    
        $estudiantes = estudiante::where('codigo', $codigo)
                                 ->orWhere('dni', $codigo)
                                 ->paginate(10); // PAGINACIÓN
    
        if ($estudiantes->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'Estudiante no encontrado'
            ]);
        }
    
        return response()->json([
            'success' => true,
            'estudiantes' => $estudiantes->items(), // Solo los datos
            'current_page' => $estudiantes->currentPage(),
            'last_page' => $estudiantes->lastPage(),
            'total' => $estudiantes->total(),
            'message' => 'Validación exitosa',
        ]);
    }
    



    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
