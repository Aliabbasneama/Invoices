@extends('layouts.admin')
@section('title')
    تعديل الضبط العام
@endsection
@section('contentheader')
   تعديل
@endsection
@section('contentheaderlink')
<a href="{{route('admin.adminPanelSetting.index')}}">الضبط</a>
@endsection
@section('contentheaderactive')
    تعديل 
@endsection

@section('content')


<div class="row">
        <div class="col-12">
          <div class="card">
            <div class="card-header">
              <h3 class="card-title card_title_center">تعديل الضبط العام</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
           @if (@isset($data) && !@empty($data))
               
           <form action="{{ route('admin.adminPanelSetting.update') }}" method="post" enctype="multipart/form-data">
           @csrf
           <div class="row">
            <div class="col-md-4">
               <div class="form-group">
                  <label>اسم الشركة</label>
                  <input name="system_name" id="system_name" class="form-control" value="{{ $data['system_name'] }}" placeholder="ادخل اسم الشركة" oninvalid="setCustomValidity('من فضلك ادخل هذا الحقل')" onchange="try{setCustomValidity('')}catch(e){}" >
                  @error('system_name')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label>عنوان الشركة</label>
                  <input name="address" id="address" class="form-control" value="{{ $data['address'] }}" placeholder="ادخل عنوان الشركة" oninvalid="setCustomValidity('من فضلك ادخل هذا الحقل')" onchange="try{setCustomValidity('')}catch(e){}"  >
                  @error('address')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror  
               </div>
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label>هاتف الشركة</label>
                  <input name="phone" id="phone" class="form-control" value="{{ $data['phone'] }}" placeholder="ادخل هاتف الشركة" oninvalid="setCustomValidity('من فضلك ادخل هذا الحقل')" onchange="try{setCustomValidity('')}catch(e){}" >
                  @error('phone')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror   
               </div>
              
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label> رسالة تنبيه اعلى الشاشه </label>
                  <input name="general_alert" id="general_alert" class="form-control" value="{{ $data['general_alert'] }}" placeholder=" ادخل رسالة تنبيه اعلى الشاشه "  oninvalid="setCustomValidity('من فضلك ادخل هذا الحقل')" onchange="try{setCustomValidity('')}catch(e){}" >
                  @error('general_alert')
                  <span class="text-danger">{{ $message }}</span>
                  @enderror   
               </div>
              
            </div>
            <div class="col-md-4">
               <div class="form-group">
                  <label>   لكو الشركة </label>
                  <div class="image">
                     <img class="custom_img" src="{{ asset('assets/admin/uploads').'/'.$data['photo'] }}"  alt="لوجو الشركة">       
                     <button type="button" class="btn btn-sm btn-danger" id="update_image">تغير الصورة</button>
                     <button type="button" class="btn btn-sm btn-danger" style="display: none;" id="cancel_update_image"> الغاء</button>
                  </div>
               </div>
               <div id="oldimage">
               </div>
            </div>
            <div class="col-md-12">
               <div class="form-group text-center">
                  <button type="submit" class="btn btn-primary btn-sm">حفظ التعديلات</button>
               </div>
            </div>
               
              
            </div>
           </form>


           @else
            <div class="alert alert-danger">
                عفو لاتوجد بيانات لعرضها
            </div>
           @endif
             

            </div>
          </div>
        </div>
</div>

@endsection


@section("script")
<script  src="{{ asset('assets/admin/plugins/select2/js/select2.full.min.js') }}"> </script>
<script  src="{{ asset('assets/admin/js/collect_transaction.js') }}"> </script>
<script>
   //Initialize Select2 Elements
   $('.select2').select2({
     theme: 'bootstrap4'
   });
</script>
@endsection