@if ($campaign->enabled('calendars'))
    <li class="{{ (request()->get('tab') == 'form-calendar' ? ' active' : '') }}" data-tab="reminders">
        <a href="#form-calendar" title="{{ trans('crud.panels.calendar_date') }}" data-toggle="tooltip">
            {{ trans('crud.panels.calendar_date') }}
        </a>
    </li>
@endif
