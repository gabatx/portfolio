<div class="form-group row">
    <label class="control-label col-md-3 col-sm-3 ">Título</label>
    <div class="col-md-9 col-sm-9">
        <input
            type="text"
            class="form-control"
            name="title"
            required="required"
            placeholder="Ej: Conversor"
            value="{{ $project->title ?? ''}}"
        />
    </div>
</div>
<div class="form-group row">
    <label class="control-label col-md-3 col-sm-3 ">Subtítulo</label>
    <div class="col-md-9 col-sm-9 ">
        <input
            type="text"
            name="subtitle"
            class="form-control"
            placeholder="Ej: Herramienta intuitiva para convertir unidades"
            value="{{ $project->subtitle ?? ''}}"
        >
    </div>
</div>
<div class="form-group row ">
    <label class="control-label col-md-3 col-sm-3 ">Url del repositorio</label>
    <div class="col-md-9 col-sm-9 ">
        <input
            type="text"
            class="form-control"
            name="url_repo"
            required="required"
            placeholder="Ej: https://github.com/gabatx/proyecto-git"
            value="{{ $project->url_repo ?? ''}}"
        />
    </div>
</div>
<div class="form-group row control-group row">
    <label class="control-label col-md-3 col-sm-3">Etiquetas</label>
    <div class="col-md-9 col-sm-9 ">
        <input
            id="tags_1"
            type="text"
            class="tags form-control"
            value=
                "
            @if(isset($project) && $project->tags->count() > 0)
                @foreach($project->tags as $tag){{ $tag }}@if(!$loop->last),@endif @endforeach
            @else
                @foreach($tags as $tag){{ $tag->name }}@if(!$loop->last),@endif @endforeach
            @endif
                "
            name="tags[]"
        />
        <div id="suggestions-container"
             style="position: relative; float: left; width: 250px; margin: 10px;"></div>
    </div>
</div>

