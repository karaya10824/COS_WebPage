<?php

namespace App\Http\Controllers;

use App\Models\Descuento;
use Illuminate\Http\Request;

class DescuentoController extends Controller{
    public function create(Request $request){
        // Validar los datos
        /* $request->validate([
            'nombre_producto' => 'required',
            'descripcion' => 'required',
            'id_Descuento' => 'required',
            'cantidad' => 'required',
            'imagen' => 'required',
            'precio_costo' => 'required',
            'precio_venta' => 'required',
            'precio_por_mayor' => 'required',
            'activo' => 'required'
        ]);*/

        // Obtener todos los productos
        $Descuento = Descuento::create(['porcentaje' => $request->porcentaje,
        'codigo_descuento' => $request->codigo_descuento,
        'descripcion_descuento' => $request->descripcion_descuento,
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
