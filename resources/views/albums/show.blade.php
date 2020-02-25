@extends('layouts.app')

@section('content')
    <h1>{{ $album->name }}</h1>
    <a href="/" class="button secondary">Go Back</a>
    <a href="/photos/create/{{ $album->id }}" class="button">Upload Photos to Album</a>
    <hr>
        @if(count($album->photos) > 0)
        <?php
        $colcount = count($album->photos);
        $i = 1;
        ?>

        <div id="photos">
            <div class="grid-x grid-margin-x text-center">
                @foreach ($album->photos as $photo)
                        <div class="cell medium-4">
                            <a href="/photo/{{ $photo->id }}">
                                <img style="height: 270px;" src="/storage/photos/{{ $photo->album_id }}/{{ $photo->photo }}" alt="{{ $album->name }}" class="thumnail">
                            </a>
                            <br>
                            <h4>{{ $photo->name }}</h4>
                        </div>
                    @if($i % 3 == 0)
            </div></div><div class="grid-x grid-margin-x text-center">
                    @endif
                    <?php $i++; ?>
                @endforeach
            </div>
        </div>
    @else 
        <p>No Photos To display</p>
    @endif
@endsection