@use('Filament\Support\Facades\FilamentAsset')
<div
    class=""
    ax-load
    ax-load-src="{{ FilamentAsset::getAlpineComponentSrc('tributejs', 'asmit/mention') }}"
    x-data="mention({
    fieldName: '{{ $getId() }}',
    mentionableItems: {{json_encode($getMentionableItems())}},
    triggerWith: '{{$triggerWith()}}',
    pluck: '{{$getPluck()}}',
    avatar: '{{$getAvatar()}}',
    })"
    x-ingore
>

@include('filament-forms::components.rich-editor')
</div>
