@extends('admin.admin_master')
@section('admin')
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<div class="page-content">
   <div class="container-fluid">

      <div class="row">
         <div class="col-12"> 
            <div class="card">
               <div class="card-body">

                     <h4 class="card-title">ແກ້ໄຂ ຂໍ້ມູນຜູ້ສະໜອງ</h4><br><br>

                     
                     <form method="post" action="{{ route('supplier.update') }}" id="myForm">
                        @csrf

                        <input type="hidden" name="id" value="{{ $supplier->id }}">

                        <div class="row mb-3">
                           <label for="example-text-input" class="col-sm-2 col-form-label">ຊື່ຜູ້ສະໜອງ</label>
                           <div class="form-group col-sm-10">
                              <input name="name" class="form-control" value="{{ $supplier->name }}" type="text">
                           </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                           <label for="example-text-input" class="col-sm-2 col-form-label">ເບີໂທ</label>
                           <div class="form-group col-sm-10">
                              <input name="mobile_no" class="form-control" value="{{ $supplier->mobile_no }}" type="text">
                           </div>
                        </div>
                        <!-- end row -->

                        <div class="row mb-3">
                           <label for="example-text-input" class="col-sm-2 col-form-label">ອີເມວ</label>
                           <div class="form-group col-sm-10">
                              <input name="email" class="form-control" value="{{ $supplier->email }}" type="email">
                           </div>
                        </div>

                        <!-- end row -->
                        <div class="row mb-3">
                           <label for="example-text-input" class="col-sm-2 col-form-label">ທີ່ຢູ່</label>
                           <div class="form-group col-sm-10">
                              <input name="address" class="form-control" value="{{ $supplier->address }}" type="text">
                           </div>
                        </div>
                        <!-- end row -->

                        <input type="submit" class="btn btn-dark waves-effect waves-light" value="ບັນທຶກ">

                     </form>
               </div>
            </div>
         </div> <!-- end col -->
      </div>

   </div>
</div>

<script type="text/javascript">
    $(document).ready(function (){
        $('#myForm').validate({
            rules: {
                name: {
                    required : true,
                }, 
                mobile_no: {
                    required : false,
                },
                email: {
                    required : false,
                },
                address: {
                    required : false,
                },
            },
            messages :{
                name: {
                    required : 'ຍັງບໍ່ໄດ້ ຕື່ມ ຊື່ຜູ້ສະໜ້ອງໃສ່',
                },
                mobile_no: {
                    required : 'ຍັງບໍ່ໄດ້ ໃສ່ເບີໂທ ຜູ້ສະໜອງ',
                },
                email: {
                    required : 'ຍັງບໍ່ໄດ້ ໃສ່ ອີເມວ ຜູ້ສະໜອງ',
                },
                address: {
                    required : 'ຍັງບໍ່ໄດ້ໃສ່ ທີ່ຢູ່ຜູ້ສະໜອງ',
                },
            },
            errorElement : 'span', 
            errorPlacement: function (error,element) {
                error.addClass('invalid-feedback');
                element.closest('.form-group').append(error);
            },
            highlight : function(element, errorClass, validClass){
                $(element).addClass('is-invalid');
            },
            unhighlight : function(element, errorClass, validClass){
                $(element).removeClass('is-invalid');
            },
        });
    });
    
</script>

@endsection