<x-mail::message>
# {{ $info['title'] }}

{{ __('A major exhibition dedicated to baroque master Caravaggio opens on Friday in Rome, including normally out-of-reach works from private collections and others not seen in the artist\'s Italian homeland for centuries.') }}

{{ __('Caravaggio, born as Michelangelo Merisi, was a virtuoso of the chiaroscuro technique of lighting to make his subjects seem to come alive. He led a short and turbulent life, which included a forced exile from Rome after killing a man in a brawl.') }}

{{ __('The exhibition in the Palazzo Barberini museum covers 15 years of his professional life, from his arrival in Rome in 1595, where he established himself as a rare talent, until his death in 1610, aged 39, in southern Tuscany.') }}

<x-mail::button :url="$info['url']">
{{ __('Link') }}
</x-mail::button>

{{ __('Thanks,') }}<br>
{{ config('app.name') }}
</x-mail::message>
