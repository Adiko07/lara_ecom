@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => 'Caroussel',
    'url' => "slider.index",
    'section_name' => 'Tout les caroussels'
    ])
    <section class="content">
        <div class="row">
            <div class="col-md-12 col-lg-12">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">Liste de vos Caroussels</h3>
                        <a href="{{ route('slider.create') }}" class="btn btn-primary">Nouveau caroussel</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <div class="table-responsive">
                            <div id="example1_wrapper" class="dataTables_wrapper container-fluid dt-bootstrap4">
                                <div class="row">
                                    <div class="col-sm-12">
                                        <table id="" class="table table-bordered table-striped dataTable"
                                            role="grid" aria-describedby="example1_info">
                                            <thead>
                                                <tr role="row">
                                                    <th>#</th>
                                                    <th>Image</th>
                                                    <th>Nom du caroussel</th>
                                                    <th>Titre du caroussel</th>
                                                    <th>Statut</th>
                                                    <th>Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                @foreach ($sliders as $item)
                                                <tr role="row" class="odd">
                                                    <td>{{ $loop->index+1 }}</td>
                                                    <td>
                                                        <img src="{{ asset($item->slider_image) }}" alt="" style="width: 70px; height:40px;">
                                                    </td>
                                                    <td class="sorting_1">{{ $item->slider_name }}</td>
                                                    <td>{{ $item->slider_title }}</td>
                                                    <td>                                                        <input data-id="{{$item->id}}" class="toggle-class" type="checkbox" data-onstyle="success" data-offstyle="danger" data-toggle="toggle" data-on="Active" data-off="InActive" {{ $item->slider_status ? 'checked' : '' }}>
                                                    </td>
                                                    <td>
                                                        <div class="input-group">
                                                            <a href="{{ route('slider.edit', $item) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>
                                                            <form action="{{ route('slider.destroy', $item) }}" method="post">
                                                                @method('DELETE')
                                                                @csrf
                                                                <a href="" class="btn btn-danger" title="Delete Data" id="delete" onclick="event.preventDefault();
                                                                this.closest('form').submit();"><i class="fa fa-trash"></i></a>
                                                            </form>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                    {{ $sliders->links() }}
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- /.box-body -->
                </div>
                <!-- /.box -->
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
    @section('dashboard_script')
    <link href="https://gitcdn.github.io/bootstrap-toggle/2.2.2/css/bootstrap-toggle.min.css" rel="stylesheet">
    <script src="https://gitcdn.github.io/bootstrap-toggle/2.2.2/js/bootstrap-toggle.min.js"></script>
    <script>
        $(function() {
            $('.toggle-class').change(function() {
                var status = $(this).prop('checked') == true ? 1 : 0;
                var slider_id = $(this).data('id');

                $.ajax({
                    type: "GET",
                    dataType: "json",
                    url: '/admin/changesliderstatus',
                    data: {'status': status, 'slider_id': slider_id},
                    success: function(data){
                        console.log(data.success)
                    }
                });
            })
        })
    </script>
    @endsection
@endsection
