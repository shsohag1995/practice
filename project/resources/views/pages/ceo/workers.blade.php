@extends('layouts.ceo')

@section('content')
<div class="transfar-funds-area">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <h1 class="well text-center">Employeers Table</h1>
                <div class="transfer-data table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="bg-info">
                        <tr>
                            <th>Sr. No</th>
                            <th>Name</th>
                            <th>Contact Number</th>
                            <th>Job</th>
                            <th>Action</th>
                        </tr>
                        </thead>
                        <tbody>
                        <tr>
                            <td>1</td>
                            <td>anis</td>
                            <td>01254899</td>
                            <td>manager</td>
                            <td>
                                <button type="button" class="btn btn-info">view</button>
                                <button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-warning">Hide</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>

                        <tr>
                            <td>2</td>
                            <td>shams</td>
                            <td>10154595</td>
                            <td>Employeer</td>
                            <td>
                            	<button type="button" class="btn btn-info">view</button>
                                <button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-warning">Hide</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        <tr>
                            <td>3</td>
                            <td>habib</td>
                            <td>2454515</td>
                            <td>seller</td>
                            <td>
                                <button type="button" class="btn btn-info">view</button>
                                <button type="button" class="btn btn-primary">Edit</button>
                                <button type="button" class="btn btn-warning">Hide</button>
                                <button type="button" class="btn btn-danger">Delete</button>
                            </td>
                        </tr>
                        </tbody>
                    </table>

                </div>

            </div>
        </div>
    </div>
</div>


@endsection
