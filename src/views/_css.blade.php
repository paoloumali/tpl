@foreach (Config::get('tpl::paths.css_header') as $css_public_path)
<link rel="stylesheet" href="{{asset($css_public_path)}}" />
@endforeach