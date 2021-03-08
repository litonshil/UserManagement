@component('mail::message')
# Introduction

Your member request is declined

@component('mail::button', ['url' => 'http://127.0.0.1:8000/register'])
    Register Again
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
