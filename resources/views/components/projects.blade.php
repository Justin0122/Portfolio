<div class="wrapper">
    <nav class="lil-nav">
        @php
            $dir = 'images/projects';
            $subfolders = array_filter(glob($dir . '/*'), 'is_dir');
            $count = 1;
            foreach ($subfolders as $subfolder) {
            $images = glob($subfolder . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            $firstImage = $images[0];
            $subfolderName = basename($subfolder);
            echo "<a id='image-$count' href='#$subfolderName'><img src='$firstImage' alt='$subfolderName' /></a>";
            $count++;
            }
        @endphp
    </nav>

    <div class="gallery">
        @php
            foreach ($subfolders as $subfolder) {
            $images = glob($subfolder . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);
            $firstImage = $images[0];
            $subfolderName = basename($subfolder);
            $count = 1;
            echo "<div id='$subfolderName' class='gallery-item'>";
            foreach ($images as $image) {
            echo "<img class='gallery__img' src='$image' alt='$subfolderName' />";
            }
            echo "</div>";
            }
        @endphp
    </div>
</div>
