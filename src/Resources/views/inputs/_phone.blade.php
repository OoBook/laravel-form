
{{-- We should have check if it's floating labeled text field --}}
@if(isset($floating) && $floating == true)



@else
    @isset($label)
    <label>{{$label}}</label>
    @endisset
    <input
        class="form-control {{$class ?? ''}}"
        type="tel"
        placeholder="{{ $placeholder ?? ''}}"
        name="{{ $input_name }}"
        value="{{ isset($model) ? $model->getFormInputValue($input_name) : ''}}"
        {{$props}}
        />
    <span class="help-block">
        {{ $help_label ?? '' }}
    </span>
    {{-- <p class="help-block"></p> --}}
@endif

