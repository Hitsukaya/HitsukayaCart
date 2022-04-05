<script>
    window.HitsukayaCart = {
        version: '{{ HitsukayaCart_version() }}',
        csrfToken: '{{ csrf_token() }}',
        baseUrl: '{{ url('/') }}',
        rtl: {{ is_rtl() ? 'true' : 'false' }},
        langs: {},
        data: {},
        errors: {},
        selectize: [],
    };

    HitsukayaCart.langs['admin::admin.buttons.delete'] = '{{ trans('admin::admin.buttons.delete') }}';
    HitsukayaCart.langs['media::media.file_manager.title'] = '{{ trans('media::media.file_manager.title') }}';
    HitsukayaCart.langs['media::messages.image_has_been_added'] = '{{ trans('media::messages.image_has_been_added') }}';
</script>

@stack('globals')

@routes
