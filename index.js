/**
 * Fájl választó
 */

function toggleAccordion(fileNumber) {
    const fileContent = document.querySelector(`.file-item:nth-child(${fileNumber}) .file-content`);
    fileContent.style.display = (fileContent.style.display === 'block') ? 'none' : 'block';
}


/**
 * Üdvözlő szöveg
 */

document.addEventListener('DOMContentLoaded', function () {
    // Szövegek, amiket felváltva szeretnénk gépelni
    const textsToType = ["PROGRAMMER GNOME", "BACKEND DEVELOPER", "ARCH LINUX LOVER"];

    // Időzítő, hogy megvárja a CSS animáció végezze el a gépelő hatást
    setTimeout(() => {
        startTyping(textsToType);
    }, 1000);
});

function startTyping(texts) {
    const typingContainer = document.getElementById('typing-container');
    let currentTextIndex = 0;

    function type() {
        const text = texts[currentTextIndex];
        let index = 0;

        function typeCharacter() {
            typingContainer.textContent += text[index];
            index++;

            if (index < text.length) {
                setTimeout(typeCharacter, 100); // Az időzítés beállítja a karakterek közötti késleltetést
            } else {
                // Az egész szöveg kiírása után következő szövegre váltás
                setTimeout(() => {
                    typingContainer.textContent = ''; // Törlés a következő ismétlés előtt
                    currentTextIndex = (currentTextIndex + 1) % texts.length; // Körkörös váltás a szövegek között
                    type(); // Újraindítás a következő szöveggel
                }, 1000);
            }
        }

        typeCharacter();
    }

    type();
}