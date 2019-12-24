@extends('layouts.auth')

@section('content')
<div style="padding-top: 30px;"></div>
<section id="dashboard">
			<div class="container">
				<div class="row">
					@include('partials.auth.homenav')

					<div class="col-md-10">
						

                <h1 class="well text-center">WITHDRAW STATUS</h1>
                <div class="transfer-data table-responsive">
                    <table class="table table-striped table-hover">
                        <thead class="bg-info">
                            <tr>
                                <th>Sr. No</th>
                                <th>Account NO</th>
                                <th>Bank Name</th>
                                <th>Amount</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>1</td>
                                <td>8245761</td>
                                <td>Bangladesh Bank</td>
                                <td>Us 100 $</td>
                                <td>
                                    <button type="button" class="btn btn-primary">Processing</button>
                                </td>
                            </tr>

                            <tr>
                                <td>2</td>
                                <td>5465648</td>
                                <td>Datch Bangla </td>
                                <td>Us 300 $</td>
                                <td>
                                    <button type="button" class="btn btn-success">Completed</button>
                                </td>
                            </tr>
                            <tr>
                                <td>3</td>
                                <td>824554</td>
                                <td>Estern Bank</td>
                                <td>Us 160 $</td>
                                <td>
                                    <button type="button" class="btn btn-danger">Canceled </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>

            
 
								


							
							</div>
						 
					</div>
					<div class="col-md-12">
					 
						<img src="">
					</div>
				</div>
			</div>
		</section>

@endsection