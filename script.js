/* =======================================================
GERENCIADOR DE LAYOUT (CABEÇALHO E RODAPÉ)
======================================================= */

document.addEventListener("DOMContentLoaded", function() {
    gerarCabecalho();
    gerarRodape();
});

function gerarCabecalho() {
    const localHeader = document.getElementById("componente-header");
    if (!localHeader) return;
    
    // Vamos usar o ID 'inicio' para garantir que ele pegue a cor azul padrão do seu CSS.
    // Se quiser mudar a cor, altere a classe no body, mas mantenha o ID do header simples.
    let idHeader = "inicio"; 

    // ATENÇÃO: Para página única (One Page), os links devem usar "#" (âncoras)
    // para levar até a seção, em vez de carregar outra página.
    
    localHeader.innerHTML = `
        <header id="${idHeader}">
            <div class="logo-area">
                <img src="Imagens/logotipo.png" class="logo-img" alt="Logo">
                <img src="Imagens/logotipo texto.png" class="logo-tex" alt="TI Dicas">
            </div>

            <ul class="nav-links" id="navMenu">
                <li><a href="#ramais">Ramais</a></li>
                <li><a href="#manuais">Manuais</a></li>
                <li><a href="#ferramentas">Calendário</a></li>
                <li><a href="#tutoriais">Tutoriais </a></li>
            </ul>

            <div class="menu-btn" onclick="toggleMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    `;
}

function gerarRodape() {
    const localFooter = document.getElementById("componente-footer");
    if (!localFooter) return;

    const bodyClass = document.body.classList[0];
    let idFooter = "inicio";

    const anoAtual = new Date().getFullYear();

    localFooter.innerHTML = `
        <footer id="${idFooter}">
            <div class="footer-content">
                <p>&copy; ${anoAtual} TI Dicas Escola - Divisão de Suporte.</p>
                <p class="footer-small">Desenvolvido para facilitar o dia a dia escolar.</p>
            </div>
        </footer>
    `;
}


    // --- 1. FUNÇÃO MÁGICA DE LIMPAR TEXTO (Coloquei no topo) ---
    function limparTexto(texto) {
        if (!texto) return ""; 
        return texto
            .normalize('NFD')               
            .replace(/[\u0300-\u036f]/g, "")
            .toLowerCase();                 
    }

    // --- 2. FUNÇÃO DE TROCAR ABAS ---
    function abrirTab(evt, tabName) {
        
        let tabContents = document.getElementsByClassName("tab-content");
        for (let i = 0; i < tabContents.length; i++) {
            tabContents[i].classList.remove("active-content");
            tabContents[i].style.display = "none";
        }

        let tabBtns = document.getElementsByClassName("barra-btn");
        for (let i = 0; i < tabBtns.length; i++) {
            tabBtns[i].classList.remove("active");
        }

        let abaNova = document.getElementById(tabName);
        abaNova.style.display = "block";
        abaNova.classList.add("active-content");
        if (evt) { evt.currentTarget.classList.add("active"); } 
 
        let input = document.getElementById('searchInput');
        input.value = "";

        filtrarRamais();
    }

    // --- 3. FUNÇÃO DE BUSCA LOCAL (SÓ NA ABA ATIVA) ---
    function filtrarRamais() {
      
        let inputVal = document.getElementById('searchInput').value;
        let termo = limparTexto(inputVal);
        
        let abaAtiva = document.querySelector(".tab-content.active-content");
        
        if (!abaAtiva) return;

        let totalVisiveis = 0;
        let subGrupos = abaAtiva.getElementsByClassName('sub-grupo');

        if (subGrupos.length > 0) {
            for (let i = 0; i < subGrupos.length; i++) {
                let grupo = subGrupos[i];
                let cards = grupo.getElementsByClassName('cards');
                let visiveisNoGrupo = 0;

                for (let k = 0; k < cards.length; k++) {
                    let card = cards[k];
                    
                    let searchAttr = card.getAttribute('data-search') || "";
                    
                    let textoOriginal = card.innerText + " " + searchAttr;
                    let textoLimpo = limparTexto(textoOriginal);
                    
                    if (textoLimpo.includes(termo)) {
                        card.style.display = ""; 
                        visiveisNoGrupo++;
                        totalVisiveis++;
                    } else {
                        card.style.display = "none"; 
                    }
                }
                
                if (visiveisNoGrupo === 0) {
                    grupo.style.display = "none";
                } else {
                    grupo.style.display = "block";
                }
            }
        } 
        else {
            let cards = abaAtiva.getElementsByClassName('cards');
            for (let k = 0; k < cards.length; k++) {
                let card = cards[k];
                
                let searchAttr = card.getAttribute('data-search') || "";
                
                let textoOriginal = card.innerText + " " + searchAttr;
                let textoLimpo = limparTexto(textoOriginal);
                
                if (textoLimpo.includes(termo)) {
                    card.style.display = "";
                    totalVisiveis++;
                } else {
                    card.style.display = "none";
                }
            }
        }

        let contador = abaAtiva.querySelector('.contador');
        if (contador) {
            if (termo === "") {
                contador.innerText = ""; 
            } else if (totalVisiveis === 0) {
                contador.innerText = "Nenhum contato encontrado.";
            } else {
                contador.innerText = totalVisiveis + " contato(s) encontrado(s)";
            }
        }
    }
    
    window.onload = function() {

        let active = document.querySelector(".tab-content.active-content");
        if(!active) {

        }
        filtrarRamais();
    }
   




