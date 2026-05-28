# 🎬 Sistema de Vídeos em PHP - POO

Projeto desenvolvido em **PHP Orientado a Objetos (POO)** simulando um sistema de visualização de vídeos, usuários e avaliações.

## 📌 Sobre o Projeto

Este projeto tem como objetivo aplicar conceitos de **Programação Orientada a Objetos em PHP**, utilizando:

* Classes e Objetos
* Herança
* Encapsulamento
* Polimorfismo
* Classes Abstratas
* Interfaces
* Relacionamento entre classes

O sistema simula uma plataforma de vídeos onde usuários podem assistir, curtir e avaliar vídeos.

---

## 🚀 Tecnologias Utilizadas

* PHP
* HTML5

---

## 📂 Estrutura do Projeto

```bash
📁 projeto
 ├── index.php
 ├── Video.php
 ├── Pessoa.php
 ├── Gafanhoto.php
 ├── Visualizacao.php
 └── AcoesVideo.php
```

---

## 🧠 Conceitos Aplicados

### 🔹 Interface

A interface `AcoesVideo` define os métodos obrigatórios para manipulação dos vídeos:

```php
play()
pause()
like()
```

---

### 🔹 Classe Abstrata

A classe `Pessoa` funciona como base para outras classes do sistema.

---

### 🔹 Herança

A classe `Gafanhoto` herda atributos e métodos da classe `Pessoa`.

```php
class Gafanhoto extends Pessoa
```

---

### 🔹 Relacionamento entre Classes

A classe `Visualizacao` realiza a associação entre:

* Usuário (`Gafanhoto`)
* Vídeo (`Video`)

Permitindo registrar visualizações e avaliações.

---

## ⚙️ Funcionalidades

✅ Cadastro de vídeos
✅ Cadastro de usuários
✅ Contagem de visualizações
✅ Sistema de curtidas
✅ Reprodução e pausa de vídeos
✅ Avaliação de vídeos
✅ Relacionamento entre espectadores e vídeos

---

## ▶️ Como Executar

### 1. Clone o repositório

```bash
git clone https://github.com/seuusuario/seurepositorio.git
```

### 2. Abra o projeto

Coloque os arquivos em uma pasta dentro do servidor local.

Exemplo usando XAMPP:

```bash
htdocs/projeto
```

### 3. Execute no navegador

```bash
http://localhost/projeto
```

---

## 📸 Exemplo de Saída

O sistema exibe informações dos objetos utilizando:

```php
print_r($v);
print_r($g);
print_r($vis);
```

---

## 📚 Aprendizados

Durante o desenvolvimento foram praticados conceitos importantes de POO como:

* Encapsulamento
* Reutilização de código
* Organização de classes
* Relacionamentos entre objetos
* Manipulação de atributos privados e protegidos

---

## 👩‍💻 Autora

Desenvolvido por Larissa Bertaze 💙

---

## 📄 Licença

Este projeto é apenas para fins educacionais.
