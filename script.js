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
                <img src="Imagens/logotipo.png" class="logo-img" alt="Logo">
                <img src="Imagens/logotipotexto.png" class="logo-tex" alt="TI Dicas">
            </div>

            <ul class="nav-links" id="navMenu">
                <li><a href="#ramais">Ramais</a></li>
                <li><a href="#manuais">Manuais</a></li>
                <li><a href="#ferramentas">Calendário</a></li>
                <li><a href="#tutoriais">Tutoriais</a></li>
            </ul>

            <div class="menu-btn" onclick="toggleMenu()">
                <i class="fa-solid fa-bars"></i>
            </div>
        </header>
    `;

    document.querySelectorAll('.nav-links a').forEach(function (link) {
        link.addEventListener('click', function () {
            document.getElementById("navMenu").classList.remove("ativo");
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
    // Esconde todas as abas
    document.querySelectorAll(".tab-content").forEach(function (tab) {
        tab.classList.remove("active-content");
        tab.style.display = "none";
    });

    // Remove o ativo de todos os botões
    document.querySelectorAll(".barra-btn").forEach(function (btn) {
        btn.classList.remove("active");
    });

    // FIX: verificação antes de usar — evita TypeError se ID não existir
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

    // Limpa a busca ao trocar de aba
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
        // Abas com sub-grupos (ex: Secretaria com vários setores)
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

            // Esconde o grupo inteiro se nenhum card dele passou no filtro
            grupo.style.display = visiveisNoGrupo === 0 ? "none" : "block";
        });

    } else {
        // Abas simples sem sub-grupos (ex: CEM, CEMEI, Outros)
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

    // Atualiza o contador de resultados
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

    // Esconde todos os tutoriais
    document.querySelectorAll(".tutorial-box").forEach(function (box) {
        box.style.display = "none";
        box.classList.remove("active-tutorial");
    });

    // Mostra o alvo
    const alvo = document.getElementById(idConteudo);
    if (alvo) {
        alvo.style.display = "block";
        alvo.classList.add("active-tutorial");
    }

    // Atualiza o link ativo na sidebar
    document.querySelectorAll('.submenu a').forEach(function (link) {
        link.classList.remove('link-active');
    });
    evt.currentTarget.classList.add('link-active');
}


/* =======================================================
   6. ABAS INTERNAS DO MANUAL (ex: HP 432)
   ======================================================= */

function trocarAbaHP(abaAlvo, botaoClicado) {
    // FIX: busca dinamicamente todas as abas do container pai
    // em vez de usar IDs hardcoded que quebram em outros manuais
    const containerBadges = botaoClicado.parentElement;
    const containerConteudo = containerBadges.closest('.tutorial-box') ||
                              containerBadges.closest('.info-container') ||
                              document.getElementById(botaoClicado.closest('[id]')?.id);

    // Esconde todos os blocos de conteúdo dentro do tutorial ativo
    const tutorial = document.querySelector('.tutorial-box.active-tutorial') ||
                     document.querySelector('.tutorial-box[style*="block"]');

    if (tutorial) {
        tutorial.querySelectorAll('.bloco-conteudo').forEach(function (bloco) {
            bloco.style.display = 'none';
        });
    }

    // Mostra só o alvo
    const alvoBloco = document.getElementById('aba-' + abaAlvo);
    if (alvoBloco) alvoBloco.style.display = 'block';

    // Atualiza os badges
    Array.from(containerBadges.getElementsByClassName('badge')).forEach(function (btn) {
        btn.classList.remove('active');
    });
    botaoClicado.classList.add('active');
}


/* =======================================================
   7. ATALHO — CARD DO TOPO ABRE O MANUAL DIRETO
   ======================================================= */

function acessarPeloCard(evt, idConteudo) {
    evt.preventDefault();

    // Clica no link do menu lateral correspondente
    const linkDoMenu = document.querySelector(`.submenu a[onclick*="${idConteudo}"]`);
    if (linkDoMenu) {
        linkDoMenu.click();
    }

    // FIX: pequeno delay garante que o conteúdo apareça ANTES do scroll
    // sem isso, scrollIntoView chegava antes do tutorial estar visível
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

// FIX: tecla Escape fecha o modal — comportamento esperado pelo usuário
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
