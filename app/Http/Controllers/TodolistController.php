<?php

namespace App\Http\Controllers;

use App\Models\Todolist;
use Illuminate\Http\Request;

class TodolistController extends Controller
{
    
    public function index()
    {
        try{
            $Todolist = Todolist::all();
            return response()-> json($todolist, 200);
        } catch (\Exception $e){
            return response()-> json(['error'=> $e->getMessage()], 500);
        }
        
    }

    public function store(Request $request)
    {
        try{
            $Todolist::create($request->all());
            return response()-> json(['message' => 'Tarefa criada com sucesso'], 200);
        }catch (Exception $e){
            return response()-> json(['error'=> $e->getMessage()], 500);
        }
    }

   
    public function update(Request $request, int $id)
    {
        try{
            $todolists=Todolist::findorFail($id);
            $todolists->update($request->all());
            return response()-> json(['message' => 'Tarefa atualizada com sucesso'], 200);
        }catch (Exception $e){
            return response()-> json(['error'=> $e->getMessage()], 500);
        }
    }

    public function destroy($id)
    {
        try {
            $todolists=Todolist::findorFail($id);
            $todolists->delete();
            return response()-> json(['message' => 'Tarefa deletada com sucesso'], 200);
        } catch (Exception $e){
            return response()-> json(['error'=> $e->getMessage()], 500);
        }
    }
}
