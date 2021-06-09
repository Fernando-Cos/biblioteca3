@extends('layouts.admin_layout.admin_layout')
@section('content')
    
<!-- Content Wrapper. Contains page content -->
<div class="content-wrapper">
  <!-- Content Header (Page header) -->
  <div class="content-header">
    <div class="container-fluid">
      <div class="row mb-2">
        <div class="col-sm-6">
          <h1 class="m-0">Configurações</h1>
        </div><!-- /.col -->
        <div class="col-sm-6">
          <ol class="breadcrumb float-sm-right">
            <li class="breadcrumb-item"><a href="#">Home</a></li>
            <li class="breadcrumb-item active">Configurações de admin v1</li>
          </ol>
        </div><!-- /.col -->
      </div><!-- /.row -->
    </div><!-- /.container-fluid -->
  </div>
  <!-- /.content-header -->

   <!-- Main content -->
<section class="content">
<div class="container-fluid">
  <div class="row">
    <!-- left column -->
    <div class="col-md-6">
      <!-- general form elements -->
      <div class="card card-primary">
        <div class="card-header">
          <h3 class="card-title">Atualização de Senha</h3>
        </div>


        <!-- /.card-header -->
      @if(Session::has('error_message'))
      <div class="alert alert-warning" role="alert" style="margin-top: 10px;">
        {{ Session::get('error_message') }}
        Erro[]
      </div>
    @endif

    @if(Session::has('success_message'))
    <div class="alert alert-success" role="alert" style="margin-top: 10px;">
      {{ Session::get('success_message') }}
      Erro[]
    </div>
  @endif


        <!-- form start -->
        <form>
          <div role="form" class="card-body" method="POST" action="{{ url('/admin/update-current-pwd') }}" name="updatePasswordForm"
          id="updatePasswordForm">@csrf

            <?php /* <div class="form-group">
              <label for="exampleInputEmail1">Admin Name</label>
              <input type="text" class="form-control" value="{{ $adminDetails->name }}"
              placeholder="Entre Admin/Sub" id="admin_name" name="admin_name">
            </div>*/ ?>

            <div class="form-group">
              <label for="exampleInputEmail1">Admin Email</label>
              <input class="form-control" value="{{ $adminDetails->email }}" readonly="">
            </div>

            <div class="form-group">
              <label for="exampleInputEmail1">Admin Type</label>
              <input class="form-control" value="{{ $adminDetails->type }}" readonly="">
            </div>

            <div class="form-group">
              <label for="exampleInputPassword1">Current Password</label>
              <input type="password" class="form-control" name="current_pwd" id="current_pwd" placeholder="Enter Current Password"
              required="">
            </div>
            <span id="chkCurrentPwd"></span>


            <div class="form-group">
              <label for="exampleInputPassword1"> New Password</label>
              <input type="password" class="form-control" name="new_pwd" id="new_pwd" placeholder="new enter Password" required="">
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Confirme Password</label>
              <input type="password" class="form-control" name="confirm_pwd" id="confirm_pwd" placeholder="Confirm new Password"
              required="">
            </div>
          </div>
          


      <!-- /.card-body -->
      <div class="card-footer">
        <button type="submit" class="btn btn-primary">Submit</button>
      </div>
    </form>
  </div>
  <!-- /.card -->

  <!-- general form elements -->
  {{-- <div class="card card-primary">
    <div class="card-header">
      <h3 class="card-title">Different Styles</h3>
    </div>
    <!-- /.card-header -->
    <div class="card-body">
      <h4>Input</h4>
      <div class="form-group">
        <label for="exampleInputBorder">Bottom Border only <code>.form-control-border</code></label>
        <input type="text" class="form-control form-control-border" id="exampleInputBorder" placeholder=".form-control-border">
      </div>
      <div class="form-group">
        <label for="exampleInputBorderWidth2">Bottom Border only 2px Border <code>.form-control-border.border-width-2</code></label>
        <input type="text" class="form-control form-control-border border-width-2" id="exampleInputBorderWidth2" placeholder=".form-control-border.border-width-2">
      </div>
      <div class="form-group">
        <label for="exampleInputRounded0">Flat <code>.rounded-0</code></label>
        <input type="text" class="form-control rounded-0" id="exampleInputRounded0" placeholder=".rounded-0">
      </div>
      <h4>Custom Select</h4>
      <div class="form-group">
        <label for="exampleSelectBorder">Bottom Border only <code>.form-control-border</code></label>
        <select class="custom-select form-control-border" id="exampleSelectBorder">
          <option>Value 1</option>
          <option>Value 2</option>
          <option>Value 3</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleSelectBorderWidth2">Bottom Border only <code>.form-control-border.border-width-2</code></label>
        <select class="custom-select form-control-border border-width-2" id="exampleSelectBorderWidth2">
          <option>Value 1</option>
          <option>Value 2</option>
          <option>Value 3</option>
        </select>
      </div>
      <div class="form-group">
        <label for="exampleSelectRounded0">Flat <code>.rounded-0</code></label>
        <select class="custom-select rounded-0" id="exampleSelectRounded0">
          <option>Value 1</option>
          <option>Value 2</option>
          <option>Value 3</option>
        </select>
      </div>
    </div>
    <!-- /.card-body -->
  </div> --}}
  <!-- /.card -->





          <!-- general form elements disabled -->
          {{-- <div class="card card-warning">
            <div class="card-header">
              <h3 class="card-title">General Elements</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- text input -->
                    <div class="form-group">
                      <label>Text</label>
                      <input type="text" class="form-control" placeholder="Enter ...">
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Text Disabled</label>
                      <input type="text" class="form-control" placeholder="Enter ..." disabled>
                    </div>
                  </div>
                </div>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- textarea -->
                    <div class="form-group">
                      <label>Textarea</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..."></textarea>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Textarea Disabled</label>
                      <textarea class="form-control" rows="3" placeholder="Enter ..." disabled></textarea>
                    </div>
                  </div>
                </div>

                <!-- input states -->
                <div class="form-group">
                  <label class="col-form-label" for="inputSuccess"><i class="fas fa-check"></i> Input with
                    success</label>
                  <input type="text" class="form-control is-valid" id="inputSuccess" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="inputWarning"><i class="far fa-bell"></i> Input with
                    warning</label>
                  <input type="text" class="form-control is-warning" id="inputWarning" placeholder="Enter ...">
                </div>
                <div class="form-group">
                  <label class="col-form-label" for="inputError"><i class="far fa-times-circle"></i> Input with
                    error</label>
                  <input type="text" class="form-control is-invalid" id="inputError" placeholder="Enter ...">
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox">
                        <label class="form-check-label">Checkbox</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" checked>
                        <label class="form-check-label">Checkbox checked</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="checkbox" disabled>
                        <label class="form-check-label">Checkbox disabled</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group">
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1">
                        <label class="form-check-label">Radio</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" name="radio1" checked>
                        <label class="form-check-label">Radio checked</label>
                      </div>
                      <div class="form-check">
                        <input class="form-check-input" type="radio" disabled>
                        <label class="form-check-label">Radio disabled</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                      <label>Select</label>
                      <select class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Select Disabled</label>
                      <select class="form-control" disabled>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <!-- Select multiple-->
                    <div class="form-group">
                      <label>Select Multiple</label>
                      <select multiple class="form-control">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Select Multiple Disabled</label>
                      <select multiple class="form-control" disabled>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div> --}}
          <!-- /.card -->
          <!-- general form elements disabled -->
          {{-- <div class="card card-secondary">
            <div class="card-header">
              <h3 class="card-title">Custom Elements</h3>
            </div>
            <!-- /.card-header -->
            <div class="card-body">
              <form>
                <div class="row">
                  <div class="col-sm-6">
                    <!-- checkbox -->
                    <div class="form-group">
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="customCheckbox1" value="option1">
                        <label for="customCheckbox1" class="custom-control-label">Custom Checkbox</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="customCheckbox2" checked>
                        <label for="customCheckbox2" class="custom-control-label">Custom Checkbox checked</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input" type="checkbox" id="customCheckbox3" disabled>
                        <label for="customCheckbox3" class="custom-control-label">Custom Checkbox disabled</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger" type="checkbox" id="customCheckbox4" checked>
                        <label for="customCheckbox4" class="custom-control-label">Custom Checkbox with custom color</label>
                      </div>
                      <div class="custom-control custom-checkbox">
                        <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="checkbox" id="customCheckbox5" checked>
                        <label for="customCheckbox5" class="custom-control-label">Custom Checkbox with custom color outline</label>
                      </div>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <!-- radio -->
                    <div class="form-group">
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio1" name="customRadio">
                        <label for="customRadio1" class="custom-control-label">Custom Radio</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio2" name="customRadio" checked>
                        <label for="customRadio2" class="custom-control-label">Custom Radio checked</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input" type="radio" id="customRadio3" disabled>
                        <label for="customRadio3" class="custom-control-label">Custom Radio disabled</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input custom-control-input-danger" type="radio" id="customRadio4" name="customRadio2" checked>
                        <label for="customRadio4" class="custom-control-label">Custom Radio with custom color</label>
                      </div>
                      <div class="custom-control custom-radio">
                        <input class="custom-control-input custom-control-input-danger custom-control-input-outline" type="radio" id="customRadio5" name="customRadio2">
                        <label for="customRadio5" class="custom-control-label">Custom Radio with custom color outline</label>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <!-- select -->
                    <div class="form-group">
                      <label>Custom Select</label>
                      <select class="custom-select">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Custom Select Disabled</label>
                      <select class="custom-select" disabled>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="row">
                  <div class="col-sm-6">
                    <!-- Select multiple-->
                    <div class="form-group">
                      <label>Custom Select Multiple</label>
                      <select multiple class="custom-select">
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-sm-6">
                    <div class="form-group">
                      <label>Custom Select Multiple Disabled</label>
                      <select multiple class="custom-select" disabled>
                        <option>option 1</option>
                        <option>option 2</option>
                        <option>option 3</option>
                        <option>option 4</option>
                        <option>option 5</option>
                      </select>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" id="customSwitch1">
                    <label class="custom-control-label" for="customSwitch1">Toggle this custom switch element</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-switch custom-switch-off-danger custom-switch-on-success">
                    <input type="checkbox" class="custom-control-input" id="customSwitch3">
                    <label class="custom-control-label" for="customSwitch3">Toggle this custom switch element with custom colors danger/success</label>
                  </div>
                </div>
                <div class="form-group">
                  <div class="custom-control custom-switch">
                    <input type="checkbox" class="custom-control-input" disabled id="customSwitch2">
                    <label class="custom-control-label" for="customSwitch2">Disabled custom switch element</label>
                  </div>
                </div>
                <div class="form-group">
                  <label for="customRange1">Custom range</label>
                  <input type="range" class="custom-range" id="customRange1">
                </div>
                <div class="form-group">
                  <label for="customRange2">Custom range (custom-range-danger)</label>
                  <input type="range" class="custom-range custom-range-danger" id="customRange2">
                </div>
                <div class="form-group">
                  <label for="customRange3">Custom range (custom-range-teal)</label>
                  <input type="range" class="custom-range custom-range-teal" id="customRange3">
                </div>
                <div class="form-group">
                  <!-- <label for="customFile">Custom File</label> -->

                  <div class="custom-file">
                    <input type="file" class="custom-file-input" id="customFile">
                    <label class="custom-file-label" for="customFile">Choose file</label>
                  </div>
                </div>
                <div class="form-group">
                </div>
              </form>
            </div>
            <!-- /.card-body -->
          </div> --}}
          <!-- /.card -->
        </div>
        <!--/.col (right) -->
      </div>
      <!-- /.row -->
    </div><!-- /.container-fluid -->
  </section>
  <!-- /.content -->



</div>
<!-- /.content-wrapper -->

@endsection 