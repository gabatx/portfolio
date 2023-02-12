<div class="d-flex justify-content-center mt-5" role="main">
    <div class="col-md-9  mt-lg-3">
        <div class="x_panel">
            <div class="x_title">
                <h2>Nuevo proyecto</h2>
                <div class="clearfix"></div>
            </div>
            <div class="x_content">
                <br/>

                <form action="{{ url('create-project?'. session('id')) }}" method="post" class="form-horizontal form-label-left"
                      enctype="multipart/form-data">
                    @csrf
                    @include('pages.admin.projects.config._field')
                </form>

            </div>
        </div>
    </div>
</div>
@push('scripts')
    <script type="text/javascript">
        $(function () {
            $('#datetimepicker1').datetimepicker({locale: 'es'});
        });
    </script>

    <script defer>
        ClassicEditor
            .create(document.querySelector('#editor'))
            .then(editor => {
                console.log(editor);
            })
            .catch(error => {
                console.error(error);
            });
    </script>
@endpush
