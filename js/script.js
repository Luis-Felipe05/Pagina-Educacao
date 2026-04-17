/* =======================================================
   TI DICAS ESCOLA — script.js
   Revisão v2.1 | EduDev Assistant
   ======================================================= */


/* =======================================================
   1. GERENCIADOR DE LAYOUT (CABEÇALHO E RODAPÉ)
   ======================================================= */

document.addEventListener("DOMContentLoaded", function () {
    gerarCabecalho();
    gerarRodape();
    filtrarRamais(); 
});

function gerarCabecalho() {
    const localHeader = document.getElementById("componente-header");
    if (!localHeader) return;

    localHeader.innerHTML = `
        <header id="inicio">
            <div class="logo-area">
                <img src="assets/images/logotipo.png" class="logo-img" alt="Logo">
                <img src="assets/images/logotipotexto.png" class="logo-tex" alt="TI Dicas">
            </div>

            <ul class="nav-links" id="navMenu">
                <li><a href="#ramais">Ramais</a></li>
                <li><a href="#ferramentas">Calendário</a></li>
                <li><a href="#programas">Programas</a></li>
                <li><a href="#tutoriais">Tutoriais</a></li>
            </ul>

            <div class="menu-btn" onclick="toggleMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    `;

    document.querySelectorAll('.nav-links a').forEach(function (link) {
        link.addEventListener('click', function (e) {
            document.getElementById("navMenu").classList.remove("ativo");

            const href = this.getAttribute('href');
            if (!href || !href.startsWith('#')) return;
 
            const alvo = document.getElementById(href.slice(1));
            if (!alvo) return;
 
            // Scroll suave com offset do header sticky
            e.preventDefault();
            const alturaHeader = document.querySelector('header')?.offsetHeight || 72;
            const posicao = alvo.getBoundingClientRect().top + window.scrollY - alturaHeader - 16;
 
            window.scrollTo({ top: posicao, behavior: 'smooth' });
        });
    });
}

function gerarRodape() {
    const localFooter = document.getElementById("componente-footer");
    if (!localFooter) return;

    const anoAtual = new Date().getFullYear();

    localFooter.innerHTML = `
        <footer id="inicio">
            <div class="footer-content">
                <p>&copy; ${anoAtual} TI Dicas Escola - Divisão de Suporte.</p>
                <p class="footer-small">Desenvolvido para facilitar o dia a dia escolar.</p>
            </div>
        </footer>
    `;
}


/* =======================================================
   2. UTILITÁRIO — NORMALIZAR TEXTO PARA BUSCA
   ======================================================= */

function limparTexto(texto) {
    if (!texto) return "";
    return texto
        .normalize('NFD')
        .replace(/[\u0300-\u036f]/g, "")
        .toLowerCase();
}


/* =======================================================
   3. ABAS DE RAMAIS
   ======================================================= */

function abrirTab(evt, tabName) {
    
    document.querySelectorAll(".tab-content").forEach(function (tab) {
        tab.classList.remove("active-content");
        tab.style.display = "none";
    });

   
    document.querySelectorAll(".barra-btn").forEach(function (btn) {
        btn.classList.remove("active");
    });

    
    const abaNova = document.getElementById(tabName);
    if (!abaNova) {
        console.warn("abrirTab: aba não encontrada ->", tabName);
        return;
    }

    abaNova.style.display = "block";
    abaNova.classList.add("active-content");

    if (evt && evt.currentTarget) {
        evt.currentTarget.classList.add("active");
    }

    
    const input = document.getElementById('searchInput');
    if (input) input.value = "";

    filtrarRamais();
}


/* =======================================================
   4. BUSCA LOCAL (SÓ NA ABA ATIVA)
   ======================================================= */

function filtrarRamais() {
    const input = document.getElementById('searchInput');
    const termo = input ? limparTexto(input.value) : "";

    const abaAtiva = document.querySelector(".tab-content.active-content");
    if (!abaAtiva) return;

    let totalVisiveis = 0;
    const subGrupos = abaAtiva.getElementsByClassName('sub-grupo');

    if (subGrupos.length > 0) {
        
        Array.from(subGrupos).forEach(function (grupo) {
            const cards = grupo.getElementsByClassName('cards');
            let visiveisNoGrupo = 0;

            Array.from(cards).forEach(function (card) {
                const searchAttr = card.getAttribute('data-search') || "";
                const textoLimpo = limparTexto(card.innerText + " " + searchAttr);

                if (textoLimpo.includes(termo)) {
                    card.style.display = "";
                    visiveisNoGrupo++;
                    totalVisiveis++;
                } else {
                    card.style.display = "none";
                }
            });

            
            grupo.style.display = visiveisNoGrupo === 0 ? "none" : "block";
        });

    } else {
        
        Array.from(abaAtiva.getElementsByClassName('cards')).forEach(function (card) {
            const searchAttr = card.getAttribute('data-search') || "";
            const textoLimpo = limparTexto(card.innerText + " " + searchAttr);

            if (textoLimpo.includes(termo)) {
                card.style.display = "";
                totalVisiveis++;
            } else {
                card.style.display = "none";
            }
        });
    }

    const contador = abaAtiva.querySelector('.contador');
    if (!contador) return;

    if (termo === "") {
        contador.innerText = "";
    } else if (totalVisiveis === 0) {
        contador.innerText = "Nenhum contato encontrado.";
    } else {
        contador.innerText = totalVisiveis + " contato(s) encontrado(s)";
    }
}


