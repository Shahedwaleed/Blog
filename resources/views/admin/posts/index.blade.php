@extends('admin.layouts.layout-admin')
@section('title')
posts
@endsection

@section('content')

</div>
								<!--end::Notice-->
								<div class="row">
									<div class="col-xl-12">
										<!--begin::Card-->
										<div class="card card-custom gutter-b">
											<div class="card-header">
												<div class="card-title">
													<h3 class="card-label">Base Examples</h3>
												</div>
											</div>
											<div class="card-body">
												<!--begin::Example-->
												<div class="example mb-10">
													
													<div class="example-preview">
														<table class="table">
															<thead>
																<tr>
																	<th scope="col">#</th>
																	<th scope="col">First</th>
																	<th scope="col">Last</th>
																	<th scope="col">Status</th>
																</tr>
															</thead>
															<tbody>
                                                                @foreach($posts as $posts)
																<tr>
																	<th scope="row">1</th>
																	<td>{{$posts->title}}</td>
                                                                    <!-- <td>{{Str::limit($posts->details,10)}}</td> -->
                                                                    <!-- <td>{{$posts->category_id}}</td> -->
																	<td>{{$posts->type}}</td>
																	<td>
																		<span class="label label-inline label-light-primary font-weight-bold"><i class="la la-edit pr_2">تعديل</i>Pending</span>
																	</td>
																</tr>
                                                                @endforeach
																<tr>
																	<th scope="row">2</th>
																	<td>Ana</td>
																	<td>Jacobs</td>
																	<td>
																		<span class="label label-inline label-light-success font-weight-bold">Approved</span>
																	</td>
																</tr>
																<tr>
																	<th scope="row">3</th>
																	<td>Larry</td>
																	<td>Pettis</td>
																	<td>
																		<span class="label label-inline label-light-danger font-weight-bold">New</span>
																	</td>
																</tr>
															</tbody>
														</table>
@endsection



