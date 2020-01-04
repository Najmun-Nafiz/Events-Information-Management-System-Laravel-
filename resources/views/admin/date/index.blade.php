@extends('admin.layouts.app')

@section('content')
<section class="content">
    <div class="content__inner">
        <header class="content__title">
            <h1>Date Tables</h1>
            <div class="actions">
                <a href="#" class="actions__item zwicon-cog"></a>
                <a href="#" class="actions__item zwicon-refresh-double"></a>
                <div class="dropdown actions__item">
                    <i data-toggle="dropdown" class="zwicon-more-h"></i>
                    <div class="dropdown-menu dropdown-menu-right">
                        <a href="#" class="dropdown-item">Refresh</a>
                        <a href="#" class="dropdown-item">Manage Widgets</a>
                        <a href="#" class="dropdown-item">Settings</a>
                    </div>
                </div>
            </div>
        </header>
        <div class="card">
            <div class="card-body">
                <h4 class="card-title">Basic example</h4>
                <h6 class="card-subtitle">DataTables is a plug-in for the jQuery Javascript library. It is a highly flexible tool, based upon the foundations of progressive enhancement, and will add advanced interaction controls to any HTML table.</h6>

                <div class="table-responsive data-table">
                    <table id="data-table" class="table">
                        <thead>
                            <tr style="background-color: #9a6502;">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($info as $key=>$v_info)
                            <tr>
                                
                                <td style="color: yellow;font-weight: bold; background-color: #b19053;">{{ $v_info -> id }}</td>

                                <td>{{$v_info -> name}}</td>


                                <td style="width: 150px;">
                                    @if($v_info -> status == true)
                                    <span class="alert-success" style="color: black;padding: 3px;">Active</span>
                                    
                                    @else
                                    <span class="alert-danger" style="color: black;padding: 3px;">Un-Active</span>
                                    
                                    @endif
                                </td>
                                
                                <td>
                                    
                                    @if($v_info -> status == true)
                                    <a href="{{ route('admin.dashboard.month.unactive',$v_info->id) }}" style="background-color: #908f8f;padding: 4px 7px;margin-right: 5px; border-radius: 3px;">
                                        
                                        <i class="zwicon-close-circle" style="color: white;font-size: 18px;"></i>
                                    </a>
                                    @else
                                    <a href="{{ route('admin.dashboard.month.active',$v_info->id) }}" style="background-color: green;padding: 4px 7px;margin-right: 5px; border-radius: 3px;margin-top: 5px;">
                                        <i class="zwicon-checkmark-circle" style="color: white;font-size: 18px;"></i>
                                    </a>
                                    @endif
                                    <a href="{{route('admin.dashboard.month.edit',$v_info->id)}}" class="btn btn-info btn-sm"><i class="zwicon-edit-square-feather" style="color: white;font-size: 18px;"></i></a>
                                    
                                    <a href="{{route('admin.dashboard.month.destroy',$v_info->id)}}" class="btn btn-danger btn-sm"><i class="zwicon-folder-delete" style="color: white;font-size: 18px;"></i></a>
                                </td>
                                
                            </tr>
                            @endforeach

                        </tbody>
                        <thead>
                            <tr style="background-color: #9a6502;">
                                <th>Id</th>
                                <th>Name</th>
                                <th>Status</th>
                                <th>Action</th>
                            </tr>
                        </thead>

                    </table>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
