
    <?php include 'components/header.php'; ?>

    <!-- Inicio / Capa -->
    <section class="hero">
        <div class="hero-container">    
            <div class="badge-2"> Central de Suporte Tecnológico</div>
            <h1>
            Tecnologia a serviço
            <span class="texto-degrade">da Educação</span>
            </h1>
            
            <p>
            Tudo que sua equipe escolar precisa, reunido em um só lugar.
            Manuais, ramais e sistemas da rede municipal —
            simples, rápido e sem complicação.
            </p>
        </div>
        <div class="scroll-hint" id="scrollIndicator" onclick="voltarAoTopo()" style="cursor: pointer;">
            <div class="scroll-wheel"></div>
            <span id="scrollText">Rolar</span>
        </div>
    </section>

    <div class="card-area">
    
        <div class="card"> 
            <h2><i class="fa-solid fa-print" ></i> Impressora</h2>
            <p>Instalação, configuração na rede e emissão de contador de páginas</p>
            <a href="#manuais" onclick="acessarPeloCard(event, 'hp-432')">
                <i class="fa-solid fa-arrow-right"></i> Ver Manuais
            </a>
        </div>

        <div class="card">
            
            <h2><i class="fa-solid fa-video"></i> Câmeras</h3>
            
            <p>Como visualizar imagens ao vivo e exportar gravações no SIM Next.</p>
            <a href="#manuais" onclick="acessarPeloCard(event, 'visualizar')">
                <i class="fa-solid fa-arrow-right"></i> Acessar Guia
            </a>
        </div>

        <div class="card">
            <h2><i class="fa-solid fa-headset"></i> 1Doc</h3>
            <p>Passo a passo para solicitar manutenção de TI e chamados técnicos.</p>
            <a href="#manuais" onclick="acessarPeloCard(event, 'refiltinta')">
                <i class="fa-solid fa-arrow-right"></i> Ver Tutoriais
            </a>
        </div>

    </div>

    <!-- Titulo Ramais -->
    <section class="fundo">
        <div class="caixa">

            <div class="titulo-moderno icone-foco">
                <div class="icone-circulo"><i class="fa-solid fa-phone-volume"></i></div>
                <h2>Lista de Ramais</h2>
                <p>Atalhos para serviços mais procurados.</p>
            </div>
        
        <!-- Barra de Pesquisa -->
        <div class="search-container">
            <div class="search-box">
                <i class="fa-solid fa-magnifying-glass search-icon"></i>
                <input autocomplete="off" type="text" id="searchInput" onkeyup="filtrarRamais()" placeholder="Pesquise por nome, setor ou escola...">
            </div>
        </div>

        </div>
    </section>   

    <!-- Ramais -->
    <section id="ramais" class="fundo">
        <div class="container">
        <div class="caixa">
        <!-- Barra de Categoria -->
        <div class="barra">
            <button class="barra-btn active" onclick="abrirTab(event, 'tab-secretaria')">
                <i class="fa-solid fa-folder-open"></i> Secretaria
            </button>
            <button class="barra-btn" onclick="abrirTab(event, 'tab-cem')">
                <i class="fa-solid fa-book-journal-whills"></i> CEM
            </button>
            <button class="barra-btn" onclick="abrirTab(event, 'tab-emei')">
                <i class="fa-solid fa-puzzle-piece"></i> CEMEI/EMEI
            </button>
            <button class="barra-btn" onclick="abrirTab(event, 'tab-outros')">
                <i class="fa-solid fa-map-location-dot"></i> Outros
            </button>
        </div>
        </div>

    <div id="tab-secretaria" class="tab-content active-content">
    
    <div class="grupo-setor">
        <h3 class="setor-titulo">Secretaria da Educação</h3>
        <p class="contador">Carregando contatos...</p>

        <div class="sub-grupo">
            <h4 class="titulo-interno"><i class="fa-solid fa-phone"></i> Telefonista & Recepção</h4>
            <div class="grid-ramais">
                <div class="cards" data-search="Eliane">
                    <div class="info"><h4>Eliane</h4><span>Telefonista</span></div>
                    <a class="number">9750 / 9751</a>
                </div>
                <div class="cards" data-search="Recepção">
                    <div class="info"><h4>Recepção</h4><span></span></div>
                    <a class="number">9782</a>
                </div>
            </div>
        </div>

        <div class="sub-grupo">
            <h4 class="titulo-interno"><i class="fa-solid fa-pen-nib"></i> Gabinete</h4>
            <div class="grid-ramais-3">

                <div class="cards" data-search="Silvia">
                    <div class="info"><h4>Silvia</h4><span>Gabinete</span></div>
                    <a  class="number">9753</a>
                </div>

                <div class="cards" data-search="Luciana">
                    <div class="info"><h4>Luciana</h4><span>Gabinete</span></div>
                    <a class="number">9754</a>
                </div>

                <div class="cards" data-search="Caio">
                    <div class="info"><h4>Caio</h4><span>Gabinete</span></div>
                    <a class="number">9776</a>
                </div>

                <div class="cards" data-search="Meiriane">
                    <div class="info"><h4>Meiriane</h4><span>Gabinete</span></div>
                    <a class="number">9784</a>
                </div>

                <div class="cards" data-search="Kelly">
                    <div class="info"><h4>Kelly</h4><span>Gabinete</span></div>
                    <a class="number">9810</a>
                </div>

                <div class="cards" data-search="Patrícia">
                    <div class="info"><h4>Patrícia</h4><span>Gabinete</span></div>
                    <a class="number">9811</a>
                </div>

                <div class="cards" data-search="Lucas">
                    <div class="info"><h4>Lucas</h4><span>Gabinete</span></div>
                    <a class="number">9804</a>
                </div>

            </div>
        </div>

        <div class="sub-grupo">
            <h4 class="titulo-interno"><i class="fa-solid fa-magnifying-glass"></i> Supervisão</h4>
            <div class="grid-ramais">


                <div class="cards" data-search="Marcelo">
                    <div class="info"><h4>Marcelo</h4><span>Supervisão</span></div>
                    <a class="number">9757</a>
                </div>

                <div class="cards" data-search="Bete">
                    <div class="info"><h4>Bete</h4><span>Supervisão</span></div>
                    <a  class="number">9758</a>
                </div>

                <div class="cards" data-search="Simone">
                    <div class="info"><h4>Simone</h4><span>Supervisão</span></div>
                    <a class="number">9759</a>
                </div>

            </div>
        </div>
        
        <div class="sub-grupo">
            <h4 class="titulo-interno"><i class="fa-solid fa-utensils"></i> Alimentação Escolar</h4>
            <div class="grid-ramais-3">

                <div class="cards" data-search="Jéssica">
                    <div class="info"><h4>Jéssica</h4><span>Alimentação</span></div>
                    <a  class="number">9760</a>
                </div>

                <div class="cards" data-search="Juliana">
                    <div class="info"><h4>Juliana</h4><span>Alimentação</span></div>
                    <a  class="number">9760</a>
                </div>

                <div class="cards" data-search="Gabriela">
                    <div class="info"><h4>Gabriela</h4><span>Alimentação</span></div>
                    <a  class="number">9760</a>
                </div>

                <div class="cards" data-search="Ana Lúcia">
                    <div class="info"><h4>Ana Lúcia</h4><span>Alimentação</span></div>
                    <a  class="number">9760</a>
                </div>

            </div>
        </div>
        
        <div class="sub-grupo">
            <h4 class="titulo-interno"><i class="fa-solid fa-book-open"></i> Pedagógico</h4>
            <div class="grid-ramais-3">

                <div class="cards" data-search="Thaty Melo">
                    <div class="info"><h4>Thaty Melo</h4><span>Pedagógico</span></div>
                    <a  class="number">9767</a>
                </div>

                <div class="cards" data-search="Fabiana P.">
                    <div class="info"><h4>Fabiana P.</h4><span>Pedagógico</span></div>
                    <a  class="number">9769</a>
                </div>

                <div class="cards" data-search="Fernanda">
                    <div class="info"><h4>Fernanda M.</h4><span>Pedagógico</span></div>
                    <a  class="number">9772</a>
                </div>

                <div class="cards" data-search="Lanusse">
                    <div class="info"><h4>Lanusse</h4><span>Pedagógico</span></div>
                    <a  class="number">9773</a>
                </div>

            </div>
        </div>
        
        <div class="sub-grupo">
            <h4 class="titulo-interno"><i class="fa-solid fa-coins"></i> Contabilidade & Patrimônio</h4>
            <div class="grid-ramais-3">

                <div class="cards" data-search="Giuliano Júnior">
                    <div class="info"><h4>Giuliano e Júnior</h4><span>Contabilidade</span></div>
                    <a  class="number">9799</a>
                </div>

                <div class="cards" data-search="Chico">
                    <div class="info"><h4>Chico</h4><span>Manutenção</span></div>
                    <a  class="number">9795</a>
                </div>

                <div class="cards" data-search="Tatiane">
                    <div class="info"><h4>Tatiane</h4><span>Manutenção</span></div>
                    <a class="number">9807</a>
                </div>

                <div class="cards" data-search="Vitor">
                    <div class="info"><h4>Vitor</h4><span>Patrimônio</span></div>
                    <a class="number">9796</a>
                </div>

            </div>
        </div>
            
        <div class="sub-grupo">
            <h4 class="titulo-interno"><i class="fa-solid fa-lightbulb"></i> PAM</h4>
            <div class="grid-ramais-3">

                <div class="cards" data-search="Juliana Conde">
                    <div class="info"><h4>Juliana Conde</h4><span>PAM</span></div>
                    <a class="number">9805</a>
                </div>

                <div class="cards" data-search="Luciane">
                    <div class="info"><h4>Luciane</h4><span>PAM</span></div>
                    <a class="number">9805</a>
                </div>

                <div class="cards" data-search="Taiane">
                    <div class="info"><h4>Taiane</h4><span>PAM</span></div>
                    <a  class="number">9806</a>
                </div>

                <div class="cards" data-search="Denise">
                    <div class="info"><h4>Denise</h4><span>PAM</span></div>
                    <a class="number">9806</a>
                </div>

            </div>
        </div>
        
        <div class="sub-grupo">
            <h4 class="titulo-interno"><i class="fa-solid fa-address-card"></i> Matrícula</h4>
            <div class="grid-ramais-3">

                <div class="cards" data-search="Angélica">
                    <div class="info"><h4>Angélica</h4><span>Matrícula</span></div>
                    <a  class="number">9787</a>
                </div>

                <div class="cards" data-search="Lucimara">
                    <div class="info"><h4>Lucimara</h4><span>Matrícula</span></div>
                    <a  class="number">9788</a>
                </div>

                <div class="cards" data-search="Soraia">
                    <div class="info"><h4>Soraia</h4><span>Matrícula</span></div>
                    <a  class="number">9789</a>
                </div>

                <div class="cards" data-search="Karine">
                    <div class="info"><h4>Karine</h4><span>Matrícula</span></div>
                    <a  class="number">9790</a>
                </div>

            </div>
        </div>

        <div class="sub-grupo">
            <h4 class="titulo-interno"><i class="fa-solid fa-users"></i>Recursos Humanos (RH)</h4>
            <div class="grid-ramais-3">

                <div class="cards" data-search="Juraci">
                    <div class="info"><h4>Juraci</h4><span>RH</span></div>
                    <a  class="number">9791</a>
                </div>

                <div class="cards" data-search="Jennifer">
                    <div class="info"><h4>Jennifer (estagiária)</h4><span>RH</span></div>
                    <a  class="number">9792</a>
                </div>

                <div class="cards" data-search="Jéssica">
                    <div class="info"><h4>Jéssica</h4><span>RH</span></div>
                    <a  class="number">9793</a>
                </div>

                <div class="cards" data-search="Jayne">
                    <div class="info"><h4>Jayne</h4><span>RH</span></div>
                    <a  class="number">9794</a>
                </div>

                <div class="cards" data-search="Henrique">
                    <div class="info"><h4>Henrique</h4><span>RH</span></div>
                    <a  class="number">9808</a>
                </div>

            </div>
        </div>

        <div class="sub-grupo">
            <h4 class="titulo-interno"><i class="fa-solid fa-boxes-packing"></i>Compras</h4>
            <div class="grid-ramais">

                <div class="cards" data-search="Estela">
                    <div class="info"><h4>Estela</h4><span>Compras</span></div>
                    <a  class="number">9777</a>
                </div>

                <div class="cards" data-search="Yara">
                    <div class="info"><h4>Yara</h4><span>Compras</span></div>
                    <a  class="number">9778</a>
                </div>

                <div class="cards" data-search="Jadeny Alexandre">
                    <div class="info"><h4>Jadeny e Alexandre</h4><span>Compras</span></div>
                    <a  class="number">9779</a>
                </div>

            </div>
        </div>

        <div class="sub-grupo">
            <h4 class="titulo-interno"><i class="fa-solid fa-laptop-code"></i>Suporte TI</h4>
            <div class="grid-ramais-2">

                <div class="cards" data-search="Alex Gabriel Luis">
                    <div class="info"><h4>Alex, Gabriel e Luis</h4><span>TI</span></div>
                    <a  class="number">9780</a>
                </div>

                <div class="cards" data-search="Cauê">
                    <div class="info"><h4>Cauê</h4><span>Betha</span></div>
                    <a  class="number">9781</a>
                </div>


            </div>
        </div>
    </div>
    </div>

    <div id="tab-cem" class="tab-content">
        <div class="grupo-setor">
            <h3 class="setor-titulo"> Escolas Municipais (CEM)</h3>
            <p class="contador">Carregando contatos...</p>

            <div class="grid-ramais">
                <div class="cards" data-search="Anita"><div class="info"><h4>Anita</h4><span>CEM</span></div><div class="number"><i class="fa-solid fa-phone"></i>3423-6969</div></div>

                <div class="cards" data-search="Duarte"><div class="info"><h4>B. I. Duarte</h4><span>CEM</span></div><div class="number"><i class="fa-solid fa-phone"></i>3423-1444</div>
                <div class="number">3422-8848</div></div>

                <div class="cards" data-search="Clary"><div class="info"><h4>Clary</h4><span>CEM</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-8008</div></div>

                <div class="cards" data-search="Faustino"><div class="info"><h4>Faustino</h4><span>CEM</span></div><div class="number"><i class="fa-solid fa-phone"></i>3421-4545</div>
                <div class="number">3422-4410</div></div>
                
                <div class="cards" data-search="Geyner"><div class="info"><h4>Geyner</h4><span>CEM</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-3541</div></div>

                <div class="cards" data-search="Irma"><div class="info"><h4>Irma</h4><span>CEM</span></div><div class="number"><i class="fa-solid fa-phone"></i>3421-7630</div></div>

                <div class="cards" data-search="Mimo"><div class="info"><h4>MIMO</h4><span>CEM</span></div><div class="number"><i class="fa-solid fa-phone"></i>3421-6686</div></div>

                <div class="cards" data-search="Maria Martins"><div class="info"><h4>Mª Martins</h4><span>CEM</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-3686</div></div>

                <div class="cards" data-search="Pieroni"><div class="info"><h4>Pieroni</h4><span>CEM</span></div><div class="number"><i class="fa-solid fa-phone"></i>3421-4090</div></div>

                <div class="cards" data-search="Neyde"><div class="info"><h4>Neyde</h4><span>CEM</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-3869</div></div>

                <div class="cards" data-search="Valdir"><div class="info"><h4>Valdir</h4><span>CEM</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-3163</div></div>

                <div class="cards" data-search="Orozimbo"><div class="info"><h4>Orozimbo</h4><span>CEM</span></div><div class="number"><i class="fa-solid fa-phone"></i>3421-4108</div></div>
            </div>
        </div>
    </div>

    <div id="tab-emei" class="tab-content">
        <div class="grupo-setor">
            <h3 class="setor-titulo">Educação Infantil (CEMEI / EMEI)</h3>
            <p class="contador">Carregando contatos...</p>

            <div class="grid-ramais">
                <div class="cards" data-search="Abilio"><div class="info"><h4>Abílio</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3423-3744</div></div>

                <div class="cards" data-search="Alberto"><div class="info"><h4>Alberto</h4><span>EMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-8819</div></div>

                <div class="cards" data-search="Amélia"><div class="info"><h4>Amélia</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-8876</div></div>

                <div class="cards" data-search="Ana F"><div class="info"><h4>Ana F.</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-8270</div></div>

                <div class="cards" data-search="Aracy"><div class="info"><h4>Aracy.</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-8446</div></div>

                <div class="cards" data-search="Benedita"><div class="info"><h4>Benedita</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3423-6270</div></div>

                <div class="cards" data-search="Célia"><div class="info"><h4>Célia</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>-</div></div>

                <div class="cards" data-search="Elza"><div class="info"><h4>Elza</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-3470</div></div>

                <div class="cards" data-search="Floriano Marzochi"><div class="info"><h4>F. Marzochi</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i> 3422-5383</div></div>

                <div class="cards" data-search="Luiza G"><div class="info"><h4>Luiza G.</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3423-4253</div></div>

                <div class="cards" data-search="Helena B"><div class="info"><h4>Helena B.</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-8098</div></div>

                <div class="cards" data-search="José Modesto"><div class="info"><h4>J. Modesto</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-8250</div></div>

                <div class="cards" data-search="Magaly"><div class="info"><h4>Magaly</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>18 98169-9672</div></div>

                <div class="cards" data-search="Maria Lygia"><div class="info"><h4>Mª Lygia</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3405-1244</div></div>

                <div class="cards" data-search="Mercedes"><div class="info"><h4>Mercedes</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-8485</div></div>

                <div class="cards" data-search="Orozília"><div class="info"><h4>Orozília</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-8061</div></div>

                <div class="cards" data-search="Terezinha Guerra"><div class="info"><h4>Terezinha G.</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3423-8850</div></div>

                <div class="cards" data-search="Terruel"><div class="info"><h4>Terruel</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-8850</div></div>

                <div class="cards" data-search="Valter Peresi"><div class="info"><h4>V. Peresi</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3422-6135</div></div>

                <div class="cards" data-search="Vandira"><div class="info"><h4>Vandira</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>5704-9584</div></div>

                <div class="cards" data-search="Vânia"><div class="info"><h4>Vânia</h4><span>CEMEI</span></div><div class="number"><i class="fa-solid fa-phone"></i>3423-2730</div></div>

            </div>
        </div>
    </div>

    <div id="tab-outros" class="tab-content">
        <div class="grupo-setor">
            <h3 class="setor-titulo">Outros Locais</h3>
            <p class="contador">Carregando contatos...</p>

            <div class="grid-ramais">

                <div class="cards" data-search="Transporte Escolar"><div class="info"><h4>Transporte Escolar</h4><span>Rua Hermógenes Bruschi, 1954 - CEP 15500-006</span></div><div class="number">Tel. (17) 3406-0779</div></div>

                <div class="cards" data-search="Polo UAB"><div class="info"><h4>Polo UAB</h4><span>Rua Pernambuco, 1736 - CEP 15501-095</span></div><div class="number">Tel. (17) 3422-8839</div></div>

                <div class="cards" data-search="Almoxarifado"><div class="info"><h4>Almoxarifado</h4><span>Rua Pernambuco, 4846 - CEP 15500-006</span></div><div class="number">Tel. (17) 3422-3160</div></div>
            </div>
        </div>
    </div>

        </div>
    </section>

    <!-- Titulo Ferramentas -->
    <div class="titulo-moderno icone-foco" style="margin-top: 40px;">
    <div class="icone-circulo"><i class="fa-solid fa-toolbox"></i></div>
    <h2>Produtividade & Ferramentas</h2>
    <p>Calendário, Dicas Rápidas e Sistemas Escolares</p>
    </div>

    <!-- Dicas de TI e Calendário -->
    <section id="ferramentas" class="fundo">
        <div class="container">
            <div class="dashboard-duplo">
                
                <div class="dashboard-col">
                    <div class="caixa" style="margin-bottom: 20px;">
                        <div class="titulo" style="align-items: center; text-align: left;">
                            <h2><i class="fa-regular fa-calendar-days" style="color: var(--cor-1);"></i> Calendário 2026</h2>
                            <p>Clique na imagem para ampliar e ler com detalhes.</p>
                        </div>
                    </div>
                    
                    <div class="moldura" style="padding: 15px; box-shadow: 0 4px 6px rgba(0,0,0,0.05);">
                        <img src="assets/images/calendário escolar - 2026.png" alt="Calendário Escolar 2026" style="cursor: zoom-in;" onclick="abrirZoom(this.src)">

                        <div class="area-download" style="margin-top: 15px;">
                            <a href="assets/images/calendário escolar - 2026.pdf" download="Calendario_Escolar_2026.pdf" class="btn-download" >
                                <i class="fa-solid fa-file-arrow-down"></i> Baixar PDF
                            </a>
                        </div>
                    </div>
                </div>

                <div class="dashboard-col">
                        <div class="caixa" style="margin-bottom: 20px;">
                            <div class="titulo" style="align-items: center; text-align: left;">
                                <h2><i class="fa-solid fa-keyboard" style="color: var(--cor-1);"></i> Dicas de TI</h2>
                                <p>Atalhos do Windows para agilizar o dia a dia.</p>
                            </div>
                        </div>
                        
                        <div class="lista-atalhos">
                            
                            <div class="linha-atalho">
                                <div class="teclas"><kbd>Win</kbd> + <kbd>Shift</kbd> + <kbd>S</kbd></div>
                                <div class="desc"><strong>Captura:</strong> Tira print de uma área da tela.</div>
                            </div>
                            
                            <div class="linha-atalho">
                                <div class="teclas"><kbd>Win</kbd> + <kbd>L</kbd></div>
                                <div class="desc"><strong>Bloquear:</strong> Protege o PC instantaneamente.</div>
                            </div>
                            
                            <div class="linha-atalho">
                                <div class="teclas"><kbd>Win</kbd> + <kbd>D</kbd></div>
                                <div class="desc"><strong>Minimizar:</strong> Oculta tudo e vai para a Área de Trabalho.</div>
                            </div>
                            
                            <div class="linha-atalho">
                                <div class="teclas"><kbd>Win</kbd> + <kbd>E</kbd></div>
                                <div class="desc"><strong>Arquivos:</strong> Abre o Explorador de Arquivos.</div>
                            </div>

                            <div class="linha-atalho">
                                <div class="teclas"><kbd>Win</kbd> + <kbd>.</kbd></div>
                                <div class="desc"><strong>Área de Emojis:</strong> Abre o painel de emojis.</div>
                            </div>


                        </div>
                    </div>

            </div>
        </div>

        <div id="modalZoom" class="modal-zoom" onclick="fecharZoom()">
        <div class="fechar-zoom"><i class="fa-solid fa-xmark"></i></div>
        <img class="modal-conteudo" id="imgZoom">
        </div>
        
    </section>

    <!-- Programas -->
    <section id="programas" style="background: var(--cor-branco); padding: 40px 0 50px; margin: 80px 0px; box-shadow: 0px 5px 15px rgb(195, 211, 255); ">
        <div class="container" style="padding-top: 0; padding-bottom: 0; box-shadow: none; background: transparent;">
            <div class="caixa">
                <div class="titulo">
                    <h2 style="color: var(--cor-1); text-shadow: 2px 2px 4px rgba(46, 163, 184, 0.295); ">Sistemas e Programas</h2>
                    <p>Acesse rapidamente e a baixe plataformas / programas essenciais.</p>
                </div>
            </div>

            <div class="sistemas-grid">
                <a href="https://votuporanga.1doc.com.br/" target="_blank" class="sistema-card">
                    <i class="fa-solid fa-file-signature"></i>
                    <h4>1Doc</h4>
                    <span>Abertura de Chamados</span>
                </a>
                <a href="https://betha.cloud" target="_blank" class="sistema-card">
                    <i class="fa-solid fa-cloud"></i>
                    <h4>Betha Sistemas</h4>
                    <span>Diário e Notas Online</span>
                </a>
                <a href="https://login.elefanteletrado.com.br/manager" target="_blank" class="sistema-card">
                    <i class="fa-solid fa-book-open-reader"></i>
                    <h4>Elefante Letrado</h4>
                    <span>Plataforma de Leitura</span>
                </a>
                <a href="https://download.anydesk.com/AnyDesk.exe" target="_blank" class="sistema-card">
                    <i class="fa-solid fa-headset"></i>
                    <h4>AnyDesk</h4>
                    <span>Suporte Remoto TI</span>
                </a>
                

                
                
            </div>
        </div>
    </section>

    <!-- Titulo Manuais -->
    <div id="tutoriais" class="titulo-moderno icone-foco" style="margin-top: 40px;">
        <div class="icone-circulo"><i class="fa-solid fa-book-open"></i></div>
        <h2>Tutoriais e Manuais</h2>
        <p>Aprenda a configurar e resolver problemas no dia a dia.</p>
    </div>

    <!-- Tutorias / Manuais -->
    <section id="manuais" class="docs-section">
    <div class="docs-container">
        
        <aside class="sidebar-nav">
            <h3><i class="fa-solid fa-book-open"></i> Navegação</h3>

            <details open> <summary><i class="fa-solid fa-print"></i> Impressoras</summary>
                <div class="submenu">
                    <a href="#" onclick="abrirManual(event, 'hp-432')" class="link-manual active">HP 432</a>
                    <a href="#" onclick="abrirManual(event, 'hp-e42540')">HP E42540</a>
                    <a href="#" onclick="abrirManual(event, 'hp-e52645')">HP E52645</a>
                    <a href="#" onclick="abrirManual(event, 'canon-gx4010')">Canon GX4010</a>
                    <a href="#" onclick="abrirManual(event, 'canon-c5035')">Canon C5035</a>
                    <a href="#" onclick="abrirManual(event, 'epson-l3250')">Epson L3250</a>
                    <a href="#" onclick="abrirManual(event, 'outras-impressoras')">Outros Modelos</a>
                </div>
            </details>

            <details>
                <summary><i class="fa-solid fa-video"></i> Câmeras (SIM Next)</summary>
                <div class="submenu">
                    <a href="#" onclick="abrirManual(event, 'visualizar')">Visualização das Câmeras</a>
                    <a href="#" onclick="abrirManual(event, 'gravação')">Gravação das Imagens</a>
                </div>
            </details>

            <details>
                <summary><i class="fa-solid fa-file-signature"></i> 1DOC</summary>
                <div class="submenu">
                    <a href="#" onclick="abrirManual(event, 'refiltinta')">Refil Toner/Tinta</a>
                    <a href="#" onclick="abrirManual(event, 'manutenimp')">Manutenção. de Impressora</a>
                    <a href="#" onclick="abrirManual(event, 'manutencomp')">Computador e Notebooks</a>
                    <a href="#" onclick="abrirManual(event, 'outros')">Requisitar Equipamentos</a>
                
                </div>
            </details>
        </aside>


        <main class="content-area">
            
            <!-- Impressoras -->
            <?php include 'tutorials/impressoras/hp-432.php'; ?>
            
            <?php include 'tutorials/impressoras/hp-e42540.php'; ?>

            <?php include 'tutorials/impressoras/hp-e52645.php'; ?>

            <?php include 'tutorials/impressoras/canon-gx4010.php'; ?>

            <?php include 'tutorials/impressoras/canon-c5035.php'; ?>
         
            <?php include 'tutorials/impressoras/epson-l3250.php'; ?>

            <?php include 'tutorials/impressoras/outras-impressoras.php'; ?>
            

            <!-- Cameras -->
            <?php include 'tutorials/cameras/visualizar.php'; ?>

            <?php include 'tutorials/cameras/gravacao.php'; ?>


            <!-- 1DOC -->
            <?php include 'tutorials/1doc/refiltinta.php'; ?>

            <?php include 'tutorials/1doc/manutenimp.php'; ?>

            <?php include 'tutorials/1doc/manutencomp.php'; ?>
            
            <?php include 'tutorials/1doc/outros.php'; ?>       

            <?php include 'tutorials/1doc/equipamento.php'; ?> 
            
    </div>
            
    </div>
    </section>
   
<?php include 'components/footer.php'; ?>