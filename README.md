<p>MVC é nada mais que um padrão de arquitetura de software, separando sua aplicação em 3 camadas. A camada de interação do usuário(view), a camada de manipulação dos dados(model) e a camada de controle(controller). O MVC é um  dos padrões mais utilizados no mercado, por ter um melhor entendimento para a equipe de desenvolvimento, e fácil manipulação.  <p/>
<p>A view é a camada responsável por por exibir as informações que foram solicitadas nas requisições de nossos clientes ao servidor, em resumo, do browser para o servidor.

O controller é o controlador de toda a nossa aplicação, é como se fosse o volante de um carro. Só reforçando, o controller recebe uma requisição, ele analisa, e solicita ao Model os dados solicitados, caso encontre, mande para view, caso não encontre ou a requisição feita deverá ser negada o acesso, ele também envia a view essa informação para ser renderizada para o usuário cliente.

E o Model, ele não só contêm o acesso ao banco de dados, mas ele contêm a modelagem de negócio da nossa aplicação, ou seja, toda as regras de negócio estabelecidas para a construção da nossa aplicação, como id, nome, data, cpf, etc. Possuindo também todo o relacionamento de entidade do banco de dados, para que assim tenhamos acesso a sua manipulação dos dados.<p/>
<div align='center'>
<img src='https://lh6.googleusercontent.com/v61X2Hbez9ZgiIhY20DyIzCtC_XXu3h9f1FjR4CpJqxeytyOSZndcJvcYrupP7mgfQoWYyzq2P9ykMJ9FyMOv2pzAV04rPSyNdNbEx23Q4KhThReuZW0RuyKPhFdmtcN-nvpS1xU'/>
<div/>
