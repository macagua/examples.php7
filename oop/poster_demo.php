<?php

// Include Autoload Class
require_once __DIR__ . '/vendor/autoload.php';

use App\Author;
use App\Post;
use App\Category;

// Instantiate the Post class
$author = new Author();
$author->setName("Leonardo Caballero");
$author->setEmail("leonardo@plone.org");
$author->setPassword("PHPIsDead!");

// Instantiate the Category class
$categoryPython = new Category("Python");
$categoryZope   = new Category("Zope");
$categoryPlone  = new Category("Plone");

// Instantiate the Post class
$postPython = new Post("¿Python, es un lenguaje de programación?","Contenido del primer post.", $categoryPython, $author);
$postZope   = new Post("Servidor de aplicaciones empresariales Zope","Contenido del segundo post.", $categoryZope, $author);
$postThree  = new Post("¿Qué es Plone CMS?","Contenido del tercer post.", $categoryPlone, $author);

// Invoke the setCategory method to define category to post
$postPython->setCategory($categoryPython);
$postThree->setCategory($categoryPython);

// Invoke the addPost method to define post to author
$author->addPost($postPython);
$author->addPost($postZope);

echo var_dump($author);

