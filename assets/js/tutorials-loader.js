

const tutorialsState = {
  catalog: [],
  activeSlug: null
};

document.addEventListener('DOMContentLoaded', async () => {
  await loadTutorialCatalog();
  bindShortcutCards();
});


async function loadTutorialCatalog() {
  try {
    const response = await fetch('data/tutoriais.json');
    if (!response.ok) throw new Error('Falha ao carregar tutoriais.json');

    tutorialsState.catalog = await response.json();
    
    // Renderiza o menu lateral baseado nos dados recebidos
    renderTutorialNavigation();

    // Abre o primeiro tutorial da lista automaticamente como padrão
    const first = tutorialsState.catalog[0];
    if (first) {
      await openTutorial(first.slug);
    }
  } catch (error) {
    console.error(error);
    renderTutorialError('Não foi possível carregar o catálogo de tutoriais.');
  }
}

/**
 * 4. RENDERIZAÇÃO DA NAVEGAÇÃO (MENU)
 * Agrupa os tutoriais por categoria e cria os botões.
 */
function renderTutorialNavigation() {
    const container = document.getElementById('tutorialsNav');
    if (!container) return;

    // Agrupa os tutoriais por categoria (mantido o seu código)
    const grouped = tutorialsState.catalog.reduce((map, tutorial) => {
        if (!map.has(tutorial.categoria)) map.set(tutorial.categoria, []);
        map.get(tutorial.categoria).push(tutorial);
        return map;
    }, new Map());

    // Renderiza o HTML usando <details> e <summary>
    container.innerHTML = Array.from(grouped.entries()).map(([category, tutorials]) => {
        
        // Verifica se algum tutorial DENTRO desta categoria é o tutorial ativo no momento
        const hasActive = tutorials.some(t => t.slug === tutorialsState.activeSlug);
        
        // Se tiver o tutorial ativo, adiciona o atributo 'open' para a sanfona já vir aberta
        const openAttribute = hasActive ? 'open' : '';

        // Gera os botões
        const links = tutorials.map((tutorial) =>
            '<button type="button" class="tutorials-nav__link' + (tutorial.slug === tutorialsState.activeSlug ? ' is-active' : '') + '" data-tutorial-slug="' + tutorial.slug + '">' + tutorial.titulo + '</button>'
        ).join('');

        // Retorna a estrutura minimizável
        return '<details class="tutorials-nav__group" ' + openAttribute + '>' +
               '<summary class="tutorials-nav__title">' + category + '</summary>' +
               '<div class="tutorials-nav__list">' + links + '</div>' +
               '</details>';
               
    }).join('');

    // Refaz os binds de clique (mantido o seu código)
    container.querySelectorAll('[data-tutorial-slug]').forEach((button) => {
        button.addEventListener('click', async () => {
            await openTutorial(button.getAttribute('data-tutorial-slug'));
            scrollTutorialSectionIntoView();
        });
    });
}

/**
 * 5. CARREGAMENTO DO CONTEÚDO (O TUTORIAL EM SI)
 * Busca o arquivo HTML específico do tutorial clicado.
 */
async function openTutorial(slug) {
  if (!slug) return;

  tutorialsState.activeSlug = slug;
  renderTutorialNavigation(); // Atualiza a classe 'is-active' no menu

  const content = document.getElementById('tutorialsContent');
  if (!content) return;

  // Feedback visual enquanto carrega
  content.innerHTML = `
    <div class="tutorials-content__loading">
      <p>Carregando tutorial...</p>
    </div>
  `;

  try {
    const response = await fetch(`tutoriais/${slug}.html`);
    if (!response.ok) throw new Error('Falha ao carregar tutorial');

    const html = await response.text();
    content.innerHTML = html;

    // Ativa funcionalidades (como abas) dentro do conteúdo carregado
    initializeGenericTabs(content);
  } catch (error) {
    console.error(error);
    renderTutorialError('Não foi possível carregar este tutorial.');
  }
}

/**
 * 6. COMPONENTE DE ABAS INTERNAS
 * Gerencia abas que podem existir dentro do texto de um tutorial.
 */
function initializeGenericTabs(scope) {
  const roots = scope.querySelectorAll('[data-tab-root]');

  roots.forEach(root => {
    const buttons = root.querySelectorAll('[data-tab-target]');
    const panels = root.querySelectorAll('[data-tab-panel]');

    buttons.forEach(button => {
      button.addEventListener('click', () => {
        const target = button.getAttribute('data-tab-target');

        // Alterna classe ativa nos botões
        buttons.forEach(btn => {
          const active = btn === button;
          btn.classList.toggle('is-active', active);
          btn.setAttribute('aria-selected', String(active));
        });

        // Mostra o painel correspondente e esconde os outros
        panels.forEach(panel => {
          const isTarget = panel.getAttribute('data-tab-panel') === target;
          panel.classList.toggle('is-active', isTarget);
        });
      });
    });
  });
}

/**
 * 7. UTILITÁRIOS (ERRO, SCROLL E ATALHOS)
 */

// Ativa links externos ou cards que abrem tutoriais específicos
function bindShortcutCards() {
  document.querySelectorAll('[data-action="open-manual-shortcut"]').forEach(trigger => {
    trigger.addEventListener('click', async (event) => {
      event.preventDefault();
      const slug = trigger.getAttribute('data-manual-target');
      if (!slug) return;
      await openTutorial(slug);
      scrollTutorialSectionIntoView();
    });
  });
}

// Exibe mensagem de erro amigável na tela
function renderTutorialError(message) {
  const content = document.getElementById('tutorialsContent');
  if (!content) return;
  content.innerHTML = `
    <div class="tutorials-content__error">
      <p>${message}</p>
    </div>
  `;
}

// Faz o scroll suave até a seção de tutoriais
function scrollTutorialSectionIntoView() {
  const target = document.getElementById('tutoriais');
  const header = document.querySelector('.header-principal');
  if (!target) return;

  const offset = header ? header.getBoundingClientRect().height : 0;
  const top = target.getBoundingClientRect().top + window.scrollY - offset - 12;

  window.scrollTo({
    top,
    behavior: 'smooth'
  });
}