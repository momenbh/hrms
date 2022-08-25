

@component('mail::message')
# You have a new Leave Message from your website. <br><br>
###  **Name :** {{$data['name']}}<br>
###  **Email :** {{$data['email']}}<br>
###  **Subject :** {{$data['subject']}}<br>


Dear, <br>

###  ***{{$data['reson']}}***<br>
<br>


Thanks,<br>
{{ config('app.name') }}
@endcomponent