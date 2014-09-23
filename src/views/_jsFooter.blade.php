@foreach (Config::get('tpl::paths.js_footer') as $js_public_path)
<script src="{{asset($js_public_path)}}"></script>
@endforeach