@component('mail::message')

Dear **{{$user->name}},**

This is to notify you that a new approval request has been sent waiting for your approval.

Use the button below to view all pending requests.

@component('mail::button', ['url' => url('/api/v1/request/fetch/all')])
Pending Requests
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
