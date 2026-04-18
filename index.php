
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
             <!-- HP 432 -->
            <div id="hp-432" class="tutorial-box active-tutorial">  
                
                <div class="header-tutorial">
    
                    <div class="img-imp"><img src="docs/impressoras/hp-432/hp432.jpg" alt="Impressora HP 432"></div>

                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>HP Laser MFP 432</h2>
                            
                            <a href="docs/Impressoras/hp-432/hp-432-driver.zip" class="btn-download-header">
                                <i class="fa-solid fa-download"></i> Driver da Impressora
                            </a>
                        </div>
                        <p>Selecione abaixo o que deseja fazer:</p>
            
                        <div class="badge-container" style="justify-content: flex-start; margin-top: 10px;">
                            <button class="badge active" onclick="trocarAbaTutorial('aba-instalacao', this)">Instalação</button>
                            <button class="badge" onclick="trocarAbaTutorial('aba-contador', this)">Contador de Páginas</button>
                            <button class="badge" onclick="trocarAbaTutorial('aba-impressao', this)">Impressão</button>
                        </div>
                    </div>

                </div>

                <hr class="divider">              

                <div id="aba-instalacao" class="bloco-conteudo">
                    <div class="alerta-box">
                    <p>Siga este guia para instalar a impressora nos computadores da escola. </p>
                    <p>• Verifique se a impressora está ligada na tomada. </p>
                    <p>• Conecte o cabo USB no computador <strong>OU</strong> o cabo de rede na impressora</p> 
                    </div>

                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Início e Acordos</h4>
                        <p>Ao abrir o instalador, clique em "Avançar" na tela de boas-vindas.</p>
                        <p>Na tela seguinte, marque as duas caixas de seleção para aceitar o contrato de licença e as configurações de coleta de dados. Clique em <strong>Avançar</strong>.</p>
                        <img src="docs/impressoras/hp-432/instalação/2.png" class="step-img">
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Tipo de Conexão</h3>
                        <p>Selecione o tipo de conexão desejada:</p>       
                        <p><strong>• Conexão USB:</strong> Se o cabo estiver ligado direto no PC.</p>
                        <p><strong>• Conexão de rede (Recomendado):</strong> Se a impressora estiver ligada no cabo de internet</p>
                        <img src="docs/impressoras/hp-432/instalação/3.png" class="step-img">
                    </div>
                </div>
                    
                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Configuração de Rede</h3>
                        <p><strong>Selecione: "Não, a impressora já está conectada à minha rede."</strong></p>      
                        <img src="docs/impressoras/hp-432/instalação/4.png" class="step-img">
                    </div>
                </div>
                    
                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Selecionar a Impressora</h3>
                        <p>O sistema irá buscar as impressoras. Selecione a impressora que aparecer na lista ex: Pedagógico, Gestão.</p>    
                        <img src="docs/impressoras/hp-432/instalação/5.png" class="step-img">
                        <div class="alerta-box">
                        <strong>Dica:</strong> Se o Windows não reconhecer, reinicie a impressora.
                        </div>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Softwares e Drivers</h3>
                        <p>Mantenha a seleção recomendada (Driver da impressora e Driver de digitalização marcados) e clique em <strong>Avançar</strong>.</p> 
                        <img src="docs/impressoras/hp-432/instalação/6.png" class="step-img">
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Conclusão</h3>
                        <p>Aguarde a barra de instalação encher. Ao final, você pode desmarcar a opção de imprimir página de teste para economizar papel e clicar em <strong>Concluir</strong>.</p>
                        <img src="docs/impressoras/hp-432/instalação/7.png" class="step-img">
                    </div>
                </div>    
                </div>  
                
                <div id="aba-contador" class="bloco-conteudo" style="display: none;">
                <div class="alerta-box">
                    <strong>Nota:</strong> Não precisa estar conectado no computador. Faremos direto no painel da impressora.
                </div>

                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Acessar Menu</h3>
                        <p>No painel da impressora, aperte o botão <strong>...</strong>.</p>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Config. de Sistema</h3>
                        <p>Use as setas <i class="fa-solid fa-arrow-right"></i> para encontrar <strong>"Config. Sist."</strong> e aperte OK.</p>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Relatórios</h3>
                        <p>Vá até a opção <strong>"Relatórios"</strong> e aperte OK.</p>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Imprimir Configuração</h3>
                        <p>Selecione <strong>"Contador de Uso"</strong> e aperte OK e SIM para imprimir. A folha será impressa com o total de páginas.</p>
                    </div>
                </div>

                <div class="video-moldura">
                    <div class="video-titulo">
                        <i class="fa-solid fa-play-circle"></i> Vídeo: Emitindo o Relatório
                    </div>
                    <video controls class="video-player">
                        <source src="docs/impressoras/hp-432/Contador/Tutorial Contador de Páginas.mp4" type="video/mp4">
                        <p>Seu navegador não suporta vídeos. <a href="docs/impressoras/hp-432/Contador/Tutorial Contador de Páginas.mp4" download>Baixe o vídeo aqui.</a></p>
                    </video>
                </div>
                </div>
                
                <div id="aba-impressao" class="bloco-conteudo" style="display: none;">
                    
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Iniciando a Impressão</h3>
                            <p>Com seu arquivo aberto clique no ícone de impressora ou use o atalho <strong>Ctrl + P</strong>. O primeiro passo é selecionar a impressora correta  no campo "Destino".</p>                            
                            <img src="docs/impressoras/hp-432/impressão/1.png" class="step-img" style="margin-bottom: 20px;">
                            <p> Caso a HP 432 não apareça de imediato, clique em <strong>Ver mais...</strong> e selecione-a na lista.</p>
                            <img src="docs/impressoras/hp-432/impressão/2.png" class="step-img">
                            
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Impressão Padrão</h3>
                            <p>Se você deseja fazer uma impressão comum, basta clicar no botão <strong>Imprimir</strong>.</p>
                            <ul style="margin-left: 20px; color: var(--cor-cinza); margin-bottom: 15px;">
                                <li><strong>Páginas:</strong> No personalizado você pode especificar quais páginas imprimir. "1-5, 7" para imprimir da página 1 até a 5 e também a página 7, pulando a 6.</li>
                                <li><strong>Tamanho do Papel:</strong> A impressora HP 432 geralmente utiliza o tamanho <strong>A4</strong>.</li>
                                <li><strong>Frente e Verso:</strong> Escolha "Borda longa" para virar a página como um livro.</li>
                            </ul>
                            <img src="docs/impressoras/hp-432/impressão/3.png" class="step-img" >
                            
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Impressão Avançada</h3>
                            <p>Se precisar mudar a bandeja, agrupar cópias ou ajustar a qualidade, clique em <strong>Imprimir utilizando a caixa de diálogo de sistema</strong> para abrir o painel avançado da HP.</p>
                            <img src="docs/impressoras/hp-432/impressão/4.png" class="step-img"style="margin-bottom: 20px;" >
                            <p>Selecione a impressora denovo e clique em <strong>Mais Configurações</strong>.</p>
                            
                            <img src="docs/impressoras/hp-432/impressão/5.png" class="step-img">
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Preferências da HP (Aba Básico)</h3>
                            <p>Na aba <strong>Básico</strong>, você pode ajustar:</p>
                            
                                <p><strong>• Orientação:</strong> Retrato (em pé) ou Paisagem (deitada).</p>
                                <img src="docs/impressoras/hp-432/impressão/7.gif" class="step-img" >
                                <p><strong>• Opções de Layout:</strong> Quantas páginas do arquivo devem ser encolhidas e impressas em uma única folha.</p>
                                <img src="docs/impressoras/hp-432/impressão/8.gif" class="step-img" >
                                <p><strong>• Impressão dos 2 lados (Frente e Verso):</strong> Escolha "Borda longa" para virar a página como um livro.</p>
                                <img src="docs/impressoras/hp-432/impressão/9.gif" class="step-img" >
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Cópias e Agrupamento (Aba Papel)</h3>
                            <p>Indo para a aba <strong>Papel</strong>, você define o número de cópias. Aqui existe uma função vital chamada <strong>Agrupar</strong>:</p>
                            
                            <div class="alerta-box" style="background-color: #f0fdf4; border-left-color: #16a34a; color: #166534;">
                                <i class="fa-solid fa-layer-group"></i> <strong>O que faz o botão Agrupar?</strong><br>
                                Se você for imprimir 3 cópias de uma prova de 5 páginas:<br>
                                • <strong>Marcado:</strong> A impressora entrega as provas prontas (Páginas 1 a 5, depois 1 a 5 de novo).<br>
                                • <strong>Desmarcado:</strong> A impressora solta três páginas "1", depois três páginas "2", obrigando você a separar tudo na mão depois.
                            </div>
                            
                            <p style="margin-top: 15px;">Você também pode usar a opção <strong>Porcentagem</strong> para aumentar ou diminuir o conteúdo para caber melhor na folha.</p>
                            <img src="docs/impressoras/hp-432/impressão/10.png" class="step-img">
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">6</div>
                        <div class="step-content">
                            <h3>Escolhendo a Bandeja de Papel</h3>
                            <p>Ainda na aba Papel, em <strong>Origem</strong>, você escolhe de onde a impressora vai puxar a folha. A <em>Seleção Automática</em> é o padrão, mas você pode forçar:</p>
                            <ul style="margin-left: 20px; color: var(--cor-cinza); margin-bottom: 15px;">
                                <li><strong>Bandeja 1:</strong> É a tampa frontal que você abre manualmente. Ideal para papéis timbrados, envelopes ou rascunhos avulsos.</li>
                                <li><strong>Bandeja 2:</strong> É a gaveta principal que fica na parte de baixo, abastecida com o papel A4 branco padrão.</li>
                            </ul>
                            <div class="step-images">
                                <img src="docs/impressoras/hp-432/impressão/11.png" class="step-img" style="width: 60%;">
                                <img src="docs/impressoras/hp-432/impressão/bandeja.png" class="step-img" style="width: 33%;">
                            </div>
                            

                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">7</div>
                        <div class="step-content">
                            <h3>Qualidade e Finalização</h3>
                            <p>Se o documento tiver imagens muito escuras ou você quiser economizar toner, acesse a aba <strong>Gráficos</strong> para mudar a Qualidade, o Brilho ou ativar o modo de economia. Após ajustar tudo, clique em <strong>OK</strong> nesta janela e, na tela principal, clique em <strong>Print</strong>.</p>
                            <img src="docs/impressoras/hp-432/impressão/12.gif" class="step-img">
                            <img src="docs/impressoras/hp-432/impressão/13.png" class="step-img">
                            
                        </div>
                    </div>
                </div>

            </div>
            <!-- HP E42540 -->
            <div id="hp-e42540" class="tutorial-box">
                
                <div class="header-tutorial">
                    
                    <div class="img-imp"><img src="docs/impressoras/hp-e42540/hp-e42540.png" alt="Impressora HP E42540"></div>

                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>HP LaserJet MFP E42540</h2>
                            
                            <a href="docs/impressoras/hp-e42540/driver.zip" class="btn-download-header">
                                <i class="fa-solid fa-download"></i> Driver da Impressora
                            </a>
                        </div>
                        <p>Guia completo de impressão: configurações de páginas, bandeja, frente e verso e agrupamento.</p>
            
                        <div class="badge-container" style="justify-content: flex-start; margin-top: 10px;">
                            <button class="badge active" onclick="trocarAbaHP('impressao', this)">Impressão</button>
                        </div>
                    </div>
                </div>

                <hr class="divider">

                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Iniciando a Impressão</h3>
                        <p>Com o documento aberto no navegador ou leitor de PDF, clique no ícone de impressora ou pressione <strong>Ctrl + P</strong>. No campo "Destino", caso a impressora HP não apareça, clique em <strong>Ver mais...</strong> e selecione-a na lista.</p>
                        <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px;">
                            <img src="docs/impressoras/hp-e42540/impressão/1.png" class="step-img" >
                            <img src="docs/impressoras/hp-e42540/impressão/2.png" class="step-img" >
                        </div>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Páginas e Configuração Padrão</h3>
                        <p>Se quiser imprimir apenas partes do documento, vá em <strong>Páginas</strong>, mude para <strong>Personalizado</strong> e digite os números desejados (ex: 1-5, 8, 11-13). Se essa for uma impressão simples, basta clicar no botão <strong>Imprimir</strong>.</p>
                        
                        <div class="alerta-box" style="background-color: #f8fafc; border-left-color: #64748b; color: #334155; margin-top: 15px;">
                            <i class="fa-solid fa-gears"></i> <strong>Configurações Específicas:</strong> Para usar recursos avançados como frente e verso, bandejas específicas ou agrupamento, clique na opção <strong>Imprimir utilizando a caixa de diálogo de sistema...</strong>.
                        </div>
                        <img src="docs/impressoras/hp-e42540/impressão/3.png" class="step-img">
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Caixa de Diálogo do Sistema</h3>
                        <p>Na nova janela que se abrir, certifique-se de selecionar a impressora HP novamente e clique em <strong>Mais configurações</strong> (ou <em>Preferências</em>, dependendo do sistema).</p>
                        <img src="docs/impressoras/hp-e42540/impressão/5.png" class="step-img">
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Configurações de Papel e Bandeja</h3>
                        <p>Na primeira aba (<strong>Atalhos de impressão</strong>), você tem acesso rápido a funções muito úteis:</p>
                        <ul style="margin-left: 20px; color: var(--cor-cinza); margin-bottom: 15px;">
                            <li><strong>Origem do papel:</strong> Escolha de qual bandeja a folha será puxada (<em>Bandeja 1</em> para folhas avulsas/tampa frontal ou <em>Bandeja 2</em> para a gaveta inferior).</li>
                            <li><strong>Imprimir em ambos os lados:</strong> Selecione "Sim" para ativar a impressão <strong>Frente e Verso</strong> automática.</li>
                            <li><strong>Páginas por folha:</strong> Permite encolher várias páginas do arquivo para caberem juntas na mesma folha física.</li>
                        </ul>
                        <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px;">
                            <img src="docs/impressoras/hp-e42540/impressão/6.png" class="step-img" >
                            <img src="docs/impressoras/hp-e42540/impressão/7.gif" class="step-img" >
                            <img src="docs/impressoras/hp-e42540/impressão/8.gif" class="step-img" >
                        </div>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Cópias, Agrupamento e Qualidade</h3>
                        <p>Acessando a aba <strong>Avançado</strong>, você encontra o ajuste de Qualidade (Compressão de grade) e a importantíssima função de <strong>Agrupar</strong>:</p>
                        
                        <div class="alerta-box" style="background-color: #f0fdf4; border-left-color: #16a34a; color: #166534;">
                            <i class="fa-solid fa-layer-group"></i> <strong>Lembrando da função Agrupar:</strong><br>
                            Ao imprimir várias cópias de uma prova ou documento longo:<br>
                            • <strong>Marcado:</strong> Imprime cadernos completos na ordem correta (Pág 1 a 5, depois 1 a 5 novamente).<br>
                            • <strong>Desmarcado:</strong> Imprime todas as páginas 1 juntas, depois todas as páginas 2, obrigando a equipe a separar as provas manualmente.
                        </div>
                        <img src="docs/impressoras/hp-e42540/impressão/9.png" class="step-img">
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Finalizar</h3>
                        <p>Após realizar todos os ajustes necessários, clique no botão <strong>OK</strong> para fechar as preferências avançadas e, de volta à janela principal, clique em <strong>Print</strong> (ou Imprimir) para enviar o documento para a impressora.</p>
                        <img src="docs/impressoras/hp-e42540/impressão/10.png" class="step-img">
                    </div>
                </div>

            </div>

            <!-- HP 432 -->
            <div id="hp-e52645" class="tutorial-box">
                <div class="header-tutorial">
                    <div class="icone-circulo" style="width: 80px; height: 80px; font-size: 2.5rem; margin-right: 20px;"><i class="fa-solid fa-print"></i></div>
                    <div class="info-container">
                        <h2>HP LaserJet MFP E52645</h2>
                        <p>Ajuste as configurações de bandeja e qualidade para uma impressão perfeita.</p>
                    </div>
                </div>

                <hr class="divider">

                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Clicar no ícone da Impressora</h3>
                        <p>Abra a janela de impressão clicando no ícone ou usando <strong>Ctrl + P</strong>.</p>
                        <img src="docs/impressoras/hp-e52645/impressão/1.png" class="step-img">
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Procurar a Impressora</h3>
                        <p>Vá em "Destino" e clique em <strong>Ver mais...</strong> para selecionar a E52645.</p>
                        <img src="docs/impressoras/hp-e52645/impressão/2.png" class="step-img">
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Páginas e Personalização</h3>
                        <p>Escolha entre imprimir o documento inteiro ou use o modo <strong>Personalizado</strong> para definir o intervalo de páginas.</p>
                        <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px;">
                            <img src="docs/impressoras/hp-e52645/impressão/3.png" class="step-img" >
                            <img src="docs/impressoras/hp-e52645/impressão/4.png" class="step-img" >
                        </div>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Caixa de Diálogo do Sistema</h3>
                        <p>Clique em <strong>Imprimir utilizando a caixa de diálogo do sistema</strong> e depois em <strong>Mais configurações</strong>.</p>
                        <img src="docs/impressoras/hp-e52645/impressão/5.png" class="step-img">
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Atalhos, Papel e Bandeja</h3>
                        <p>Configure o tamanho do papel, a bandeja de origem e ative o <strong>Frente e Verso</strong> automático se necessário.</p>
                        <img src="docs/impressoras/hp-e52645/impressão/6.png" class="step-img">
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Agrupar e Qualidade</h3>
                        <p>Na aba Avançado, defina as cópias e marque <strong>Agrupar</strong>. No menu de qualidade, selecione <strong>Melhor Qualidade</strong>.</p>
                        <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px;">
                            <img src="docs/impressoras/hp-e52645/impressão/6.png" class="step-img" >
                        </div>
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">7</div>
                    <div class="step-content">
                        <h3>Concluir</h3>
                        <p>Confirme as alterações e clique em <strong>Print</strong> para iniciar a impressão.</p>
                        <img src="docs/impressoras/hp-e52645/impressão/7.gif" class="step-img" >
                    </div>
                </div>
            </div>

            <div id="canon-gx4010" class="tutorial-box">

                <div class="header-tutorial">
    
                    <div class="img-imp"><img src="docs/impressoras/canon-gx4010/canon-gx4010.png" alt="Canon GX4010"></div>

                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>Canon GX4010</h2>
                            
                            <a href="docs/impressoras/canon-gx4010/canon-gx4010-driver.zip" class="btn-download-header">
                                <i class="fa-solid fa-download"></i> Driver da Impressora
                            </a>
                        </div>
                        <p>Siga este guia para instalar a impressora nos computadores da escola.</p>
            
                        <div class="badge-container" style="justify-content: flex-start; margin-top: 10px;">
                            <button class="badge active" onclick="trocarAbaHP('instalacao', this)">Instalação</button>
                        </div>
                    </div>

                </div>

                <hr class="divider">

                <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Iniciar Configuração</h3>
                        <p>Após extrair e abrir o arquivo baixado, clique no botão <strong>Iniciar configuração</strong> na tela principal.</p>
                        <img src="docs/impressoras/canon-gx4010/instalação/1.png" class="step-img">
                    </div>
                </div>

                <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Contrato e Licença</h3>
                        <p>O instalador pedirá que você aceite os termos de uso. Marque a caixa <strong>"Concordo"</strong> na primeira opção (Obrigatório) e clique em <strong>Avançar</strong>.</p>
                        <img src="docs/impressoras/canon-gx4010/instalação/2.png" class="step-img">
                    </div>
                </div>

                <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Verificar Alimentação</h3>
                            <p>Certifique-se de que a impressora já está ligada. O sistema fará uma varredura (Pesquisando impressoras). Clique em <strong>Avançar</strong>.</p>
                            <img src="docs/impressoras/canon-gx4010/instalação/3.png" class="step-img">
                        </div>
                    </div>
                    
                <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Selecionar a Impressora</h3>
                            <p>A impressora <strong>GX4000 series</strong> aparecerá na lista. Clique sobre ela para selecioná-la e depois em <strong>Avançar</strong>. Na tela seguinte, apenas confirme clicando em <strong>Continuar</strong>.</p>
                            <img src="docs/impressoras/canon-gx4010/instalação/5.png" class="step-img">
                            <img src="docs/impressoras/canon-gx4010/instalação/6.png" class="step-img" style="margin-top: 10px;">
                        </div>
                    </div>

                <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Método de Conexão</h3>
                        <p>Se o sistema não encontrar a impressora, ela provavelmente não está conectada ao Wi-Fi da Escola.</p>
                        <div class="alerta-box alerta-box--aviso">
                            <i class="fa-solid fa-triangle-exclamation"></i> <strong>Atenção:</strong>
                            Nesse caso, abra um <strong>chamado técnico</strong> para que possamos corrigir a conexão.
                        </div>
                        <img src="docs/impressoras/canon-gx4010/instalação/ob.png" class="step-img">
                    </div>
                </div>

                <div class="step">
                        <div class="step-number">6</div>
                        <div class="step-content">
                            <h3>Instalação dos Drivers</h3>
                            <p>Agora é só aguardar. O programa fará o download e a instalação dos "MP Drivers" automaticamente. Não cancele o processo.</p>
                            <img src="docs/impressoras/canon-gx4010/instalação/7.png" class="step-img">
                        </div>
                    </div>

                <div class="step">
                        <div class="step-number">7</div>
                        <div class="step-content">
                            <h3>Conclusão</h3>
                            <p>Pronto! A mensagem "Agora você pode imprimir e digitalizar" vai aparecer. Você pode clicar em "Teste de impressão" se quiser garantir, e depois em <strong>Avançar</strong>.</p>
                            <img src="docs/impressoras/canon-gx4010/instalação/8.png" class="step-img">
                            <p style="margin-top: 15px;">Na última tela, basta clicar em <strong>Ir para o site</strong> para fechar o instalador.</p>
                            <img src="docs/impressoras/canon-gx4010/instalação/9.png" class="step-img">
                        </div>
                    </div>


            </div>

            <div id="canon-c5035" class="tutorial-box">
                
                <div class="header-tutorial">
                    <div class="icone-circulo" style="width: 80px; height: 80px; font-size: 2.5rem; margin-right: 20px;"><i class="fa-solid fa-print"></i></div>
                    
                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>Canon iR-ADV C5035 / C5045</h2>
                            
                            <a href="docs/impressoras/canon-c5035/driver.zip" class="btn-download-header">
                                <i class="fa-solid fa-download"></i> Driver da Impressora
                            </a>
                        </div>
                        <p>Guia completo de impressão colorida, seleção de gavetas, frente e verso e agrupamento avançado.</p>
            
                        <div class="badge-container" style="justify-content: flex-start; margin-top: 10px;">
                            <button class="badge active" onclick="trocarAbaTutorial('aba-impressao-canon', this)">Impressão</button>
                        </div>
                    </div>
                </div>

                <hr class="divider">

                <div id="aba-impressao-canon" class="bloco-conteudo">
                    
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Iniciando a Impressão</h3>
                            <p>Com o documento aberto no navegador, clique no ícone de impressora ou use o atalho <strong>Ctrl + P</strong>. No campo "Destino", clique em <strong>Ver mais...</strong> e localize a impressora <strong>Canon iR-ADV C5030/5035 UFR II</strong> na lista.</p>
                            <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px;">
                                <img src="docs/impressoras/canon-c5035/impressão/1.png" class="step-img" style="max-width: 48%;">
                                <img src="docs/impressoras/canon-c5035/impressão/2.png" class="step-img" style="max-width: 48%;">
                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Páginas e Acesso Avançado</h3>
                            <p>Em "Páginas", selecione <strong>Personalizado</strong> e informe quais folhas deseja imprimir (Ex: 1-5,7). Para configurar as gavetas e o frente e verso, clique em <strong>Imprimir utilizando a caixa de diálogo de sistema...</strong>.</p>
                            <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px;">
                                <img src="docs/impressoras/canon-c5035/impressão/3.png" class="step-img" style="max-width: 48%;">
                                <img src="docs/impressoras/canon-c5035/impressão/4.png" class="step-img" style="max-width: 48%;">
                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Preferências da Canon</h3>
                            <p>Na nova janela, clique na impressora Canon e vá em <strong>Preferências</strong>. A aba <strong>Basic Settings</strong> (Configurações Básicas) será aberta. Nela você controla quase tudo:</p>
                            <ul style="margin-left: 20px; color: var(--cor-cinza); margin-bottom: 15px;">
                                <li><strong>Page Size:</strong> Tamanho da folha (deixe em A4).</li>
                                <li><strong>Color Mode:</strong> Se deseja imprimir Colorido (Auto) ou Preto e Branco (B&W).</li>
                            </ul>
                            <img src="docs/impressoras/canon-c5035/impressão/5.png" class="step-img">
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Layout e Frente e Verso</h3>
                            <p>Ainda em <em>Basic Settings</em>, você encontra duas opções fundamentais para economia de papel:</p>
                            <ul style="margin-left: 20px; color: var(--cor-cinza); margin-bottom: 15px;">
                                <li><strong>Page Layout:</strong> Imprime várias páginas encolhidas na mesma folha (Ex: <em>2 on 1</em> para imprimir duas páginas por lado).</li>
                                <li><strong>1-sided/2-sided:</strong> Escolha <em>2-sided Printing</em> para ativar o Frente e Verso automático.</li>
                            </ul>
                            <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px;">
                                <img src="docs/impressoras/canon-c5035/impressão/6.gif" class="step-img" style="max-width: 48%;">
                                <img src="docs/impressoras/canon-c5035/impressão/7.gif" class="step-img" style="max-width: 48%;">
                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Agrupar Cópias (Collate)</h3>
                            <p>No campo <strong>Staple/Collate/Group</strong>, você define como a impressora vai organizar múltiplas cópias do mesmo arquivo.</p>
                            
                            <div class="alerta-box" style="background-color: #f0fdf4; border-left-color: #16a34a; color: #166534;">
                                <i class="fa-solid fa-layer-group"></i> <strong>Atenção ao idioma:</strong><br>
                                • <strong>Collate (Agrupar):</strong> É a opção correta! Entrega as provas montadas na ordem (Pág 1,2,3... 1,2,3...).<br>
                                • <strong>Group (Agrupar errado):</strong> Vai imprimir todas as páginas "1", depois todas as "2", obrigando a separação manual.
                            </div>
                            <img src="docs/impressoras/canon-c5035/impressão/8.png" class="step-img">
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">6</div>
                        <div class="step-content">
                            <h3>Escolher a Gaveta (Paper Source)</h3>
                            <p>Caso precise puxar um papel timbrado ou de outra cor, vá até a aba superior <strong>Paper Source</strong> e altere de <em>Auto</em> para a gaveta desejada (Drawer 1, Drawer 2 ou Multi-purpose tray para a bandeja lateral).</p>
                            <img src="docs/impressoras/canon-c5035/impressão/9.gif" class="step-img">
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">7</div>
                        <div class="step-content">
                            <h3>Finalizar</h3>
                            <p>Clique em <strong>OK</strong> para fechar as configurações da Canon e depois clique em <strong>Print</strong> para enviar o seu documento!</p>
                            <img src="docs/impressoras/canon-c5035/impressão/10.png" class="step-img">
                        </div>
                    </div>

                </div>
            </div>

            <div id="epson-l3250" class="tutorial-box">
                
                <div class="header-tutorial">
                    <div class="img-imp"><img src="docs/impressoras/epson-l3250/epsonl3250.png" alt="Epson L3250"></div>

                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>Epson L3250</h2>
                            
                            <a href="docs/impressoras/epsonl3250/" class="btn-download-header">
                                <i class="fa-solid fa-download"></i> Driver da Impressora
                            </a>
                        </div>
                        <p>Selecione abaixo o que deseja fazer:</p>
            
                        <div class="badge-container" style="justify-content: flex-start; margin-top: 10px;">
                            <button class="badge active" onclick="trocarAbaTutorial('aba-instalacao-epson', this)">Instalação</button>
                            <button class="badge" onclick="trocarAbaTutorial('aba-impressao-epson', this)">Impressão</button>
                        </div>

                    </div>
                </div>

                <hr class="divider">

                <div id="aba-instalacao-epson" class="bloco-conteudo">
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Iniciar a Configuração</h3>
                            <p>Após baixar e abrir o arquivo do driver, a tela de instalação será exibida. Confirme se a impressora já está ligada na tomada e clique no botão <strong>Aceitar</strong> para concordar com os Termos de Licença.</p>
                            <img src="Manuais/Impressoras/Epson L3250/Instalação/1.png" class="step-img">
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Confirmação de Tinta</h3>
                            <p>O sistema exibirá um aviso sobre o abastecimento de tinta. Como a impressora da escola já está montada e em uso, basta marcar a caixa inferior <strong>"Terminei de encher os tanques de tinta"</strong> e clicar em Avançar.</p>
                            <img src="Manuais/Impressoras/Epson L3250/Instalação/2.png" class="step-img">
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Escolher a Conexão</h3>
                            <p>O instalador perguntará como a máquina está conectada. Selecione a opção que se aplica ao seu caso e clique em Avançar:</p>
                            <ul style="margin-left: 20px; color: var(--cor-cinza); margin-bottom: 10px; margin-top: 10px;">
                                <li><strong>Conexão Sem Fio (Wi-Fi):</strong> Caso a impressora vá funcionar pela rede da escola.</li>
                                <li><strong>Conexão USB:</strong> Caso o cabo esteja conectado direto no seu gabinete ou notebook.</li>
                            </ul>
                            <img src="Manuais/Impressoras/Epson L3250/Instalação/3.png" class="step-img">
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Selecionar a Impressora</h3>
                            <p>O programa fará uma varredura na rede ou no cabo. Selecione a <strong>Epson L3250 Series</strong> que aparecer na lista principal. Aguarde alguns minutos enquanto o software configura os drivers no seu computador.</p>
                            <img src="Manuais/Impressoras/Epson L3250/Instalação/4.png" class="step-img">
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Conclusão</h3>
                            <p>Pronto! A mensagem de "Configuração Concluída" aparecerá na tela. Recomendamos clicar em <strong>Imprimir página de teste</strong> para garantir que a comunicação está perfeita. Depois, basta clicar em <strong>Concluir</strong>.</p>
                            <img src="Manuais/Impressoras/Epson L3250/Instalação/5.png" class="step-img">
                        </div>
                    </div>
                </div>

                <div id="aba-impressao-epson" class="bloco-conteudo">
                    
                    <div class="step">
                        <div class="step-number">1</div>
                        <div class="step-content">
                            <h3>Iniciando a Impressão</h3>
                            <p>No seu navegador ou leitor de PDF, clique no ícone de impressora ou use o atalho <strong>Ctrl + P</strong>. No campo "Destino", clique em <strong>Ver mais...</strong> para localizar a Epson.</p>
                            <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px;">
                                <img src="docs/impressoras/epson-l3250/impressão/1.png" class="step-img" style="max-width: 48%;">
                                <img src="docs/impressoras/epson-l3250/impressão/2.png" class="step-img" style="max-width: 48%;">
                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">2</div>
                        <div class="step-content">
                            <h3>Páginas e Acesso Avançado</h3>
                            <p>Em "Páginas", mude para <strong>Personalizado</strong> e digite o intervalo desejado (ex: 1-13). Para acessar as configurações de qualidade e cores, clique em <strong>Imprimir utilizando a caixa de diálogo de sistema</strong>.</p>
                            <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px;">
                                <img src="docs/impressoras/epson-l3250/impressão/3.png" class="step-img" style="max-width: 48%;">
                                <img src="docs/impressoras/epson-l3250/impressão/4.png" class="step-img" style="max-width: 48%;">
                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">3</div>
                        <div class="step-content">
                            <h3>Preferências da Epson (Aba Principal)</h3>
                            <p>Na nova janela, selecione a Epson L3250 e clique em <strong>Preferências</strong> (ou Mais opções). Na aba <strong>Principal</strong>, você controla as funções básicas:</p>
                            <ul style="margin-left: 20px; color: var(--cor-cinza); margin-bottom: 15px;">
                                <li><strong>Orientação:</strong> Vertical (Retrato) ou Horizontal (Paisagem).</li>
                                <li><strong>Cor:</strong> Escolha entre imprimir Colorido ou Preto/Tons de cinza.</li>
                                <li><strong>Frente e Verso:</strong> A L3250 faz isso de forma <em>Manual</em> (ela imprime os ímpares, você vira a folha, e ela imprime os pares).</li>
                            </ul>
                            <div style="display: flex; gap: 10px; flex-wrap: wrap; margin-top: 15px;">
                                <img src="docs/impressoras/epson-l3250/impressão/5.png" class="step-img" style="max-width: 48%;">
                                <video autoplay loop muted playsinline class="step-img" style="max-width: 48%; border-radius: 8px; border: 1px solid #e2e8f0;">
                                    <source src="docs/impressoras/epson-l3250/impressão/6.mp4" type="video/mp4">
                                </video>
                            </div>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">4</div>
                        <div class="step-content">
                            <h3>Agrupamento e Multi-Páginas</h3>
                            <p>Ainda na aba Principal, você encontra as opções de <strong>Multi pg</strong> (para imprimir várias páginas em miniatura na mesma folha) e o <strong>Agrupar</strong>:</p>
                            
                            <div class="alerta-box" style="background-color: #f0fdf4; border-left-color: #16a34a; color: #166534;">
                                <i class="fa-solid fa-layer-group"></i> <strong>A regra do Agrupar:</strong><br>
                                Vai imprimir 5 cópias de uma prova?<br>
                                • <strong>Marcado:</strong> A impressora te entrega as 5 provas já montadas na ordem (Pág 1,2,3... 1,2,3...).<br>
                                • <strong>Desmarcado:</strong> Ela imprime todas as páginas 1 juntas, depois todas as 2, dando trabalho para separar.
                            </div>
                            
                            <video autoplay loop muted playsinline class="step-img" style="margin-top: 15px; border-radius: 8px; border: 1px solid #e2e8f0;">
                                <source src="docs/impressoras/epson-l3250/impressão/7.mp4" type="video/mp4">
                            </video>
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">5</div>
                        <div class="step-content">
                            <h3>Qualidade de Impressão</h3>
                            <p>No campo <strong>Qualidade</strong>, você pode alterar de <em>Padrão</em> para <em>Alto</em> (para fotos ou documentos importantes) ou <em>Rascunho</em> (para economizar muita tinta e imprimir mais rápido).</p>
                            <img src="docs/impressoras/epson-l3250/impressão/8.png" class="step-img">
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">6</div>
                        <div class="step-content">
                            <h3>Ajuste de Tamanho (Aba Mais Opções)</h3>
                            <p>Se o documento estiver cortando as bordas, vá na aba <strong>Mais opções</strong>. Marque a caixa <strong>Reduzir/Aumentar documento</strong> e selecione <strong>Ajustar à página</strong> para forçar o conteúdo a caber na folha A4.</p>
                            <img src="docs/impressoras/epson-l3250/impressão/9.png" class="step-img">
                        </div>
                    </div>

                    <div class="step">
                        <div class="step-number">7</div>
                        <div class="step-content">
                            <h3>Finalizar</h3>
                            <p>Clique em <strong>OK</strong> para salvar suas preferências Epson e, na tela escura do navegador, clique em <strong>Print</strong> para iniciar a impressão.</p>
                            <img src="docs/impressoras/epson-l3250/impressão/10.png" class="step-img">
                        </div>
                    </div>

                </div>

            </div>

            <div id="outras-impressoras" class="tutorial-box" style="display:none;">
 
                <div class="header-tutorial">
                    <div class="img-imp"><img src="docs/Impressoras/outras/outras.jpg" alt="Epson L3250"></div>
                    
                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>Outras Impressoras</h2>
                        </div>
                        <p>Drivers para instalação manual. Baixe o arquivo referente ao modelo da sua impressora e siga o assistente de instalação.</p>
                    </div>
                </div>
            
                <hr class="divider">
            
                <div class="corpo-tutorial">
            
                    <div class="alerta-box alerta-box--info">
                        <i class="fa-solid fa-circle-info"></i> <strong>Como instalar:</strong>
                        Baixe o driver e execute o instalador (<code>.exe</code>). Qual quer dúvida, liguei para o setor de informática.
                    </div>
            
                    <!-- BROTHER -->
                    <div class="driver-grupo">
                        <div class="driver-grupo-titulo">
                            <div class="driver-ini-box ib-b"><i class="fa-solid fa-print"></i></div>
                            <span>Brother</span>
                        </div>
                        <div class="grid-drivers">
                            <div class="driver-card">
                                <div class="driver-ini-box ib-b">B</div>
                                <div class="driver-info"><span class="driver-nome">DCP-L5652DN</span><span class="driver-fab">Brother</span></div>
                                <a href="docs/impressoras/outras/dcp-l5652dn.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                        </div>
                    </div>
            
                    <!-- CANON -->
                    <div class="driver-grupo">
                        <div class="driver-grupo-titulo">
                            <div class="driver-ini-box ib-c"><i class="fa-solid fa-print"></i></div>
                            <span>Canon</span>
                        </div>
                        <div class="grid-drivers">
                            <div class="driver-card">
                                <div class="driver-ini-box ib-c">C</div>
                                <div class="driver-info"><span class="driver-nome">G4110</span><span class="driver-fab">Canon</span></div>
                                <a href="docs/impressoras/outras/canong4110.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                        </div>
                    </div>
            
                    <!-- EPSON -->
                    <div class="driver-grupo">
                        <div class="driver-grupo-titulo">
                            <div class="driver-ini-box ib-e"><i class="fa-solid fa-print"></i></div>
                            <span>Epson</span>
                        </div>
                        <div class="grid-drivers">
                            <div class="driver-card">
                                <div class="driver-ini-box ib-e">E</div>
                                <div class="driver-info"><span class="driver-nome">L120</span><span class="driver-fab">Epson</span></div>
                                <a href="docs/impressoras/outras/l120.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                            <div class="driver-card">
                                <div class="driver-ini-box ib-e">E</div>
                                <div class="driver-info"><span class="driver-nome">L800</span><span class="driver-fab">Epson</span></div>
                                <a href="docs/impressoras/outras/l800.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                            <div class="driver-card">
                                <div class="driver-ini-box ib-e">E</div>
                                <div class="driver-info"><span class="driver-nome">L1800</span><span class="driver-fab">Epson</span></div>
                                <a href="docs/impressoras/outras/l1800.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                            <div class="driver-card">
                                <div class="driver-ini-box ib-e">E</div>
                                <div class="driver-info"><span class="driver-nome">L3110</span><span class="driver-fab">Epson</span></div>
                                <a href="docs/impressoras/outras/l3110.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                            <div class="driver-card">
                                <div class="driver-ini-box ib-e">E</div>
                                <div class="driver-info"><span class="driver-nome">L3150</span><span class="driver-fab">Epson</span></div>
                                <a href="docs/impressoras/outras/l3150.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                            <div class="driver-card">
                                <div class="driver-ini-box ib-e">E</div>
                                <div class="driver-info"><span class="driver-nome">L3250</span><span class="driver-fab">Epson</span></div>
                                <a href="docs/impressoras/outras/l3250.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                            <div class="driver-card">
                                <div class="driver-ini-box ib-e">E</div>
                                <div class="driver-info"><span class="driver-nome">L4260</span><span class="driver-fab">Epson</span></div>
                                <a href="docs/impressoras/outras/l4260.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                            <div class="driver-card">
                                <div class="driver-ini-box ib-e">E</div>
                                <div class="driver-info"><span class="driver-nome">M205</span><span class="driver-fab">Epson</span></div>
                                <a href="docs/impressoras/outras/m205.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                        </div>
                    </div>
            
                    <!-- HP -->
                    <div class="driver-grupo">
                        <div class="driver-grupo-titulo">
                            <div class="driver-ini-box ib-h"><i class="fa-solid fa-print"></i></div>
                            <span>HP</span>
                        </div>
                        <div class="grid-drivers">
                            <div class="driver-card">
                                <div class="driver-ini-box ib-h">H</div>
                                <div class="driver-info"><span class="driver-nome">2055dn</span><span class="driver-fab">HP</span></div>
                                <a href="docs/impressoras/outras/2055dn.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                            <div class="driver-card">
                                <div class="driver-ini-box ib-h">H</div>
                                <div class="driver-info"><span class="driver-nome">E42540</span><span class="driver-fab">HP</span></div>
                                <a href="docs/impressoras/outras/e42540.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                            <div class="driver-card">
                                <div class="driver-ini-box ib-h">H</div>
                                <div class="driver-info"><span class="driver-nome">E52645</span><span class="driver-fab">HP</span></div>
                                <a href="docs/impressoras/outras/e52645.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                            <div class="driver-card">
                                <div class="driver-ini-box ib-h">H</div>
                                <div class="driver-info"><span class="driver-nome">LaserJet 400</span><span class="driver-fab">HP</span></div>
                                <a href="docs/impressoras/outras/400.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                            <div class="driver-card">
                                <div class="driver-ini-box ib-h">H</div>
                                <div class="driver-info"><span class="driver-nome">LaserJet P2035</span><span class="driver-fab">HP</span></div>
                                <a href="docs/impressoras/outras/p2035.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                            <div class="driver-card">
                                <div class="driver-ini-box ib-h">H</div>
                                <div class="driver-info"><span class="driver-nome">M428fdw</span><span class="driver-fab">HP</span></div>
                                <a href="docs/impressoras/outras/m428.zip" class="driver-btn" download><i class="fa-solid fa-download"></i> Driver</a>
                            </div>
                        </div>
                    </div>    
            
                </div>
            </div>
        

            <div id="visualizar" class="tutorial-box">
                
                <div class="header-tutorial">
    
                    <div class="img-imp"><img src="docs/câmeras/simnext.png" alt="SIM Next"></div>

                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>Câmeras: Visualização ao Vivo</h2>
                            
                            <p>Aprenda a acessar as câmeras em tempo real, organizar a quantidade de telas e salvar sua visualização favorita no Intelbras SIM Next.</p></p>
                        </div>
                    </div>

                </div>

                <hr class="divider"> 

                <div class="corpo-tutorial">

                    <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Abrir a aba de Visualização</h3>
                        <p>Na tela inicial do SIM Next, clique no ícone <strong>Visualização</strong>. Uma nova aba será aberta com a tela dividida.</p>
                        
                        <img src="docs/câmeras/visualização/1.png" class="step-img">
                        
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Selecionar e Abrir as Câmeras</h3>
                        <p>No menu lateral esquerdo, chamado <strong>Dispositivos</strong>, você verá a lista de DVRs (os aparelhos que gravam as imagens da escola).</p>
                        <img src="docs/câmeras/visualização/2.png" class="step-img">

                        <p style="margin-top: 50px">1. Clique no ícone de <strong>"+"</strong> ao lado do nome do DVR (ex: SEEDU - DVR 201) para expandir a lista de câmeras.</p>
                        <p>2. Para abrir, basta <strong>clicar e arrastar</strong> o nome da câmera para o quadrado vazio no centro da tela, ou dar um duplo clique no nome dela.</p>
                        
                        <img src="docs/câmeras/visualização/3.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3> Escolher a Grade (Quantidade de Câmeras)</h3>
                        <p>No canto inferior esquerdo da tela, você verá um ícone de grade (geralmente marcado com o número 4). Clique nele para escolher quantas câmeras deseja ver ao mesmo tempo.</p>
                        <img src="docs/câmeras/visualização/4.png" class="step-img">

                        <div class="alerta-box" style="background-color: #f0fdf4; border-left-color: #16a34a; color: #166534;">
                        <strong>Importante:</strong> Câmeras marcadas como "VAGO". Eles indicam que o aparelho (DVR) possui <strong>capacidade livre</strong>. Ou seja, essas são portas disponíveis para a <strong>instalação de novas câmeras físicas</strong> na escola no futuro, caso seja necessário expandir a segurança.
                        </div>
                        <img src="docs/câmeras/visualização/6.png" class="step-img">
                        
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Salvar Visualização (Opcional)</h3>
                        <p>Se você organizou suas 16 câmeras favoritas e não quer ter que arrastar uma por uma todo dia, clique no botão <strong>Salvar Visualização Atual</strong> (fica no canto inferior esquerdo). Você poderá dar um nome (ex: "Câmeras Pátio") e abri-las com um clique no dia seguinte!</p>
                        <img src="docs/câmeras/visualização/8.png" class="step-img">
                        
                    </div>
                    </div>



                </div>

            </div>

            <div id="gravação" class="tutorial-box">

                <div class="header-tutorial">
    
                    <div class="img-imp"><img src="docs/câmeras/simnext.png" alt="SIM Next"></div>

                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>Câmeras: Buscar e Exportar Gravações</h2>
                            
                            <p>Aprenda a resgatar imagens de dias anteriores, pesquisar por horários específicos e exportar os vídeos do Intelbras SIM Next diretamente para o seu computador.</p></p>
                        </div>
                    </div>

                </div>

                <hr class="divider">  
                
                <div class="corpo-tutorial">

                    <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Abrir a aba de Reprodução</h3>
                        <p>Na tela inicial do SIM Next, clique no ícone <strong>Reprodução</strong>.</p>
                        
                        <img src="docs/câmeras/gravação/1.png" class="step-img">
                        
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Pesquisar a Gravação</h3>
                        <p>Uma janela chamada "Buscar Gravação" vai aparecer. Siga passos :</p>
                        <p><strong>1. Selecione as câmeras:</strong>. Marque a caixa de seleção (▢) ao lado do nome do DVR para buscar imagens de todas as câmeras. Caso queira uma câmera específica, clique no ícone de <strong>"+"</strong> para expandir a lista e selecione apenas a câmera desejada.</p>
                        <p><strong>2. Defina o período:</strong>. Clique nos campos de "Horário de início" e "Horário final" para abrir o calendário e definir a data e a hora exata que você deseja assistir </p>
                        <img src="docs/câmeras/gravação/2.png" class="step-img">

                        <div class="alerta-box" style="background-color: #f0fdf4; border-left-color: #16a34a; color: #166534;">
                        <strong><i class="fa-solid fa-circle-info"></i> Importante sobre os dias em verde:</strong><br>
                        Os dias destacados em verde no calendário possuem gravações disponíveis. O limite de armazenamento varia conforme a capacidade do equipamento:
                            
                        <ul style="margin-top: 8px; margin-bottom: 0; margin-left: 20px;">
                        <li><strong>DVR de 16 câmeras:</strong> armazena as imagens por aproximadamente <strong>32 dias</strong>.</li>
                        <li><strong>DVR de 32 câmeras:</strong> armazena as imagens por aproximadamente <strong>15 dias</strong>.</li>
                        </ul>

                        <img src="docs/câmeras/gravação/3.png" class="step-img">
                    </div>
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Linha do Tempo e Backup</h3>
                        <p>Para salvar o vídeo,com a câmera selecionada clique no botão <strong><i class="fa-solid fa-floppy-disk"></i> Fazer backup de mídia</strong>.</p>
                        
                        <img src="docs/câmeras/gravação/4.png" class="step-img">
                        
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Hora Inicial e Hora Final</h3>
                        <p>Na janelinha que abrir, ajuste a "Hora Inicial" e a "Hora Final" do corte exato que você deseja salvar. Em seguida, clique em <strong>Baixar</strong>.</p>
                        
                        <img src="docs/câmeras/gravação/5.png" class="step-img">
                        
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Exportar o Vídeo para o PC</h3>
                        <p>Volte na tela inicial do SIM Next (aba Nova Aba) e clique em <strong>Mídia</strong>.</p>
                        <img src="docs/câmeras/gravação/6.png" class="step-img">

                        <p>Acessando a aba <strong>Vídeos</strong>, você poderá visualizar todas as gravações baixadas. Utilizando os ícones localizados abaixo de cada arquivo, é possível realizar as seguintes ações:</p>
                        <ul style="margin-left: 20px; color: #475569; line-height: 1.8; margin-bottom: 15px;">
                            <li><i class="fa-solid fa-pen" style="color: #94a3b8; width: 20px;"></i> <strong>Renomear:</strong> Altera o nome do arquivo para facilitar a identificação.</li>
                            <li><i class="fa-solid fa-file-export" style="color: #94a3b8; width: 20px;"></i> <strong>Exportar:</strong> Salva a gravação no seu computador (Área de Trabalho, Pen Drive).</li>
                            <li><i class="fa-solid fa-folder-open" style="color: #94a3b8; width: 20px;"></i> <strong>Abrir local:</strong> Abre a pasta original do sistema.</li>
                        </ul>
                        <img src="docs/câmeras/gravação/7.png" class="step-img">


                    </div>
                    </div>

                </div>

            </div>

            <!-- 1DOC -->
            <div id="refiltinta" class="tutorial-box">

                <div class="header-tutorial">
    
                    <div class="logo-img"><img src="docs/1doc/1doc.png" alt="1Doc"></div>
                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>Solicitação de Toner / Tinta</h2>
                            <a href="https://votuporanga.1doc.com.br/b.php?pg=o%2Flogin&redirecionar=cGc9ZG9jL3ZlciZpdGQ9MjAmb3JpZ2VtPWVtYWlsJmhhc2g9MzU5NjRGNkE2QTY3NDRCNUY0NjQxMzhBJnM9dm90dXBvcmFuZ2EmaWRfZW1pc3Nhbz0xMDcxMzE0OQ%3D%3D&n=3" target="_blank" class="btn-download-header">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> Acessar Sistema
                            </a>
                        </div>
                        <p>Passo a passo para solicitar recarga de  refil ou toner via 1Doc.
                        </p>
                    </div>

                </div>

                <hr class="divider">  
                
                <div class="corpo-tutorial">

                    <div class="alerta-box alerta-box--info">
                        <i class="fa-solid fa-circle-info"></i> <strong>Dica do Sistema:</strong>
                        Tudo que tiver um asterisco vermelho (<span style="color: red; font-weight: bold;">*</span>) é <strong>Obrigatório</strong>. Campos sem asterisco são opcionais e você pode deixar em branco.
                    </div>

                    <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Iniciar Chamado</h3>
                        <p>No menu superior, clique em <strong>Novo</strong> e selecione a opção <strong>Chamado técnico</strong>.</p>
                        <img src="docs/1doc/toner-refil/1.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Selecionar Assunto</h3>
                        <p>No campo Assunto, digite "SEEDU" ou procure por: <br><strong>SEEDU :: Chamado Técnico TI</strong>.</p>
                        <img src="docs/1doc/toner-refil/2.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Identificação</h3>
                        <p><strong> • Unidade Escolar / Setor <span style="color:red">*</span>:</strong> Selecione sua escola na lista (Obrigatório).</p>
                        <p><strong> • Solicitante:</strong> Campo opcional. Preencha apenas se estiver abrindo pedido para outra pessoa.</p>
                        <img src="docs/1doc/toner-refil/3.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Tipo de Manutenção</h3>
                        <p>Selecione se a impressora é <strong>Patrimoniada</strong> (da Prefeitura) ou <strong>Terceirizada</strong> (Alugada/Locada).</p>
                        <img src="docs/1doc/toner-refil/4.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Impressora Patrimoniada</h3>
                        <p>Complete os campos:</p>
                        <p>•<span style="color:red">*</span>Patrimônio: Digite o número da plaqueta.</p>
                        <p>•<span style="color:red">*</span>Marca/Modelo: Se não souber, escolha "Outro" e digite abaixo.</p>
                        <p>•<span style="color:red">*</span>Tipo: Selecione "Solicitação de Toner ou Refil de Tinta".</p>
                        <img src="docs/1doc/toner-refil/5.png" class="step-img">
                        <p style="margin-top: 15px;">Para o "Refil de Tinta" marque as cores que deseja:</p>
                        <img src="docs/1doc/toner-refil/6.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Impressora Terceirizada</h3>
                        <p>Preencha o campo Número de Série conforme a etiqueta do equipamento. Para concluir o chamado, siga as mesmas instruções descritas no Passo 5.</p>
                        <img src="docs/1doc/toner-refil/7.png" class="step-img">
                        
                        <div class="alerta-box" style="background-color: #f0f9ff; border-left-color: #0ea5e9; color: #0369a1;">
                        <i class="fa-solid fa-circle-info"></i> <strong>Dica:</strong> 
                        Você pode localizar o número de série atrás do equipamento, como mostra a imagem abaixo:
                        <img src="docs/1doc/toner-refil/numerodeserie.png" class="step-img">
                        </div>

                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">7</div>
                    <div class="step-content">
                        <h3>Concluir</h3>
                        <p>Para finalizar, clique em <button style="background:#0fbfa5; color:white; border:none; padding:7px 13px; font-weight:bold; border-radius:4px;">Abrir chamado</button></p>
                        <img src="docs/1doc/toner-refil/8.png" class="step-img">
                        
                        <div class="alerta-box">
                            <i class="fa-solid fa-circle-info"></i> <strong>Lembrete:</strong> 
                            Não esqueça de levar o Contador de Páginas impresso ao buscar o toner. O passo a passo para imprimir esse relatório está disponível no guia de cada impressora.
                        </div> 
                        
                    </div>
                </div>


                </div>

            </div>

            <div id="manutenimp" class="tutorial-box">

                <div class="header-tutorial">
    
                    <div class="logo-img"><img src="docs/1doc/1doc.png" alt="1Doc"></div>
                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>Manuntenção de Impressoras</h2>
                            <a href="https://votuporanga.1doc.com.br/b.php?pg=o%2Flogin&redirecionar=cGc9ZG9jL3ZlciZpdGQ9MjAmb3JpZ2VtPWVtYWlsJmhhc2g9MzU5NjRGNkE2QTY3NDRCNUY0NjQxMzhBJnM9dm90dXBvcmFuZ2EmaWRfZW1pc3Nhbz0xMDcxMzE0OQ%3D%3D&n=3" target="_blank" class="btn-download-header">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> Acessar Sistema
                            </a>
                        </div>
                        <p>Passo a passo para solicitar manutenção de impressora Patrimoniada ou Terceirizada via 1Doc.
                        </p>
                    </div>

                </div>

                <hr class="divider">  
                
                <div class="corpo-tutorial">

                    <div class="alerta-box alerta-box--info">
                        <i class="fa-solid fa-circle-info"></i> <strong>Dica do Sistema:</strong>
                        Tudo que tiver um asterisco vermelho (<span style="color: red; font-weight: bold;">*</span>) é <strong>Obrigatório</strong>. Campos sem asterisco são opcionais e você pode deixar em branco.
                    </div>

                    <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Iniciar Chamado</h3>
                        <p>No menu superior, clique em <strong>Novo</strong> e selecione a opção <strong>Chamado técnico</strong>.</p>
                        <img src="docs/1doc/manun impre/1.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Selecionar Assunto</h3>
                        <p>No campo Assunto, digite "SEEDU" ou procure por: <br><strong>SEEDU :: Chamado Técnico TI</strong>.</p>
                        <img src="docs/1doc/manun impre/2.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Identificação</h3>
                        <p><strong> • Unidade Escolar / Setor <span style="color:red">*</span>:</strong> Selecione sua escola na lista (Obrigatório).</p>
                        <p><strong> • Solicitante:</strong> Campo opcional. Preencha apenas se estiver abrindo pedido para outra pessoa.</p>
                        <img src="docs/1doc/manun impre/3.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Tipo de Manutenção</h3>
                        <p>Selecione se a impressora é <strong>Patrimoniada</strong> (da Prefeitura) ou <strong>Terceirizada</strong> (Alugada/Locada).</p>
                        <img src="docs/1doc/manun impre/4.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Impressora Patrimoniada</h3>
                        <p>Complete os campos:</p>
                        <p>•<span style="color:red">*</span>Patrimônio: Digite o número da plaqueta.</p>
                        <p>•<span style="color:red">*</span>Marca/Modelo: Se não souber, escolha "Outro" e digite abaixo.</p>
                        <p>•<span style="color:red">*</span>Tipo: Selecione "Manutenção".</p>
                        <img src="docs/1doc/manun impre/5.png" class="step-img">
                        <p style="margin-top: 15px;">No campo <strong>Solicitação, problema ou correção</strong>, seja o mais claro e detalhado possível. Uma boa descrição ajuda a equipe técnica a resolver o seu chamado muito mais rápido!</p>
                        <img src="docs/1doc/manun impre/6.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Impressora Terceirizada</h3>
                        <p>Preencha o campo Número de Série conforme a etiqueta do equipamento. Para concluir o chamado, siga as mesmas instruções descritas no Passo 5.</p>
                        <img src="docs/1doc/manun impre/7.png" class="step-img">
                        
                        <div class="alerta-box" style="background-color: #f0f9ff; border-left-color: #0ea5e9; color: #0369a1;">
                        <i class="fa-solid fa-circle-info"></i> <strong>Dica:</strong> 
                        Você pode localizar o número de série atrás do equipamento, como mostra a imagem abaixo:
                        <img src="docs/1doc/toner-refil/numerodeserie.png" class="step-img">
                        </div>

                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">7</div>
                    <div class="step-content">
                        <h3>Concluir</h3>
                        <p>Para finalizar, clique em <button style="background:#0fbfa5; color:white; border:none; padding:7px 13px; font-weight:bold; border-radius:4px;">Abrir chamado</button></p>
                        <img src="docs/1doc/manun impre/8.png" class="step-img">
                        
                        <div class="alerta-box">
                            <i class="fa-solid fa-circle-info"></i> <strong>Lembrete:</strong> 
                            Em casos de manutenção de impressoras terceirizadas, a empresa responsável possui um prazo de atendimento de até <strong>8 horas úteis</strong> para comparecer à escola e solucionar o problema.
                        </div> 
                        
                    </div>
                </div>


                </div>

            </div>

            <div id="manutencomp" class="tutorial-box">

                <div class="header-tutorial">
    
                    <div class="logo-img"><img src="docs/1doc/1doc.png" alt="1Doc"></div>
                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>Computador e Notebooks</h2>
                            <a href="https://votuporanga.1doc.com.br/b.php?pg=o%2Flogin&redirecionar=cGc9ZG9jL3ZlciZpdGQ9MjAmb3JpZ2VtPWVtYWlsJmhhc2g9MzU5NjRGNkE2QTY3NDRCNUY0NjQxMzhBJnM9dm90dXBvcmFuZ2EmaWRfZW1pc3Nhbz0xMDcxMzE0OQ%3D%3D&n=3" target="_blank" class="btn-download-header">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> Acessar Sistema
                            </a>
                        </div>
                        <p>Passo a passo para manutenção em Computadores e Notebooks via 1Doc.
                        </p>
                    </div>

                </div>

                <hr class="divider">  
                
                <div class="corpo-tutorial">

                    <div class="alerta-box alerta-box--info">
                        <i class="fa-solid fa-circle-info"></i> <strong>Dica do Sistema:</strong>
                        Tudo que tiver um asterisco vermelho (<span style="color: red; font-weight: bold;">*</span>) é <strong>Obrigatório</strong>. Campos sem asterisco são opcionais e você pode deixar em branco.
                    </div>

                    <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Iniciar Chamado</h3>
                        <p>No menu superior, clique em <strong>Novo</strong> e selecione a opção <strong>Chamado técnico</strong>.</p>
                        <img src="docs/1doc/manun comp/1.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Selecionar Assunto</h3>
                        <p>No campo Assunto, digite "SEEDU" ou procure por: <br><strong>SEEDU :: Chamado Técnico TI</strong>.</p>
                        <img src="docs/1doc/manun comp/2.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>Identificação</h3>                       
                        <p><strong> • Unidade Escolar / Setor <span style="color:red">*</span>:</strong> Selecione sua escola na lista (Obrigatório).</p>
                        <p><strong> • Solicitante:</strong> Campo opcional. Preencha apenas se estiver abrindo pedido para outra pessoa.</p>

                        <img src="docs/1doc/manun comp/3.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Tipo de Manutenção</h3>
                        <p>Selecione se o equipamento com problema é um <strong>Computador</strong> ou um <strong>Notebook</strong>.</p>
                        <img src="docs/1doc/manun comp/4.png" class="step-img">
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">5</div>
                    <div class="step-content">
                        <h3>Descrever o Problema</h3>
                        <p>Dependendo da sua escolha, o sistema pedirá algumas informações específicas:</p>
                        <br>
                        <p>• <strong>Para Computador:</strong> Informe o <strong>Patrimônio</strong> (plaqueta da prefeitura) e descreva o problema.</p>
                        <img src="docs/1doc/manun comp/5.png" class="step-img">
                        
                        <p style="margin-top: 20px;">• <strong>Para Notebook:</strong> Informe o <strong>Patrimônio</strong>, selecione o <strong>Modelo</strong> na lista suspensa e descreva o problema.</p>
                        <img src="docs/1doc/manun comp/6.png" class="step-img">

                        <div class="alerta-box">
                            <i class="fa-solid fa-lightbulb"></i> <strong>Importante:</strong> Seja claro e detalhista na descrição! Detalhes como "não liga", "sem internet" ou "tela preta" ajudam a solucionar o problema mais rapidamente.
                        </div>
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">6</div>
                    <div class="step-content">
                        <h3>Acesso Remoto</h3>
                        <p>No final do formulário, há uma seção de "Informações adicionais". Algumas solicitações não exigem a visita presencial, como por exemplo:</p>
                        <ul style="margin-left: 20px; margin-bottom: 15px; color: var(--cor-cinza);">
                            <li>Instalação do Pacote Office</li>
                            <li>Mapeamento de pastas na rede</li>
                            <li>Configuração de atalhos e impressoras</li>
                        </ul>
                        <img src="docs/1doc/manun comp/7.png" class="step-img">
                        <div class="alerta-box" style="background-color: #f0fdf4; border-left-color: #16a34a; color: #166534;">
                            <i class="fa-solid fa-headset"></i> <strong>Podemos resolver agora mesmo!</strong><br>
                            Se o seu computador estiver ligando e com internet, abra o aplicativo <strong>AnyDesk</strong>, copie os números que aparecem na tela e cole-os no campo <strong>Acesso remoto</strong>. Assim, a equipe de TI consegue entrar na sua máquina de longe e realizar o procedimento!
                        </div>

                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">7</div>
                    <div class="step-content">
                        <h3>Concluir</h3>
                        <p>Para finalizar, clique em <button style="background:#0fbfa5; color:white; border:none; padding:7px 13px; font-weight:bold; border-radius:4px;">Abrir chamado</button>no final da página e aguardar o retorno da equipe.</p>
                        <img src="docs/1doc/manun comp/8.png" class="step-img">
                    </div>
                    </div>

                </div>

            </div>

            <div id="outros" class="tutorial-box">

                <div class="header-tutorial">
    
                    <div class="logo-img"><img src="docs/1doc/1doc.png" alt="1Doc"></div>
                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>Computador e Rede</h2>
                            <a href="https://votuporanga.1doc.com.br/b.php?pg=o%2Flogin&redirecionar=cGc9ZG9jL3ZlciZpdGQ9MjAmb3JpZ2VtPWVtYWlsJmhhc2g9MzU5NjRGNkE2QTY3NDRCNUY0NjQxMzhBJnM9dm90dXBvcmFuZ2EmaWRfZW1pc3Nhbz0xMDcxMzE0OQ%3D%3D&n=3" target="_blank" class="btn-download-header">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> Acessar Sistema
                            </a>
                        </div>
                        <p>Passo a passo para manutenção de Computadores ou Internet via 1Doc.
                        </p>
                    </div>

                </div>

                <hr class="divider">  
                
                <div class="corpo-tutorial">

                    <div class="alerta-box" style="background-color: #fef2f2; border-left-color: #ef4444; color: #b91c1c;">
                    <i class="fa-solid fa-triangle-exclamation"></i> <strong>Atenção:</strong> 
                    Diferente de consertos rápidos, solicitar a compra ou reposição de um equipamento físico exige a abertura de um <strong>Memorando</strong>, pois envolve controle de estoque e patrimônio público.
                    </div>

                    <div class="step">
                    <div class="step-number">1</div>
                    <div class="step-content">
                        <h3>Abrir Novo Memorando</h3>
                        <p>No menu superior do 1Doc, clique em <strong>Novo</strong> e selecione a opção <strong>Memorando</strong>.</p>
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">2</div>
                    <div class="step-content">
                        <h3>Preencher o Cabeçalho</h3>
                        <p>Preencha os campos obrigatórios iniciais:</p>
                        <ul style="margin-left: 20px; color: var(--cor-cinza); margin-bottom: 15px; margin-top: 10px;">
                            <li><strong>Assunto <span style="color:red">*</span>:</strong> Solicitação de Equipamento de Informática</li>
                            <li><strong>Para <span style="color:red">*</span>:</strong> Selecione o setor de TI da Educação (Ex: SEEDU - Divisão de Suporte de TI)</li>
                        </ul>
                        <img src="Manuais/1Doc/Equipamentos/1.png" class="step-img"> </div>
                    </div>

                    <div class="step">
                    <div class="step-number">3</div>
                    <div class="step-content">
                        <h3>O Texto da Requisição (Copie e Cole)</h3>
                        <p>No corpo de texto do memorando, você precisa justificar o pedido e informar onde o equipamento será usado. Copie o modelo abaixo e preencha as partes entre colchetes:</p>
                        
                        <div style="background: #f1f5f9; border: 1px solid #cbd5e1; border-radius: 8px; padding: 20px; margin-top: 15px; font-family: monospace; font-size: 0.95rem; color: #334155; line-height: 1.6;">
                            Ao Setor de Tecnologia da Informação (TI),<br><br>
                            Venho, por meio deste, solicitar o fornecimento de <strong>[QUANTIDADE E EQUIPAMENTO - Ex: 01 Teclado USB / 01 Monitor]</strong> para uso nas atividades diárias desta unidade escolar.<br><br>
                            <strong>Justificativa:</strong> [Explique o motivo. Ex: O equipamento antigo apresentou defeito irreversível / Necessidade para o novo posto de trabalho na secretaria].<br><br>
                            <strong>Local de Instalação:</strong><br>
                            - Sala/Setor: [Ex: Secretaria, Sala dos Professores]<br>
                            - Patrimônio do Computador (CPU): [Nº da Plaqueta do computador onde ele será ligado]<br><br>
                            Certo de contar com a compreensão, agradeço antecipadamente.
                        </div>
                    </div>
                    </div>

                    <div class="step">
                    <div class="step-number">4</div>
                    <div class="step-content">
                        <h3>Assinar e Enviar</h3>
                        <p>Após preencher o texto, role até o final da página e clique em <strong>Assinar e Enviar</strong>. Aguarde o setor de TI avaliar o seu pedido e responder via sistema.</p>
                    </div>
                    </div>

                </div>

            </div>

            <div id="equipamento" class="tutorial-box">

                <div class="header-tutorial">
    
                    <div class="logo-img"><img src="Manuais/1Doc/1DOC.png" alt="1Doc"></div>
                    <div class="info-container">
                        <div class="titulo-e-botao">
                            <h2>Equipamentos</h2>
                            <a href="https://votuporanga.1doc.com.br/b.php?pg=o%2Flogin&redirecionar=cGc9ZG9jL3ZlciZpdGQ9MjAmb3JpZ2VtPWVtYWlsJmhhc2g9MzU5NjRGNkE2QTY3NDRCNUY0NjQxMzhBJnM9dm90dXBvcmFuZ2EmaWRfZW1pc3Nhbz0xMDcxMzE0OQ%3D%3D&n=3" target="_blank" class="btn-download-header">
                            <i class="fa-solid fa-arrow-up-right-from-square"></i> Acessar Sistema
                            </a>
                        </div>
                        <p>Passo a passo para manutenção de Computadores ou Internet via 1Doc.
                        </p>
                    </div>

                </div>

                <hr class="divider">  
                
                <div class="corpo-tutorial">
                
                </div>

            </div>
    </div>
            
    </div>
    </section>
   
<?php include 'components/footer.php'; ?>