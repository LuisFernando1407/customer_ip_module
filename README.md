## Módulo para [Magento 2](https://devdocs.magento.com/#/individual-contributors)

<p>O módulo <i>customer_ip_module</i> é responsavel por salvar no <b>debug.log</b> o ip de cada visitante.</p>

## Instalação
  - No seu projeto em magento navegue até a pasta <b>app</b> em seguida verfique se existe a pasta <b>code</b> dentro de <b>app</b>. Caso não exista crie uma pasta chamada <b>code</b>.
  - Faça o clone do repositório ou download .zip, em seguida copie a pasta <b><i>Magecustomer</i></b> que está dentro de <b>customer_ip_module</b> e cole dentro da pasta <b>code</b>.
  - Navegue pelo terminal até a pasta do seu projeto, em seguinda execute o comando <b><i>php bin/magento module:enable Magecustomer_Ip</i></b>. Dessa forma o módulo é ativado.
  - Ainda no terminal execute:  <b><i>php bin/magento setup:upgrade</i></b>
  - Caso seja necessário limpar o cache ou da um flush execute: <b><i>php bin/magento cache:clean</i></b> / <b><i>php bin/magento cache:flush</i></b>
  
## Execução  
  - Acesse a rota  <i>http://{yourhost}/ip/index/getip</i>, em seguida navegue até a pasta <b>var</b> > <b>log</b> > <b>debug.log</b> do seu projeto. 
  - É possível ver no <b>debug.log</b> algo como: <b> 2019-05-09T03:20:51+00:00 DEBUG (7): localhost </b> devido você está usando o ip local da maquina (127.0.0.1).
