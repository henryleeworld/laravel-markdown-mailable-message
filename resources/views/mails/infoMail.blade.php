@component('mail::message')
# {{ $info['title'] }}

日本火腿「台灣大王」王柏融明年賽季將換背號，從 99 號變為「3 號」球衣，而這正是今年季後退休的火腿明星二壘手田中賢介，所穿的背號。

王柏融旅日首季受到傷勢影響，整季出賽 88 場，有 3 轟、35 分打點，打擊率 0.255 成績，上壘率 0.321，長打率 0.327，整體攻擊指數為 0.647。

@component('mail::button', ['url' => $info['url']])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent
