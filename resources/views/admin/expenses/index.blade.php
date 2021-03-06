@inject('request', 'Illuminate\Http\Request')
@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.expenses.title')</h3>
    @can('expense_create')
    <p>
        <a href="{{ route('admin.expenses.create') }}" class="btn btn-success">@lang('global.app_add_new')</a>
        <a href="#" class="btn btn-warning" style="margin-left:5px;" data-toggle="modal" data-target="#myModal">@lang('global.app_csvImport')</a>
        @include('csvImport.modal', ['model' => 'Expense'])
        
        @if(!is_null(Auth::getUser()->role_id) && config('global.can_see_all_records_role_id') == Auth::getUser()->role_id)
            @if(Session::get('Expense.filter', 'all') == 'my')
                <a href="?filter=all" class="btn btn-default">Show all records</a>
            @else
                <a href="?filter=my" class="btn btn-default">Filter my records</a>
            @endif
        @endif
    </p>
    @endcan

    <p>
        <ul class="list-inline">
            <li><a href="{{ route('admin.expenses.index') }}" style="{{ request('show_deleted') == 1 ? '' : 'font-weight: 700' }}">@lang('global.app_all')</a></li> |
            <li><a href="{{ route('admin.expenses.index') }}?show_deleted=1" style="{{ request('show_deleted') == 1 ? 'font-weight: 700' : '' }}">@lang('global.app_trash')</a></li>
        </ul>
    </p>
    

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_list')
        </div>

        <div class="panel-body table-responsive">
            <table class="table table-bordered table-striped ajaxTable @can('expense_delete') @if ( request('show_deleted') != 1 ) dt-select @endif @endcan">
                <thead>
                    <tr>
                        @can('expense_delete')
                            @if ( request('show_deleted') != 1 )<th style="text-align:center;"><input type="checkbox" id="select-all" /></th>@endif
                        @endcan

                        <th>@lang('global.expenses.fields.user')</th>
                        <th>@lang('global.expenses.fields.project')</th>
                        <th>@lang('global.expenses.fields.expense-type')</th>
                        <th>@lang('global.expenses.fields.meeting')</th>
                        <th>@lang('global.expenses.fields.contingency')</th>
                        <th>@lang('global.expenses.fields.date')</th>
                        <th>@lang('global.expenses.fields.due-date')</th>
                        <th>@lang('global.expenses.fields.provider')</th>
                        <th>@lang('global.expenses.fields.pm')</th>
                        <th>@lang('global.expenses.fields.pm-approval-date')</th>
                        <th>@lang('global.expenses.fields.finance')</th>
                        <th>@lang('global.expenses.fields.finance-approval-date')</th>
                        <th>@lang('global.expenses.fields.created-by')</th>
                        @if( request('show_deleted') == 1 )
                        <th>&nbsp;</th>
                        @else
                        <th>&nbsp;</th>
                        @endif
                    </tr>
                </thead>
            </table>
        </div>
    </div>
@stop

@section('javascript') 
    <script>
        @can('expense_delete')
            @if ( request('show_deleted') != 1 ) window.route_mass_crud_entries_destroy = '{{ route('admin.expenses.mass_destroy') }}'; @endif
        @endcan
        $(document).ready(function () {
            window.dtDefaultOptions.ajax = '{!! route('admin.expenses.index') !!}?show_deleted={{ request('show_deleted') }}';
            window.dtDefaultOptions.columns = [@can('expense_delete')
                @if ( request('show_deleted') != 1 )
                    {data: 'massDelete', name: 'id', searchable: false, sortable: false},
                @endif
                @endcan{data: 'user.name', name: 'user.name'},
                {data: 'project.name', name: 'project.name'},
                {data: 'expense_type.name', name: 'expense_type.name'},
                {data: 'meeting.name', name: 'meeting.name'},
                {data: 'contingency.name', name: 'contingency.name'},
                {data: 'date', name: 'date'},
                {data: 'due_date', name: 'due_date'},
                {data: 'provider.name', name: 'provider.name'},
                {data: 'pm.name', name: 'pm.name'},
                {data: 'pm_approval_date', name: 'pm_approval_date'},
                {data: 'finance.name', name: 'finance.name'},
                {data: 'finance_approval_date', name: 'finance_approval_date'},
                {data: 'created_by.name', name: 'created_by.name'},
                
                {data: 'actions', name: 'actions', searchable: false, sortable: false}
            ];
            processAjaxTables();
        });
    </script>
@endsection