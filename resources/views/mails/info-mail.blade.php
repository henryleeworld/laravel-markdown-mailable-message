@component('mail::message')
# {{ $info['title'] }}

{{ __('The ordinary brown brick building, tucked within a nondescript block in Delaware, hints that something important lay inside, possibly even precious.') }}

{{ __('There’s a rare Pikachu card and a pair of sneakers worn and signed by the late NBA great Kobe Bryant.') }}

{{ __('In all, $200 million in collectibles are stored in two vaults inside the building, equipped with some of the latest technology to keep the valuable cache safe from harm or thieves.') }}

@component('mail::button', ['url' => $info['url']])
{{ __('Link') }}
@endcomponent

{{ __('Thanks,') }}<br>
{{ config('app.name') }}
@endcomponent
