@extends('admin.default')
@section('content')
	<div id="page-wrapper">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">Danh sách khách hàng quay thưởng
                            <small></small>
                        </h1>
                        @if( Session::has('flash_message'))
			                <div class="alert alert-{{ Session::get('flash_level')}}">
			                    {{ Session::get('flash_message')}}
			                </div>
			            @endif
                    </div>
                    <!-- /.col-lg-12 -->
                    <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                        <thead>
                            <tr align="center">
                                <th>STT</th>
                                <th>Họ tên</th>
                                <th>SĐT</th>
                                <th>Phần thưởng</th>
                                <th>Trạng thái</th>
                                <th>Xóa</th>
                                <th>Sửa</th>
                            </tr>
                        </thead>
                        <tbody>
                        	<?php
                        		$i =1;
                        	?>
                        	@foreach($user as $us)
                            <tr class="odd gradeX" align="center">
                                <td>{{$i}}</td>
                                <td>{{$us->name}}</td>
                                <td>{{$us->sdt}}</td>
                                @if($us->phanthuong == $us->g500k)
                                	<td>Voucher giảm giá Vertu 2 triệu</td>
                                @elseif($us->phanthuong == $us->g200k)
                                	<td>Voucher giảm giá 200k</td>
                                @elseif($us->phanthuong == $us->baoda)
                                	<td>Bao da</td>
                                @elseif($us->phanthuong == $us->cocsac)
                                	<td>Cốc sạc</td>
                                @elseif($us->phanthuong == $us->tainghe)
                                	<td>Tai nghe Bluetooth</td>
                                @elseif($us->phanthuong == $us->mockhoa)
                                	<td>Móc khóa rồng</td>
                                @elseif($us->phanthuong == $us->freeship)
                                	<td>Sạc oto</td>
                                @elseif($us->phanthuong == $us->goodluck)
                                	<td>Chúc may mắn lần sau</td>
                                @else
                                	<td></td>
                                @endif
                                <td>
                                	@if($us->status == 0)
                                	<div class="status" style="background: green;color:#fff;width:100%; ">
										<span >Chưa quay thưởng</span>
									</div>
									@else
                                	<div class="status" style="background: red;color:#fff;width:100%; ">
										<span >Đã quay thưởng</span>
									</div>
									@endif
                                </td>
                                <td class="center"><i class="fa fa-trash-o  fa-fw"></i><a href="#"> Delete</a></td>
                                <td class="center"><i class="fa fa-pencil fa-fw"></i> <a href="#">Edit</a></td>
                            </tr>
                            <?php
                                $i++;
                            ?>
                            @endforeach
                        </tbody>
                    </table>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
        </div>
@endsection