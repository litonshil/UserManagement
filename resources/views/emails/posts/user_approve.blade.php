@component('mail::message')
# Introduction

Bit Code Approved Your Request

@component('mail::button', ['url' => 'http://127.0.0.1:8000/dashboard'])
    View Site
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
