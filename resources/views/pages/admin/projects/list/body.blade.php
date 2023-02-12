<div class="col-md-12 col-sm-12 mt-5 ">
    <div class="x_panel">
        <div class="x_title">
            <h2 class="text-color-default">Listado de proyectos </h2>
            <div class="clearfix"></div>
            @if(session('message'))
                <div class="alert alert-success">
                    {{ session('message') }}
                </div>
            @endif
        </div>

        <div class="x_content">

            <div class="table-responsive">
                <table class="table table-striped jambo_table bulk_action">
                    <thead>
                    <tr class="headings">
                        <th>
                        {{-- <input type="checkbox" id="check-all" class="flat"> --}}
                            #
                        </th>
                        <th class="column-title table-col-sm">Portada</th>
                        <th class="column-title table-col-lg">Título</th>
                        <th class="column-title">Imágenes</th>
                        <th class="column-title table-col-sm">Inicio</th>
                        <th class="column-title table-col-sm">Activo</th>
                        <th class="column-title table-col-lg">Etiquetas</th>
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
                    @foreach($projects as $project)
                        <tr class="even pointer">
                            <td class="a-center ">
                                {{-- input type="checkbox" class="flat" name="table_records"> --}}
                                #
                            </td>
                            <td class="text-color-default">
                                <img src="{{ asset('storage') . '/' . $project->cover_image }}" alt="cover" width="70">
                            </td>
                            {{-- Imágenes --}}
                            <td class="text-color-default">{{ $project->title }}</td>
                            <td class="text-color-default">
                                @if($project->images->count() > 0)
                                    <ul class="list-inline">
                                        @foreach($project->images as $name)
                                            <li>
                                                <img src="{{ asset('storage') . '/' . $name }}" class="avatar" alt="Avatar">
                                            </li>
                                        @endforeach
                                    </ul>
                                @endif
                            </td>
                            <td class="text-color-default">{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $project->start_date)->format('d/m/Y') ?? '' }}</td>
                            <td class="text-color-default text-center">{{ $project->is_active ? 'Si' : 'No' }}</td>
                            {{-- Tags --}}
                            <td class="text-color-default">
                                {{-- Mostrar los tag en un select desplegable --}}
                                    <?php //dd($projects['23']->tags) ?>

                                    @foreach($project->tags as $tag)
                                    <span class="badge {{$tag->color}} text-white">{{ $tag = $tag->name }}</span>
                                    @endforeach


                            </td>
                            <td class="last">
                                    <a href="{{ url('/project/' . $project->id) }}" class="" target="_blank">
                                        <i class="fa fa-eye"></i> Ver
                                    </a>
                                <span class="text-color-default m-2"> | </span>
                                <a href="{{ url('edit-project/'.$project->id.'/edit') }}" class="">
                                    <i class="fa fa-pencil"></i> Editar
                                </a>
                                <span class="text-color-default m-2"> | </span>
                                <form action="{{ url('delete-project/'.$project->id) }}" method="post" class="d-inline">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn text_color_default p-0 m-0" />
                                    <i class="fa fa-trash"></i> Eliminar
                                </form>
                            </td>
                        </tr>

                    @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>

