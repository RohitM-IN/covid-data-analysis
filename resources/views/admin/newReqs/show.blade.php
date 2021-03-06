@extends('layouts.admin')
@section('content')

<div class="card">
    <div class="card-header">
        {{ trans('global.show') }} {{ trans('cruds.newReq.title') }}
    </div>

    <div class="card-body">
        <div class="form-group">
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.new-reqs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
            <table class="table table-bordered table-striped">
                <tbody>
                    <tr>
                        <th>
                            {{ trans('cruds.newReq.fields.id') }}
                        </th>
                        <td>
                            {{ $newReq->id }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newReq.fields.model') }}
                        </th>
                        <td>
                            {{ App\Models\NewReq::MODEL_SELECT[$newReq->model] ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newReq.fields.email') }}
                        </th>
                        <td>
                            {{ $newReq->email->email ?? '' }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newReq.fields.data') }}
                        </th>
                        <td>
                            {{ $newReq->data }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newReq.fields.message') }}
                        </th>
                        <td>
                            {{ $newReq->message }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newReq.fields.status') }}
                        </th>
                        <td>
                            {{ $newReq->status }}
                        </td>
                    </tr>
                    <tr>
                        <th>
                            {{ trans('cruds.newReq.fields.admin_message') }}
                        </th>
                        <td>
                            {!! $newReq->admin_message !!}
                        </td>
                    </tr>
                </tbody>
            </table>
            <div class="form-group">
                <a class="btn btn-default" href="{{ route('admin.new-reqs.index') }}">
                    {{ trans('global.back_to_list') }}
                </a>
            </div>
        </div>
    </div>
</div>



@endsection
