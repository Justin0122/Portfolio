<div class="projects">
    <div class="badges">
        @php
            $folders = glob(public_path('images/projects/*'), GLOB_ONLYDIR);
            foreach ($folders as $folder) {
                $folder = str_replace(public_path(), '', $folder);
                $folder = str_replace('images/projects/', '', $folder);
                $folder = substr($folder, 3);
            
                echo '<a href="#' .
                    $folder .
                    '">
        <div class="project bg-primary' .
                    $folder .
                    '">
            <span class="badge badge-primary text-dark hover-secondary bg-info link">' .
                    $folder .
                    '</span>
        </div>
    </a>';
            }
        @endphp
    </div>
    <div id="carousel" class="carousel">
        <div id="slide-container">
            @php
                $folders = glob(public_path('images/projects/*'), GLOB_ONLYDIR);
                foreach ($folders as $folder) {
                    $folder = str_replace(public_path(), '', $folder);
                    $folderTitle = str_replace('images/projects/', '', $folder);
                    $folderTitle = substr($folderTitle, 3);
                    $images = glob(public_path($folder . '/*'));
                    $index = 0;
                    $i = 0; // Initiailze counter
                    $max = 3; // Max number of images to show
                    echo '<div class="slide" id="slide-' . $index . '">';
                    foreach ($images as $image) {
                        if ($i < $max) {
                            if ($i == 0) {
                                echo '  <div class="caption anchor" style="position: absolute;" id="' .
                                    $folderTitle .
                                    '">
                                            <h1>' .
                                    $folderTitle .
                                    '</h1>
                                </div>';
                            }
                            $image = str_replace(public_path(), '', $image);
                            echo '<img src="' . $image . '" alt="' . $image . '">';
                            $i++;
                        }
                    }
                    echo '</div>';
                    $index++;
                }
            @endphp

        </div>
        <div id="back-button" class="arrow back"></div>
        <div id="forward-button" class="arrow forward"></div>
    </div>
</div>
