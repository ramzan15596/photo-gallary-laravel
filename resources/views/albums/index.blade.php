@extends('layouts.app')

@section('content')
    <h3>Album</h3>

    @if(count($albums) > 0)
        <?php
        $colcount = count($albums);
        $i = 1;
        ?>

        <div id="albums">
            <div class="grid-x grid-margin-x text-center">
                @foreach ($albums as $album)
                        <div class="cell medium-4">
                            <a href="/albums/{{ $album->id }}">
                                <img style="height: 270px;" src="storage/album_covers/{{ $album->cover_image }}" alt="{{ $album->name }}" class="thumnail">
                            </a>
                            <br>
                            <h4>{{ $album->name }}</h4>
                        </div>
                    @if($i % 3 == 0)
            </div></div><div class="grid-x grid-margin-x text-center">
                    @endif
                    <?php $i++; ?>
                @endforeach
            </div>
        </div>
    @else 
        <p>No Albums To display</p>
    @endif

    {{-- <div class="grid-x grid-margin-x">
        <div class="cell medium-6 large-4">12/6/4 cells</div>
        <div class="cell medium-6 large-8">12/6/8 cells</div>
      </div> --}}
@endsection
