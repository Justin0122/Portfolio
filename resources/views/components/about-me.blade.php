<section class="about-me" id="about-me">
    <div id="carousel" class="carousel">
        <div id="slide-container">
            <div class="slide" data-slideIndex="0">
                <img src="/images/justin.png" alt="Justin Jongstra">
                <div class="typewrite text-neutral" id="typewriter">

                </div>
            </div>
            <div class="slide" data-slideIndex="1">
                <img src="/images/me/mountainbike.jpg" alt="Mountainbike">
            </div>
            <div class="slide" data-slideIndex="2">
                <img src="/images/me/drawing.jpg" alt="Drawing">
            </div>
            <div class="slide" data-slideIndex="3">
                <video src="/images/me/piW.mp4" alt="PiW" autoplay loop muted></video>
            </div>
        </div>
        <div id="back-button" class="arrow back"></div>
        <div id="forward-button" class="arrow forward"></div>
        <div class="slide-indicators">
            <div class="slide-indicator active"></div>
            <div class="slide-indicator"></div>
            <div class="slide-indicator"></div>
            <div class="slide-indicator"></div>
        </div>
    </div>
    <div class="about-me-text">
        <h1 class="text-primary">About Me</h1>

        <p class="text-neutral">
            Hello, my name is Justin Jongstra and I am a 21 year old student. I have a passion for learning, mountain
            biking, drawing, playing games, and coding. I love to study and challenge myself in new and exciting ways,
            and I am always looking for ways to expand my knowledge and grow as a person. In my free time, I enjoy
            hitting the trails on my mountain bike and exploring new places, as well as playing video games and coding
            projects. I am a creative individual who is constantly seeking new opportunities to express my ideas and
            bring them to life.
        </p>
        <p class="text-neutral">
            I am mostly interested in PHP (especially the laravel framework currently), C++ and JavaScript, but I'm
            always open to learning new languages and frameworks.
        </p>


        @php
            //make empty array
            $skills = [];
            $personalSkills = [];
            $studyLevels = [];
            $niveaus = [];
            array_push($skills, 'PHP', 'Laravel', 'C++', 'C#', 'JavaScript', 'Python');
            array_push($personalSkills, 'Teamwork', 'Creativity', 'Problem Solving');
            array_push($niveaus, 'Kader', 'MBO 3', 'MBO 4', 'HBO');
            
            //make all arrays alphabetical
            sort($skills);
            sort($personalSkills);
            sort($studyLevels);
        @endphp

        <div clas="skills">
            <h3 class="text-primary">Skills</h3>
            @foreach ($skills as $skill)
                <span class="badge badge-primary text-neutral hover-primary bg-secondary">{{ $skill }}</span>
            @endforeach
            <br>
            @foreach ($personalSkills as $skill)
                <span class="badge badge-primary text-neutral hover-secondary bg-primary">{{ $skill }}</span>
            @endforeach
        </div>

        <div class="previous-studies">
            <h3 class="text-primary">Previous Studies</h3>
            <ul class="text-neutral">
                <li>Vehicle engineering
                    <span class="badge badge-primary text-dark hover-secondary bg-info">Kader</span>
                    <span class="badge badge-primary text-dark hover-secondary bg-success">Graduated</span>
                </li>
                <li>Mechatronics
                    <span class="badge badge-primary text-dark hover-secondary bg-info">MBO 3</span>
                    <span class="badge badge-primary text-dark hover-secondary bg-success">Studied for 2 years</span>
                </li>
                <li>IT Systems and Devices All-Around Worker
                    <span class="badge badge-primary text-dark hover-secondary bg-info">MBO 3</span>
                    <span class="badge badge-primary text-dark hover-secondary bg-success">Graduated</span>
                </li>
                <li>Software development
                    <span class="badge badge-primary text-dark hover-secondary bg-info">MBO 4</span>
                    <span class="badge badge-primary text-neutral hover-secondary bg-primary">Still studying</span>
                </li>
            </ul>
        </div>
        <br>
    </div>
</section>
