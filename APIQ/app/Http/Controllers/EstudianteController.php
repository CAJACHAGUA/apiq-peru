<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\estudiante;
use App\Models\Certificado;
use App\Models\Participante;

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
        $codigo = $request->input('codigo') ?? $request->query('id'); // Acepta POST y GET
    
        if (!$codigo) {
            return response()->json(['success' => false, 'message' => 'Parámetro "codigo" requerido.'], 400);
        }
    
        $request->merge(['codigo' => $codigo]); // Para validar normalmente
    
        $request->validate([
            'codigo' => 'required|string|max:255',
        ]);
    
        if (is_numeric($codigo) && strlen($codigo) === 8) {
            $certificados = Certificado::with(['participante', 'curso'])
                ->whereHas('participante', fn($q) => $q->where('dni', $codigo))
                ->paginate(10);
        } else {
            $certificados = Certificado::with(['participante', 'curso'])
                ->where('codigo_certificado', $codigo)
                ->paginate(10);
        }
    
        if ($certificados->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No se encontraron certificados con el código proporcionado.'
            ]);
        }
    
        $data = $certificados->getCollection()->map(function ($cert) {
            return [
                'nombre' => $cert->participante->nombres,
                'apellido' => $cert->participante->apellidos,
                'dni' => $cert->participante->dni,
                'curso' => $cert->curso->nombre,
                'fecha_inicio' => $cert->curso->fecha_inicio,
                'fecha_fin' => $cert->curso->fecha_fin,
                'codigo_certificado' => $cert->codigo_certificado
            ];
        });
    
        $certificados->setCollection($data);
    
        return response()->json([
            'success' => true,
            'estudiantes' => $certificados->getCollection(),
            'current_page' => $certificados->currentPage(),
            'last_page' => $certificados->lastPage(),
        ]);
    }
    public function buscarPorCodigo($codigo)
    {
        if (is_numeric($codigo) && strlen($codigo) === 8) {
            $certificados = Certificado::with(['participante', 'curso'])
                ->whereHas('participante', fn($q) => $q->where('dni', $codigo))
                ->paginate(10);
        } else {
            $certificados = Certificado::with(['participante', 'curso'])
                ->where('codigo_certificado', $codigo)
                ->paginate(10);
        }
    
        if ($certificados->isEmpty()) {
            return response()->json([
                'success' => false,
                'message' => 'No se encontraron certificados con el código proporcionado.'
            ]);
        }
    
        $data = $certificados->getCollection()->map(function ($cert) {
            return [
                'nombre' => $cert->participante->nombres,
                'apellido' => $cert->participante->apellidos,
                'dni' => $cert->participante->dni,
                'curso' => $cert->curso->nombre,
                'fecha_inicio' => $cert->curso->fecha_inicio,
                'fecha_fin' => $cert->curso->fecha_fin,
                'codigo_certificado' => $cert->codigo_certificado
            ];
        });
    
        $certificados->setCollection($data);
    
        return response()->json([
            'success' => true,
            'estudiantes' => $certificados->getCollection(),
            'current_page' => $certificados->currentPage(),
            'last_page' => $certificados->lastPage(),
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
