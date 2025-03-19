<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Aplicación con Sidebar y Navbar</title>
  <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet">
  <link href="dashboard.css" rel="stylesheet">
<style>
    .sidebar {
      transition: width 0.3s;
    }
    .sidebar-collapsed {
      width: 4rem;
    }
    .sidebar-expanded {
      width: 16rem;
    }
    .sidebar-dropdown {
      display: none;
    }
    .sidebar-dropdown-active {
      display: block;
    }
    
  </style>
</head>

<!-- Navbar -->
<nav class="bg-white p-4 fixed w-full z-5 top-0 border-b border-gray-300 pb-4">
  <div class="container mx-auto flex justify-between items-center">
    <div class="text-black text-lg font-semibold">Tech Lab</div>
    <div class="relative">
      <a href="index.php"><button class="px-5 mx-5 h-10 bg-gray-800 text-white font-semibold border border-black rounded-lg shadow-md hover:bg-gray-900 hover:text-white transition duration-300">Visitar Página Web</button> </a>
        <button class="btn-opciones text-black focus:outline-none">
        Opciones
        <svg class="w-4 h-4 inline-block ml-1" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 9l-7 7-7-7"></path></svg>
      </button>
      <div class="absolute right-0 mt-3 w-48 bg-white rounded-md shadow-lg py-2 hidden">
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Perfil</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Configuración</a>
        <a href="#" class="block px-4 py-2 text-gray-800 hover:bg-gray-200">Cerrar Sesión</a>
      </div>
    </div>
  </div>
</nav>
<!-- Fin Navbar -->