function abrirManual(evt, idConteudo) {

    evt.preventDefault();

    let tutoriais = document.getElementsByClassName("tutorial-box");
    for (let i = 0; i < tutoriais.length; i++) {
        tutoriais[i].style.display = "none";
        tutoriais[i].classList.remove("active-tutorial");
    }

    let alvo = document.getElementById(idConteudo);
    if (alvo) {
        alvo.style.display = "block";
        alvo.classList.add("active-tutorial");
    }

    let links = document.querySelectorAll('.submenu a');
    for (let i = 0; i < links.length; i++) {
        links[i].classList.remove('link-active');
    }
    
    evt.currentTarget.classList.add('link-active');
}


function trocarAbaHP(abaAlvo, botaoClicado) {
    // 1. Esconde os dois conteúdos
    document.getElementById('aba-instalacao').style.display = 'none';
    document.getElementById('aba-contador').style.display = 'none';

    // 2. Mostra só o alvo ('instalacao' ou 'contador')
    document.getElementById('aba-' + abaAlvo).style.display = 'block';

    let containerBadges = botaoClicado.parentElement;
    let botoes = containerBadges.getElementsByClassName('badge');
    
    for (let i = 0; i < botoes.length; i++) {
        botoes[i].classList.remove('active');
    }

    // Ativa o botão que foi clicado
    botaoClicado.classList.add('active');
}

/* --- ACESSAR MANUAL PELO CARD DO TOPO --- */
function acessarPeloCard(evt, idConteudo) {

    evt.preventDefault(); 

    let linkDoMenu = document.querySelector(`.submenu a[onclick*="${idConteudo}"]`);
    if (linkDoMenu) {
        linkDoMenu.click(); 
    }

    let secaoManuais = document.getElementById('manuais') || document.querySelector('.docs-section');
    if (secaoManuais) {
        secaoManuais.scrollIntoView({ behavior: 'smooth', block: 'start' });
    }
}

/* --- ZOOM NA IMAGEM (CALENDÁRIO EM TELA CHEIA) --- */
function abrirZoom(src) {
    let modal = document.getElementById("modalZoom");
    let imgModal = document.getElementById("imgZoom");
    
    modal.style.display = "flex";
    imgModal.src = src;
    
    document.body.style.overflow = "hidden";
}

function fecharZoom() {
    document.getElementById("modalZoom").style.display = "none";
    document.body.style.overflow = "auto";
}

/* --- TOGGLE DO MENU MOBILE --- */
function toggleMenu() {
    var menu = document.getElementById("navMenu");
    // Alterna a classe 'ativo', fazendo o menu descer ou subir
    menu.classList.toggle("ativo");
}

// Bônus de UX: Fecha o menu automaticamente quando a pessoa clica em um link!
document.querySelectorAll('.nav-links a').forEach(link => {
    link.addEventListener('click', () => {
        document.getElementById("navMenu").classList.remove("ativo");
    });
});

window.onscroll = function() {
    let hint = document.getElementById('scrollIndicator');
    let text = document.getElementById('scrollText');
    let wheel = document.querySelector('.scroll-wheel');

    if (!hint) return;

    // Se o usuário desceu mais de 300px da tela
    if (window.scrollY > 300) {
        text.innerText = "Subir";
        hint.classList.add('modo-subir');
    } else {
        text.innerText = "Rolar";
        hint.classList.remove('modo-subir');
    }

    // Esconde ao chegar no final da página para não bater no footer
    if ((window.innerHeight + window.scrollY) >= document.body.offsetHeight - 50) {
        hint.style.opacity = "0";
    } else {
        hint.style.opacity = "1";
    }
};

function voltarAoTopo() {
    window.scrollTo({
        top: 0,
        behavior: 'smooth' // Rola suavemente até o topo
    });
}