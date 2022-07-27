@extends('dashboard')

@section('frontend_style')
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/jquery.dataTables.min.css">
@endsection

@section('userdashboard_content')

    <div class="table-responsive">
        <table id="myOrder" class="table table-hover table-bordered display">
            <thead>
                <tr>
                    <th>#</th>
                    <th>Date</th>
                    <th>Facture No</th>
                    <th>Total</th>
                    <th>Paiement</th>
                    <th>Statut</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @forelse ($orders as $order)
                <tr>
                    <td scope="row">{{ $loop->index+1 }}</td>
                    <td>{{ $order->created_at->diffForHumans() }}</td>
                    <td>{{ $order->invoice_number }}</td>
                    <td>{{ $order->amount }}</td>
                    <td>{{ $order->payment_method }}</td>
                    <td>
                        @if ($order->status == 'En attente')
                        <span class="badge badge-primary">{{ $order->status }}</span>
                        @elseif ($order->status == 'confirmed')
                        <span class="badge badge-secondary">{{ $order->status }}</span>
                        @elseif ($order->status == 'processing')
                        <span class="badge badge-info">{{ $order->status }}</span>
                        @elseif ($order->status == 'picked')
                        <span class="badge badge-warning">{{ $order->status }}</span>
                        @elseif ($order->status == 'shipped')
                        <span class="badge badge-light">{{ $order->status }}</span>
                        @elseif ($order->status == 'delivered')
                        <span class="badge badge-success">{{ $order->status }}</span>
                        @else
                        <span class="badge badge-danger">{{ $order->status }}</span>
                        @endif
                    </td>
                    <td>
                        <a href="{{ route('order-deatils', $order->id) }}" class="btn btn-sm btn-primary">
                            <i class="fa fa-eye"></i>View
                        </a>
                        <a href="{{ route('invoice-download', $order->id) }}" class="btn btn-sm btn-danger"><i class="fa fa-download"></i>Facture</a>
                    </td>
                </tr>
                @empty
                <tr>
                    <td>Pas encore de commande passée !</td>
                </tr>
                @endforelse
            </tbody>
        </table>
    </div>

@endsection

@section('frontend_script')
<script src="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js"></script>
<script>
    $(document).ready( function () {
    $('#myOrder').DataTable();
} );
</script>
@endsection
