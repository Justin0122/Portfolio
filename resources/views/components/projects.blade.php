<div class="projects">
    <div class="badges">
        @foreach ($imagesByFolder as $folderName => $images)
            <a href="/#{{ $folderName }}">
                <div class="project bg-primary{{ $folderName }}">
                    <span class="badge badge-primary text-dark hover-secondary bg-info link">{{ $folderName }}</span>
                </div>
            </a>
        @endforeach
    </div>

    <div id="carousel" class="carousel">
        <div id="slide-container">
            @foreach ($imagesByFolder as $folderName => $images)
                <div class="slide" id="slide-{{ $loop->index }}">
                    @foreach ($images as $imageUrl)
                        @if ($loop->first)
                            <div class="caption anchor" style="position: absolute;" id="{{ $folderName }}">
                                <h1>{{ $folderName }}</h1>
                            </div>
                        @endif
                        <img src="{{ $imageUrl }}" alt="{{ $imageUrl }}">
                    @endforeach
                </div>
            @endforeach
        </div>

        <div id="back-button" class="arrow back"></div>
        <div id="forward-button" class="arrow forward"></div>
    </div>
</div>
