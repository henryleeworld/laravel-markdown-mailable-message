<x-mail::message>
# {{ $info['title'] }}

{{ __('In a new study involving a group of polyglots, the brain activity of the participants was monitored using a method called functional magnetic resonance imaging as they listened to passages read in various languages.') }}

{{ __('With one intriguing exception, activity increased in the areas of the cerebral cortex involved in the brain’s language-processing network when these polyglots - who spoke between five and 54 languages - heard languages in which they were the most proficient compared to ones of lesser or no proficiency.') }}

{{ __('But an exception caught the attention of the researchers. In many of the participants, listening to their native language elicited a lesser brain response compared to hearing other languages they knew - on average down about 25%. And in some of the polyglots, listening to their native language activated only a part of the brain’s language network, not the whole thing.') }}

<x-mail::button :url="$info['url']">
{{ __('Link') }}
</x-mail::button>

{{ __('Thanks,') }}<br>
{{ config('app.name') }}
</x-mail::message>
