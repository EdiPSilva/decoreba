    <nav>
        <div class="containerNav">
            <div class="logo">
                <h1><i class="fa fa-tachometer" aria-hidden="true"></i> Decoreba</h1>
            </div>
            <div class="menu <?= strtolower($this->getScreen()) == "home" ? "active" : "" ?>">
                <a href="<?= URL ?>home">
                    <i class="fa fa-home" aria-hidden="true"></i>&nbsp;Home
                </a>
            </div>
            <div class="menu <?= strtolower($this->getScreen()) == "practice" ? "active" : "" ?>">
                <a href="<?= URL ?>praticar">
                    <i class="fa fa-gamepad" aria-hidden="true"></i>&nbsp;Praticar
                </a>
            </div>
            <div class="menu <?= strtolower($this->getScreen()) == "words" ? "active" : "" ?>">
                <a href="<?= URL ?>palavras">
                    <i class="fa fa-book" aria-hidden="true"></i>&nbsp;Palavras
                </a>
            </div>
            <div class="menu <?= strtolower($this->getScreen()) == "users" ? "active" : "" ?>">
                <a href="<?= URL ?>usuario">
                    <i class="fa fa-user" aria-hidden="true"></i>&nbsp;Usuários
                </a>
            </div>
            <div class="menu <?= strtolower($this->getScreen()) == "configurations" ? "active" : "" ?>">
                <a href="<?= URL ?>configuracao">
                    <i class="fa fa-cogs" aria-hidden="true"></i>&nbsp;Configurações
                </a>
            </div>
        </div>
    </nav>