@extends('layouts.app')

@section('content')
    <div class="container box">
        <div class="card">
            <div class="card-header">Search Tag</div>
            <div class="card-body">
                <input type="text" name="search" id="search" class="form-control" placeholder="Search Data">
            </div>
            <div class="table-responsive">
                <h3 align="center">Total Data : <span id="total_records"></span> </h3>
                <table class="table table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>Title</th>
                            <th>Tags</th>
                        </tr>
                    </thead>
                    <tbody>


                    </tbody>
                </table>

            </div>
        </div>
    </div>

    <script type="application/javascript">
        $(document).ready(function () {
            fetch_customer_data();

            function fetch_customer_data(query = ''){
                $.ajax({
                    url:"{{route('live_search.action')}}",
                    method:'GET',
                    data:{query:query},
                    dataType:'json',
                    success:function (data)
                    {
                        $('tbody').html(data.table_data);
                        $('#total_records').text(data.total_data);
                        console.log("it works");

                    },error:function () {
                        console.log("failed");
                    }

                })

            }


        $(document).on('keyup', '#search', function() {
            var query = $(this).val();
            fetch_customer_data(query);
                console.log("working");
        });
        });

    </script>
    @endsection