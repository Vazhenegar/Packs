
@extends("AdminPanel/layouts/master")

@section("content")

    <div class="col-md-4 ">
        <!-- general form elements -->
        <div class="card row card-primary">
            <div class="card-header">
                <h3 class="card-title">دسته بندی تیکت ها </h3>
            </div>
            <!-- /.card-header -->
            <!-- form start -->
            <form action="{{route("store_category")}}" role="form" method="post" >

                <div class="card-body row">
                    <div class="form-group col-12">
                        <label>عنوان</label>

                        @csrf
                        <input type="text" class="form-control"  name="title" placeholder="عنوان را وارد کنید">
                    </div>



                    <div class="form-group">

                        <button type="submit" class="btn btn-sm mt-3 btn-primary">
                            ایجاد دسته بندی جدید
                        </button>
                    </div>


                </div>




                <!-- /.card-body -->



                @if ($errors->any())
                    <div class="alert alert-danger">
                        <ul>
                            @foreach ($errors->all() as $error)
                                <li>{{ $error }}</li>
                            @endforeach
                        </ul>
                    </div>
                @endif
            </form>
            @if(isset($category) && !empty($category) )
            <div class="col-12 p-2">
                <hr>
            <span class=" badge badge-info badge-pill">لیست دسته بندی ها</span>


                @foreach($category as $cate)
                <form method="post" action="{{route('delete_category')}}" class="bg-primary-gradient col-12 mb-2 mt-2 p-1 rounded">
                <span>{{$cate->title}}</span>
                <span onclick='set_confirm(this,removeCat)'  data-confirm="یا حذف شود" class="badge bg-danger float-left link-black"><i class="fa fa-remove"></i></span>
                    <input type="hidden" name="category_id" value="{{$cate->id}}">
                    @method('delete')
                    @csrf
                </form>

                @endforeach




            </div>
            @endif
        </div>
        <!-- /.card -->


    </div>


    <script>

        function set_confirm(element,func,elsfun=function () {alert("کنسل شد");}) {
            if (confirm($(element).data("confirm"))) {
                func(element);
            } else {
                elsfun(element);
            }


        }
        function removeCat (el) {$(el).parent().hide(1000).submit()}

    </script>

@endsection
