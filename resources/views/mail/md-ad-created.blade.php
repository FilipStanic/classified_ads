<x-mail::message>
# Ad is created

<x-mail::panel>
This is the panel content.
</x-mail::panel>
Hello dear user! Your ad has been created successfully.

<x-mail::button :url="$url">
    See AD
</x-mail::button>

<x-mail::table>
| Laravel       | Table         | Example  |
| ------------- |:-------------:| --------:|
| Col 2 is      | Centered      | $10      |
| Col 3 is      | Right-Aligned | $20      |
</x-mail::table>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>
