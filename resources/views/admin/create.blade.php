@extends('admin.admin_master')

@section('dashboard_content')
    @include('admin.dashboard_layout.breadcrumb', [
    'name' => 'Sub-Sub Category',
    'url' => "subsubcategories.index",
    'section_name' => 'Create Sub-Sub Category'
    ])
    <section class="content">
        <div class="row">
            {{-- Add Category Page --}}
            <div class="col-md-8 col-lg-8 offset-2">
                <div class="box">
                    <div class="box-header with-border d-flex justify-content-between align-items-center">
                        <h3 class="box-title">Nouvelle sous sous-catégorie</h3>
                        <a href="{{ route('subsubcategories.index') }}" class="btn btn-primary">Liste des sous sous-catégories</a>
                    </div>
                    <!-- /.box-header -->
                    <div class="box-body">
                        <form action="{{ route('subsubcategories.store') }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <h5>Sous sous-catégorie<span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="subsubcategory_name_en" class="form-control" required="" data-validation-required-message="Ce champs est requis"> <div class="help-block"></div>
                                </div>
                                @error('subsubcategory_name_en')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            {{--<div class="form-group">
                                <h5>Sub-SubCategory Name BN <span class="text-danger">*</span></h5>
                                <div class="controls">
                                    <input type="text" name="subsubcategory_name_bn" class="form-control" required="" data-validation-required-message="Ce champs est requis"> <div class="help-block"></div>
                                </div>
                                @error('subsubcategory_name_bn')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>--}}
                            <div class="form-group">
                                <h5>Attribuer une catégorie <span class="text-danger">*</span></h5>
                                <select class="custom-select" aria-label="Default select example" name="category_id">
                                    <option selected>Select Category Name</option>
                                    @foreach ($categories as $category)
                                        <option value="{{ $category->id }}">{{ $category->category_name_en }}</option>
                                    @endforeach
                                  </select>
                                @error('category_id')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="form-group">
                                <h5>Attribuer une sous-catégorie <span class="text-danger">*</span></h5>
                                <select class="custom-select" name="subcategory_id" aria-label="Default select example">
                                    <option value="" selected="" disabled="">Select SubCategory Name</option>
                                </select>
                                @error('subcategory_id')
                                    <span class="alert text-danger">{{ $message }}</span>
                                @enderror
                            </div>

                            <div class="text-xs-right">
                                <button type="submit" class="btn btn-rounded btn-info">Ajouter</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <!-- /.col -->
        </div>
        <!-- /.row -->
    </section>
@section('dashboard_script')
<script type="text/javascript">
    $(document).ready(function() {
      $('select[name="category_id"]').on('change', function(){
          var category_id = $(this).val();
          if(category_id) {
              $.ajax({
                  url: "{{  url('/admin/category/subcategory/ajax') }}/"+category_id,
                  type:"GET",
                  dataType:"json",
                  success:function(data) {
                     var d =$('select[name="subcategory_id"]').empty();
                        $.each(data, function(key, value){
                            $('select[name="subcategory_id"]').append('<option value="'+ value.id +'">' + value.subcategory_name_en + '</option>');
                        });
                  },
              });
          } else {
              alert('danger');
          }
      });
  });
  </script>
@endsection
@endsection