<!-- Sidebar -->
<div class="flex">
  <div id="sidebar" class="sidebar sidebar-collapsed bg-white h-screen pt-20 border-r border-gray-300 pb-4 fixed">
    <ul class="text-black">
      <span class="ml-4 hidden font-semibold">Administración</span>
      <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" d="m2.25 12 8.954-8.955c.44-.439 1.152-.439 1.591 0L21.75 12M4.5 9.75v10.125c0 .621.504 1.125 1.125 1.125H9.75v-4.875c0-.621.504-1.125 1.125-1.125h2.25c.621 0 1.125.504 1.125 1.125V21h4.125c.621 0 1.125-.504 1.125-1.125V9.75M8.25 21h8.25" /></svg>
        <span class="ml-4 hidden">Inicio</span>
      </li>
      <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <span class="ml-4 hidden">Pedidos</span>
      </li>
      <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M3.375 19.5h17.25m-17.25 0a1.125 1.125 0 0 1-1.125-1.125M3.375 19.5h7.5c.621 0 1.125-.504 1.125-1.125m-9.75 0V5.625m0 12.75v-1.5c0-.621.504-1.125 1.125-1.125m18.375 2.625V5.625m0 12.75c0 .621-.504 1.125-1.125 1.125m1.125-1.125v-1.5c0-.621-.504-1.125-1.125-1.125m0 3.75h-7.5A1.125 1.125 0 0 1 12 18.375m9.75-12.75c0-.621-.504-1.125-1.125-1.125H3.375c-.621 0-1.125.504-1.125 1.125m19.5 0v1.5c0 .621-.504 1.125-1.125 1.125M2.25 5.625v1.5c0 .621.504 1.125 1.125 1.125m0 0h17.25m-17.25 0h7.5c.621 0 1.125.504 1.125 1.125M3.375 8.25c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125m17.25-3.75h-7.5c-.621 0-1.125.504-1.125 1.125m8.625-1.125c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125v1.5c0 .621.504 1.125 1.125 1.125M12 10.875v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 10.875c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125M13.125 12h7.5m-7.5 0c-.621 0-1.125.504-1.125 1.125M20.625 12c.621 0 1.125.504 1.125 1.125v1.5c0 .621-.504 1.125-1.125 1.125m-17.25 0h7.5M12 14.625v-1.5m0 1.5c0 .621-.504 1.125-1.125 1.125M12 14.625c0 .621.504 1.125 1.125 1.125m-2.25 0c.621 0 1.125.504 1.125 1.125m0 1.5v-1.5m0 0c0-.621.504-1.125 1.125-1.125m0 0h7.5" /></svg>
        <span class="ml-4 hidden">Envíos</span>
      </li>
      <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M15.75 15.75V18m-7.5-6.75h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V13.5Zm0 2.25h.008v.008H8.25v-.008Zm0 2.25h.008v.008H8.25V18Zm2.498-6.75h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V13.5Zm0 2.25h.007v.008h-.007v-.008Zm0 2.25h.007v.008h-.007V18Zm2.504-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5Zm0 2.25h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V18Zm2.498-6.75h.008v.008h-.008v-.008Zm0 2.25h.008v.008h-.008V13.5ZM8.25 6h7.5v2.25h-7.5V6ZM12 2.25c-1.892 0-3.758.11-5.593.322C5.307 2.7 4.5 3.65 4.5 4.757V19.5a2.25 2.25 0 0 0 2.25 2.25h10.5a2.25 2.25 0 0 0 2.25-2.25V4.757c0-1.108-.806-2.057-1.907-2.185A48.507 48.507 0 0 0 12 2.25Z" /> </svg>
        <span class="ml-4 hidden">Gastos</span>
      </li>
      <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer" id="inventario-menu">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M12 10.5v6m3-3H9m4.06-7.19-2.12-2.12a1.5 1.5 0 0 0-1.061-.44H4.5A2.25 2.25 0 0 0 2.25 6v12a2.25 2.25 0 0 0 2.25 2.25h15A2.25 2.25 0 0 0 21.75 18V9a2.25 2.25 0 0 0-2.25-2.25h-5.379a1.5 1.5 0 0 1-1.06-.44Z" /> </svg>
        <span class="ml-4 hidden">Inventario</span>
      </li>
      <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M10.5 6a7.5 7.5 0 1 0 7.5 7.5h-7.5V6Z" /> <path stroke-linecap="round" stroke-linejoin="round" d="M13.5 10.5H21A7.5 7.5 0 0 0 13.5 3v7.5Z" /> </svg>
        <span class="ml-4 hidden">Reportes</span>
      </li>
      <li class="flex items-center p-4 hover:bg-gray-200 cursor-pointer">
      <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" d="M9.594 3.94c.09-.542.56-.94 1.11-.94h2.593c.55 0 1.02.398 1.11.94l.213 1.281c.063.374.313.686.645.87.074.04.147.083.22.127.325.196.72.257 1.075.124l1.217-.456a1.125 1.125 0 0 1 1.37.49l1.296 2.247a1.125 1.125 0 0 1-.26 1.431l-1.003.827c-.293.241-.438.613-.43.992a7.723 7.723 0 0 1 0 .255c-.008.378.137.75.43.991l1.004.827c.424.35.534.955.26 1.43l-1.298 2.247a1.125 1.125 0 0 1-1.369.491l-1.217-.456c-.355-.133-.75-.072-1.076.124a6.47 6.47 0 0 1-.22.128c-.331.183-.581.495-.644.869l-.213 1.281c-.09.543-.56.94-1.11.94h-2.594c-.55 0-1.019-.398-1.11-.94l-.213-1.281c-.062-.374-.312-.686-.644-.87a6.52 6.52 0 0 1-.22-.127c-.325-.196-.72-.257-1.076-.124l-1.217.456a1.125 1.125 0 0 1-1.369-.49l-1.297-2.247a1.125 1.125 0 0 1 .26-1.431l1.004-.827c.292-.24.437-.613.43-.991a6.932 6.932 0 0 1 0-.255c.007-.38-.138-.751-.43-.992l-1.004-.827a1.125 1.125 0 0 1-.26-1.43l1.297-2.247a1.125 1.125 0 0 1 1.37-.491l1.216.456c.356.133.751.072 1.076-.124.072-.044.146-.086.22-.128.332-.183.582-.495.644-.869l.214-1.28Z" /><path stroke-linecap="round" stroke-linejoin="round" d="M15 12a3 3 0 1 1-6 0 3 3 0 0 1 6 0Z" /></svg>
        <span class="ml-4 hidden">Ajustes</span>
      </li>

      <li class="flex flex-column align-center p-4 hover:bg-gray-200 cursor-pointer">
          <button id="logout-hidden" class="w-3/4 h-10 mb-5 bg-gray-800 text-white font-semibold border border-black rounded-lg shadow-md hover:bg-gray-900 hover:text-white transition duration-300 hidden">
          <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-6"><path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9" /></svg>Cerrar Sesión
            </button>

          <a href="index.php"><button id="logout" class="h-10 mb-4 bg-gray-800 text-white font-semibold border border-black rounded-lg shadow-md hover:bg-gray-900 hover:text-white transition duration-300"> <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6 w-6"> <path stroke-linecap="round" stroke-linejoin="round" d="M5.636 5.636a9 9 0 1 0 12.728 0M12 3v9" /> </svg></button> </a>
      </li>
    </ul>

    <ul class="text-black">
      <span class="ml-4 hidden font-semibold">Super Administración</span>
      <li class="flex items-center p-4 hover:bg-blue-700 cursor-pointer">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 12l2-2m0 0l7-7 7 7m-9 9v6m0-6H5a2 2 0 01-2-2V7a2 2 0 012-2h3m10 0h3a2 2 0 012 2v6a2 2 0 01-2 2h-3m-6 0v6m0-6h6"></path></svg>
        <span class="ml-4 hidden">Super Administración</span>
      </li>
      <li class="flex items-center p-4 hover:bg-blue-700 cursor-pointer">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        <span class="ml-4 hidden">Tareas</span>
      </li>
      <li class="flex items-center p-4 hover:bg-blue-700 cursor-pointer">
        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 8v4l3 3m6 2a9 9 0 11-18 0 9 9 0 0118 0z"></path></svg>
        <span class="ml-4 hidden">Historial</span>
      </li>
    </ul>
  </div>
