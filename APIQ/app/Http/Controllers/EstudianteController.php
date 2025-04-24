<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Crypt;
use Illuminate\Http\Request;
use App\Models\estudiante;
use App\Models\Certificado;
use App\Models\Participante;

class EstudianteController extends Controller
{
    public function index() {
    }

    public function create() {
    }

    public function store(Request $request)
    {
    }

    public function show(Request $request)
    {
        $codigo = $request->input('codigo') ?? $request->query('id');
         

        if (!$codigo) {
            return response()->json(['success' => false, 'message' => 'Parámetro "codigo" requerido.'], 400);
        }

        $request->merge(['codigo' => $codigo]);
        $request->validate([
            'codigo' => 'required|string',
        ]);
       
        return $this->buscarCertificados($codigo);
    }

    public function buscarPorCodigo($codigo)
    {
        return $this->buscarCertificados($codigo);
    }

    private function buscarCertificados($codigo)
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
                'fecha_emision' => $cert->fecha_emision,
                'codigo_certificado' => $cert->codigo_certificado,
                'ruta_certificado' => $cert->archivo_certificado
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

    public function edit(string $id) {
    }

    public function update(Request $request, string $id) {
    }

    public function destroy(string $id) {
    }
}
