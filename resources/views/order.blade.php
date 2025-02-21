<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Laravel - Xendit</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center py-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">Form</div>
                    <div class="card-body">
                        <form action="{{ route('createInvoice') }}" method="POST">
                            @csrf
                            <div class="form-grub my-3">
                                <label for="">Item Nama</label>
                                <input type="text" class="form-control" name="items_nama" id="items_nama">
                            </div>
                            <div class="form-grub my-3">
                                <label for="">Qty</label>
                                <input type="number" class="form-control" name="qty" id="qty">
                            </div>
                            <div class="form-grub my-3">
                                <label for="">Price</label>
                                <input type="number" class="form-control" name="price" id="price">
                            </div>
                            <div class="form-grub my-3">
                                <label for="">Grand total</label>
                                <input type="number" class="form-control" name="grand_total" id="grand_total">
                            </div>
                            <div class="form-grub my-3">
                                <button type="submit" class="btn btn-primary">Submit</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th scope="col">No Transaction</th>
                            <th>Item Name</th>
                            <th>Status Payment</th>
                            <th>Grand Total</th>
                            <th>Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($order as $item)
                            <tr>
                                <td>{{ $item->no_transaction }}</td>
                                <td>{{ $item->item_nama }}</td>
                                <td>{{ $item->status }}</td>
                                <td>{{ $item->grand_total }}</td>
                                <td>
                                    <a href="{{ $item->invoice_url }}" class="btn btn-info btn-sm">Pay !</a>
                                    <button class="btn btn-success btn-sm" data-bs-toggle="modal" data-bs-target=""exampp">
                                        Show invoice
                                    </button>
                                </td>
                            </tr>
                            <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel"
                                aria-hidden="true">
                                <div class="modal-dialog">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="exampleModalLabel">Transaksi Pembayaran</h5>
                                            <button type="button" class="btn-close" data-bs-dismiss="modal"
                                                aria-label="Close"></button>
                                        </div>
                                        <div class="modal-body">
                                            ...
                                        </div>
                                        <div class="modal-footer">
                                            <button type="button" class="btn btn-secondary"
                                                data-bs-dismiss="modal">Close</button>
                                            <button type="button" class="btn btn-primary">Save changes</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js"
        integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>

    <script>
        function count() {
            var price = $('#price').val()
            var qty = $('#qty').val()
            var grandTotal = price * qty
            $('#grand_total').val(grandTotal)
        }

        $(document).on('keyup mouseup', '#price', function() {
            count()
        });
    </script>
</body>

</html>
