<div>
    <!-- Banner Start -->
<section id="banner-section" class="">
<div class="overlay">
<div class="container">
<div class="row text-center">
  <div class="col-md-12 mb-10">
      <h1 class="text-light">Staffs</h1>
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
  <div class="card card-default">
      <div class="card-header">
              <div class="col-md-6 nav-link active">All Staffs</div>
              <div class="col-md-4" style="float: right;"><a href="{{ route('admin.addstaff') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Staff</a></div>
      </div>
      <div class="card-body">
          @if (Session::has('message'))
          <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
          @endif
          <table class="table table-striped">
              <thead>
                  <tr>
                      <th>Id</th>
                      <th>Staff Name</th>
                      <th>Staff Position</th>
                      <th>Staff Branch</th>
                      <th>Action</th>
                  </tr>
              </thead>
              <tbody>
                  @foreach ($staffs as $staff)
                      <tr>
                          <td>{{ $staff->id }}</td>
                          <td>{{ $staff->name }}</td>
                          <td>{{ $staff->position }}</td>
                          <td>{{ $staff->branch }}</td>
                          <td>
                              <a href="#" onclick="confirm('Are you sure, You want to delete this Staff') || event.stopImmediatePropagation()"  wire:click.prevent="deleteStaff({{ $staff->id }})" style="margin-left: 20px"><i class="fa fa-times fa-2x text-danger"></i></a>
                          </td>
                      </tr>
                  @endforeach
              </tbody>
          </table>
              {{ $staffs->links() }}

      </div>
  </div>
</div>
</div>
</div>
</div>
