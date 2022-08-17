<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
        .selections{
            display: block;
            background-color: black !important;
        }
    </style>
    <div class="container" style="padding: 70px 0; margin-top:100px;">
        <div class="row">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">
                                Add New Amenity
                            </div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.amenities', ['project_slug'=> $project->slug]) }}" class="btn btn-success pull-right"> All {{ $project->name }} Amenities</a>
                            </div>
                        </div>
                    </div>
                    @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                    @endif
                    <div class="panel-body">
                        <form action="" class="form-horizontal" wire:submit.prevent="addAmenity">
                            <div class="form-group">
                                <label for="" class="col-md-4 control-lable">Amenity Name</label>
                                <div class="col-md-4">
                                    <input type="text" placeholder="Amenity Name" class="form-control input-md" wire:model="name">
                                    @error('name')
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

