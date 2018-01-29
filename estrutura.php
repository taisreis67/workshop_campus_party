<?php include("header.php"); ?>

    <section class="require">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Requisitos</h2>

                    <p>
                        O que é necessário para que você possa seguir o tutorial.                    
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->

            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">
                            <h3>PHP instalado</h3>
                            <p>
                                Caso você ainda não tenha pode seguir os passos deste <a href="instalacao.php">tutorial</a>
                            </p>
                        </li>

                        <li class="list-group-item">
                            <h3>Editor de código</h3>
                            <p>
                                Assim como utilizamos programas como o Word para escrever documentos,
                                também existem programas específicos que nos ajudam a digitar nossos códigos de programação
                                que chamamos de editores de código. Abaixo seguem alguns editores:
                                <ul class="list-unstyled">
                                    <li><a href="https://code.visualstudio.com/" title="Visual Studio Code" target="_blank">Visual Studio Code</a></li>
                                    <li><a href="https://www.sublimetext.com/" title="Sublime" target="_blank">Sublime</a></li>
                                    <li><a href="https://atom.io/" title="Atom" target="_blank">Atom</a></li>
                                    <li><a href="http://brackets.io/" title="Brackets" target="_blank">Brackets</a></li>
                                    <li><a href="https://notepad-plus-plus.org/" title="Notepad++" target="_blank">Notepad++</a></li>
                                </ul>
                            </p>
                        </li>

                        <li class="list-group-item">
                            <h3>Básico do PHP</h3>
                            <p>
                                Caso você ainda não saiba pode seguir este <a href="programando_em_php.php">tutorial</a>
                            </p>
                        </li>
                    </ul>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Git</h2>

                    <p>
                        O Git é um sistema de versionamento de arquivos que os programadores utilizam para versinarem seus códigos.
                        Dessa forma, vários programadores podem trabalhar em um mesmo projeto sem o medo de um código sobrescrever o
                        outro já que todas as alterações são identificadas e vocêé avisado quando surgem conflitos(quando uma mesma linha foi alterada).
                    </p>

                    <p>
                        Nós vamos utilizar o Git para versionarmos o código e também para hospeda-lo gratuitamente no Github(falaremos dele a seguir),
                        então <a href="https://git-scm.com/downloads" title="" target="_blank">clique aqui</a> para ir para a página de Download
                        e siga as instruções de instalação do seu Sistema Operacional.
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <article>
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <h2>Github</h2>

                    <p>
                        O Github é um serviço web que oferece várias funcinalidades ao Git. Fazendo uma conta no site você pode hospedar 
                        os seus códigos de forma gratuíta e pública, além de poder contribuir com vários projetos que estã lá.
                    </p>

                    <p>
                        Você vai utilizar o Github para dar um 'fork'(clonar) a estrutura do projeto que vamos desenvolver que está no 
                        Github do PHPWOmenBR, então caso ainda não tenha uma conta você pode criar uma <a href="https://github.com/">clicando aqui</a>
                    </p>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </article>

    <section class="preview-next">
        <div class="container">
            <div class="row justify-content-md-center">
                <div class="col col-md-8">
                    <a href="instalacao.php" class="float-left" title="volta">voltar</a>
                    <a href="aplicativo_to_do.php" class="float-right" title="próximo">próximo</a>
                </div><!-- .col -->
            </div><!-- .row -->
        </div><!-- .container -->
    </section>

<?php include("footer.php"); ?>