/* =======================================================
   5. MANUAIS — NAVEGAÇÃO LATERAL
   ======================================================= */

function abrirManual(evt, idConteudo) {
    evt.preventDefault();

    document.querySelectorAll(".tutorial-box").forEach(function (box) {
        box.style.display = "none";
        box.classList.remove("active-tutorial");
    });


    const alvo = document.getElementById(idConteudo);
    if (alvo) {
        alvo.style.display = "block";
        alvo.classList.add("active-tutorial");
    }

    document.querySelectorAll('.submenu a').forEach(function (link) {
        link.classList.remove('link-active');
    });
    evt.currentTarget.classList.add('link-active');
}


/* =======================================================
   6. ABAS INTERNAS DO MANUAL (ex: HP 432)
   ======================================================= */

// Função Universal para trocar as abas de qualquer tutorial
function trocarAbaTutorial(idAba, botaoClicado) {
    // 1. Descobre qual é a caixa de tutorial "pai" do botão que foi clicado
    const tutorialPai = botaoClicado.closest('.tutorial-box');

    // Se não encontrou um pai válido, aborta a função para evitar erros
    if (!tutorialPai) return;

    // 2. Esconde todas as abas APENAS dentro desta impressora específica
    const abas = tutorialPai.querySelectorAll('.bloco-conteudo');
    abas.forEach(aba => {
        aba.style.display = 'none';
    });

    // 3. Remove a classe 'active' de todos os botões APENAS desta impressora
    const botoes = tutorialPai.querySelectorAll('.badge');
    botoes.forEach(botao => {
        botao.classList.remove('active');
    });

    // 4. Mostra a aba desejada e marca o botão clicado como ativo
    const abaSelecionada = tutorialPai.querySelector(`#${idAba}`);
    if (abaSelecionada) {
        abaSelecionada.style.display = 'block';
        botaoClicado.classList.add('active');
    }
}


/* =======================================================
   7. ATALHO — CARD DO TOPO ABRE O MANUAL DIRETO
   ======================================================= */

function acessarPeloCard(evt, idConteudo) {
    evt.preventDefault();

 
    const linkDoMenu = document.querySelector(`.submenu a[onclick*="${idConteudo}"]`);
    if (linkDoMenu) {
        linkDoMenu.click();
    }


    setTimeout(function () {
        const secaoManuais = document.getElementById('manuais') ||
                             document.querySelector('.docs-section');
        if (secaoManuais) {
            secaoManuais.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    }, 50);
}


/* =======================================================
   8. ZOOM DE IMAGEM (CALENDÁRIO)
   ======================================================= */

function abrirZoom(src) {
    const modal = document.getElementById("modalZoom");
    const imgModal = document.getElementById("imgZoom");
    if (!modal || !imgModal) return;

    imgModal.src = src;
    modal.style.display = "flex";
    document.body.style.overflow = "hidden";
}

function fecharZoom() {
    const modal = document.getElementById("modalZoom");
    if (!modal) return;

    modal.style.display = "none";
    document.body.style.overflow = "auto";
}

document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape') fecharZoom();
});


/* =======================================================
   9. MENU MOBILE
   ======================================================= */

function toggleMenu() {
    const menu = document.getElementById("navMenu");
    if (menu) menu.classList.toggle("ativo");
}


/* =======================================================
   10. INDICADOR DE SCROLL / BOTÃO VOLTAR AO TOPO
   ======================================================= */

window.addEventListener('scroll', function () {
    const hint = document.getElementById('scrollIndicator');
    const text = document.getElementById('scrollText');
    if (!hint || !text) return;

    if (window.scrollY > 300) {
        text.innerText = "Subir";
        hint.classList.add('modo-subir');
    } else {
        text.innerText = "Rolar";
        hint.classList.remove('modo-subir');
    }

    // Esconde antes do footer
    const perto_do_fim = (window.innerHeight + window.scrollY) >= document.body.offsetHeight - 50;
    hint.style.opacity = perto_do_fim ? "0" : "1";
});

function voltarAoTopo() {
    window.scrollTo({ top: 0, behavior: 'smooth' });
}
