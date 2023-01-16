<x-mail::message>
# {{ $object->title }}

Thanks for creating a new post.

<x-mail::button :url="''">
Button Text
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
