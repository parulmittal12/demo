@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
    <h2>Collapsible Directory List</h2>
        <div class="box">
            <ul class="directory-list">
                <li>assets
                <ul>
                    <li>css
                    <ul>
                        <li>typography.css</li>
                        <li>layout.css</li>
                        <li>modules.css</li>
                        <li>states.css</li>
                        <li>theme.css</li>
                    </ul>
                    </li>
                    <li>js
                    <ul>
                        <li>custom.js</li>
                        <li>jquery.js</li>
                    </ul>
                    </li>
                    <li>images
                    <ul>
                        <li>logo.svg</li>
                        <li>arrow-sprite.svg</li>
                        <li>social-sprite.svg</li>
                    </ul>
                    </li>
                    <li>functions.php</li>
                </ul>
                </li>
                <li>templates
                <ul>
                    <li>pages
                    <ul>
                        <li>about.tpl</li>
                        <li>pricing.tpl</li>
                        <li>contact.tpl</li>
                        <li>home.tpl</li>
                        <li>features.tpl</li>
                    </ul>
                    </li>
                    <li>header.tpl</li>
                    <li>menu.tpl</li>
                    <li>footer.tpl</li>
                </ul>
                </li>
                <li>index.php</li>
                <li>style.css</li>
            </ul>
        </div>
    </div>
</div>
@endsection
