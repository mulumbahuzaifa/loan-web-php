<div>
    <!-- Banner Start -->
<section id="banner-section" class="">
<div class="overlay">
<div class="container">
<div class="row text-center">
<div class="col-md-12 mb-10">
  <h1 class="text-light">Add Staff</h1>
</div>
<div class="col-md-12">
  <ul class="d-flex justify-content-center">
      <li><a href="/">Home</a></li>
      <li><a class=""> - </a></li>
      <li><a class="active" href="#!">Staffs</a></li>
  </ul>
</div>
</div>
</div>
</div>
</section>
<!-- Banner End -->
<style>
nav svg{
height: 20px;
}
nav .hidden{
display: block !important;
}
</style>
<div class="container" style="padding: 70px 0; margin:0px auto 100px auto;">
<div class="row">
<div class="col-md-12">
<div class="panel panel-default">
  <div class="panel-heading">
      <div class="row">
          <div class="col-md-6">
              Add New Staff
          </div>
          <div class="col-md-6">
              <a href="{{ route('admin.staffs') }}" style="color: whitesmoke" class="btn btn-success pull-right"> All Staffs</a>
          </div>
      </div>
  </div>
  @if (Session::has('message'))
      <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
  @endif
  <div class="panel-body">
      <form action="" class="form-horizontal" wire:submit.prevent="storeStaff">
          <div class="form-group">
              <label for="" class="col-md-4 control-lable">Staff Name</label>
              <div class="col-md-4">
                  <input type="text" placeholder="Staff Name" class="form-control input-md" wire:model="name">
                  @error('name')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
          </div>
          <div class="form-group">
              <label for="" class="col-md-4 control-lable">Staff Position</label>
              <div class="col-md-4">
                  <input type="text" placeholder="Staff Position" class="form-control input-md" wire:model="position">
                  @error('position')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
              </div>
          </div>
          <div class="form-group">
              <label for="" class="col-md-4 control-lable">Staff Branch</label>
              <div class="col-md-4">
                  <input type="text" placeholder="Staff Branch" class="form-control input-md" wire:model="branch">
                  @error('branch')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
              </div>
          </div>

          <div class="form-group">
              <label for="" class="col-md-4 control-lable"></label>
              <div class="col-md-4">
                  <Button type="submit" class="btn btn-primary">Submit</Button>
              </div>
          </div>
      </form>

  </div>
</div>
</div>
</div>
</div>
</div>
