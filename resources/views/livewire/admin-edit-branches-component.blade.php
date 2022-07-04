<div>
    <!-- Banner Start -->
<section id="banner-section" class="">
<div class="overlay">
<div class="container">
<div class="row text-center">
<div class="col-md-12 mb-10">
  <h1 class="text-light">Edit Branch</h1>
</div>
<div class="col-md-12">
  <ul class="d-flex justify-content-center">
      <li><a href="/">Home</a></li>
      <li><a class=""> - </a></li>
      <li><a class="active" href="#!">Branches</a></li>
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
              Edit Branch
          </div>
          <div class="col-md-6">
              <a href="{{ route('admin.branches') }}" style="color: whitesmoke" class="btn btb-success pull-right"> All Branches</a>
          </div>
      </div>
  </div>
  @if (Session::has('message'))
      <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
  @endif
  <div class="panel-body">
      <form action="" class="form-horizontal" wire:submit.prevent="updateBranch">
          <div class="form-group">
              <label for="" class="col-md-4 control-lable">Branch Address</label>
              <div class="col-md-4">
                  <input type="text" placeholder="Branch Address" class="form-control input-md" wire:model="address">
                  @error('address')
                      <p class="text-danger">{{ $message }}</p>
                  @enderror
              </div>
          </div>
          <div class="form-group">
              <label for="" class="col-md-4 control-lable">District</label>
              <div class="col-md-4">
                  <input type="text" placeholder="District" class="form-control input-md" wire:model="district">
                  @error('district')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
              </div>
          </div>
          <div class="form-group">
              <label for="" class="col-md-4 control-lable">Branch Email</label>
              <div class="col-md-4">
                  <input type="text" placeholder="Branch Email" class="form-control input-md" wire:model="email">
                  @error('email')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
              </div>
          </div>
          <div class="form-group">
              <label for="" class="col-md-4 control-lable">Branch Tel: No</label>
              <div class="col-md-4">
                  <input type="text" placeholder="Branch Tel: No" class="form-control input-md" wire:model="phone">
                  @error('phone')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
              </div>
          </div>

          <div class="form-group">
              <label for="" class="col-md-4 control-lable">Branch Tel: No2</label>
              <div class="col-md-4">
                  <input type="text" placeholder="Branch Tel: No2" class="form-control input-md" wire:model="phone2">
                  @error('phone2')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
              </div>
          </div>

          <div class="form-group">
              <label for="" class="col-md-4 control-lable">Branch Whatsapp No</label>
              <div class="col-md-4">
                  <input type="text" placeholder="Branch Whatsapp No" class="form-control input-md" wire:model="whatsapp">
                  @error('whatsapp')
                  <p class="text-danger">{{ $message }}</p>
              @enderror
              </div>
          </div>
          <div class="form-group">
              <label for="" class="col-md-4 control-lable">P.O Box main</label>
              <div class="col-md-4">
                  <input type="text" placeholder="P.O Box main" class="form-control input-md" wire:model="box_mail">
                  @error('box_mail')
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
