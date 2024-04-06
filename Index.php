<?php
require_once "Aeroporto.php";
require_once "Voo.php";
require_once "Aeronave.php";
// Tipos de contrato - Funcionário Contratado, Funcionário Terceiro, Cliente externo.

// Verificar distância máxima ininterrupta de um avião para checar se pode cumprir o voo.

// Apresentar a média de um avião, calculando a distancia máxima com o máximo do tanque de gasosa.

// Tipos de serviço - Passagem, Carga, Passagem com carga.

// Armazenamento em metros cubicos.

// Para adicionar novo transporte de carga, verificar se o almoxarifado do local não está cheio.

// Tipo da carga será bagagem, caixas, bagagem e caixas.

// Almoxarifado só armazena se for caixa.

// Criando uma Aeronave
$aeronave = new Aeronave(001, "Maria Fumaça", 4);

// Criando um Aeroporto
$aeroporto = new Aeroporto(001, 12, 200, "Roncador PR");

// Adicionando Pessoas
$pessoa = new Pessoa("Cleiton Rasta", new DateTime("2000-10-30"), "999.999.999-99", "99.999.999-4", "Dubai");
$pessoa1 = new Pessoa("Jojo Toddynho", new DateTime("1996-12-17"), "999.999.999-99", "99.999.999-4", "Dubai");
$pessoa2 = new Pessoa("Bambam", new DateTime("2002-9-10"), "999.999.999-99", "99.999.999-4", "Dubai");
$pessoa3 = new Pessoa("Popó", new DateTime("2005-6-1"), "999.999.999-99", "99.999.999-4", "Dubai");

// Adicionando Clientes
$pessoa4 = new Cliente(001, new DateTime('now'), "Gustavo", new DateTime("2000-10-10"), "999.999.999-99", "99.999.999-4", "Rua 1");
$pessoa4 = new Cliente(001, new DateTime('now'), "Otávio", new DateTime("2005-12-7"), "999.999.999-99", "99.999.999-4", "Rua 2");
$pessoa4 = new Cliente(001, new DateTime('now'), "Bruno", new DateTime("1995-8-3"), "999.999.999-99", "99.999.999-4", "Rua 3");
$pessoa4 = new Cliente(001, new DateTime('now'), "Ivan", new DateTime("2008-5-1"), "999.999.999-99", "99.999.999-4", "Rua 4");

// Prints
echo $aeroporto -> __toString();