<div class="form-group row">
    <label class="control-label col-md-3 col-sm-3 ">Fechas</label>
    <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_3 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text"  value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>
    <fieldset>
        <div class="control-group">
            <div class="controls">
                <div class="col-md-11 xdisplay_inputx form-group row has-feedback">
                    <input
                        type="text"
                        class="form-control has-feedback-left"
                        id="single_cal1"
                        placeholder="Fecha comienzo"
                        aria-describedby="inputSuccess2Status3"
                        name="start_date"
                        @if(isset($project))

                            value="{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $project->start_date)->format('d/m/Y') ?? '' }}"
                        @endif
                    />
                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                    <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                </div>
            </div>
        </div>
    </fieldset>
    <div class="daterangepicker dropdown-menu ltr single opensright show-calendar picker_3 xdisplay"><div class="calendar left single" style="display: block;"><div class="daterangepicker_input"><input class="input-mini form-control active" type="text" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th class="prev available"><i class="fa fa-chevron-left glyphicon glyphicon-chevron-left"></i></th><th colspan="5" class="month">Oct 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">25</td><td class="off available" data-title="r0c1">26</td><td class="off available" data-title="r0c2">27</td><td class="off available" data-title="r0c3">28</td><td class="off available" data-title="r0c4">29</td><td class="off available" data-title="r0c5">30</td><td class="weekend available" data-title="r0c6">1</td></tr><tr><td class="weekend available" data-title="r1c0">2</td><td class="available" data-title="r1c1">3</td><td class="available" data-title="r1c2">4</td><td class="available" data-title="r1c3">5</td><td class="available" data-title="r1c4">6</td><td class="available" data-title="r1c5">7</td><td class="weekend available" data-title="r1c6">8</td></tr><tr><td class="weekend available" data-title="r2c0">9</td><td class="available" data-title="r2c1">10</td><td class="available" data-title="r2c2">11</td><td class="available" data-title="r2c3">12</td><td class="available" data-title="r2c4">13</td><td class="available" data-title="r2c5">14</td><td class="weekend available" data-title="r2c6">15</td></tr><tr><td class="weekend available" data-title="r3c0">16</td><td class="available" data-title="r3c1">17</td><td class="today active start-date active end-date available" data-title="r3c2">18</td><td class="available" data-title="r3c3">19</td><td class="available" data-title="r3c4">20</td><td class="available" data-title="r3c5">21</td><td class="weekend available" data-title="r3c6">22</td></tr><tr><td class="weekend available" data-title="r4c0">23</td><td class="available" data-title="r4c1">24</td><td class="available" data-title="r4c2">25</td><td class="available" data-title="r4c3">26</td><td class="available" data-title="r4c4">27</td><td class="available" data-title="r4c5">28</td><td class="weekend available" data-title="r4c6">29</td></tr><tr><td class="weekend available" data-title="r5c0">30</td><td class="available" data-title="r5c1">31</td><td class="off available" data-title="r5c2">1</td><td class="off available" data-title="r5c3">2</td><td class="off available" data-title="r5c4">3</td><td class="off available" data-title="r5c5">4</td><td class="weekend off available" data-title="r5c6">5</td></tr></tbody></table></div></div><div class="calendar right" style="display: none;"><div class="daterangepicker_input"><input class="input-mini form-control" type="text" value="" style="display: none;"><i class="fa fa-calendar glyphicon glyphicon-calendar" style="display: none;"></i><div class="calendar-time" style="display: none;"><div></div><i class="fa fa-clock-o glyphicon glyphicon-time"></i></div></div><div class="calendar-table"><table class="table-condensed"><thead><tr><th></th><th colspan="5" class="month">Nov 2016</th><th class="next available"><i class="fa fa-chevron-right glyphicon glyphicon-chevron-right"></i></th></tr><tr><th>Su</th><th>Mo</th><th>Tu</th><th>We</th><th>Th</th><th>Fr</th><th>Sa</th></tr></thead><tbody><tr><td class="weekend off available" data-title="r0c0">30</td><td class="off available" data-title="r0c1">31</td><td class="available" data-title="r0c2">1</td><td class="available" data-title="r0c3">2</td><td class="available" data-title="r0c4">3</td><td class="available" data-title="r0c5">4</td><td class="weekend available" data-title="r0c6">5</td></tr><tr><td class="weekend available" data-title="r1c0">6</td><td class="available" data-title="r1c1">7</td><td class="available" data-title="r1c2">8</td><td class="available" data-title="r1c3">9</td><td class="available" data-title="r1c4">10</td><td class="available" data-title="r1c5">11</td><td class="weekend available" data-title="r1c6">12</td></tr><tr><td class="weekend available" data-title="r2c0">13</td><td class="available" data-title="r2c1">14</td><td class="available" data-title="r2c2">15</td><td class="available" data-title="r2c3">16</td><td class="available" data-title="r2c4">17</td><td class="available" data-title="r2c5">18</td><td class="weekend available" data-title="r2c6">19</td></tr><tr><td class="weekend available" data-title="r3c0">20</td><td class="available" data-title="r3c1">21</td><td class="available" data-title="r3c2">22</td><td class="available" data-title="r3c3">23</td><td class="available" data-title="r3c4">24</td><td class="available" data-title="r3c5">25</td><td class="weekend available" data-title="r3c6">26</td></tr><tr><td class="weekend available" data-title="r4c0">27</td><td class="available" data-title="r4c1">28</td><td class="available" data-title="r4c2">29</td><td class="available" data-title="r4c3">30</td><td class="off available" data-title="r4c4">1</td><td class="off available" data-title="r4c5">2</td><td class="weekend off available" data-title="r4c6">3</td></tr><tr><td class="weekend off available" data-title="r5c0">4</td><td class="off available" data-title="r5c1">5</td><td class="off available" data-title="r5c2">6</td><td class="off available" data-title="r5c3">7</td><td class="off available" data-title="r5c4">8</td><td class="off available" data-title="r5c5">9</td><td class="weekend off available" data-title="r5c6">10</td></tr></tbody></table></div></div><div class="ranges" style="display: none;"><div class="range_inputs"><button class="applyBtn btn btn-sm btn-success" type="button">Apply</button> <button class="cancelBtn btn btn-sm btn-default" type="button">Cancel</button></div></div></div>
    <fieldset>
        <div class="control-group">
            <div class="controls">
                <div class="col-md-11 xdisplay_inputx form-group row has-feedback">

                    <input
                        type="text"
                        class="form-control has-feedback-left"
                        id="single_cal2"
                        placeholder="Fecha fin"
                        aria-describedby="inputSuccess2Status3"
                        name="end_date"
                        @if(isset($project))
                            value="{{ \Carbon\Carbon::createFromFormat('Y-m-d H:i:s', $project->end_date)->format('d/m/Y') ?? '' }}"
                        @endif
                    />
                    <span class="fa fa-calendar-o form-control-feedback left" aria-hidden="true"></span>
                    <span id="inputSuccess2Status3" class="sr-only">(success)</span>
                </div>
            </div>
        </div>
    </fieldset>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="control-label col-md-3 col-sm-3 ">Portada</label>
    <div class="col-md-9 col-sm-9 ">
        <ul class="list-inline">
            @if(isset($project->cover_image))
                <li>
                    <div class="col-md-55">
                        <div class="thumbnail-admin">
                            <div class="image view view-first">
                                <img style="width: 100%; display: block;"
                                     src="{{ asset('storage') . '/' . $project->cover_image }}" alt="image"/>
                                <div class="mask">
                                    <p></p>
                                    <div class="tools tools-bottom">
                                        <a href="#">
                                            <i class="fa fa-eye"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </li>
            @else
                <li>
                    <p>No hay portada</p>
                </li>
            @endif
        </ul>
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="control-label col-md-3 col-sm-3 ">Subir Portada</label>
    <div class="col-md-9 col-sm-9 ">
        <input
            type="file"
            name="cover_image"
            id="cover"
            class="form-control"
        />
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="control-label col-md-3 col-sm-3 ">Imágenes</label>
    <div class="col-md-9 col-sm-9 ">
        <ul class="list-inline">
            @if(isset($project->images))
                @foreach($project->images as $image)
                    <li id="{{ $image }}">
                        <div class="col-md-55">
                            <div class="thumbnail-admin">
                                <div class="image view view-first">
                                    <img style="width: 100%; display: block;" src="{{ asset('storage') . '/' . $image }}" alt="image"/>
                                    <div class="mask">
                                        <p></p>
                                        <div class="tools tools-bottom">
                                            <a href="#"><i class="fa fa-eye"></i></a>
                                            {{-- Al pulsar sobre el icono de cerrar la imagen desaparece del dom. Guardar en un array de js los ids de las imágenes cerradas  --}}
                                               <a href="{{ route('delete-image.index', ['project_id' => $project->id, 'image_name' => $image]) }}" onclick="document.getElementById('{{ $image }}').remove();"><i class="fa fa-close"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                @endforeach
            @else
                <li>
                    <p>No hay imágenes</p>
                </li>
            @endif
        </ul>
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="control-label col-md-3 col-sm-3 ">Subir imágenes</label>
    <div class="col-md-9 col-sm-9 ">
        <input
            type="file"
            name="images[]"
            id="images"
            multiple
            class="form-control"
        />
    </div>
</div>

<div class="form-group row mt-4">
    <label class="control-label col-md-3 col-sm-3 ">Descripción</label>
    <div class="col-md-9 col-sm-9 ">
                            <textarea
                                type="text"
                                id="editor"
                                class="form-control"
                                name="description"
                            >{{ $project->description ?? '' }}</textarea>
    </div>
</div>

<div class="form-group row d-flex align-items-center">
    <label class="control-label col-md-3 col-sm-3 ">Activo</label>
    <div class="col-md-9 col-sm-9">
        <div class="">
            <label class="mb-0">
                <input
                    type="checkbox"
                    class="js-switch"
                    name = "is_active"
                    checked
                /> Activo
            </label>
        </div>
    </div>
</div>

<div class="ln_solid"></div>
<div class="form-group">
    <div class="col-md-9 col-sm-9  offset-md-3">
        @if(isset($project))
            <button type="button" class="btn btn-primary">Cancelar</button>
            <button type="submit" class="btn btn-success">Actualizar</button>
        @else
            <button type="button" class="btn btn-primary">Cancelar</button>
            <button type="reset" class="btn btn-primary">Reiniciar</button>
            <button type="submit" class="btn btn-success">Crear</button>
        @endif

    </div>
</div>

