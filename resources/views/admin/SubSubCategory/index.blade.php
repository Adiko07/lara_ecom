@extends('admin.admin_master')



@section('dashboard_content')

    @include('admin.dashboard_layout.breadcrumb', [

    'name' => 'Sous sous-catégories',

    'url' => "subsubcategories.index",

    'section_name' => 'Toutes les sous sous-catégories'

    ])

    <section class="content">

        <div class="row">

            <div class="col-md-12 col-lg-12">

                <div class="box">

                    <div class="box-header with-border d-flex justify-content-between align-items-center">

                        <h3 class="box-title">Toutes les sous sous-catégories</h3>

                        <a href="{{ route('subsubcategories.create') }}" class="btn btn-primary">Nouvelle sous sous-catégorie</a>

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

                                                    <th>Sous sous-catégorie</th>

                                                    <th>Sous-catégorie</th>

                                                    <th>Catégorie parente</th>

                                                    <th>Action</th>

                                                </tr>

                                            </thead>

                                            <tbody>

                                                @foreach ($subsubCategories as $item)

                                                <tr role="row" class="odd">

                                                    <td>{{ $loop->index+1 }}</td>

                                                    <td class="sorting_1">{{ $item->subsubcategory_name_en }}</td>

                                                    <td>{{ $item->subcategory->subcategory_name_en }}</td>

                                                    <td>{{ $item->category->category_name_en }}</td>

                                                    <td>

                                                        <div class="input-group">

                                                            <a href="{{ route('subsubcategories.edit', $item) }}" class="btn btn-info" title="Edit Data"><i class="fa fa-pencil"></i></a>

                                                            <form action="{{ route('subsubcategories.destroy', $item) }}" method="post">

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
                                    {{ $subsubCategories->links() }}
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

@endsection

