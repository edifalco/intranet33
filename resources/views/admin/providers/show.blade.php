@extends('layouts.app')

@section('content')
    <h3 class="page-title">@lang('global.providers.title')</h3>

    <div class="panel panel-default">
        <div class="panel-heading">
            @lang('global.app_view')
        </div>

        <div class="panel-body table-responsive">
            <div class="row">
                <div class="col-md-6">
                    <table class="table table-bordered table-striped">
                        <tr>
                            <th>@lang('global.providers.fields.name')</th>
                            <td field-key='name'>{{ $provider->name }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.providers.fields.address')</th>
                            <td field-key='address'>{{ $provider->address }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.providers.fields.postal-code')</th>
                            <td field-key='postal_code'>{{ $provider->postal_code }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.providers.fields.city')</th>
                            <td field-key='city'>{{ $provider->city }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.providers.fields.country')</th>
                            <td field-key='country'>{{ $provider->country }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.providers.fields.phone')</th>
                            <td field-key='phone'>{{ $provider->phone }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.providers.fields.contact-person')</th>
                            <td field-key='contact_person'>{{ $provider->contact_person }}</td>
                        </tr>
                        <tr>
                            <th>@lang('global.providers.fields.email')</th>
                            <td field-key='email'>{{ $provider->email }}</td>
                        </tr>
                    </table>
                </div>
            </div><!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    
<li role="presentation" class="active"><a href="#expenses" aria-controls="expenses" role="tab" data-toggle="tab">Expenses</a></li>
</ul>

<!-- Tab panes -->
<div class="tab-content">
    
<div role="tabpanel" class="tab-pane active" id="expenses">
<table class="table table-bordered table-striped {{ count($expenses) > 0 ? 'datatable' : '' }}">
    <thead>
        <tr>
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

    <tbody>
        @if (count($expenses) > 0)
            @foreach ($expenses as $expense)
                <tr data-entry-id="{{ $expense->id }}">
                    <td field-key='user'>{{ $expense->user->name ?? '' }}</td>
                                <td field-key='project'>{{ $expense->project->name ?? '' }}</td>
                                <td field-key='expense_type'>{{ $expense->expense_type->name ?? '' }}</td>
                                <td field-key='meeting'>{{ $expense->meeting->name ?? '' }}</td>
                                <td field-key='contingency'>{{ $expense->contingency->name ?? '' }}</td>
                                <td field-key='date'>{{ $expense->date }}</td>
                                <td field-key='due_date'>{{ $expense->due_date }}</td>
                                <td field-key='provider'>{{ $expense->provider->name ?? '' }}</td>
                                <td field-key='pm'>{{ $expense->pm->name ?? '' }}</td>
                                <td field-key='pm_approval_date'>{{ $expense->pm_approval_date }}</td>
                                <td field-key='finance'>{{ $expense->finance->name ?? '' }}</td>
                                <td field-key='finance_approval_date'>{{ $expense->finance_approval_date }}</td>
                                <td field-key='created_by'>{{ $expense->created_by->name ?? '' }}</td>
                                @if( request('show_deleted') == 1 )
                                <td>
                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'POST',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.expenses.restore', $expense->id])) !!}
                                    {!! Form::submit(trans('global.app_restore'), array('class' => 'btn btn-xs btn-success')) !!}
                                    {!! Form::close() !!}
                                                                    {!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.expenses.perma_del', $expense->id])) !!}
                                    {!! Form::submit(trans('global.app_permadel'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                                                </td>
                                @else
                                <td>
                                    @can('expense_view')
                                    <a href="{{ route('admin.expenses.show',[$expense->id]) }}" class="btn btn-xs btn-primary">@lang('global.app_view')</a>
                                    @endcan
                                    @can('expense_edit')
                                    <a href="{{ route('admin.expenses.edit',[$expense->id]) }}" class="btn btn-xs btn-info">@lang('global.app_edit')</a>
                                    @endcan
                                    @can('expense_delete')
{!! Form::open(array(
                                        'style' => 'display: inline-block;',
                                        'method' => 'DELETE',
                                        'onsubmit' => "return confirm('".trans("global.app_are_you_sure")."');",
                                        'route' => ['admin.expenses.destroy', $expense->id])) !!}
                                    {!! Form::submit(trans('global.app_delete'), array('class' => 'btn btn-xs btn-danger')) !!}
                                    {!! Form::close() !!}
                                    @endcan
                                </td>
                                @endif
                </tr>
            @endforeach
        @else
            <tr>
                <td colspan="28">@lang('global.app_no_entries_in_table')</td>
            </tr>
        @endif
    </tbody>
</table>
</div>
</div>

            <p>&nbsp;</p>

            <a href="{{ route('admin.providers.index') }}" class="btn btn-default">@lang('global.app_back_to_list')</a>
        </div>
    </div>
@stop


