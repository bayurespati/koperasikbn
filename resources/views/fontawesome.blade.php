@extends('layouts.master_fe')

@push('additional_css')
<style>
    html,
    body,
    div,
    span,
    applet,
    object,
    iframe,
    h1,
    h2,
    h3,
    h4,
    h5,
    h6,
    p,
    blockquote,
    pre,
    a,
    abbr,
    acronym,
    address,
    big,
    cite,
    code,
    del,
    dfn,
    em,
    img,
    ins,
    kbd,
    q,
    s,
    samp,
    small,
    strike,
    strong,
    sub,
    sup,
    tt,
    var,
    b,
    u,
    i,
    center,
    dl,
    dt,
    dd,
    ol,
    ul,
    li,
    fieldset,
    form,
    label,
    legend,
    table,
    caption,
    tbody,
    tfoot,
    thead,
    tr,
    th,
    td,
    article,
    aside,
    canvas,
    details,
    embed,
    figure,
    figcaption,
    footer,
    header,
    hgroup,
    menu,
    nav,
    output,
    ruby,
    section,
    summary,
    time,
    mark,
    audio,
    video {
        margin: 0;
        padding: 0;
        border: 0;
        font-size: 100%;
        font: inherit;
        vertical-align: baseline;
    }

    /* HTML5 display-role reset for older browsers */
    article,
    aside,
    details,
    figcaption,
    figure,
    footer,
    header,
    hgroup,
    menu,
    nav,
    section {
        display: block;
    }

    body {
        line-height: 1;
    }

    ol,
    ul {
        list-style: none;
    }

    blockquote,
    q {
        quotes: none;
    }

    blockquote:before,
    blockquote:after,
    q:before,
    q:after {
        content: '';
        content: none;
    }

    table {
        border-collapse: collapse;
        border-spacing: 0;
    }

    body {
        font-family: 'Varela Round', Helvetica, Arial, sans-serif;
        font-size: 16px;
        color: #222;
    }

    a {
        color: #333;
        border-bottom: 1px solid #a9fd00;
        font-weight: bold;
        text-decoration: none;
    }

    * {
        -moz-box-sizing: border-box;
        -webkit-box-sizing: border-box;
        box-sizing: border-box;
        margin: 0;
        padding: 0;
    }

    [class^="flaticon-"]:before,
    [class*=" flaticon-"]:before,
    [class^="flaticon-"]:after,
    [class*=" flaticon-"]:after {
        font-family: Flaticon;
        font-size: 30px;
        font-style: normal;
        margin-left: 20px;
        color: #333;
    }

    .wrapper {
        max-width: 600px;
        margin: auto;
        padding: 0 1em;
    }

    .title {
        font-size: 1.25em;
        text-align: center;
        margin-bottom: 1em;
        text-transform: uppercase;
    }

    header {
        text-align: center;
        background-color: #222;
        color: #fff;
        padding: 1em;
    }

    header .logo {
        width: 210px;
        height: 38px;
        display: inline-block;
        vertical-align: middle;
        margin-right: 1em;
        border: none;
    }

    header strong {
        font-size: 1.95em;
        font-weight: bold;
        vertical-align: middle;
        margin-top: 5px;
        display: inline-block;
    }

    .demo {
        margin: 2em auto;
        line-height: 1.25em;
    }

    .demo ul li {
        margin-bottom: 1em;
    }

    .demo ul li .num {
        color: #222;
        border-radius: 20px;
        display: inline-block;
        width: 26px;
        padding: 3px;
        height: 26px;
        text-align: center;
        margin-right: 0.5em;
        border: 1px solid #222;
    }

    .demo ul li code {
        background-color: #222;
        border-radius: 4px;
        padding: 0.25em 0.5em;
        display: inline-block;
        color: #fff;
        font-family: Consolas, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace;
        font-weight: lighter;
        margin-top: 1em;
        font-size: 0.8em;
        word-break: break-all;
    }

    .demo ul li code.big {
        padding: 1em;
        font-size: 0.9em;
    }

    .demo ul li code .red {
        color: #EF3159;
    }

    .demo ul li code .green {
        color: #ACFF65;
    }

    .demo ul li code .yellow {
        color: #FFFF99;
    }

    .demo ul li code .blue {
        color: #99D3FF;
    }

    .demo ul li code .purple {
        color: #A295FF;
    }

    .demo ul li code .dots {
        margin-top: 0.5em;
        display: block;
    }

    #glyphs {
        border-bottom: 1px solid #ccc;
        padding: 2em 0;
        text-align: center;
    }

    .glyph {
        display: inline-block;
        width: 9em;
        margin: 1em;
        text-align: center;
        vertical-align: top;
        background: #FFF;
    }

    .glyph .glyph-icon {
        padding: 10px;
        display: block;
        font-family: "Flaticon";
        font-size: 64px;
        line-height: 1;
    }

    .glyph .glyph-icon:before {
        font-size: 64px;
        color: #222;
        margin-left: 0;
    }

    .class-name {
        font-size: 0.65em;
        background-color: #222;
        color: #fff;
        border-radius: 4px 4px 0 0;
        padding: 0.5em;
        color: #FFFF99;
        font-family: Consolas, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace;
    }

    .author-name {
        font-size: 0.6em;
        background-color: #fcfcfd;
        border: 1px solid #DEDEE4;
        border-top: 0;
        border-radius: 0 0 4px 4px;
        padding: 0.5em;
    }

    .class-name:last-child {
        font-size: 10px;
        color: #888;
    }

    .class-name:last-child a {
        font-size: 10px;
        color: #555;
    }

    .class-name:last-child a:hover {
        color: #a9fd00;
    }

    .glyph>input {
        display: block;
        width: 100px;
        margin: 5px auto;
        text-align: center;
        font-size: 12px;
        cursor: text;
    }

    .glyph>input.icon-input {
        font-family: "Flaticon";
        font-size: 16px;
        margin-bottom: 10px;
    }

    .attribution .title {
        margin-top: 2em;
    }

    .attribution textarea {
        background-color: #fcfcfd;
        padding: 1em;
        border: none;
        box-shadow: none;
        border: 1px solid #DEDEE4;
        border-radius: 4px;
        resize: none;
        width: 100%;
        height: 150px;
        font-size: 0.8em;
        font-family: Consolas, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace;
        -webkit-appearance: none;
    }

    .iconsuse {
        margin: 2em auto;
        text-align: center;
        max-width: 1200px;
    }

    .iconsuse:after {
        content: '';
        display: table;
        clear: both;
    }

    .iconsuse .image {
        float: left;
        width: 25%;
        padding: 0 1em;
    }

    .iconsuse .image p {
        margin-bottom: 1em;
    }

    .iconsuse .image span {
        display: block;
        font-size: 0.65em;
        background-color: #222;
        color: #fff;
        border-radius: 4px;
        padding: 0.5em;
        color: #FFFF99;
        margin-top: 1em;
        font-family: Consolas, Monaco, Lucida Console, Liberation Mono, DejaVu Sans Mono, Bitstream Vera Sans Mono, Courier New, monospace;
    }

    #footer {
        text-align: center;
        background-color: #4C5B5C;
        color: #7c9192;
        padding: 1em;
    }

    #footer a {
        border: none;
        color: #a9fd00;
        font-weight: normal;
    }

    @media (max-width: 960px) {
        .iconsuse .image {
            width: 50%;
        }
    }

    @media (max-width: 560px) {
        .iconsuse .image {
            width: 100%;
        }
    }
</style>
@endpush
</head>

@section('content')
<section id="glyphs">


    <div class="glyph">
        <div class="fa fa-500px" style="font-size: 100px;"></div>
        <div class="class-name">.fa-500px</div>
    </div>
    <div class="glyph">
        <div class="fa fa-ad" style="font-size: 100px;"></div>
        <div class="class-name">.fa-ad</div>
    </div>
    <div class="glyph">
        <div class="fa fa-accessible-icon" style="font-size: 100px;"></div>
        <div class="class-name">.fa-accessible-icon</div>
    </div>
    <div class="glyph">
        <div class="fa fa-anchor" style="font-size: 100px;"></div>
        <div class="class-name">.fa-anchor</div>
    </div>

</section>
@endsection
