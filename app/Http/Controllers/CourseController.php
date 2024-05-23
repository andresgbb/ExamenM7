<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Course;
class CourseController extends Controller
{
    function index(){
        $courses=Course::all();
        if($courses){
            return response()->json(['data' => $courses,200]);
        }else{
           return  response()->json(['data' => "No Course"], 404);
        }
    }
    public function show($id)
    {
        $course = Course::find($id);
        if (!$course) {
            return response()->json(['error' => 'Course no encontrado'], 404);
        }
        return response()->json($course);
    }
    public function store(Request $request){

        $requestData = $request->json()->all();


        if (isset($requestData['name'])) {

             $name = $requestData['name'];
            $price = $requestData['price'];

            try {

                 $course = new Course();
                $course->name = $name;
                $course->price = $price;
                $course->save();


                return response()->json("El Curso $name ha sido creado exitosamente.", 201);
            } catch (\Exception $e) {

            return response()->json(['message' => 'Error al crear el proveedor: ' . $e->getMessage()], 500);
            }
        }
    }
    function update(Request $request, $id){

            $requestData = $request->json()->all();

            try {

                $course = Course::findOrFail($id);


                $course->update($requestData);


                return response()->json("El course ha sido actualizado correctamente.", 200);
            } catch (\Exception $e) {

                return response()->json(['message' => 'Error al actualizar el course: ' . $e->getMessage()], 500);
            }
        }
        function destroy($id){
            try {
                $course = Course::find($id);
                if (!$course) {
                 return response()->json(['message' => 'El course no existe.'], 404);
                 }
                $course->delete();
                return response()->json(['message' => 'El course ha sido eliminado correctamente.'], 200);
            } catch (\Exception $e) {
                return response()->json(['message' => 'Error al eliminar el course: ' . $e->getMessage()], 500);
            }
        }
}
