let text;
fetch('content.txt')
    .then(response => response.text())
    .then(data => {
        text = data;

        let index = 0;
        function typeWriter() {
            if (index < text.length) {
                document.getElementById("typewriter").innerHTML += text.charAt(index);
                index++;
                setTimeout(typeWriter, 50);
            }
        }
        typeWriter();
    });
