## Listas aleatórias - Projeto e Análise de Algoritmos

Foi desenvolvido o utilizando da linguagem de PHP um código que gera listas de números (sem recorrência) de tamanhos definidos em sala pelo professor da disciplina.

O cógigo gera arquivos _.txt_ onde cada número é separado por um caractere em branco (espaço).


### Separando conteúdo dos arquivos como array com PHP

Para separar o conteúdos dos arquivos como array no PHP você pode utilizar o método `file_get_contents` que retorna o conteúdo de um arquivo recebido como parâmetro como uma string e depois utilizar o método `explode` passando como parâmetro o caractere o separador de elementos, que nesse caso é `" "`.

#### Demonstração

```
$conteudoDoArquivo = file_get_contents("nomeArquivo.txt");
$lista = explode(" ", $conteudoDoArquivo);
```

Observação: pode ser necessário setar mais memória limite para aplicação, para isso, utilize o método `ini_set` passando como parâmetros`'memory_limit'` e a quantidade de bytes que deseja setar de memória.

### Separando conteúdo dos arquivos como array com Python

Para separar o conteúdos dos arquivos como array no Python você pode abrir o arquivo em modo de leitura e após isso utilizar o método `read` que retorna o conteúdo de um arquivo como uma string e depois utilizar o método `split` passando como parâmetro o caractere o separador de elementos, que nesse caso é `" "`.

#### Demonstração

```
arquivo = open("nomeArquivo.txt", "r")
conteudoArquivo = arquivo.read()
lista = conteudoArquivo.split(" ")
```