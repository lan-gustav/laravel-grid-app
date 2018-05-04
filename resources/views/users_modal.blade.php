<!-- Modal Header -->
<div class="modal-header">
    <h4 class="modal-title">{{ ucwords($action . ' '. class_basename($model)) }}</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
</div>
<!-- Modal body -->
<form accept-charset="UTF-8" action="{{ $route }}" id="modal_form"
      data-pjax-target="#{{ $pjaxContainer ?? 'add-a-pjax-container-here' }}" method="POST">
    <div class="modal-body">
        <div id="modal-notification"></div>
        {!! csrf_field() !!}
        @if(isset($method) && $method != 'post')
            <input type="hidden" name="_method" value="{{ $method }}">
        @endif
        <div class="form-group row">
            <label for="input_name" class="col-sm-2 col-form-label">Name:</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="input_name" name="name"
                       placeholder="Enter name" value="{{ isset($user) ? $user->name : old('name')}}">
            </div>
        </div>
        <div class="form-group row">
            <label for="input_email" class="col-sm-2 col-form-label">Email:</label>
            <div class="col-sm-10">
                <input type="email" class="form-control" id="input_email"
                       name="email" placeholder="Enter email" value="{{ isset($user) ? $user->email : old('email')}}">
            </div>
        </div>
    </div>

    <!-- Modal footer -->
    <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-dismiss="modal"><i class="fa fa-times"></i>&nbsp;{{ 'Close' }}</button>
        <button type="submit" class="btn btn-success"><i class="fa fa-floppy-o"></i>&nbsp;{{ 'Save' }}</button>
    </div>
</form>