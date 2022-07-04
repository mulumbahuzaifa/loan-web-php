<div>
      <!-- Banner Start -->
  <section id="banner-section" class="">
    <div class="overlay">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 mb-10">
                    <h1 class="text-light">Services</h1>
                </div>
                <div class="col-md-12">
                    <ul class="d-flex justify-content-center">
                        <li><a href="/">Home</a></li>
                        <li><a class=""> - </a></li>
                        <li><a class="active" href="#!">Services</a></li>
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
                            <div class="col-md-6">All Projects</div>
                            <div class="col-md-6"><a href="{{ route('admin.addproject') }}" style="color: whitesmoke" class="btn btn-success pull-right"> Add New Product</a></div>
                        </div>
                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>Id</th>
                                    <th>Image</th>
                                    <th>Name</th>
                                    <th>S-DEC</th>
                                    <th>Category</th>
                                    <th>Date</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($projects as $project)
                                    <tr>
                                        <td>{{ $project->id }}</td>
                                        <td><img src="{{ asset('assets/images/projects') }}/{{ $project->image }}" width="60" height="60" alt="{{ $project->name }}"></td>
                                        <td>{{ $project->name }}</td>
                                        <td>{{ $project->short_description }}</td>
                                        <td>{{ $project->category->name }}</td>
                                        <td>{{ $project->created_at }}</td>
                                        <td>
                                            <a href="{{ route('admin.editproject', ['project_slug'=> $project->slug]) }}" ><i class="fa fa-edit fa-2x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this project') || event.stopImmediatePropagation()" wire:click.prevent="deleteProject({{ $project->id }})" style="margin-left: 20px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $projects->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
