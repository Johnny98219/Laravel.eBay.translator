@extends('layout.main')

@section('content')
    <h1 class="text-3xl font-semibold mb-3 text-start"><i class="fa fa-store"></i> Store List</h1>

    
    <!-- <div class="row">
        <div class="col-md-3 d-flex justify-content-between">
            <a href="{{ route('tiendas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">New shop</a>
            <a href="{{ route('shipping.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">shipping list</a>
        </div>
        <div class="col-md-6">
        </div>
        <div class="col-md-3 d-flex float-right">
            <a href="{{ route('store.markets') }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded"> <i class="fa fa-gear"></i>see products</a>
        </div>
    </div> -->
    <div class="row mb-3">
        <div class="col-xl-8 col-lg-7 col-md-6 col-sm-4 col-2">
        </div>
        <div class="col-xl-4 col-lg-5 col-md-6 col-sm-8 col-10 d-flex justify-content-between">
            <a href="{{ route('tiendas.create') }}" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded text-decoration-none">New shop</a>
            <a href="{{ route('shipping.index') }}" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded text-decoration-none">shipping list</a>
            <a href="{{ route('store.markets') }}" class="bg-blue-500 hover:bg-blue-700 text-white py-1 px-3 rounded text-decoration-none"> <i class="fa fa-gear"></i> see products</a>
        </div>
    </div>
    <div style="max-height: calc(100vh - 270px); overflow-y: auto;"
        class="row table-responsive" id="store_table">
        <!-- <table class="table-auto mx-auto mt-8 bg-gray-800 text-white"> -->
        <table class="table mb-0 table-hover table-striped">
            <thead class="table-dark" style="position: sticky; top: 0;">
                <tr>
                    <th class="px-4 py-2">eBay seller's account pseudonym</th>
                    <th class="px-4 py-2">Access Token</th>
                    <th class="px-4 py-2">Mother market</th>
                    <th class="px-4 py-2">Target market(s)</th>
                    <th class="px-4 py-2">Total sales over last 31 days</th>
                </tr>
            </thead>
            <tbody>
                @foreach($tiendas as $tienda)
                    <tr id="tienda-{{ $tienda->id }}">
                        <td class="border px-4 py-2">{{ $tienda->store_name }}</td>
                        <td class="border px-4 py-2">{{ Str::limit($tienda->access_token, $limit = 30, $end = '...') }}
                        </td>
                        <td class="border px-4 py-2">{{ $tienda->marketplaces }}</td>
                        <td class="border px-4 py-2">{{ $tienda->marketplaces }}</td>
                        <td class="border px-4 py-2">{{ $tienda->marketplaces }}</td>
                    </tr>
                @endforeach
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>
                <tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr><tr id="tienda-{{ $tienda->id }}">
                    <td class="border px-4 py-2">aaa</td>
                    <td class="border px-4 py-2">bbb</td>
                    <td class="border px-4 py-2">vccc</td>
                    <td class="border px-4 py-2">ddd</td>
                    <td class="border px-4 py-2">bbb</td>
                </tr>


            </tbody>
        </table>
    </div>
    <div class="row text-end mt-1">
        <p>Total earning: <span class="text-danger">983923€</span></p>
    </div>
    <script>
    $(document).ready(function () {
        $('.delete-button').on('click', function () {
            var tiendaId = $(this).data('tienda-id');
            
            $.confirm({
                title: 'Confirm Delete',
                content: 'Are you sure you want to delete this item?',
                type: 'red',
                buttons: {
                    confirm: {
                        text: 'Yes',
                        btnClass: 'btn-red',
                        action: function () {
                            // Send an AJAX request to delete the item
                            $.ajax({
                                type: 'POST',
                                url: '{{ route('tiendas.destroy') }}',
                                data: {
                                    '_token': '{{ csrf_token() }}',
                                    'tienda_id': tiendaId
                                },
                                success: function (data) {
                                    console.log('Delete request successful.');
                                    console.log('Response data:', data);
                                    // Remove the associated data on the client side (e.g., remove the item from the page)
                                    $('#tienda-' + tiendaId).remove();
                                    alert("Deleted successfuly")
                                    
                                },
                                error: function (data) {
                                    console.log('Delete request failed.');
                                    console.log('Error data:', data);
                                    // Handle errors here (e.g., show an error message)
                                }
                            });
                        }
                    },
                    cancel: {
                        text: 'No',
                        btnClass: 'btn-default',
                        action: function () {
                            // If the user cancels, do nothing
                        }
                    }
                }
            });
        });
    });
</script>
    
@endsection
