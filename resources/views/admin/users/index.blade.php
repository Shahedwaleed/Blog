
//اسم الصفحة
@extends('admin.layouts.layout-admin')
@section('title')
users
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
													<h3 class="card-label">شهد وليد الغرابلي</h3>
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
																	<th scope="col">الاسم</th>
																	<th scope="col">البريد الالكتروني</th>
																	<th scope="col">الصلاحية</th>
                                                                    <th scope="col">العمليات</th>
																</tr>
															</thead>
															<tbody>
                                                                @foreach($users as $users)
																<tr>
																	<th scope="row">{{++$loop->index}}</th>
																	<td>{{$users->name}}</td>
																	<td>{{$users->email}}</td>
                                                                    <td>righteous</td>
																	<td>
																	<a href="#" class="btn btn-icon btn-danger btn-circle mr-2"><img src="   https://cdn-icons-png.flaticon.com/512/1214/1214428.png " width="20" height="20"
																	 alt="" title="" class="img-small"></a>

																	 
																	 <a href="#" class="btn btn-icon btn-primary btn-circle mr-2">
																	 <img src="https://cdn-icons-png.flaticon.com/128/1828/1828911.png" data-
																	 src="https://cdn-icons-png.flaticon.com/128/1828/1828911.png" alt="Pencil " title="Pencil " width
																	 ="20" height="20" class="lzy lazyload--done" srcset="https://cdn-icons-png.flaticon.com/128/1828/1828911.png 4x">
																	</a>
																		</span>

                                                                 
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





