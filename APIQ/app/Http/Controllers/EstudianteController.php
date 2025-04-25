<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use App\Models\Certificado;

class EstudianteController extends Controller
{
    public function show(Request $request)
    {
        $codigo = $request->input('codigo') ?? $request->query('id');

        if (!$codigo) {
            return response()->json(['success' => false, 'message' => 'Parámetro "codigo" requerido.'], 400);
        }

        return $this->buscarCertificados($codigo);
    }

    private function buscarCertificados($codigo)
    {
        // Buscar por DNI (numérico de 8 dígitos) o por código del certificado
        $query = Certificado::with(['participante', 'curso']);

        if (is_numeric($codigo) && strlen($codigo) === 8) {
            $query->whereHas('participante', fn($q) => $q->where('dni', $codigo));
        } else {
            $query->where('codigo_certificado', $codigo);
        }

        $certificados = $query->paginate(10);

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

    public function showPDF(Request $request)
    {
        $id = $request->query('id');

        if (!$id) {
            return response()->json(['error' => 'ID no proporcionado'], 400);
        }

        try {
            $certificado = Certificado::where("codigo_certificado", $id)->first();

            if ($certificado && $certificado->archivo_certificado) {
                $pdfContent = base64_encode($certificado->archivo_certificado);
                return response()->json(['pdf' => $pdfContent]);
            } else {
                return response()->json(['error' => 'Archivo no encontrado'], 404);
            }
        } catch (\Exception $e) {
            return response()->json(['error' => $e->getMessage()], 500);
        }
    }
}
