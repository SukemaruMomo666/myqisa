<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Untuk Qisty 💖</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@400;600;800;900&display=swap" rel="stylesheet">
    <style>
        body { font-family: 'Nunito', sans-serif; }
        @keyframes float-up {
            0% { transform: translateY(100vh) scale(0.5) rotate(0deg); opacity: 0; }
            50% { opacity: 1; }
            100% { transform: translateY(-20vh) scale(1.5) rotate(360deg); opacity: 0; }
        }
        @keyframes heartbeat {
            0%, 100% { transform: scale(1); }
            50% { transform: scale(1.1); }
        }
        @keyframes wiggle {
            0%, 100% { transform: rotate(-3deg); }
            50% { transform: rotate(3deg); }
        }
        @keyframes bounce-slow {
            0%, 100% { transform: translateY(0); }
            50% { transform: translateY(-10px); }
        }
        .animate-heartbeat { animation: heartbeat 1.5s infinite; }
        .animate-wiggle { animation: wiggle 2s infinite ease-in-out; }
        .animate-bounce-slow { animation: bounce-slow 3s infinite ease-in-out; }
        .particle { position: fixed; animation: float-up linear infinite; z-index: 1; pointer-events: none; }
        ::-webkit-scrollbar { width: 0px; }
        .glass-card { background: rgba(255, 255, 255, 0.6); backdrop-filter: blur(12px); border: 2px solid rgba(255, 255, 255, 0.8); }
        #main-content { display: none; opacity: 0; transition: opacity 1s ease-in-out; }
        #preloader { transition: opacity 0.5s ease-in-out; }
    </style>
