@if ($errors->any())
    <div style="background:#fee; padding:10px; border:1px solid #f99; margin-bottom:12px;">
        <ul style="margin:0; padding-left:18px;">
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
