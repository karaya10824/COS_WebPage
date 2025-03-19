<?php

namespace App\Http\Controllers;

use App\Models\Categoria;
use Illuminate\Http\Request;

class CategoriaController extends Controller{
    public function create(Request $request){
        // Validar los datos
        /* $request->validate([
            'nombre_producto' => 'required',
            'descripcion' => 'required',
            'id_categoria' => 'required',
            'cantidad' => 'required',
            'imagen' => 'required',
            'precio_costo' => 'required',
            'precio_venta' => 'required',
            'precio_por_mayor' => 'required',
            'activo' => 'required'
        ]);*/

        // Obtener todos los productos
        $categoria = Categoria::create(['nombre_categoria' => $request->nombre_categoria,
        'descripcion_categoria' => $request->descripcion_categoria,
        'activo' => $request->activo]);

        return redirect('/producto');
    }

    public function destroy($id_producto){       
        // Buscar el producto
        $producto = Producto::find($id_producto);
        // Eliminar el producto
        $producto->delete();
        return redirect('/producto');
    }
}