</head>
<body class="bg-[#fff0f5] bg-[url('https://www.transparenttextures.com/patterns/stardust.png')] min-h-screen text-gray-800 overflow-x-hidden selection:bg-pink-300 selection:text-white">

    <div id="preloader" class="fixed inset-0 z-[9999] bg-gradient-to-br from-pink-200 via-purple-100 to-blue-200 flex flex-col items-center justify-center">
        <div class="text-6xl animate-bounce">💖</div>
        <h2 class="mt-4 text-2xl md:text-3xl font-black text-pink-500 animate-pulse text-center px-4">Tunggu sebentar ya cantik...</h2>
    </div>

    <audio id="bgMusic" loop>
        <source src="{{ asset('Audio/pacarku.mp3') }}" type="audio/mpeg">
    </audio>

    <button id="musicToggle" onclick="toggleMusic()" class="fixed top-4 right-4 z-50 glass-card p-3 rounded-full shadow-lg hover:scale-110 transition-transform hidden">
        <span id="musicIcon" class="text-2xl">🔊</span>
    </button>

    <div id="intro-screen" class="fixed inset-0 z-50 flex flex-col items-center justify-center bg-gradient-to-br from-pink-200 via-purple-100 to-blue-200 transition-all duration-1000 px-4">
        <div class="glass-card p-8 md:p-12 rounded-[3rem] shadow-2xl text-center w-full max-w-sm animate-heartbeat relative overflow-hidden">
            <div class="absolute -top-4 -right-4 text-6xl opacity-50 rotate-12">✨</div>
            <div class="text-6xl md:text-7xl mb-4">💌</div>
            <h2 class="text-3xl md:text-4xl font-black text-pink-500 mb-2">Paket Cinta!</h2>
            <p class="text-gray-600 mb-8 font-semibold text-base">Khusus buat Qisty pacarku 🧸</p>
            <button type="button" onclick="bukaKejutan()" class="bg-gradient-to-r from-pink-400 to-purple-400 hover:from-pink-500 hover:to-purple-500 text-white text-xl font-black py-4 px-8 rounded-full shadow-[0_10px_20px_rgba(236,72,153,0.3)] transform hover:-translate-y-1 transition-all duration-300 w-full cursor-pointer relative z-50">
                Buka Sekarang! 🎀
            </button>
        </div>
    </div>

    <div id="particles-container"></div>

    <div id="main-content" class="relative z-10 w-full overflow-hidden">

        <header class="flex flex-col items-center justify-center min-h-[90vh] text-center p-4 md:p-5 pt-16 md:pt-20">
            <div data-aos="zoom-in" class="glass-card px-6 py-2 rounded-full mb-6 animate-wiggle inline-block">
                <span class="text-pink-500 font-bold tracking-widest text-xs md:text-sm uppercase">Dunia Qisty & Prabu 🌸</span>
            </div>
            <h1 data-aos="zoom-in" data-aos-delay="100" class="text-6xl sm:text-7xl md:text-8xl font-black text-transparent bg-clip-text bg-gradient-to-r from-pink-400 via-purple-400 to-blue-400 drop-shadow-sm mb-4 leading-tight">
                Galeri <br/> Gemes Kita
            </h1>
            <p data-aos="fade-up" data-aos-delay="200" class="mt-4 text-lg md:text-xl text-gray-700 max-w-2xl leading-relaxed font-semibold glass-card p-5 md:p-8 mx-4 rounded-3xl shadow-lg">
                Tempat melihat pacarku yang cantikkkkkkkkk bangetttttttttttt! 🥰
            </p>
            <div data-aos="fade-up" data-aos-delay="400" class="mt-16 animate-bounce-slow">
                <span class="text-5xl md:text-6xl text-pink-400 opacity-80 drop-shadow-md">👇</span>
            </div>
        </header>

        <section class="max-w-7xl mx-auto p-4 md:p-6 pb-20">
            <div class="columns-1 sm:columns-2 lg:columns-3 gap-6 space-y-6">

                <div data-aos="fade-up" class="break-inside-avoid relative group cursor-pointer">
                    <video autoplay loop muted playsinline class="w-full h-auto object-cover object-center rounded-[2rem] shadow-xl border-4 border-white group-hover:-translate-y-2 transition-all duration-300">
                        <source src="{{ asset('Video/L1.MOV') }}" type="video/mp4">
                    </video>
                    <div class="absolute bottom-4 left-4 glass-card px-4 py-2 rounded-2xl text-sm font-bold text-pink-600 shadow-sm opacity-0 group-hover:opacity-100 transition-opacity">Mode Serius 🎬</div>
                </div>

                <div data-aos="zoom-in" class="break-inside-avoid bg-gradient-to-br from-purple-100 to-pink-50 p-8 rounded-[2rem] shadow-xl border-4 border-white text-center transform hover:scale-105 transition-transform duration-300">
                    <div class="text-5xl mb-4">🫣</div>
                    <h3 class="text-2xl font-black text-purple-500 mb-2">Cilukba!</h3>
                    <p class="text-gray-600 font-semibold text-base leading-relaxed">
                        Aku salting banget liat pacarku cantik setiap hariii heheee 🪄✨
                    </p>
                </div>

                <div data-aos="fade-up" class="break-inside-avoid relative group cursor-pointer">
                    <img src="{{ asset('Foto/F3.jpeg') }}" class="w-full h-auto object-cover object-center rounded-[2rem] shadow-xl border-4 border-white group-hover:rotate-2 transition-all duration-300">
                    <div class="absolute -bottom-4 -right-4 bg-yellow-300 text-yellow-900 px-4 py-2 rounded-full font-bold shadow-lg transform -rotate-6 z-10">Muka cantikkk! 😝</div>
                </div>

                <div data-aos="flip-left" class="break-inside-avoid relative group cursor-pointer">
                    <img src="{{ asset('Foto/F4.jpeg') }}" class="w-full h-auto object-cover object-center rounded-[2rem] shadow-xl border-4 border-white group-hover:-rotate-2 transition-all duration-300">
                    <div class="absolute top-4 right-4 glass-card px-3 py-1 rounded-full text-xl shadow-sm">🛵💨</div>
                </div>

                <div data-aos="zoom-in-up" class="break-inside-avoid bg-blue-50 p-8 rounded-[2rem] shadow-xl border-4 border-white text-center group">
                    <div class="text-5xl mb-4 group-hover:animate-spin">🐧</div>
                    <h3 class="text-2xl font-black text-blue-500 mb-2">Partner In Crime</h3>
                    <p class="text-gray-600 font-semibold">makasih yaa udah jadi pacarku ya pacarku yang cantikkkkkkkkk</p>
                </div>

                <div data-aos="fade-up" class="break-inside-avoid relative group cursor-pointer">
                    <video autoplay loop muted playsinline class="w-full h-auto object-cover object-center rounded-[2rem] shadow-xl border-4 border-white group-hover:scale-[1.02] transition-all duration-300">
                        <source src="{{ asset('Video/L3.MOV') }}" type="video/mp4">
                    </video>
                    <div class="absolute inset-0 bg-pink-500/10 opacity-0 group-hover:opacity-100 transition-opacity duration-300 rounded-[2rem] flex items-center justify-center">
                        <span class="text-5xl animate-heartbeat">💖</span>
                    </div>
                </div>

                <div data-aos="fade-right" class="break-inside-avoid relative group cursor-pointer">
                     <img src="{{ asset('Foto/F2.jpeg') }}" class="w-full h-auto object-cover object-center rounded-[2rem] shadow-xl border-4 border-white group-hover:-translate-y-3 transition-all duration-300">
                    <div class="absolute bottom-6 left-1/2 -translate-x-1/2 glass-card px-4 py-2 rounded-full font-bold text-orange-600 whitespace-nowrap shadow-md">Tukang Jajan 🍕🍟</div>
                </div>

                <div data-aos="zoom-in" class="break-inside-avoid bg-pink-400 p-8 rounded-[2rem] shadow-xl border-4 border-white text-center text-white">
                    <div class="text-4xl mb-3">✨</div>
                    <p class="font-black text-2xl leading-snug">"Sama pacarku, kapan aja pacarku keliatan cantikkkkk bangettt."</p>
                </div>

                <div data-aos="fade-up" class="break-inside-avoid relative group cursor-pointer">
                     <video autoplay loop muted playsinline class="w-full h-auto object-cover object-center rounded-[2rem] shadow-xl border-4 border-white group-hover:rotate-1 transition-all duration-300">
                        <source src="{{ asset('Video/L2.MOV') }}" type="video/mp4">
                    </video>
                </div>

                <div data-aos="fade-up" class="break-inside-avoid relative group cursor-pointer">
                     <img src="{{ asset('Foto/F1.jpeg') }}" class="w-full h-auto object-cover object-center rounded-[2rem] shadow-xl border-4 border-white group-hover:scale-105 transition-all duration-300">
                    <div class="absolute top-4 left-4 bg-white p-2 rounded-full shadow-lg">🫶</div>
                </div>

            </div>
        </section>

        <footer class="relative z-10 py-12 text-center px-4">
            <div data-aos="zoom-in" class="inline-block glass-card p-6 md:p-8 rounded-[2rem] shadow-xl border-2 border-pink-200 w-full max-w-lg relative overflow-hidden">
                <div class="absolute top-0 left-0 w-full h-1 bg-gradient-to-r from-pink-400 to-blue-400"></div>
                <h4 class="text-2xl font-black text-gray-800 mb-2">I Love You 3000! 🦸‍♂️</h4>
                <p class="text-gray-600 font-semibold text-lg mb-4">
                    Semoga hari pacarku selalu cantikk teurss. <br>
                    <span class="text-pink-500 font-bold">~ Dari Pacarnya Tersayang</span>
                </p>
                <div class="flex justify-center gap-3 text-3xl">
                    <span class="hover:animate-bounce cursor-pointer">👸🏻</span>
                    <span class="hover:animate-bounce cursor-pointer" style="animation-delay: 0.1s;">🧸</span>
                    <span class="hover:animate-bounce cursor-pointer" style="animation-delay: 0.2s;">💐</span>
                </div>
            </div>
        </footer>

    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        // Preloader Logic
        window.addEventListener('load', () => {
            const preloader = document.getElementById('preloader');
            preloader.style.opacity = '0';
            setTimeout(() => {
                preloader.style.display = 'none';
            }, 500); // Hilang perlahan setelah semua foto/video/lagu ter-load
        });

        let isMusicPlaying = false;
        let bgMusic = document.getElementById('bgMusic');

        function bukaKejutan() {
            let playPromise = bgMusic.play();
            if (playPromise !== undefined) {
                playPromise.then(() => {
                    isMusicPlaying = true;
                    document.getElementById('musicToggle').classList.remove('hidden');
                }).catch(error => {
                    console.log("Auto-play audio diblokir.");
                    document.getElementById('musicToggle').classList.remove('hidden');
                    document.getElementById('musicIcon').innerText = '🔇';
                });
            }

            const intro = document.getElementById('intro-screen');
            intro.style.opacity = '0';
            intro.style.transform = 'translateY(-100vh) scale(0.9)';

            setTimeout(() => {
                intro.style.display = 'none';
                const main = document.getElementById('main-content');
                main.style.display = 'block';
                void main.offsetWidth;
                main.style.opacity = '1';

                AOS.init({ duration: 1000, easing: 'ease-out-cubic', once: false, offset: 50 });
                bikinPartikelRame();
            }, 800);
        }

        function toggleMusic() {
            if (isMusicPlaying) {
                bgMusic.pause();
                document.getElementById('musicIcon').innerText = '🔇';
            } else {
                bgMusic.play();
                document.getElementById('musicIcon').innerText = '🔊';
            }
            isMusicPlaying = !isMusicPlaying;
        }

        function bikinPartikelRame() {
            const emojis = ['💖', '✨', '🌸', '🦋', '🧸', '🍓', '🎀', '🍡', '☁️', '🫶'];
            const container = document.getElementById('particles-container');

            setInterval(() => {
                const particle = document.createElement('div');
                particle.classList.add('particle');
                particle.innerText = emojis[Math.floor(Math.random() * emojis.length)];
                particle.style.left = Math.random() * 100 + 'vw';
                particle.style.fontSize = (Math.random() * 1.5 + 1) + 'rem';
                particle.style.animationDuration = (Math.random() * 4 + 4) + 's';
                if(Math.random() > 0.7) particle.style.filter = "blur(1px)";

                container.appendChild(particle);
                setTimeout(() => { particle.remove(); }, 8000);
            }, 250);
        }
    </script>
</body>
</html>
