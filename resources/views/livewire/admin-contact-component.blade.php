<div>
                                     <!-- Banner Start -->
  <section id="banner-section" class="">
    <div class="overlay">
        <div class="container">
            <div class="row text-center">
                <div class="col-md-12 mb-10">
                    <h1 class="text-light">Contact Messages</h1>
                </div>
                <div class="col-md-12">
                    <ul class="d-flex justify-content-center">
                        <li><a href="/">Home</a></li>
                        <li><a class=""> - </a></li>
                        <li><a class="active" href="#!">Contact Messages</a></li>
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
        <div class="">
            <div class="col-md-12">
                <div class="panel panel-default">
                    <div class="panel-heading">
                        Contact Messages
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
                                    <th>Email</th>
                                    <th>Phone</th>
                                    <th>Subject</th>
                                    <th>Comment</th>
                                    <th>Created At</th>
                                </tr>
                            </thead>
                            <tbody>
                                @php
                                    $i = 1;
                                @endphp
                                @foreach ($contacts as $contact)
                                    <tr>
                                        <td>{{ $i++ }}</td>
                                        <td>{{ $contact->name }}</td>
                                        <td>{{ $contact->email }}</td>
                                        <td>{{ $contact->phone }}</td>
                                        <td>{{ $contact->subject }}</td>
                                        <td>{{ $contact->comment }}</td>
                                        <td>{{ $contact->created_at }}</td>

                                        {{-- <td>
                                            <a href="{{ route('admin.editproperty', ['property_slug'=> $property->slug]) }}" ><i class="fa fa-edit fa-1x"></i></a>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this property') || event.stopImmediatePropagation()" wire:click.prevent="deleteProperty({{ $property->id }})" style="margin-left: 10px"><i class="fa fa-times fa-1x text-danger"></i></a>
                                        </td> --}}
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $contacts->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
