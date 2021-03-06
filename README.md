## EO-FRAMEWORK
Symfony is a set of standalone, decoupled, and cohesive PHP components that solve common web-development problems.

### Why I created this Framework
1. To learn more about the low-level architecture of modern web frameworks in general and about the __Symfony fullstack framework__ in particular.
2. To experiment creating a framework.
3. To show that I can really create a framework of my own.

At each step, I will have a fully-working framework that I can use as is or as a start for other projects. The goal is to have a fully featured full-stack web framework.

While most framework try to follow the MVC architecture, with __Symfony__ its a different ball game, because __Symfony Components__ are able to create any type of frameworks.

A look at the MVC semantics book, shows that it focusses on how to create the __Controller__ part of the framework, because, the __Model__ and the __View__ aspects really depends on my personal taste, since I can use any exsting 3rd-party libraries (like: _Doctrine_, _Propel_, or plain-old _PDO_ for the __Model__, and pure _PHP_ or _Twig_ for the __View__. )

### NOTE 
### - Separation of concerns
``In desiging this framework, my focus should not just be on following the MVC pattern. Rather, my main goal should be on the Separation of Concerns - This should be probably the only design pattern that I should care about``.

Also, I should note that the fundamental principle of the __Symfony Components__ are focussed on the __HTTP SPECIFICATIONS__.
Thus, another name for the eo_framework is _http-Framework_; or _Request-Response Framework_.


### - Think about some conventions.
 - Where to store the codes.
 - How to name the classes.
 - How to reference external dependencies, etc.
 - Using a Framework should give me more than just __security__ and __testability__, more importantly, the framework 
   I choose should allow me to write better code faster.
   
### OOP and the HTTP Specification
Writing web code is about interacting with __HTTP__, therefore, the core principles of my framework should be around the __HTTP Specification__.

The __HTTP specification__ describes how a _"client" (a __browser__, for instance)_ interacts with a _"server" (__our application__ via a web server)_. 

The dialog between the _client_ and the _server_ is specified by well-defined _"messages", "requests"_ and _"responses"_: the __"client"__ sends a "request" to the __"server"__ and based on this request, the server returns a "response".

In PHP, the request is represented by global variables ($_GET, $_POST, $_FILE, $_COOKIE, $_SESSION???)
and the response is generated by functions (echo, header, setcookie, ???).

The first step towards better code is probably to use an Object-Oriented approach; that???s the main goal of the __Symfony HttpFoundation component:__  _replacing the default PHP global variables and functions by an Object-Oriented layer_.



    