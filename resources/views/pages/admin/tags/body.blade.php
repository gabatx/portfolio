<?php
// Array con los colores de las etiquetas
$colorsTags = [
    'bg-primary',
    'bg-secondary',
    'bg-success',
    'bg-danger',
    'bg-warning',
    'bg-info',
    'bg-light',
    'bg-dark',
    'bg-link',
];
?>
<div class="col-md-12 col-sm-12 mt-5">
    <div class="x_panel">
        <div class="x_title">
            <h2 class="text-color-default">Listado de etiquetas</h2>
            {{-- Crear un ejemplo de cada color  --}}

            <div class="clearfix"></div>
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>
        <div class="x_content m-auto">
            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action col-6 m-auto">
                    <thead>
                    <tr class="headings align-bottom">
                        <div class=" text-center">
                            @foreach($colorsTags as $color)
                                <span class="badge {{ $color }} m-1 mb-3 mt-2 text-white">{{ $color }}</span>
                            @endforeach
                        </div>
                        <th class="column-title table-col-sm">
                            {{-- <input type="checkbox" id="check-all" class="flat"> --}}
                            #
                        </th>
                        <th class="column-title table-col-lg">Nombre</th>
                        <th class="column-title table-col-lg">Color</th>
                        <th class="column-title no-link last"><span class="nobr">Acción</span>
                        </th>
                        <th class="bulk-actions" colspan="7">
                            <a class="antoo" style="color:#fff; font-weight:500;">Acciones en bloque ( <span
                                    class="action-cnt"> </span> )
                                <i class="fa fa-chevron-down"></i>
                            </a>
                        </th>
                    </tr>
                    </thead>
                    <tbody>

                    {{-- Impresión de datos --}}
                    @foreach($tags as $tag)
                        <tr class="even pointer">
                            <form action="{{ route('tag.update', $tag->id) }}" method="post" class="d-inline">
                                @csrf
                                @method('PUT')
                                <td class="a-center ">
                                    {{-- input type="checkbox" class="flat" name="table_records"> --}}
                                    #
                                </td>
                                {{-- Nombre --}}
                                <td class="text-color-default">
                                    <label for="name"></label>
                                    <input type="text" name="name" id="name" class="form-control {{ $tag->color }}}"
                                           value="{{ $tag->name }}">
                                </td>
                                {{-- Colores --}}
                                <td class="text-color-default">
                                    {{-- Select con los $colorsTags con el fondo coloreado --}}
                                    <label for="color"></label>
                                    <select name="color" id="color" class="form-control">
                                        @foreach($colorsTags as $color)
                                            <option value="{{ $color }}" {{ $tag->color == $color ? 'selected' : '' }}>
                                                {{ $color }}
                                            </option>
                                        @endforeach
                                    </select>
                                </td>
                                <td class="last">
                                    {{-- Botones de acción --}}

                                    <button type="submit" class="btn btn-success"/>
                                    <i class="fa fa-trash"></i>
                                    Actualizar
                            </form>
                            <form action="{{ route('tag.destroy', $tag->id) }}" method="post"
                                  class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger"/>
                                <i class="fa fa-trash"></i>
                                Eliminar
                            </form>
                        </tr>
                    @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

