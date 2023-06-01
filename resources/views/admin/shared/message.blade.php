@php
    if ( session('success')) {
        $msg_custom = session('success');
        $msg_class = 'success';
    } elseif ( session('notice')) {
        $msg_custom = session('notice');
        $msg_class = 'notice';
    } elseif ( session('fail')) {
        $msg_custom = session('fail');
        $msg_class = 'fail';
    }

    if ( isset($msg_custom) && isset($msg_class) ) {
@endphp

        <p class="{{ $msg_class }}">{{ $msg_custom }}</p>

@php
    }
@endphp
