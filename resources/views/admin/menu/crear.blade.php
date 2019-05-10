@extends("theme.$theme.layout")
@section('titulo')
    Sistema Menus
@endsection
@section('contenido')
    <div class="row">
        <div class="col-lg-12">
            <div class="box box-danger">
                <div class="box-header with-border">
                  <h3 class="box-title">Crear  Menu</h3>
                </div>
                <form class="form-horizontal">
                    <div class="box-body">
                        @include('admin.menu.form')
                    </div>
                    <div class="box-footer">

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection