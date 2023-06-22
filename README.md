# Gateway Kamoney #
**Powered by:** [Kamoney Empreendimentos Digitais Ltda.](http://github.com/kamoney)
**License:** GPLv3
**License URI:** http://www.gnu.org/licenses/gpl-2.0.html  

Aceite pagamentos em criptomoedas em sua loja virtual geranciada pelo WooCommerce via [Kamoney] (https://www.kamoney.com.br).

## Description ##

O plugin Gateway Kamoney é a maneira mais fácil, rápida e segura de aceitar pagamentos com criptomoedas (Bitcoin, Ethereum, etc.), sem nenhum conhecimento específico com blockchain ou derivados.

<h4>Características principais</h4>

* Aceite bitcoin e altcoins e receba em Reais (R$)
* Cotação da moeda em Real Brasileiro (R$)
* Receba sem custo por transferência bancária (Real Brasileiro)
* Por segurança, estornos não são possíveis com pagamentos em criptomoeda
* Tenha uma visão geral de todas as suas vendas em sua conta de comerciante Kamoney em (https://www.kamoney.com.br)

<h4>Funcionamento básico</h4>

1. Cliente cria o pedido normalmente em sua loja
2. Será gerada uma venda no site [Kamoney] (https://www.kamoney.com.br)
3. Seu cliente será redirecionado ao site [Kamoney] (https://www.kamoney.com.br) para selecionar a criptomoeda de sua preferência
4. Sue cliente realiza o pagamento
5. Nosso sistema irá monitorar o pagamento notificando cada status à sua loja
6. Quando confirmado o pagamento, a venda será concluída em sua loja

## Installation ##

<h4>Exigências</h4>

* Este plugin requer Woocommerce instalado.
* Uma conta lojista Kamoney ([Sandbox](https://sandbox.kamoney.com.br/) ou [Produção](https://www.kamoney.com.br/))

Nota: Após realizar o cadastro, solicite o credenciamento como lojista para receber pagamentos em criptomoedas.

<h4>Instalação do plugin</h4>

1. Copie os arquivos do plugin para a pasta `/wp-content/plugins/gateway-kamoney`, ou instale-o diretamente na tela de plugins do WordPress;
2. Ative o plugin através da tela 'Plugins' no WordPress

Após ativação do plugin, o Gateway Kamoney aparecerá na seção Woocommerce>Pagamentos.

<h4>Configurações do plugin</h4>

Depois de instalar o plugin Gateway Kamoney, as etapas de configuração são:

1. Crie uma conta em [Kamoney](https://www.kamoney.com.br);
2. Solicite o credenciamento como Lojista;
3. Após a aprovação do credenciamento, gere suas credenciais (chaves secreta e pública) no menu APIs;
4. Entre no seu painel de administração do WordPress, selecione Woocommerce>Pagamentos e clique no botão Configurar ao lado dos métodos de pagamento Gateway Kamoney;
5. Cole suas chaves geradas anteriormente, nos respectivos campos "Chave pública Kamoney" e "Chave secreta Kamoney";
6. Clique em "Salvar alterações" na parte inferior da página;

Caso deseje realizar simulações em testnet (rede de testes Bitcoin ou Litecoin), gere as chaves no ambiente Sandbox (teste) e marque a opção Utilizar Sandbox (api teste) nas configurações do plugin.
