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
                        All Orders

                    </div>
                    <div class="panel-body">
                        @if (Session::has('message'))
                        <div class="alert alert-success" role="alert">{{ Session::get('message') }}</div>
                        @endif
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>OrderId</th>
                                    <th>Image</th>
                                    <th>Project-Name</th>
                                    <th>Price</th>
                                    <th>First Name</th>
                                    <th>Last Name</th>
                                    <th>Email</th>
                                    <th>Phone No</th>
                                    <th>City</th>
                                    <th>Location</th>
                                    <th>Date</th>
                                    @if (Auth::user()->utype === 'ADM')
                                    <th>Action</th>
                                    @endif
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($orders as $order)
                                    <tr>
                                        <td>{{ $order->id }}</td>
                                        <td><img src="{{ asset('images/projects') }}/{{ $order->image }}" width="60" alt="{{ $order->name }}"></td>
                                        <td>{{ $order->name }}</td>
                                        <td>UGx{{ $order->price }}</td>
                                        <td>{{ $order->firstname }}</td>
                                        <td>{{ $order->lastname }}</td>
                                        <td>{{ $order->email }}</td>
                                        <td>{{ $order->mobile }}</td>
                                        <td>{{ $order->city }}</td>
                                        <td>{{ $order->location }}</td>
                                        <td>{{ date('d F, Y', strtotime( $order->created_at)) }}</td>
                                        @if (Auth::user()->utype === 'ADM')
                                        <td>
                                            <a href="#" onclick="confirm('Are you sure, You want to delete this property') || event.stopImmediatePropagation()" wire:click.prevent="deleteOrder({{ $order->id }})"  style="margin-left: 10px"><i class="fa fa-times fa-2x text-danger"></i></a>
                                        </td>
                                        @endif

                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                            {{ $orders->links() }}

                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