</div>
<!-- Fin Sidebar -->

<!-- Contenido Principal -->
<div class="flex-1 ml-16 pt-16">
  <div class="container mx-auto p-4">
      <!-- Navegación de pestañas -->
      <div class="bg-white">
          <div class="flex w-auto border-b border-gray-300">
              <button class="tab-link py-3 px-6 text-gray-600 font-semibold hover:text-black focus:text-black border-b-2 border-transparent focus:border-black" data-tab="tab1">
                  Productos
              </button>
              <button class="tab-link py-3 px-6 text-gray-600 font-semibold hover:text-black focus:text-black border-b-2 border-transparent focus:border-black" data-tab="tab2">
                  Categorias
              </button>
              <button class="tab-link py-3 px-6 text-gray-600 font-semibold hover:text-black focus:text-black border-b-2 border-transparent focus:border-black" data-tab="tab3">
                  Descuentos
              </button>
          </div>          
      </div>
      <!-- Fin Navegación de pestañas -->
      
      <!-- Contenido de las pestañas -->
      <div class="p-6">
        <div id="tab1" class="tab-content">
          <button id="btnAgregarProducto" class="px-5 h-10 mb-5 bg-gray-800 text-white font-semibold border border-black rounded-lg shadow-md hover:bg-gray-900 hover:text-white transition duration-300">Agregar Producto</button>
          <div class="bg-white shadow-lg rounded-lg overflow-hidden">
              <div class="bg-gray-800 text-white px-4 py-4">
                  <h4 class="text-lg font-semibold">Lista de Productos</h4>
              </div>
              <div>
                  <table class="w-full border-collapse">
                      <thead class="bg-gray-900 text-white">
                          <tr>
                              <th class="py-3 px-2 text-left">Nombre</th>
                              <th class="py-3 px-2 text-left">Descripción</th>
                              <th class="py-3 px-2 text-left">Cantidad</th>
                              <th class="py-3 px-2 text-left">Precio de Costo</th>
                              <th class="py-3 px-2 text-left">Precio de Venta</th>
                              <th class="py-3 px-2 text-left">Precio de Mayoreo</th>
                              <th class="py-3 px-2 text-left">Estado</th>
                              <th class="py-3 px-2 text-left">Imagen</th>
                              <th sec:authorize="hasRole('ROLE_ADMIN')" class="py-3 px-2 text-center">Acciones</th>
                          </tr>
                      </thead>
                      <tbody class="divide-y divide-gray-300">
                          <tr class="hover:bg-gray-100 transition text-center" ><?php foreach ($Productos as $producto): ?>
                                <td class="py-3 px-4"><?php echo $producto['nombre_producto']; ?></td>
                                <td class="py-3 px-4"><?php echo $producto['descripcion']; ?></td>
                                <td class="py-3 px-4"><?php echo $producto['cantidad']; ?></td>
                                <td class="py-3 px-4"><?php echo $producto['precio_costo']; ?></td>
                                <td class="py-3 px-4"><?php echo $producto['precio_venta']; ?></td>
                                <td class="py-3 px-4"><?php echo $producto['precio_por_mayor']; ?></td>
                                <td class="py-3 px-4 text-green-600 font-semibold"><?php echo $producto['activo'] ? 'Activa' : 'Inactiva'; ?></td>
                                <td class="py-3 px-4">
                                    <img src="<?php echo $producto['imagen']; ?>" class="h-20 w-20 object-cover rounded-lg shadow-md">
                                </td>
                                <td class="py-3 px-4 flex gap-2 justify-center">
                                    <form action="{{ url('/producto/' . $producto['id_producto']) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700 transition">
                                          <i class="fas fa-trash"></i> Eliminar
                                      </button>
                                    </form>
                                    <a href="#" class="bg-green-600 text-white px-3 py-1 rounded-md hover:bg-green-700 transition btnModificarProducto" data-id="<?php echo $producto['id_producto']; ?>" data-nombre="<?php echo $producto['nombre_producto']; ?>" data-descripcion="<?php echo $producto['descripcion']; ?>" data-cantidad="<?php echo $producto['cantidad']; ?>" data-precio-costo="<?php echo $producto['precio_costo']; ?>" data-precio-venta="<?php echo $producto['precio_venta']; ?>" data-precio-mayor="<?php echo $producto['precio_mayoreo']; ?>" data-activo="<?php echo $producto['activo']; ?>" data-imagen="<?php echo $producto['imagen']; ?>">
                                        <i class="fas fa-pencil"></i> Modificar
                                    </a>
                                </td>
                              </tr>
                              <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
              
              <?php echo empty($Productos); if(empty($Productos)){?>
                <div class="text-center p-4 text-gray-600" th:if="${productos == null or productos.empty}">
                    <span>[[#{lista.vacia}]]</span>
                </div>
              <?php } ?>
          </div>
        </div>

        <div id="tab2" class="tab-content hidden">
          <button id="btnAgregarCategoria" class="px-5 h-10 mb-5 bg-gray-800 text-white font-semibold border border-black rounded-lg shadow-md hover:bg-gray-900 hover:text-white transition duration-300">Agregar Categoria</button>
          <div class="bg-white shadow-lg rounded-lg overflow-hidden">
              <div class="bg-gray-800 text-white px-4 py-4">
                  <h4 class="text-lg font-semibold">Lista de Categorias</h4>
              </div>
              <div>
                  <table class="w-full border-collapse">
                      <thead class="bg-gray-900 text-white">
                          <tr>
                              <th class="py-3 px-2 text-left">Nombre</th>
                              <th class="py-3 px-2 text-left">Descripción de Categoria</th>
                              <th class="py-3 px-2 text-left">Activo</th>
                              <th sec:authorize="hasRole('ROLE_ADMIN')" class="py-3 px-2 text-center">Acciones</th>
                          </tr>
                      </thead>
                      <tbody class="divide-y divide-gray-300">
                          <tr class="hover:bg-gray-100 transition text-center" ><?php foreach ($Categorias as $categoria): ?>
                                <td class="py-3 px-4"><?php echo $categoria['nombre_categoria']; ?></td>
                                <td class="py-3 px-4"><?php echo $categoria['descripcion_categoria']; ?></td>
                                <td class="py-3 px-4 text-green-600 font-semibold"><?php echo $categoria['activo'] ? 'Activa' : 'Inactiva'; ?></td>
                                <td class="py-3 px-4 flex gap-2 justify-center">
                                    <form action="{{ url('/categoria/' . $categoria['id_categoria']) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700 transition">
                                          <i class="fas fa-trash"></i> Eliminar
                                      </button>
                                    </form>
                                    <a href="#" class="bg-green-600 text-white px-3 py-1 rounded-md hover:bg-green-700 transition btnModificarProducto" data-id="<?php echo $categoria['id_categoria']; ?>" data-nombre="<?php echo $categoria['nombre_categoria']; ?>" data-descripcion="<?php echo $categoria['descripcion_categoria']; ?>" data-activo="<?php echo $categoria['activo']; ?>">
                                        <i class="fas fa-pencil"></i> Modificar
                                    </a>
                                </td>
                              </tr>
                              <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
              
              <?php echo empty($Productos); if(empty($Productos)){?>
                <div class="text-center p-4 text-gray-600" th:if="${productos == null or productos.empty}">
                    <span>[[#{lista.vacia}]]</span>
                </div>
              <?php } ?>
          </div>
        </div>

        <div id="tab3" class="tab-content hidden">
          <button id="btnAgregarDescuento"  class="px-5 h-10 mb-5 bg-gray-800 text-white font-semibold border border-black rounded-lg shadow-md hover:bg-gray-900 hover:text-white transition duration-300">Agregar Descuento</button>
          <div class="bg-white shadow-lg rounded-lg overflow-hidden">
              <div class="bg-gray-800 text-white px-4 py-4">
                  <h4 class="text-lg font-semibold">Lista de Descuentos</h4>
              </div>
              <div>
                  <table class="w-full border-collapse">
                      <thead class="bg-gray-900 text-white">
                          <tr>
                              <th class="py-3 px-2 text-left">Código de Descuento</th>
                              <th class="py-3 px-2 text-left">Descripción de Descuento</th>
                              <th class="py-3 px-2 text-left">Porcentaje de Descuento</th>
                              <th class="py-3 px-2 text-left">Activo</th>
                              <th sec:authorize="hasRole('ROLE_ADMIN')" class="py-3 px-2 text-center">Acciones</th>
                          </tr>
                      </thead>
                      <tbody class="divide-y divide-gray-300">
                          <tr class="hover:bg-gray-100 transition text-center" ><?php foreach ($Descuentos as $descuento): ?>
                                <td class="py-3 px-4"><?php echo $descuento['codigo_descuento']; ?></td>
                                <td class="py-3 px-4"><?php echo $descuento['descripcion_descuento']; ?></td>
                                <td class="py-3 px-4"><?php echo $descuento['porcentaje']; ?></td>
                                <td class="py-3 px-4 text-green-600 font-semibold"><?php echo $descuento['activo'] ? 'Activa' : 'Inactiva'; ?></td>
                                <td class="py-3 px-4 flex gap-2 justify-center">
                                    <form action="{{ url('/descuento/' . $descuento['id_descuento']) }}" method="post">
                                      @csrf
                                      @method('DELETE')
                                      <button type="submit" class="bg-red-600 text-white px-3 py-1 rounded-md hover:bg-red-700 transition">
                                          <i class="fas fa-trash"></i> Eliminar
                                      </button>
                                    </form>
                                    <a href="#" class="bg-green-600 text-white px-3 py-1 rounded-md hover:bg-green-700 transition btnModificarProducto" data-id="<?php echo $descuento['id_descuento']; ?>" data-nombre="<?php echo $descuento['porcentaje']; ?>" data-descripcion="<?php echo $descuento['codigo_descuento']; ?>" data-cantidad="<?php echo $descuento['descripcion_descuento']; ?>" data-activo="<?php echo $descuento['activo']; ?>">
                                        <i class="fas fa-pencil"></i> Modificar
                                    </a>
                                </td>
                              </tr>
                              <?php endforeach; ?>
                      </tbody>
                  </table>
              </div>
              
              <?php echo empty($Productos); if(empty($Productos)){?>
                <div class="text-center p-4 text-gray-600" th:if="${productos == null or productos.empty}">
                    <span>[[#{lista.vacia}]]</span>
                </div>
              <?php } ?>
          </div>
        </div>
      </div>
      <!-- Fin Contenido de las pestañas -->
  </div>
</div>


<!--Pestaña Modal para Agregar Producto-->
<div id="modalAgregarProducto" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-1/2">
        <div class="flex justify-between items-center bg-gray-800 text-white px-4 py-2 rounded-t-lg">
            <h3 class="text-lg font-semibold">Agregar Producto</h3>
            <button id="closeModal" class="text-white">&times;</button>
        </div>
        <div class="p-6">
            <form action="{{ url('/producto/agregar') }}" method="post" enctype="multipart/form-data" id="formAgregarProducto">
                @csrf
                <div class="mb-4">
                    <label for="nombre_producto" class="block text-gray-700">Nombre del Producto</label>
                    <input type="text" id="nombre_producto" name="nombre_producto" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="descripcion" class="block text-gray-700">Descripción</label>
                    <textarea id="descripcion" name="descripcion" class="w-full px-3 py-2 border rounded-lg"></textarea>
                </div>
                <div class="mb-4">
                    <label for="cantidad" class="block text-gray-700">Cantidad</label>
                    <input type="number" id="cantidad" name="cantidad" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="precio_costo" class="block text-gray-700">Precio de Costo</label>
                    <input type="number" id="precio_costo" name="precio_costo" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="precio_venta" class="block text-gray-700">Precio de Venta</label>
                    <input type="number" id="precio_venta" name="precio_venta" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="precio_por_mayor" class="block text-gray-700">Precio por Mayor</label>
                    <input type="number" id="precio_por_mayor" name="precio_por_mayor" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="activo" class="block text-gray-700">Estado</label>
                    <select id="activo" name="activo" class="w-full px-3 py-2 border rounded-lg">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="imagen" class="block text-gray-700">Imagen</label>
                    <input type="file" id="imagen" name="imagen" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="flex justify-end">
                    <button type="button" id="cancelarModal" class="px-4 py-2 bg-gray-600 text-white rounded-lg mr-2">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fin Pestaña Modal para Agregar Producto-->

<!-- Pestaña Modal para modificar producto -->
<div id="modalModificarProducto" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-1/2">
        <div class="flex justify-between items-center bg-gray-800 text-white px-4 py-2 rounded-t-lg">
            <h3 class="text-lg font-semibold">Modificar Producto</h3>
            <button id="closeModalModificar" class="text-white">&times;</button>
        </div>
        <div class="p-6">
            <form id="formModificarProducto">
                <input type="hidden" id="id_producto" name="id_producto">
                <div class="mb-4">
                    <label for="nombre_producto_mod" class="block text-gray-700">Nombre del Producto</label>
                    <input type="text" id="nombre_producto_mod" name="nombre_producto" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="descripcion_mod" class="block text-gray-700">Descripción</label>
                    <textarea id="descripcion_mod" name="descripcion" class="w-full px-3 py-2 border rounded-lg"></textarea>
                </div>
                <div class="mb-4">
                    <label for="cantidad_mod" class="block text-gray-700">Cantidad</label>
                    <input type="number" id="cantidad_mod" name="cantidad" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="precio_costo_mod" class="block text-gray-700">Precio de Costo</label>
                    <input type="number" id="precio_costo_mod" name="precio_costo" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="precio_venta_mod" class="block text-gray-700">Precio de Venta</label>
                    <input type="number" id="precio_venta_mod" name="precio_venta" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="precio_por_mayor_mod" class="block text-gray-700">Precio por Mayor</label>
                    <input type="number" id="precio_por_mayor_mod" name="precio_por_mayor" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="activo_mod" class="block text-gray-700">Estado</label>
                    <select id="activo_mod" name="activo" class="w-full px-3 py-2 border rounded-lg">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="imagen_mod" class="block text-gray-700">Imagen</label>
                    <input type="file" id="imagen_mod" name="imagen" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="flex justify-end">
                    <button type="button" id="cancelarModalModificar" class="px-4 py-2 bg-gray-600 text-white rounded-lg mr-2">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fin Pestaña Modal para modificar producto -->

<!--Pestaña Modal para Agregar Categoria-->
<div id="modalAgregarCategoria" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-1/2">
        <div class="flex justify-between items-center bg-gray-800 text-white px-4 py-2 rounded-t-lg">
            <h3 class="text-lg font-semibold">Agregar Categoria</h3>
            <button id="closeModal" class="text-white">&times;</button>
        </div>
        <div class="p-6">
            <form action="{{ url('/categoria/agregar') }}" method="post" enctype="multipart/form-data" id="formAgregarProducto">
                @csrf
                <div class="mb-4">
                    <label for="nombre_categoria" class="block text-gray-700">Nombre de Categoria</label>
                    <input type="text" id="nombre_categoria" name="nombre_categoria" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="descripcion_categoria" class="block text-gray-700">Descripción de Categoria</label>
                    <textarea id="descripcion_categoria" name="descripcion_categoria" class="w-full px-3 py-2 border rounded-lg"></textarea>
                </div>
                <div class="mb-4">
                    <label for="activo" class="block text-gray-700">Estado</label>
                    <select id="activo" name="activo" class="w-full px-3 py-2 border rounded-lg">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="button" id="cancelarModal" class="px-4 py-2 bg-gray-600 text-white rounded-lg mr-2">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fin Pestaña Modal para Agregar Categoria-->

<!-- Pestaña Modal para modificar Categoria -->
<div id="modalModificarCategoria" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-1/2">
        <div class="flex justify-between items-center bg-gray-800 text-white px-4 py-2 rounded-t-lg">
            <h3 class="text-lg font-semibold">Modificar Categoria</h3>
            <button id="closeModalModificar" class="text-white">&times;</button>
        </div>
        <div class="p-6">
            <form id="formModificarProducto">
                <input type="hidden" id="id_producto" name="id_producto">
                <div class="mb-4">
                    <label for="nombre_producto_mod" class="block text-gray-700">Nombre del Producto</label>
                    <input type="text" id="nombre_producto_mod" name="nombre_producto" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="descripcion_mod" class="block text-gray-700">Descripción</label>
                    <textarea id="descripcion_mod" name="descripcion" class="w-full px-3 py-2 border rounded-lg"></textarea>
                </div>
                <div class="mb-4">
                    <label for="cantidad_mod" class="block text-gray-700">Cantidad</label>
                    <input type="number" id="cantidad_mod" name="cantidad" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="precio_costo_mod" class="block text-gray-700">Precio de Costo</label>
                    <input type="number" id="precio_costo_mod" name="precio_costo" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="precio_venta_mod" class="block text-gray-700">Precio de Venta</label>
                    <input type="number" id="precio_venta_mod" name="precio_venta" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="precio_por_mayor_mod" class="block text-gray-700">Precio por Mayor</label>
                    <input type="number" id="precio_por_mayor_mod" name="precio_por_mayor" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="activo_mod" class="block text-gray-700">Estado</label>
                    <select id="activo_mod" name="activo" class="w-full px-3 py-2 border rounded-lg">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="imagen_mod" class="block text-gray-700">Imagen</label>
                    <input type="file" id="imagen_mod" name="imagen" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="flex justify-end">
                    <button type="button" id="cancelarModalModificar" class="px-4 py-2 bg-gray-600 text-white rounded-lg mr-2">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fin Pestaña Modal para modificar Categoria -->

<!--Pestaña Modal para Agregar Descuento-->
<div id="modalAgregarDescuento" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-1/2">
        <div class="flex justify-between items-center bg-gray-800 text-white px-4 py-2 rounded-t-lg">
            <h3 class="text-lg font-semibold">Agregar Descuento</h3>
            <button id="closeModal" class="text-white">&times;</button>
        </div>
        <div class="p-6">
            <form action="{{ url('/descuento/agregar') }}" method="post" enctype="multipart/form-data" id="formAgregarProducto">
                @csrf
                <div class="mb-4">
                    <label for="codigo_descuento" class="block text-gray-700">Código de Descuento</label>
                    <input type="text" id="codigo_descuento" name="codigo_descuento" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="descripcion_descuento" class="block text-gray-700">Descripción de Descuento</label>
                    <textarea id="descripcion_descuento" name="descripcion_descuento" class="w-full px-3 py-2 border rounded-lg"></textarea>
                </div>
                <div class="mb-4">
                    <label for="porcentaje" class="block text-gray-700">Porcentaje de Descuento</label>
                    <input type="number" id="porcentaje" name="porcentaje" class="w-full px-3 py-2 border rounded-lg" required>
                </div>
                <div class="mb-4">
                    <label for="activo" class="block text-gray-700">Estado</label>
                    <select id="activo" name="activo" class="w-full px-3 py-2 border rounded-lg">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <div class="flex justify-end">
                    <button type="button" id="cancelarModal" class="px-4 py-2 bg-gray-600 text-white rounded-lg mr-2">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Agregar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fin Pestaña Modal para Agregar Descuento-->

<!-- Pestaña Modal para modificar Descuento -->
<div id="modalModificarProducto" class="fixed inset-0 bg-gray-800 bg-opacity-75 flex items-center justify-center hidden">
    <div class="bg-white rounded-lg shadow-lg w-1/2">
        <div class="flex justify-between items-center bg-gray-800 text-white px-4 py-2 rounded-t-lg">
            <h3 class="text-lg font-semibold">Modificar Producto</h3>
            <button id="closeModalModificar" class="text-white">&times;</button>
        </div>
        <div class="p-6">
            <form id="formModificarProducto">
                <input type="hidden" id="id_producto" name="id_producto">
                <div class="mb-4">
                    <label for="nombre_producto_mod" class="block text-gray-700">Nombre del Producto</label>
                    <input type="text" id="nombre_producto_mod" name="nombre_producto" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="descripcion_mod" class="block text-gray-700">Descripción</label>
                    <textarea id="descripcion_mod" name="descripcion" class="w-full px-3 py-2 border rounded-lg"></textarea>
                </div>
                <div class="mb-4">
                    <label for="cantidad_mod" class="block text-gray-700">Cantidad</label>
                    <input type="number" id="cantidad_mod" name="cantidad" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="precio_costo_mod" class="block text-gray-700">Precio de Costo</label>
                    <input type="number" id="precio_costo_mod" name="precio_costo" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="precio_venta_mod" class="block text-gray-700">Precio de Venta</label>
                    <input type="number" id="precio_venta_mod" name="precio_venta" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="precio_por_mayor_mod" class="block text-gray-700">Precio por Mayor</label>
                    <input type="number" id="precio_por_mayor_mod" name="precio_por_mayor" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="mb-4">
                    <label for="activo_mod" class="block text-gray-700">Estado</label>
                    <select id="activo_mod" name="activo" class="w-full px-3 py-2 border rounded-lg">
                        <option value="1">Activo</option>
                        <option value="0">Inactivo</option>
                    </select>
                </div>
                <div class="mb-4">
                    <label for="imagen_mod" class="block text-gray-700">Imagen</label>
                    <input type="file" id="imagen_mod" name="imagen" class="w-full px-3 py-2 border rounded-lg">
                </div>
                <div class="flex justify-end">
                    <button type="button" id="cancelarModalModificar" class="px-4 py-2 bg-gray-600 text-white rounded-lg mr-2">Cancelar</button>
                    <button type="submit" class="px-4 py-2 bg-blue-600 text-white rounded-lg">Modificar</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Fin Pestaña Modal para modificar Descuento -->

<script>
  // scripts.js
  document.querySelector('.relative .btn-opciones').addEventListener('click', function() {
  this.nextElementSibling.classList.toggle('hidden');
  });

  document.querySelectorAll('.sidebar li').forEach(item => {
  item.addEventListener('click', function() {
      document.getElementById('sidebar').classList.toggle('sidebar-expanded');
      document.getElementById('sidebar').classList.toggle('sidebar-collapsed');
      document.getElementById('logout').classList.toggle('hidden');
      document.getElementById('logout-hidden').classList.toggle('hidden');
      document.querySelectorAll('.sidebar span').forEach(span => {
      span.classList.toggle('hidden');
      });
  });
  });

  document.getElementById('inventario-menu').addEventListener('click', function() {
  document.getElementById('inventario-submenu').classList.toggle('sidebar-dropdown-active');
  });

  // Lógica para cambiar entre pestañas
  document.querySelectorAll(".tab-link").forEach((tab) => {
      tab.addEventListener("click", function () {
          document.querySelectorAll(".tab-content").forEach((content) => content.classList.add("hidden"));
          document.getElementById(this.dataset.tab).classList.remove("hidden");

          document.querySelectorAll(".tab-link").forEach((t) => t.classList.remove("border-black", "text-black"));
          this.classList.add("border-black", "text-black");
      });
  });

  //Ventana modal 
  document.getElementById('btnAgregarProducto').addEventListener('click', function() {
      document.getElementById('modalAgregarProducto').classList.remove('hidden');
  });

  document.getElementById('closeModal').addEventListener('click', function() {
      document.getElementById('modalAgregarProducto').classList.add('hidden');
  });

  document.getElementById('cancelarModal').addEventListener('click', function() {
      document.getElementById('modalAgregarProducto').classList.add('hidden');
  });
//
  document.getElementById('btnAgregarCategoria').addEventListener('click', function() {
      document.getElementById('modalAgregarCategoria').classList.remove('hidden');
  });

  document.getElementById('closeModal').addEventListener('click', function() {
      document.getElementById('modalAgregarCategoria').classList.add('hidden');
  });

  document.getElementById('cancelarModal').addEventListener('click', function() {
      document.getElementById('modalAgregarCategoria').classList.add('hidden');
  });
//
  document.getElementById('btnAgregarDescuento').addEventListener('click', function() {
      document.getElementById('modalAgregarDescuento').classList.remove('hidden');
  });

  document.getElementById('closeModal').addEventListener('click', function() {
      document.getElementById('modalAgregarDescuento').classList.add('hidden');
  });

  document.getElementById('cancelarModal').addEventListener('click', function() {
      document.getElementById('modalAgregarDescuento').classList.add('hidden');
  });

document.querySelectorAll('.btnModificarProducto').forEach(button => {
  button.addEventListener('click', function() {
      document.getElementById('id_producto').value = this.dataset.id;
      document.getElementById('nombre_producto_mod').value = this.dataset.nombre;
      document.getElementById('descripcion_mod').value = this.dataset.descripcion;
      document.getElementById('cantidad_mod').value = this.dataset.cantidad;
      document.getElementById('precio_costo_mod').value = this.dataset.precioCosto;
      document.getElementById('precio_venta_mod').value = this.dataset.precioVenta;
      document.getElementById('precio_por_mayor_mod').value = this.dataset.precioMayor;
      document.getElementById('activo_mod').value = this.dataset.activo;
      // Aquí puedes agregar lógica para mostrar la imagen actual si es necesario
      document.getElementById('modalModificarProducto').classList.remove('hidden');
  });
});

document.getElementById('closeModalModificar').addEventListener('click', function() {
  document.getElementById('modalModificarProducto').classList.add('hidden');
});

document.getElementById('cancelarModalModificar').addEventListener('click', function() {
  document.getElementById('modalModificarProducto').classList.add('hidden');
});

document.getElementById('formModificarProducto').addEventListener('submit', function(event) {
  event.preventDefault();
  // Aquí puedes agregar la lógica para enviar el formulario
  document.getElementById('modalModificarProducto').classList.add('hidden');
});

</script>

</body>
</html>