// declarar una clase vacia 
class Automovil{
    // variables 
    // metodos(funciones dentro de la clase)
}
// crear un objeto de la clase 
const focus = new Automovil();
// dentro de las clases 
// propidad publica : puede acceder fuera de la clase 
// propiedad privada: no se uede acceder desde fuera de la clase 
// propiedad computada: Funcion para acceder a una prioridad con modificaciones(getter/setter)
// Metodos 
// Metodo Publico : se ejecuta dentro y fuera de la clase 
// Metodo Privado : se ejecuta desde dentro de la clase 
// Constructor : se ejecuta automaticamente cunado se crea una instancia
class Automovil{
    name = "Versa";
    Type = "Compacto";

    // metodos 
    acelerar(){
        return "260km";
    }
}
class Animal{
    // propiedades
    nombre = "Sheru";
    type = "Gato";
    raza = "generica";
    peso = "5kg";

    // metodos
    comer(){
        return "quiero wiskas";
    }
}
class Animal{
    nombre;
    constructor(nombre){
        this.nombre = nombre;
    }
}