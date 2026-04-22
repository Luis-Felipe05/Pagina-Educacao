// 1. Definição do ESTADO (A "memória" do seu aplicativo)
const ramaisState = {data: null, activeCategory: null, filter: ''};

// 2. Evento que roda quando o HTML termina de carregar no navegador
document.addEventListener('DOMContentLoaded', async () => {
    await loadRamais();
    const searchInput = document.getElementById('searchInput');
    searchInput?.addEventListener('input', (event) => {
        ramaisState.filter = normalizeSearch(event.target.value || '');
        renderRamaisPanels();
    });
});

// Função para carregar os dados dos ramais a partir do arquivo JSON
async function loadRamais() {
  try {
    const response = await fetch('data/ramais.json');

    if (!response.ok) {
      throw new Error('Falha ao carregar ramais.json');
}

    ramaisState.data = await response.json();
    ramaisState.activeCategory = ramaisState.data.categorias?.[0]?.id || null;

    renderRamaisTabs();
    renderRamaisPanels(); }

    catch (error) {
    console.error(error);
    }
}

// Função para renderizar as abas de categorias
function renderRamaisTabs() {
    const container = document.getElementById('ramaisTabs');
    if (!container || !ramaisState.data) return;
    
    container.innerHTML = ramaisState.data.categorias.map((category) => {
        const isActive = category.id === ramaisState.activeCategory ? ' is-active' : '';
        
        const iconHtml = category.icone ? `<i class="fa-solid ${category.icone}"></i>` : '';
        
        return `<button type="button" class="tabs__button${isActive}" data-category-id="${category.id}">
                  ${iconHtml} ${category.nome}
                </button>`;
    }).join('');
    
    container.querySelectorAll('[data-category-id]').forEach((button) => {
        button.addEventListener('click', () => {
            ramaisState.activeCategory = button.getAttribute('data-category-id');
            renderRamaisTabs();
            renderRamaisPanels();
        });
    });
}

// Função para renderizar os painéis de ramais com base na categoria ativa e no filtro de busca
function renderRamaisPanels() {

  const container = document.getElementById('ramaisPanels');
  if (!container || !ramaisState.data) return;

  container.innerHTML = ramaisState.data.categorias.map((category) => {
    const isActive = category.id === ramaisState.activeCategory;

    const filteredSections = category.secoes.map((section) => {
      const contacts = section.contatos.filter((contact) => {
        if (!ramaisState.filter) return true;

        const haystack = normalizeSearch([
          contact.nome,
          contact.cargo,
          contact.numero,
          contact.busca,
          section.titulo,
          category.grupo
        ].join(' '));

        return haystack.includes(ramaisState.filter);
        });

      return Object.assign({}, section, { contatos: contacts });
        }).filter((section) => section.contatos.length > 0);

    const total = filteredSections.reduce((sum, section) => sum + section.contatos.length, 0);
    const counter = ramaisState.filter 
      ? (total ? `${total} contato(s) encontrado(s)` : 'Nenhum contato encontrado.') 
      : 'Todos os contatos da categoria atual.';

    const sectionsHtml = filteredSections.map((section) => {
      const contactsHtml = section.contatos.map((contact) => `
        <article class="ramal-card">
          <h5 class="ramal-card__name">${contact.nome}</h5>
          ${contact.cargo ? `<span class="ramal-card__role">${contact.cargo}</span>` : ''}
          <div class="ramal-card__number">${contact.numero}</div>
        </article>
      `).join('');

      return `
        <section class="ramais-subgroup">
          <h4 class="ramais-subgroup__title">${section.titulo}</h4>
          <div class="ramais-grid">${contactsHtml}</div>
        </section>
      `;
        }).join('');

    return `
      <section class="tabs__panel ${isActive ? 'is-active' : ''}">
        <article class="ramais-group">
          <h3 class="ramais-group__title">${category.grupo}</h3>
          <p class="ramais-group__counter">${counter}</p>
          ${sectionsHtml}
        </article>
      </section>
    `;
    }).join('');
}

// Função para normalizar strings para comparação (remover acentos e converter para minúsculas)
function normalizeSearch(value){
    return String(value||'').normalize('NFD').replace(/[\u0300-\u036f]/g,'').toLowerCase()
    
}