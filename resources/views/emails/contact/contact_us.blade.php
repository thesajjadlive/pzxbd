@component('mail::message')
    # Visitor feedback/suggestion message

    Name: {{ $data['name'] }}
    Email: {{ $data['email'] }}

    Message:
    {{ $data['message'] }}


    From
    {{ config('app.name') }}


    *This is an automated email, please don't reply.
@endcomponent
