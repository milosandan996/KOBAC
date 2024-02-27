
<section id="<?php
if ($curent == '/index.php' || $curent == '/' || $curent == '/index') {
    echo 'section-welcome';
} else if ($curent == '/o-nama.php' || $curent == '/o-nama') {
    echo 'section-o-nama';
} else if ($curent == '/obuka.php' || $curent == '/obuka') {
    echo 'section-obuka';
} else if ($curent == '/novi-testovi.php' || $curent == '/novi-testovi') {
    echo 'section-testovi';
} else if ($curent == '/ispitni-zadaci-prakticnog-ispita.php' || $curent == '/ispitni-zadaci-prakticnog-ispita') {
    echo 'section-ispitni';
} else if ($curent == '/saobracajni-znaci.php' || $curent == '/saobracajni-znaci') {
    echo 'section-znaci';
} else if ($curent == '/cenovnik.php' || $curent == '/cenovnik') {
    echo 'section-cenovnik';
} else if ($curent == '/vozni-park.php' || $curent == '/vozni-park') {
    echo 'section-auta';
} else if ($curent == '/kontakt.php' || $curent == '/kontakt') {
    echo 'section-kontakt';
}
?>" class="header vh-100">
    <div class="container text-center">
        <h1>
            <?php
            if ($curent == '/index.php' || $curent == '/' || $curent == '/index') {
                echo 'AUTO ŠKOLA KOBAC DOBRO DOŠLI';
            } else if ($curent == '/o-nama.php' || $curent == '/o-nama') {
                echo 'NAŠ TIM';
            } else if ($curent == '/obuka.php' || $curent == '/obuka') {
                echo 'OBUKA VOZAČA';
            } else if ($curent == '/novi-testovi.php' || $curent == '/novi-testovi') {
                echo 'NOVI TESTOVI';
            } else if ($curent == '/ispitni-zadaci-prakticnog-ispita.php' || $curent == '/ispitni-zadaci-prakticnog-ispita') {
                echo 'ISPITNI ZADACI PRAKTIČNI ISPIT';
            } else if ($curent == '/saobracajni-znaci.php' || $curent == '/saobracajni-znaci') {
                echo 'SAOBRAĆAJNI ZNACI';
            } else if ($curent == '/cenovnik.php' || $curent == '/cenovnik') {
                echo 'STRANICA U IZRADI';
            } else if ($curent == '/vozni-park.php' || $curent == '/vozni-park') {
                echo 'VOZNI PARK';
            } else if ($curent == '/kontakt.php' || $curent == '/kontakt') {
                echo 'KONTAKT';
            }
            ?>
        </h1>
    </div>
</section>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
     viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto">
    <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
</svg>
<svg class="waves" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
     viewBox="0 24 150 28" preserveAspectRatio="none" shape-rendering="auto" style="transform: rotate(180deg);">
    <defs>
        <path id="gentle-wave" d="M-160 44c30 0 58-18 88-18s 58 18 88 18 58-18 88-18 58 18 88 18 v44h-352z" />
    </defs>
    <g class="parallax">
        <use xlink:href="#gentle-wave" x="48" y="0" fill="rgba(255,255,255,0.7)" />
        <use xlink:href="#gentle-wave" x="48" y="3" fill="rgba(255,255,255,0.5)" />
        <use xlink:href="#gentle-wave" x="48" y="5" fill="rgba(255,255,255,0.3)" />
        <use xlink:href="#gentle-wave" x="48" y="7" fill="#fff" />
    </g>
</svg>