<div>
    <style>
        nav svg{
            height: 20px;
        }
        nav .hidden{
            display: block !important;
        }
    </style>
    <div class="container" style="padding: 70px 0; margin-top:100px;">
        <div class="">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <div class="row">
                            <div class="col-md-6">All Project Amenities</div>
                            <div class="col-md-6">
                                <a href="{{ route('admin.addamenities', ['project_slug'=> $project->slug]) }}" class="btn btn-success pull-right"> Add New Amenity</a>
                                <a href="{{ route('admin.editproject', ['project_slug'=> $project->slug]) }}" class="btn btn-success pull-right"> Back to project</a>
                            </div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>#</th>
                                    <th>Name</th>
                                    <th>Project Image</th>
                                    <th>Project Name</th>
                                    <th>Project Code</th>
                                    <th>Created At</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($aminities as $aminity)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $aminity->name }}</td>
                                        <td><img src="{{ asset('images/projects') }}/{{ $aminity->project->image }}" alt="{{ $aminity->project->name }}" width="60"></td>
                                        <td>{{ $aminity->project->name }}</td>
                                        <td>{{ date('d F, Y', strtotime($aminity->created_at)) }}</td>
                                        <td>
                                            {{-- <a href="{{ route('admin.editproperty', ['property_slug'=> $property->slug]) }}" ><i class="fa fa-edit fa-1x"></i></a> --}}
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this property') || event.stopImmediatePropagation()" wire:click.prevent="deleteAmenity({{ $aminity->id }})" style="margin-left: 10px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
