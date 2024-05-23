<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Student;

class StudentController extends Controller
{

    function index(){
        $courses=Student::all();
        if($courses){
            return response()->json(['data' => $courses,200]);
        }else{
           return  response()->json(['data' => "No Student"], 404);
        }
    }
    public function show($id)
    {
        $course = Student::find($id);
        if (!$course) {
            return response()->json(['error' => 'Student no encontrado'], 404);
        }
        return response()->json($course);
    }
    public function store(Request $request){
        // Obtener el contenido JSON del cuerpo de la solicitud
        $requestData = $request->json()->all();

        // Verificar si el campo 'name' está presente en los datos de la solicitud
        if (isset($requestData['name'])) {
            // Obtener los datos del proveedor de la solicitud
             $name = $requestData['name'];
            $email = $requestData['email'];
            $birthDate= $requestData['birthDate'];
            $course_id=$requestData['course_id'];

            try {
            // Crear un nuevo proveedor
                 $student = new Student();
                $student->name = $name;
                $student->email = $email;
                $student->birthDate = $birthDate;
                $student->course_id = $course_id;
                $student->save();

                // Devolver una respuesta adecuada
                return response()->json("El Student $name ha sido creado exitosamente.", 201);
            } catch (\Exception $e) {
            // Manejar errores de la base de datos
            return response()->json(['message' => 'Error al crear el proveedor: ' . $e->getMessage()], 500);
            }
        }
    }
    function update(Request $request, $id){
        // Obtener los datos del proveedor de la solicitud
            $requestData = $request->json()->all();

            try {
                // Buscar el proveedor por su ID
                $student = Student::findOrFail($id);

                // Actualizar los datos del proveedor
                $student->update($requestData);

                // Devolver una respuesta adecuada
                return response()->json("El Student ha sido actualizado correctamente.", 200);
            } catch (\Exception $e) {
                // Manejar errores de la base de datos
                return response()->json(['message' => 'Error al actualizar el student: ' . $e->getMessage()], 500);
            }
        }
        function destroy($id){
            try {
                $student = Student::find($id);
                if (!$student) {
                 return response()->json(['message' => 'El student no existe.'], 404);
                 }
                $student->delete();
                return response()->json(['message' => 'El student ha sido eliminado correctamente.'], 200);
            } catch (\Exception $e) {
                return response()->json(['message' => 'Error al eliminar el student: ' . $e->getMessage()], 500);
            }
        }
}
