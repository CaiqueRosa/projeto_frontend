-- phpMyAdmin SQL Dump
-- version 5.1.3
-- https://www.phpmyadmin.net/
--
-- Host: 127.0.0.1
-- Tempo de geração: 13-Nov-2022 às 20:35
-- Versão do servidor: 10.4.24-MariaDB
-- versão do PHP: 7.4.29

SET SQL_MODE = "NO_AUTO_VALUE_ON_ZERO";
START TRANSACTION;
SET time_zone = "+00:00";

/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET @OLD_CHARACTER_SET_RESULTS=@@CHARACTER_SET_RESULTS */;
/*!40101 SET @OLD_COLLATION_CONNECTION=@@COLLATION_CONNECTION */;
/*!40101 SET NAMES utf8mb4 */;

--
-- Banco de dados: papelaria 
--

-- cria o db papelaria
CREATE DATABASE papelaria;
USE papelaria;

-- Cria a tabela de Produto
CREATE TABLE Produto(
  id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome varchar(50) NOT NULL,
  preco varchar(20) NOT NULL,
  estoque int(1) NOT NULL DEFAULT 1,
  codigo int(20) NOT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Cria tabela Usuario
CREATE TABLE Usuario(
  id bigint(20) NOT NULL AUTO_INCREMENT PRIMARY KEY,
  nome varchar(140) NOT NULL,
  email varchar(140) NOT NULL,
  senha varchar(16) NOT NULL,
  UNIQUE KEY uk_usuario_email(email)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4;

-- Cria usuario para teste
INSERT INTO Usuario(nome, email, senha) VALUES
('Cleiton', 'cleiton@teste.com', '1234');

ALTER TABLE Produto
ADD COLUMN obs VARCHAR(255) NOT NULL,
ADD COLUMN familia_de_itens VARCHAR(255) NOT NULL,
ADD COLUMN unidade_medida VARCHAR(255) NOT NULL,
ADD COLUMN situacao_do_item VARCHAR(255) NOT NULL,
ADD COLUMN data_criacao DATETIME DEFAULT CURRENT_TIMESTAMP,
ADD COLUMN data_liberacao DATE DEFAULT CURRENT_TIMESTAMP,
ADD COLUMN descricao_item VARCHAR(255) NOT NULL;