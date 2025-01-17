<?php /**
 * @var \App\Models\Map $map
 * @var \App\Models\MapLayer $model
 */?>
@extends('layouts.' . ($ajax ? 'ajax' : 'app'), [
    'title' => __('maps/layers.create.title', ['name' => $map->name]),
    'description' => '',
    'breadcrumbs' => [
        ['url' => route('maps.index'), 'label' => __('maps.index.title')],
        ['url' => $map->entity->url('show'), 'label' => $map->name],
        __('maps/layers.create.title')
    ]
])

@section('content')
    <div class="panel panel-default">
        @if ($ajax)
            <div class="panel-heading">
                <button type="button" class="close" data-dismiss="modal" aria-label="{{ trans('crud.delete_modal.close') }}"><span aria-hidden="true">&times;</span></button>
                <h4>
                    {{ __('maps/layers.create.title', ['name' => $map->name]) }}
                </h4>
            </div>
        @endif
        <div class="panel-body">
            @include('partials.errors')

            {!! Form::open(['route' => ['maps.map_layers.store', $map],
                'method' => 'POST',
                'data-shortcut' => 1,
                'id' => 'map-layer-form',
                'enctype' => 'multipart/form-data',
                'class' => 'ajax-subform'
               ]) !!}
            @include('maps.layers._form', ['model' => null])

            <div class="form-group">
                <button class="btn btn-success form-submit-main">{{ trans('crud.save') }}</button>
                @if (!$ajax)
                    {!! __('crud.or_cancel', ['url' => (!empty($cancel) ? $cancel : url()->previous())]) !!}
                @endif
            </div>

            {!! Form::close() !!}
        </div>
    </div>
@endsection
