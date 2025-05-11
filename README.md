# 💻 || Bhaskara en PHP // Bhaskara in PHP
> __Objetivo__: En esta practica, utilizando el lenguaje PHP he creado una función que recibe los términos a, b y c de un polinomio y tras hacer el calculo del mismo te dice cuales son sus raíces. Esta formula suele utilizarse en matemáticas para las funciones cuadráticas.
> 
> ---
> 
> __Objective__: In this practice, using PHP, I created a function that accepts the terms a, b, and c of a polynomial and, after calculating it, tells you the roots. This formula is often used in mathematics for quadratic functions.

# 📚 || Requisitos y logica // Requirements and logic:
> El programa deberá tomar el parametro a, b y c del polinomio. Estos parametros deben ser ingresados por el usuario, una vez hecho eso deberá:
> 
> 1. Enviarlo a la funcion "Bhaskara" en forma de parametros, es decir, bhaskra recibirá a, b y c <br>
> 2. Estando dentro de la funcion, primero se hace el delta de bhaskara, el cual seria: ( √b²-4ac ). Sin embargo, en esta parte primero hice (b²-4ac) antes de hacer raíz cuadrada, ¿Por qué? Por esta cuestión: <br>
> - Si delta da 0, significa que no tiene raíces, debido a que no existe raíz cuadrada de 0, por lo que el programa finaliza mostrando un mensaje en pantalla. 
> - En cambio, si delta da un numero distinto de 0 entonces se hace raíz cuadrada, el resultado se guarda en una variable y se pasa al siguiente paso.
> 3. Teniendo el resultado de √b²-4ac, se hace la división de √b²-4ac entre 2a y dicho resultado se guarda en una variable. <br>
> 4. Por ultimo, teniendo el resultado de ( √b²-4ac / 2a) solo lo sumo y resto por -b, obteniendo los resultados de las raíces.
> 
> ---
> 
> The program must take the parameters a, b, and c from the polynomial. These parameters must be entered by the user. Once entered, the program must:
> 
> 1. Send it to the "Bhaskara" function in the form of parameters, i.e. bhaskra will receive a, b and c <br>
> 2. Once inside the function, the bhaskara delta is calculated first, which would be: ( √b²-4ac ). However, in this part I first calculated (b²-4ac) before calculating the square root. Why? For this reason: <br>
> - If delta gives 0, it means that it has no roots, because there is no square root of 0, so the program ends by displaying a message on the screen.
> - However, if delta gives a number other than 0, then the square root is taken, the result is saved in a variable and the next step is taken.
> 3. Having the result of √b²-4ac, the division of √b²-4ac is performed by 2a and said result is saved in a variable. <br>
> 4. Finally, having the result of (√b²-4ac / 2a) I only add it and subtract by -b, obtaining the results of the roots.

# 🛡 || Tecnologias usadas // Technologies used:
![Visual Studio Code](https://img.shields.io/badge/Visual%20Studio%20Code-0078d7.svg?style=for-the-badge&logo=visual-studio-code&logoColor=white) ![HTML5](https://img.shields.io/badge/html5-%23E34F26.svg?style=for-the-badge&logo=html5&logoColor=white) ![PHP](https://img.shields.io/badge/php-%23777BB4.svg?style=for-the-badge&logo=php&logoColor=white)
