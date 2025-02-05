<!DOCTYPE html>
<html lang="pt-br">

<head>
    <link rel="stylesheet" href="styleProjeto.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Consultório</title>
</head>

<body>
    <header>

        <h1>Consultório Dr. Muquifo</h1>

        <div class="botao">
            <a href="#"><button>Início</button></a>
            <a href="Cliente.php"><button>Cadastro</button></a>
            <a href="#sobre"><button>Sobre</button></a>
            <a href="#contato"><button>Contato</button></a>
        </div>

    </header>


    <main>

        <section class="slider">
            <div class="seta arrow-left"><i class="fas fa-chevron-circle-left"></i></div>
            <img src="img1.jpg" alt="slide-1.jpg">
            <img src="img2.jpg" alt="slide-2.jpg">
            <img src="img3.jpg" alt="slide-3.jpg">
            
            <div class="seta arrow-right"><i class="fas fa-chevron-circle-right"></i></div>
            <div class="paginacao">

                <div class="botao"> <i class="far fa-circle"></i> </div>
                <div class="botao"> <i class="far fa-circle"></i> </div>
                <div class="botao"> <i class="far fa-circle"></i> </div>

            </div>

        </section><br><br>

        <div class="div-center">
            <h2 class="sobreH2">Sobre</h2><br>
            <div class="sobre" id="sobre">
                <iframe src="https://www.google.com/maps/embed?pb=!1m16!1m12!1m3!1d2447.7285424048014!2d-51.140244677542874!3d-29.81778353905714!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!2m1!1smaps!5e0!3m2!1spt-BR!2sbr!4v1718660724928!5m2!1spt-BR!2sbr" width="300" height="200" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade" class="map"></iframe>

                <p class="paragrafo"> &nbsp;&nbsp;&nbsp;&nbsp; Lorem ipsum dolor sit amet consectetur adipisicing elit. Iste reiciendis adipisci repellendus. Dignissimos ipsa reprehenderit similique tenetur sit, ea esse accusamus laborum quas praesentium delectus ducimus voluptate laboriosam eligendi aut! Lorem ipsum, dolor sit amet consectetur adipisicing elit. Consequuntur amet soluta aperiam corrupti illum est nostrum vero odit? Cumque, totam fuga! Deleniti, a iusto architecto odit reiciendis aliquam quia recusandae. </p>
            </div>
        </div>
        <br><br>
        <div class="div-center">
            <h2 class="contatoH2" id="contatoH2">Contato</h2>
            <div class="contato" id="contato">

                <p class="paragrafo">
                <ul class="social">
                    <li><strong>Whatsapp: (51) 99999-9999</strong></li>
                    <li><strong>Telefone: (51) 99999-9999</strong></li>
                </ul>
                </p>
            </div>
        </div>
    </main>
    <footer>
        <div class="c">
            Copyright Leozin-RD | 2024
        </div><br>

        <div class="redes">
            <a href="https://github.com/LeonardoBrumB" target="_blank"><img src="github_icon.png"></a>
            <a href="https://instagram.com" target="_blank"><img src="instagram_icon.png"></a>
        </div>
    </footer>
</body>

<script>
    const imgs = document.querySelectorAll(".slider img");
    const dots = document.querySelectorAll(".botao i");
    const leftArrow = document.querySelector(".arrow-left");
    const rightArrow = document.querySelector(".arrow-right");
    let currentIndex = 0;
    let time = 7000;
    const defClass = (startPos, index) => {
        for (let i = startPos; i < imgs.length; i++) {
            imgs[i].style.display = "none";
            dots[i].classList.remove("fa-dot-circle");
            dots[i].classList.add("fa-circle");
        }
        imgs[index].style.display = "block";
        dots[index].classList.add("fa-dot-circle");
    };
    defClass(1, 0);
    leftArrow.addEventListener("click", function() {
        currentIndex <= 0 ? currentIndex = imgs.length - 1 : currentIndex--;
        defClass(0, currentIndex);
    });
    rightArrow.addEventListener("click", function() {
        currentIndex >= imgs.length - 1 ? currentIndex = 0 : currentIndex++;
        defClass(0, currentIndex);
    });
    const startAutoSlide = () => {
        setInterval(() => {
            currentIndex >= imgs.length - 1 ? currentIndex = 0 : currentIndex++;
            defClass(0, currentIndex);
        }, time);
    };
    startAutoSlide(); //Inicia o slideshow
</script>

</html>