# Explicações sobre o Dashboard
## Arquitetura
- na pasta 'shared' contém o arquivo chamado instances, onde ficará as instâncias da classe. Esse arquivo é importante para o desempenho do site e poupa o fato de inserir classes toda hora.

- na pasta 'models' contém a classe da entidade do banco, no caso as tabela, será criada um CRUD dentro da classe para cada entidade que tiver

```php
include "../conexao.php"; // importa a conexão com banco de dados

class Produto {
    // Método para criar um novo produto
    function create($nome, $preco, $descricao) {
        // Utilizando a conexão global
        global $conexao;
        // lógica aqui
    }
    function delete($nome, $preco, $descricao) {
        // Utilizando a conexão global
        global $conexao;
        // lógica aqui
    }
    function update($nome, $preco, $descricao) {
        // Utilizando a conexão global
        global $conexao;
        // lógica aqui
    }
    function get($nome, $preco, $descricao) {
        // Utilizando a conexão global
        global $conexao;
        // lógica aqui
    }

}


```

- Nessa pasta irá conter outras pastas com a entidades e seu respectivo CRUD. No caso, a pasta produto, irá conter arquivos php, como create, update, delete, get. Onde ocorrerá de fato a ação para o bano de dados

- Nessa pasta deve conter os arquivos referentes ao LAYOUT do dashboard, como tela de cadastro de produto, tela de consulta de produto e etc. Em relação ao nome, siga esse padrão 'nomeDaAção_Entidade.php'.